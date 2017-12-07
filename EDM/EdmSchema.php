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
        if (in_array($namespace, OData::getReservedValues())) {
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
        if (in_array($alias, OData::getReservedValues())) {
            throw new EdmException("Can't set alias, word '" . $alias . "' is reserved");
        }
        $this->alias = $alias;
    }

    public function addElement(EdmAbstractElement $element)
    {

    }
}