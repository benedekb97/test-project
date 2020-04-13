<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin";
        $user->username = "admin";
        $user->password = bcrypt("admin");
        $user->save();

        $user->assignGroup('admin');

        $user = new User();
        $user->name = 'User 1';
        $user->username = 'user1';
        $user->password = bcrypt('user1');
        $user->save();

        $user->assignGroup('user', 'editor');

        $user = new User();
        $user->name = 'User 2';
        $user->username = 'user2';
        $user->password = bcrypt('user2');
        $user->save();

        $user->assignGroup('editor');

        $user = new User();
        $user->name = 'User 3';
        $user->username = 'user3';
        $user->password = bcrypt('user3');
        $user->save();

        $user->assignGroup('user');
    }
}
