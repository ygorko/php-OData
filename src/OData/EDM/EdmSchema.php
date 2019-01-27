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

    /**
     * @var string
     */
    private $namespace;

    /**
     * @var string
     */
    private $alias;

    public function __construct($namespace, $alias = "")
    {
        $this->namespace = $namespace;
        $this->alias = $alias;
    }

    /**
     * @return string
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
        if(isset($this->elements[$element->getName()])) {
            throw new EdmException("Element with name '{$element->getName()}' already exists");
        }
        $this->elements[] = $element;
    }

    public function __call($name, $args) {
        $firstPart = substr($name, 0, 3);
        $secondPart = substr($name, 3);

        if ($firstPart != "get" || !in_array($secondPart, self::$availableElementTypes)) return;

        return $this->elements[$secondPart];
    }

    public static function getAvailableElementTypes() {
        return self::$availableElementTypes;
    }

    public function getElements(){
        return $this->elements;
    }
}