<?php


namespace OData\Metadata\Container;


class EntityContainer
{
    /**
     * @var string
     */
    private $name;

    /**
     * var string
     */
    private $extends;


    const ENTITY_SET_TYPE = 0;
    const SINGLETON_TYPE = 1;
    const FUNCTION_TYPE = 2;
    const ACTION_TYPE = 3;


    /**
     * entity sets, singletons, functions or actions
     * @var array
     */
    private $elements = array();

    public function getName()
    {
        return $this->name;
    }

}