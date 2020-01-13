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
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
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
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
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
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 14:32:03',
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
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-10-24 14:50:35',
                'updated_at' => '2019-10-24 14:50:35',
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
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-10-24 14:51:46',
                'updated_at' => '2019-10-24 14:51:46',
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
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-10-24 15:02:49',
                'updated_at' => '2019-10-24 15:02:49',
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
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-10-31 06:52:46',
                'updated_at' => '2019-10-31 06:52:46',
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
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"id","order_display_column":"id","order_direction":"asc","default_search_key":"id"}',
                'created_at' => '2019-11-02 10:28:56',
                'updated_at' => '2019-11-02 10:28:56',
            ),
            8 => 
            array (
                'id' => 14,
                'name' => 'sells',
                'slug' => 'sells',
                'display_name_singular' => 'Sell',
                'display_name_plural' => 'Sells',
                'icon' => 'voyager-paypal',
                'model_name' => 'App\\Sell',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"created_at","order_display_column":"created_at","order_direction":"asc","default_search_key":"created_at"}',
                'created_at' => '2019-12-29 15:07:24',
                'updated_at' => '2019-12-29 15:07:24',
            ),
            9 => 
            array (
                'id' => 15,
                'name' => 'bad_ips',
                'slug' => 'bad-ips',
                'display_name_singular' => 'Bad Ip',
                'display_name_plural' => 'Bad Ips',
                'icon' => 'voyager-bubble-hear',
                'model_name' => 'App\\BadIp',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-01-08 06:13:13',
                'updated_at' => '2020-01-13 16:21:24',
            ),
        ));
        
        
    }
}