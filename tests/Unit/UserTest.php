<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserColumns()
    {
        $user = new User;

        $expected = [
            'name',
            'email',
            'password',
        ];

        $compared = array_diff($expected, $user->getfillable());

        $this->assertEquals(0, count($compared));
    }
}
