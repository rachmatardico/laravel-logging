<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class LoggingTest extends TestCase
{
    public function testLogging()
    {
        Log::info("Hello Info");
        Log::warning("Hello Warning");
        Log::error("Hello Error");
        Log::critical("Hello Critical");

        self::assertTrue(true);
    }

    public function testContext()
    {
        Log::error("Hello Error", ["user" => "matt"]);
        self::assertTrue(true);
    }

    public function testWithContext()
    {
        Log::withContext(["user" => "matt"]);
        Log::error("Hello Error");
        Log::error("Hello Error");
        Log::error("Hello Error");
        self::assertTrue(true);
    }
}
