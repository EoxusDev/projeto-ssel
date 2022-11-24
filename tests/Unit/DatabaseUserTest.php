<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DatabaseUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDatabaseUserRows()
    {
        $this->assertDatabaseHas('users', [
            'name'=>'Emanuel Santana',
            'email'=>'emanuel.santana@ssp.ba.gov.br',
            'password'=>'$2y$10$m/S8PanXFxdZijQtFKtGkODdwBEi9VoJtvvXdyA4547gKc3KtDwce'
        ]);
    }
}
