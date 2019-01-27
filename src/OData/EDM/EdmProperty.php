<?php


namespace OData\EDM;


class EdmProperty extends EdmAbstractElement
{
    private $nullable = true;

    /**
     * A binary, stream or string property MAY define a positive integer value for the MaxLength facet attribute.
     *
     * @var int
     */
    private $maxLength;

    /**
     * A datetime-with-offset, decimal, duration, or time-of-day property MAY define a value for the Precision
     * attribute.
     *
     * @var int
     */
    private $precision;

    /**
     * A decimal property MAY define a non-negative integer value or variable for the Scale attribute.
     *
     * @var int
     */
    private $scale;

    /**
     * The value true indicates that the property might contain and accept string values with Unicode
     * characters beyond the ASCII character set. The value false indicates that the property will only contain
     * and accept string values with characters limited to the ASCII character set.
     *
     * @var bool
     */
    private $unicode = true;

    /**
     * The value of this attribute
     * identifies which spatial reference system is applied to values of the property on type instances.
     * The value of the SRID attribute MUST be a non-negative integer or the special value variable. If no
     * value is specified, the attribute defaults to 0 for Geometry types or 4326 for Geography types.
     *
     * @var int
     */
    private $srid;

    private $defaultValue;

    /**
     * @return bool
     */
    public function isNullable()
    {
        return $this->nullable;
    }

    /**
     * @return int
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * @return int
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * @return int
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * @return bool
     */
    public function isUnicode()
    {
        return $this->unicode;
    }

    /**
     * @return int
     */
    public function getSrid()
    {
        return $this->srid;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }
}