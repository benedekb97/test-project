<?php

use Illuminate\Database\Seeder;
use Junges\ACL\Http\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'name' => 'Felhasználó',
            'slug' => 'user',
            'description' => 'Bejelentkezett felhasználó'
        ]);

        DB::table('groups')->insert([
            'name' => 'Tartalomszerkesztő',
            'slug' => 'editor',
            'description' => 'Tartalomszerkesztő'
        ]);

        DB::table('groups')->insert([
            'name' => 'Adminisztrátor',
            'slug' => 'admin',
            'description' => 'Adminisztrátor'
        ]);

        Group::where('slug','user')->first()->assignPermissions('view-user');
        Group::where('slug','editor')->first()->assignPermissions(['view-editor']);
        Group::where('slug','admin')->first()->assignPermissions(['view-user', 'view-editor']);


    }
}
