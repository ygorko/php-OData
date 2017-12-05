<?php
/**
 * Created by PhpStorm.
 * User: ygorko
 * Date: 12/3/17
 * Time: 9:55 PM
 */

namespace OData;

class OData
{
    private static $reservedValues = array("Edm", "odata", "System", "Transient");

    public static function getReservedValues() {
        return self::$reservedValues;
    }
}