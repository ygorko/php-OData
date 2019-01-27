<?php


namespace OData\EDM;


class EdmAbstractElement
{
    /**
     * @var string
     */
    private $edmType;

    /**
     * @return string
     */
    public function getType()
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

    public function __construct(string $name = null, string $type = null)
    {
        if (!is_null($name)) {
            $this->name = $name;
        }
        if (!is_null($type)) {
            $this->edmType = $type;
        }
        if (is_null($this->edmType)) {
            $reflect = new \ReflectionClass($this);
            $this->edmType = substr($reflect->getShortName(), 3);
        }
    }
}