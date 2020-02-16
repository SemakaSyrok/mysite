<?php

use Illuminate\Database\Seeder;

class AdminMenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2020-01-08 06:14:36',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2020-01-08 06:14:03',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2020-01-08 06:14:03',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2020-01-08 06:14:35',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 12,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2020-01-08 06:14:03',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 15:03:05',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 15:03:05',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 15:03:05',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 15:03:05',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 13,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2020-01-08 06:14:03',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-10-24 15:03:05',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Potential Clients',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => '#ff80ff',
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2019-10-24 14:50:35',
                'updated_at' => '2020-01-08 06:14:35',
                'route' => 'voyager.potential-clients.index',
                'parameters' => 'null',
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Group Of Clients',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'color' => '#ff80ff',
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2019-10-24 14:51:46',
                'updated_at' => '2020-01-08 06:14:35',
                'route' => 'voyager.group-of-clients.index',
                'parameters' => 'null',
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Messages',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-twitter',
                'color' => '#ff80ff',
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2019-10-24 15:02:49',
                'updated_at' => '2020-01-08 06:14:35',
                'route' => 'voyager.messages.index',
                'parameters' => 'null',
            ),
            14 => 
            array (
                'id' => 20,
                'menu_id' => 1,
                'title' => 'Bad Ips',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bubble-hear',
                'color' => '#ff80ff',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-01-08 06:13:14',
                'updated_at' => '2020-01-13 16:37:55',
                'route' => 'voyager.bad-ips.index',
                'parameters' => 'null',
            ),
        ));
        
        
    }
}