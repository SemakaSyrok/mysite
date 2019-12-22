<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'description' => '',
                'generate_permissions' => true,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
                'server_side' => 0,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'details' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'description' => '',
                'generate_permissions' => true,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
                'server_side' => 0,
                'controller' => '',
                'policy_name' => NULL,
                'details' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'description' => '',
                'generate_permissions' => true,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
                'server_side' => 0,
                'controller' => '',
                'policy_name' => NULL,
                'details' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'potential_clients',
                'slug' => 'potential-clients',
                'display_name_singular' => 'Potential Client',
                'display_name_plural' => 'Potential Clients',
                'icon' => NULL,
                'model_name' => 'App\\PotentialClient',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2019-10-24 14:50:35',
                'updated_at' => '2019-10-24 14:50:35',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'group_of_clients',
                'slug' => 'group-of-clients',
                'display_name_singular' => 'Group Of Client',
                'display_name_plural' => 'Group Of Clients',
                'icon' => NULL,
                'model_name' => 'App\\GroupOfClient',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2019-10-24 14:51:46',
                'updated_at' => '2019-10-24 14:51:46',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'messages',
                'slug' => 'messages',
                'display_name_singular' => 'Message',
                'display_name_plural' => 'Messages',
                'icon' => NULL,
                'model_name' => 'App\\Message',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2019-10-24 15:02:49',
                'updated_at' => '2019-10-24 15:02:49',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'jobs',
                'slug' => 'jobs',
                'display_name_singular' => 'Job',
                'display_name_plural' => 'Jobs',
                'icon' => 'voyager-hammer',
                'model_name' => 'App\\Job',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2019-10-31 06:52:46',
                'updated_at' => '2019-10-31 06:52:46',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
            ),
            7 => 
            array (
                'id' => 13,
                'name' => 'failed_jobs',
                'slug' => 'failed-jobs',
                'display_name_singular' => 'Failed Job',
                'display_name_plural' => 'Failed Jobs',
                'icon' => 'voyager-x',
                'model_name' => 'App\\FailedJob',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2019-11-02 10:28:56',
                'updated_at' => '2019-11-02 10:28:56',
                'server_side' => 1,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":"id","order_display_column":"id","order_direction":"asc","default_search_key":"id"}',
            ),
        ));
        
        
    }
}