<?php


use OData\EDM\EdmEntityType;
use OData\EDM\EdmKey;
use OData\EDM\EdmProperty;
use OData\EDM\EdmSchema;
use PHPUnit\Framework\TestCase;

class SchemaTest extends TestCase
{
    public function testEdmSchema() {
        $schema = new EdmSchema("My.Test.Schema");
        $element = new EdmEntityType("Person", "Edm.String");
        $element->addProperty(new EdmProperty("FirstName", "Edm.String"));
        $element->addProperty(new EdmProperty("LastName", "Edm.String"));
        $property = new EdmProperty("UserId", "Edm.String");
        $element->addProperty($property);
        $element->setKey(new EdmKey($property));
        $schema->addElement($element);

        $this->assertCount(1, $schema->getElements());
        /**
         * @var EdmEntityType
         */
        $entityType = $schema->getElements()[0];
        $this->assertCount(3, $entityType->getProperties());
        $this->assertEquals("FirstName", $entityType->getProperties()["FirstName"]->getName());
        $this->assertEquals("Edm.String", $entityType->getProperties()["FirstName"]->getType());
        $this->assertEquals("My.Test.Schema", $schema->getNamespace());
        $this->assertEquals("UserId", $entityType->getKey()->getPropertyRefs()[0]->getName());
        //var_dump($en);
    }
}