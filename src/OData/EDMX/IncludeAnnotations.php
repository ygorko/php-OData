<?php


namespace OData\EDMX;


class IncludeAnnotations
{
    /**
     * @var string
     */
    private $termNamespace;

    /**
     * @var string
     */
    private $qualifier;

    /**
     * @var string
     */
    private $targetNamespace;

    function __construct($termNamespace, $qualifier, $targetNamespace)
    {
        $this->termNamespace = $termNamespace;
        $this->qualifier = $qualifier;
        $this->targetNamespace = $targetNamespace;
    }

    /**
     * @return string
     */
    public function getTermNamespace()
    {
        return $this->termNamespace;
    }

    /**
     * @return string
     */
    public function getQualifier()
    {
        return $this->qualifier;
    }

    /**
     * @return string
     */
    public function getTargetNamespace()
    {
        return $this->targetNamespace;
    }

}