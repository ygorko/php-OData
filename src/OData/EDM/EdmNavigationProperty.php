<?php


namespace OData\EDM;


class EdmNavigationProperty extends EdmAbstractElement
{
    /**
     * @var bool
     */
    private $nullable = true;

    /**
     * This attribute MUST NOT be specified for navigation properties of complex types.
     * If specified, the value of this attribute MUST be a path from the entity type specified in the Type attribute
     * to a navigation property defined on that type or a derived type. The path may traverse complex types, including
     * derived complex types, but MUST NOT traverse any navigation properties. The type of the partner navigation
     * property MUST be the containing entity type of the current navigation property or one of its parent entity types.
     *
     * @var
     */
    private $partner;

    /**
     * If the value of the ContainsTarget attribute is true, the navigation property is called a containment navigation
     * property. Containment navigation properties define an implicit entity set for each instance of its declaring
     * entity type. This implicit entity set is identified by the read URL of the navigation property for that entity.
     *
     * @var bool
     */
    private $containsTarget = false;

    /**
     * @return bool
     */
    public function isNullable()
    {
        return $this->nullable;
    }

    /**
     * @return mixed
     */
    public function getPartner()
    {
        return $this->partner;
    }

    /**
     * @return bool
     */
    public function isContainsTarget()
    {
        return $this->containsTarget;
    }


}