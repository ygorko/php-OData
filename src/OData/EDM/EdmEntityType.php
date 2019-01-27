<?php
/**
 * Created by PhpStorm.
 * User: ygorko
 * Date: 12/4/17
 * Time: 10:18 PM
 */

namespace OData\EDM;


class EdmEntityType extends EdmAbstractElement
{
    private $properties = [];

    private $navigationProperties = [];

    private $key;

    private $baseType;

    public function __construct(string $name = null, string $type = null, EdmEntityType $baseType = null)
    {
        if (!is_null($baseType)) {
            $this->baseType = $baseType;
        }
        parent::__construct($name, $type);
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param array $properties
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
    }

    /**
     * @param EdmProperty $property
     */
    public function addProperty(EdmProperty $property) {
        $this->properties[$property->getName()] = $property;
    }

    /**
     * @return array
     */
    public function getNavigationProperties()
    {
        return $this->navigationProperties;
    }

    /**
     * @param array $navigationProperties
     */
    public function setNavigationProperties($navigationProperties)
    {
        $this->navigationProperties = $navigationProperties;
    }

    /**
     * @param EdmNavigationProperty $property
     */
    public function addNavigationProperty(EdmNavigationProperty $property) {
        $this->navigationProperties[$property->getName()] = $property;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }


}