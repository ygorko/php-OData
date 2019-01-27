<?php


namespace OData\EDMX;


class EdmxInclude
{
    /**
     * @var string
     */
    private $namespace;

    /**
     * @var string
     */
    private $alias;

    public function __construct($namespace, $alias) {
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
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }


}