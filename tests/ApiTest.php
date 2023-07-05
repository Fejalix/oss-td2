<?php
use PHPUnit\Framework\TestCase;
use Felixjanot\OssTd2\Api;

class ApiTest extends TestCase
{
    public function testGetRandomNumber()
    {
        $api = new Api();
        $this->assertIsInt($api->getRandomNumber());

        $this->greaterThanOrEqual(0, $api->getRandomNumber());
        $this->assertLessThanOrEqual(100, $api->getRandomNumber());
    }
}