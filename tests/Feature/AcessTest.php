<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AcessTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserAcess()
    {
        $response = $this->get('/esportes')->assertRedirect('login');
        $response = $this->get('/cadastrar_esportes')->assertRedirect('login');
        $response = $this->post('cadastrar_esportes')->assertRedirect('login');
        $response = $this->get('/home')->assertRedirect('login');
    }
}
