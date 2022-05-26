<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'admin',
            'email'=> 'admin@example.com',
            'password'=> Hash::make('12345678'),
        ]);
        User::create([
            'name'=>'user',
            'email'=> 'user@example.com',
            'phone' => '3479759475',
            'password'=> Hash::make('12345678'),
        ]);
    }
}
