<?php
declare(strict_types=1);
require_once __DIR__ .'/../Authorization.php';

use PHPUnit\Framework\TestCase;

class AuthorizationTest extends TestCase {
    protected $Authorization;

    /**
     * This method call every time before any method call.
     */
    protected function setUp(): void {
        $this->Authorization = new Authorization();
    }

    /**
     * Test Login with invalid user credential
     */
    function testFailedLogin() {

        /*creating mock object of Curl class which is having callAPI function*/
        $observer = $this->getMockBuilder('Curl')
                         ->setMethods(array('callAPI'))
                         ->getMock();

        /* setting the result to call API. Thus by default whenver call api is called via this function it will return invalid user message*/
        $observer->method('callAPI')
                ->will($this->returnValue('"Invalid user credentials"'));

        /* attach the observer/mock object so that our return value is used */
        $this->Authorization->attach($observer);

        /* finally making an assertion*/
        $this->assertEquals('"Invalid user credentials"', $this->Authorization->postAuthorization('/authorizations', 'POST'));
    }
}
