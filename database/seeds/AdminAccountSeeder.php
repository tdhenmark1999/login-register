<?php

use App\Laravel\Models\User;
use Illuminate\Database\Seeder;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrNew([
            'first_name' => "Super",
            'last_name' => "User", 
            'status' => 'active',
           
            'username' => "master_admin",
           
        ]);

        $user->password = bcrypt("admin");
        $user->save();

        
    }
}
