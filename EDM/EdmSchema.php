<?php
/**
 * Created by PhpStorm.
 * User: ygorko
 * Date: 12/3/17
 * Time: 9:38 PM
 */


namespace OData\EDM;

use OData\OData;

class EdmSchema
{
    private $elements = array();

    private static $availableElementTypes = [
        "Action",
        "Annotations",
        "Annotation",
        "ComplexType",
        "EntityContainer",
        "EntityType",
        "EnumType",
        "Function",
        "Term",
        "TypeDefinition"
    ];

    private $namespace;
    private $alias;

    public function __construct($namespace, $alias = null)
    {
        $this->namespace = $namespace;
        $this->alias = $alias;
    }

    /**
     * @return mixed
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @param mixed $namespace
     * @throws EdmException
     */
    public function setNamespace($namespace)
    {
        if (in_array($namespace, OData::RESERVED_KEYWORDS)) {
            throw new EdmException("'" . $namespace . "' is reserved word");
        }
        $this->namespace = $namespace;
    }

    /**
     * @return null
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param null $alias
     * @throws EdmException
     */
    public function setAlias($alias)
    {
        if (in_array($alias, OData::RESERVED_KEYWORDS)) {
            throw new EdmException("Can't set alias, word '" . $alias . "' is reserved");
        }
        $this->alias = $alias;
    }

    public function addElement(EdmAbstractElement $element)
    {
        if(!is_null($this->elements[$element->getName()])) {
            throw new EdmException("Element with name '{$element->getName()}' already exists");
        }
        $this->elements[$element->getName()] = $element;
        $this->elements[$element->getEdmType()][] = $element;
    }

    public function __call($name) {
        $firstPart = substr($name, 0, 3);
        $secondPart = substr($name, 3);

        if ($firstPart != "get" || !in_array($secondPart, self::$availableElementTypes)) return;

        return $this->elements[$secondPart];
    }

    public static function getAvailableElementTypes() {
        return self::$availableElementTypes;
    }
}