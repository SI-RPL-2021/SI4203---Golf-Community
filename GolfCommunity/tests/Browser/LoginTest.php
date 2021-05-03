<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
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
            ->clickLink('Log in')
            ->assertSee('Email')
            ->type('email','bambang@gmail.com')
            ->type('password','12345678')
            ->click('button','Log in')
            ->assertPathIs('/dashboard')
            ->press('bambang')
            ->clickLink('Profile')
            ->assetPathIs('user/profile')
            ->type('null','12345678')
            ->type('null','123456789')
            ->type('null','123456789')
            ->click('button','Save')
            ;

            
        });
    }
}
