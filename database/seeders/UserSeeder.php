<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(['name' => 'Admin','email' => 'admin@academicabroad.ge', 'email_verified_at' => now(), 'password' => Hash::make('Academicabroad_admin_1@'), 'remember_token' => Str::random(10)]);
        $user->roles()->sync([1]);

        $user = User::create(['name' => 'Creator','email' => 'creator@academicabroad.ge', 'email_verified_at' => now(), 'password' => Hash::make('Academicabroad_creator_2@'), 'remember_token' => Str::random(10)]);
        $user->roles()->sync([2]);

        $user = User::create(['name' => 'Editor','email' => 'editor@academicabroad.ge', 'email_verified_at' => now(), 'password' => Hash::make('Academicabroad_editor_3@'), 'remember_token' => Str::random(10)]);
        $user->roles()->sync([3]);
    }
}
