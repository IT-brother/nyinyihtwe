<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =array(
            array(
                'name'  =>'admin',
                'phone'   => '+74834383',
                'email' =>'admin@gmail.com',
                'password' => Hash::make('admin'),                
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            )
        );
        foreach ($users as $user) {
            User::insert($user);
        } 
    }
}
