<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::where('email', 'john.doe@helper.app')->count() == 0) {
            $user = User::create([
                'name' => 'Krishna Kanaiya',
                'email' => 'krisha@gmail.com',
                'password' => bcrypt('password123!@#'),
                'email_verified_at' => now()
            ]);
            $user->creation_token = null;
            $user->save();
        }
    }
}
