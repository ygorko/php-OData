<?php


namespace OData\EDM;


class EdmAbstractElement
{
    /**
     * @var string
     */
    protected $edmType;

    /**
     * @return string
     */
    public function getEdmType()
    {
        return $this->edmType;
    }

    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function __construct()
    {
        if (is_null($this->edmType)) {
            $reflect = new ReflectionClass($this);
            $this->edmType = "Edm." . substr($reflect->getShortName(), 3);
        }
    }
}