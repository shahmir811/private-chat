<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
                
        factory(User::class)->create([
            'name' => 'Shahmir Khan',
            'email' => 'shahmirkj@gmail.com'
        ]);
        
        factory(User::class)->create([
            'name' => 'Syed Talha',
            'email' => 'talha@gmail.com'
        ]);
        
        factory(User::class)->create([
            'name' => 'Farooq Kamal',
            'email' => 'farooq@gmail.com'
        ]);

        factory(User::class, 4)->create();

    }
}
