<?php


namespace OData\EDMX;

use OData\EDM\EdmSchema;

class EdmxDataService
{
    private $scemas = [];

    public function getScemas() {
        return $this->scemas;
    }

    public function addScema(EdmSchema $scema) {
        if (!in_array($scema, $this->scemas)) {
            $this->scemas[] = $scema;
        }
    }
}