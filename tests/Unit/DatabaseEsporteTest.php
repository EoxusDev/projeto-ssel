<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DatabaseEsporteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDatabaseEsporteRows()
    {
        $this->assertDatabaseHas('esportes', [
            'nome'=>'Quadra Calabar',
            'estrutura'=>'Quadra Poliesportiva Coberta',
            'atividades'=>'Prática de Esportes para Comunidade, Prática de Recreação para Creche Municipal Local',
            'endereco'=>'https://goo.gl/maps/Kjm3yR5hmFB9hSZS9',
        ]);
    }
}
