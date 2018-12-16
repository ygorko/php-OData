<?php


namespace OData\EDMX;


class Reference
{
    /**
     * @var string
     */
    private $uri;

    private $includes = [];

    private $includeAnnotations = [];

    public function __construct($uri) {
        $this->uri = $uri;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }


    /**
     * @return array
     */
    public function getIncludes()
    {
        return $this->includes;
    }

    /**
     * @param EdmxInclude $include
     */
    public function addInclude(EdmxInclude $include)
    {
        $this->includes[] = $include;
    }

    /**
     * @return array
     */
    public function getIncludeAnnotations()
    {
        return $this->includeAnnotations;
    }

    /**
     * @param array $includeAnnotations
     */
    public function addIncludeAnnotation($includeAnnotation)
    {
        $this->includeAnnotations[] = $includeAnnotation;
    }


}