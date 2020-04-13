<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'Felhasználói felület megtekintése',
            'slug' => 'view-user',
            'description' => 'Megtekintheti a felhasználói felületet'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Tartalomszerkesztői felület megtekintése',
            'slug' => 'view-editor',
            'description' => 'Megtekintheti a tartalomszerkesztői felületet'
        ]);
    }
}
