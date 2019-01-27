<?php

namespace OData\EDM;

class EdmEnumType extends EdmAbstractElement
{
    private static $allowedUnderlyingType = array("Edm.Byte", "Edm.SByte", "Edm.Int16", "Edm.Int32", "Edm.Int64");

    /**
     * @var string
     */
    private $underlyingType;

    /**
     * @var boolean
     */
    private $IsFlags;

    private $elements = array();

    public static function getAllowedUnderlyingType()
    {
        return self::$allowedUnderlyingType;
    }

    /**
     * @param mixed $underlyingType
     */
    public function getUnderlyingType($underlyingType)
    {
        $this->underlyingType = $underlyingType;
    }

    /**
     * @return mixed
     */
    public function getisFlags()
    {
        return $this->IsFlags;
    }

    /**
     * @param string $underlyingType
     * @throws EdmException
     */
    public function setUnderlyingType($underlyingType)
    {
        if (!in_array($underlyingType, self::$allowedUnderlyingType)) {
            throw new EdmException("UnderlyingType should be one of " . implode(",", self::$allowedUnderlyingType));
        }
        $this->underlyingType = $underlyingType;
    }

    /**
     * @param bool $IsFlags
     */
    public function setIsFlags($IsFlags)
    {
        $this->IsFlags = (bool)$IsFlags;
    }

    /**
     * @return array
     */
    public function getElements()
    {
        return $this->elements;
    }

    public function addElement(EdmMember $element) {
        $this->elements[$element->getName()] = $element;
    }
}