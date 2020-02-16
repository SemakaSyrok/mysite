<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PrepareForProduction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manager:prepare';

    public $permissions;

    public $permissionSignature = 'array (
                \'id\' => \'{{id}}\',
                \'key\' => \'{{key}}\',
                \'table_name\' => \'{{table_name}}\',
            ),';

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
        /**
         *  1. Check if iseed is here
         *
         *  2. Create Seeders
         *
         *  3. Create Seeder to permissions
         */

        $this->info('prepare');

        $this->call('php artisan iseed data_rows,data_types,menus,menu_items,settings,translations --classnameprefix=Admin');


        $this->permissions =  $this->getPermissions();

        $this->writePermissionsToFile();

        $this->info('completed');


    }


    public function writePermissionsToFile()
    {
        $file =  database_path('permissions/permissions.php');

        $reader = fopen($file,'w');

        fwrite($reader, '<?php return ['.PHP_EOL);

        foreach ($this->permissions as $permission)
        {
            $signature = $this->permissionSignature;
            $signature =  str_replace('{{id}}', $permission->id, $signature);
            $signature =  str_replace('{{key}}', $permission->key, $signature);
            $signature =  str_replace('{{table_name}}', $permission->table_name, $signature);
            fwrite($reader, $signature.PHP_EOL);
        }


        fwrite($reader, '];'.PHP_EOL);
        fclose($reader);

    }

    public function getPermissions()
    {
        return \DB::table('permissions')->get();
    }

}
