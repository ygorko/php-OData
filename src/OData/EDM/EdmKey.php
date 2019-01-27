<?php


namespace OData\EDM;


class EdmKey
{
    private $propertyRefs = [];

    public function __construct(EdmProperty $property)
    {
        $this->addPropertyRefs($property);
    }

    public function getPropertyRefs() {
        if (empty($this->propertyRefs)) {
            throw new EdmException("The edm:Key element MUST contain at least one edm:PropertyRef element");
        }
        return $this->propertyRefs;
    }

    public function addPropertyRefs(EdmProperty $property) {
        $this->propertyRefs[] = $property;
    }
}