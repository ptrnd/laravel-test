<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $value = "Hello World";
            $browser->visit('/coba')
                ->type('halo', 'Hello, World')
                ->pressAndWaitFor('halokirim', 1)
                ->assertInputValue('jawab', $value);
        });
    }

    public function test2()
    {
        $this->browse(function (Browser $browser) {
            $value = "Hello, World";
            $browser->visit('/coba')
                ->type('halo', 'Hello, World')
                ->pressAndWaitFor('halokirim', 1)
                ->assertInputValue('jawab', $value);
        });
    }
}
