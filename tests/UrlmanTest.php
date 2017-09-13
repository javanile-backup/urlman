<?php

use PHPUnit\Framework\TestCase;

final class UrlmanTest extends TestCase
{
    public function testLoadOneItemFile()
    {
        $url = Javanile\Urlman\Urlman::current();

        $this->assertTrue(is_string($url));
    }
}
