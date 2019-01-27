<?php


namespace OData\EDM;


class EdmPropertyRef
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $alias;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }



}