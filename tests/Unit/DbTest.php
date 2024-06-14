<?php

namespace Tests\Unit;

use Tests\TestCase;

class DbTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_db_data(){
        $this->assertDatabaseHas('users', [
            'name' => 'Dary'
        ]);
    }
}
