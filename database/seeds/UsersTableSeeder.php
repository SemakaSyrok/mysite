<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Simon',
                'email' => 'semakasyrok1@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9vVuy/IEFTCi55sFcYbXuOa7T4NvESQv26CsEo.9hC8GuvjaQM6Ya',
                'remember_token' => 'XLhHrDPUWxWIXNkumV4Z4s9Im6MG8zgSVGsR7hPaSNe3XCzMM9EYbiE2pFwN',
                'created_at' => '2019-10-24 14:49:42',
                'updated_at' => '2020-01-13 16:45:16',
                'avatar' => 'users/default.png',
                'role_id' => 1,
                'settings' => '{"locale":"ru"}',
            ),
        ));
        
        
    }
}