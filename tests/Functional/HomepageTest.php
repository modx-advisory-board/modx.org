<?php

namespace Tests\Functional;

class HomepageTest extends BaseTestCase
{
    /**
     * Test that the index route returns a rendered response containing the text 'SlimFramework' but not a greeting
     */
    public function testGetHomepageWithoutName()
    {
        $response = $this->runApp('GET', '/');

        static::assertEquals(200, $response->getStatusCode());
        static::assertContains('Creative Freedom', (string)$response->getBody());
        static::assertNotContains('Hello', (string)$response->getBody());
    }

    /**
     * Test that the index route with optional name argument returns a rendered greeting
     */
//    public function testGetHomepageWithGreeting()
//    {
//        $response = $this->runApp('GET', '/name');
//
//        static::assertEquals(200, $response->getStatusCode());
//        static::assertContains('Hello name!', (string)$response->getBody());
//    }

    /**
     * Test that the index route won't accept a post request
     */
    public function testPostHomepageNotAllowed()
    {
        $response = $this->runApp('POST', '/', ['test']);

        static::assertEquals(405, $response->getStatusCode());
        static::assertContains('Method not allowed', (string)$response->getBody());
    }
}