<?php


namespace OData\EDMX;


class EdmIncludeAnnotation
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

    public function __construct($termNamespace) {
        $this->termNamespace = $termNamespace;
    }

    /**
     * @return string
     */
    public function getQualifier()
    {
        return $this->qualifier;
    }

    /**
     * @param string $qualifier
     */
    public function setQualifier($qualifier)
    {
        $this->qualifier = $qualifier;
    }

    /**
     * @return string
     */
    public function getTargetNamespace()
    {
        return $this->targetNamespace;
    }

    /**
     * @param string $targetNamespace
     */
    public function setTargetNamespace($targetNamespace)
    {
        $this->targetNamespace = $targetNamespace;
    }

    /**
     * @return string
     */
    public function getTermNamespace()
    {
        return $this->termNamespace;
    }
}