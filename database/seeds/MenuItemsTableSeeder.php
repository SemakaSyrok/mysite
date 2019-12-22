<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
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
            1 => 
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
            2 => 
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
            3 => 
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
            4 => 
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
            5 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-11-02 10:29:25',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-11-02 10:29:25',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-11-02 10:29:25',
                'route' => NULL,
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-11-02 10:29:25',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Failed Jobs',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-x',
                'color' => '#ff80ff',
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2019-11-02 10:28:56',
                'updated_at' => '2019-11-02 10:29:29',
                'route' => 'voyager.failed-jobs.index',
                'parameters' => 'null',
            ),
            10 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-11-02 10:29:29',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2019-10-24 14:32:03',
                'updated_at' => '2019-11-02 10:29:29',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Jobs',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hammer',
                'color' => '#ff80ff',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2019-10-31 06:57:21',
                'updated_at' => '2019-10-31 06:57:33',
                'route' => 'voyager.jobs.index',
                'parameters' => NULL,
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
                'order' => 2,
                'created_at' => '2019-10-24 15:02:49',
                'updated_at' => '2019-10-31 06:57:33',
                'route' => 'voyager.messages.index',
                'parameters' => 'null',
            ),
            14 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Potential Clients',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => '#ff80ff',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2019-10-24 14:50:35',
                'updated_at' => '2019-10-31 06:57:33',
                'route' => 'voyager.potential-clients.index',
                'parameters' => 'null',
            ),
            15 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Group Of Clients',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'color' => '#ff80ff',
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2019-10-24 14:51:46',
                'updated_at' => '2019-10-31 06:57:33',
                'route' => 'voyager.group-of-clients.index',
                'parameters' => 'null',
            ),
        ));
        
        
    }
}