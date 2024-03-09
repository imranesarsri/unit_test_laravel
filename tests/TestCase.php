<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('config:clear');
        $this->seed('Database\\Seeders\\DatabaseSeeder');
        // dd('gggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg');
    }
}