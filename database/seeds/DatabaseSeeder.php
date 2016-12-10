<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //factory(User::class, 10)->create();
        //
        //
        
        factory(App\Entities\ClientePF::class, 50)->create();
        factory(App\Entities\ClientePJ::class, 50)->create();
    }
}
