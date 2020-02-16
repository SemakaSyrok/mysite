<?php

use Illuminate\Database\Seeder;

class AdminPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_potential_clients',
                'table_name' => 'potential_clients',
                'created_at' => '2019-10-24 14:50:35',
                'updated_at' => '2019-10-24 14:50:35',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_potential_clients',
                'table_name' => 'potential_clients',
                'created_at' => '2019-10-24 14:50:35',
                'updated_at' => '2019-10-24 14:50:35',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_potential_clients',
                'table_name' => 'potential_clients',
                'created_at' => '2019-10-24 14:50:35',
                'updated_at' => '2019-10-24 14:50:35',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_potential_clients',
                'table_name' => 'potential_clients',
                'created_at' => '2019-10-24 14:50:35',
                'updated_at' => '2019-10-24 14:50:35',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_potential_clients',
                'table_name' => 'potential_clients',
                'created_at' => '2019-10-24 14:50:35',
                'updated_at' => '2019-10-24 14:50:35',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_group_of_clients',
                'table_name' => 'group_of_clients',
                'created_at' => '2019-10-24 14:51:46',
                'updated_at' => '2019-10-24 14:51:46',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_group_of_clients',
                'table_name' => 'group_of_clients',
                'created_at' => '2019-10-24 14:51:46',
                'updated_at' => '2019-10-24 14:51:46',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_group_of_clients',
                'table_name' => 'group_of_clients',
                'created_at' => '2019-10-24 14:51:46',
                'updated_at' => '2019-10-24 14:51:46',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_group_of_clients',
                'table_name' => 'group_of_clients',
                'created_at' => '2019-10-24 14:51:46',
                'updated_at' => '2019-10-24 14:51:46',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_group_of_clients',
                'table_name' => 'group_of_clients',
                'created_at' => '2019-10-24 14:51:46',
                'updated_at' => '2019-10-24 14:51:46',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_messages',
                'table_name' => 'messages',
                'created_at' => '2019-10-24 15:02:49',
                'updated_at' => '2019-10-24 15:02:49',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_messages',
                'table_name' => 'messages',
                'created_at' => '2019-10-24 15:02:49',
                'updated_at' => '2019-10-24 15:02:49',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_messages',
                'table_name' => 'messages',
                'created_at' => '2019-10-24 15:02:49',
                'updated_at' => '2019-10-24 15:02:49',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_messages',
                'table_name' => 'messages',
                'created_at' => '2019-10-24 15:02:49',
                'updated_at' => '2019-10-24 15:02:49',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_messages',
                'table_name' => 'messages',
                'created_at' => '2019-10-24 15:02:49',
                'updated_at' => '2019-10-24 15:02:49',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_jobs',
                'table_name' => 'jobs',
                'created_at' => '2019-10-31 06:52:46',
                'updated_at' => '2019-10-31 06:52:46',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_jobs',
                'table_name' => 'jobs',
                'created_at' => '2019-10-31 06:52:46',
                'updated_at' => '2019-10-31 06:52:46',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_jobs',
                'table_name' => 'jobs',
                'created_at' => '2019-10-31 06:52:46',
                'updated_at' => '2019-10-31 06:52:46',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_jobs',
                'table_name' => 'jobs',
                'created_at' => '2019-10-31 06:52:46',
                'updated_at' => '2019-10-31 06:52:46',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_jobs',
                'table_name' => 'jobs',
                'created_at' => '2019-10-31 06:52:46',
                'updated_at' => '2019-10-31 06:52:46',
            ),
            46 => 
            array (
                'id' => 52,
                'key' => 'browse_failed_jobs',
                'table_name' => 'failed_jobs',
                'created_at' => '2019-11-02 10:28:56',
                'updated_at' => '2019-11-02 10:28:56',
            ),
            47 => 
            array (
                'id' => 53,
                'key' => 'read_failed_jobs',
                'table_name' => 'failed_jobs',
                'created_at' => '2019-11-02 10:28:56',
                'updated_at' => '2019-11-02 10:28:56',
            ),
            48 => 
            array (
                'id' => 54,
                'key' => 'edit_failed_jobs',
                'table_name' => 'failed_jobs',
                'created_at' => '2019-11-02 10:28:56',
                'updated_at' => '2019-11-02 10:28:56',
            ),
            49 => 
            array (
                'id' => 55,
                'key' => 'add_failed_jobs',
                'table_name' => 'failed_jobs',
                'created_at' => '2019-11-02 10:28:56',
                'updated_at' => '2019-11-02 10:28:56',
            ),
            50 => 
            array (
                'id' => 56,
                'key' => 'delete_failed_jobs',
                'table_name' => 'failed_jobs',
                'created_at' => '2019-11-02 10:28:56',
                'updated_at' => '2019-11-02 10:28:56',
            ),
            51 => 
            array (
                'id' => 62,
                'key' => 'browse_bad_ips',
                'table_name' => 'bad_ips',
                'created_at' => '2020-01-13 16:36:50',
                'updated_at' => '2020-01-13 16:36:50',
            ),
            52 => 
            array (
                'id' => 63,
                'key' => 'read_bad_ips',
                'table_name' => 'bad_ips',
                'created_at' => '2020-01-13 16:36:50',
                'updated_at' => '2020-01-13 16:36:50',
            ),
            53 => 
            array (
                'id' => 64,
                'key' => 'edit_bad_ips',
                'table_name' => 'bad_ips',
                'created_at' => '2020-01-13 16:36:50',
                'updated_at' => '2020-01-13 16:36:50',
            ),
            54 => 
            array (
                'id' => 65,
                'key' => 'add_bad_ips',
                'table_name' => 'bad_ips',
                'created_at' => '2020-01-13 16:36:50',
                'updated_at' => '2020-01-13 16:36:50',
            ),
            55 => 
            array (
                'id' => 66,
                'key' => 'delete_bad_ips',
                'table_name' => 'bad_ips',
                'created_at' => '2020-01-13 16:36:50',
                'updated_at' => '2020-01-13 16:36:50',
            ),
        ));
        
        
    }
}