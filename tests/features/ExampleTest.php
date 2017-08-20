<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends FeatureTestCase 
{

    /**
     * A basic functional test example.
     *
     * @return void
     */
    function test_basic_example()
    {
        
        $user = factory(\App\User::class)->create([
            'name'=>'Raul Villanueva',
            'email'=>'ravc1004@gmail.com',
        ]);

        $this->actingAs($user,'api')
            ->visit('api/user')
            ->see('Raul Villanueva')
            ->see('ravc1004@gmail.com');
    }
}
