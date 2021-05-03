<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class loginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Cabang')
                    ->clickLink('Log in')
                    ->assertSee('Email')
                    ->type('email','a@mail.com')
                    ->type('password','12345678')
                    ->click('button','Log in')
                    ->assertPathIs('/dashboard')
                    ->press('aa')
                    ->clickLink('Profile')
                    ->assertPathIs('/user/profile')
                    ->type('current','87654321')
                    ->type('pass','87654321')
                    ->type('confirmation','87654321')
                    ->click('@pasw_button');
        });
    }
}
