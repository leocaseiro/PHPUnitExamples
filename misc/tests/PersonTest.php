<?php
declare(strict_types=1);
require_once __DIR__ .'/../Person.php';

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase {
    public function test_greeting()
    {
        // Mock Person->getPersonByID()
        $dbMock = $this->getMockBuilder(Database::class)
            ->setMethods(['getPersonByID'])
            ->getMock();

        // create stdClass
        $mockPerson = new stdClass();
        $mockPerson->id = 2;
        $mockPerson->name = 'Bob';

        // attach stdClass to Mock
        $dbMock->method('getPersonByID')->willReturn($mockPerson);

        $person = new Person($dbMock); // using mock

        $this->assertEquals("Hello $mockPerson->name", $person->greeting($mockPerson->id));
        $this->assertEquals("Hello Bob", $person->greeting($mockPerson->id));
    }
}
