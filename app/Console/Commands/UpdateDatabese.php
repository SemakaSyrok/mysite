<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateDatabese extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manager:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $permissions = require database_path('permissions/permissions.php');


        foreach ($permissions as $permission)
        {
            $perm = \DB::table('permissions')->where([
                ['id', $permission['id']],
                ['key', $permission['key']]
            ])->first();



            if(!$perm) {
                \DB::table('permissions')->insert([
                    'id' => $permission['id'],
                    'key' => $permission['key'],
                    'table_name' => $permission['table_name'] ?? 'NULL',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }

        }

    }
}
