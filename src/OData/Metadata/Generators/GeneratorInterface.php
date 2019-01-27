<?php

namespace OData\Metadata\Generator;

interface GeneratorInterface
{
    /**
     * @return string
     */
    public function generate();
}