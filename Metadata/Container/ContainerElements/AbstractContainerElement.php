<?php


namespace OData\Metadata\Container\ContainerElements;


class AbstractContainerElement
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var integer
     */
    protected $containerType;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getContainerType()
    {
        return $this->containerType;
    }
}