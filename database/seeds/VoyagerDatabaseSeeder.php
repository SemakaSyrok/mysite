<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;

class VoyagerDatabaseSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = __DIR__.'/';

    /**
     * Run it to renew in production
     *
     * @return void
     */
    public function run()
    {
        $this->seed('DataTypesTableSeeder');
        $this->seed('DataRowsTableSeeder');
        $this->seed('MenusTableSeeder');
        $this->seed('MenuItemsTableSeeder');
//        $this->seed('RolesTableSeeder');
//        $this->seed('PermissionsTableSeeder');
        // ADD NEW PERMISSIONS!!!
//        $this->seed('PermissionRoleTableSeeder');
        $this->seed('SettingsTableSeeder');
    }
}
