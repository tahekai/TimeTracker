<?php

use Laravel\Lumen\Testing\DatabaseTransactions;

class ApplicationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    
    public function create_ten_participants() {
        $alldata = factory(App\Alldata::class, 10)->create();
    }
}
