<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(AdminDataRowsTableSeeder::class);
        $this->call(AdminDataTypesTableSeeder::class);
        $this->call(AdminMenusTableSeeder::class);
        $this->call(AdminMenuItemsTableSeeder::class);
        $this->call(AdminSettingsTableSeeder::class);
        $this->call(AdminTranslationsTableSeeder::class);
//        $this->call(AdminPermissionSeeder::class);
    }
}
