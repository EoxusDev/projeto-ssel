<?php

namespace Tests\Unit;

use App\Esporte;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EsporteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testEsportesColumns()
    {
        $esporte = new Esporte;

        $expected = [
            'nome',
            'estrutura',
            'atividades',
            'endereco',
        ];

        $compared = array_diff($expected, $esporte->getfillable());

        $this->assertEquals(0, count($compared));
    }
}
