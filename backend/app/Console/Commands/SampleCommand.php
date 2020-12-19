<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Collection;
use App\Models\SampleUser;

class SampleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sample-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '仮実行用のサンプルコマンドです';

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
     * @return int
     */
    public function handle()
    {
        $data = [
            'name' => 'yuta',
            'age' => 8,
            'hobby' => 'apex'
        ];

        $base_collection = collect($data);

        \Log::debug(print_r($base_collection));
        \Log::debug($base_collection->get('name'));
        \Log::debug($base_collection['name']);

        $eloquent_collection = SampleUser::getUsers();
        var_dump($eloquent_collection);

        foreach ($eloquent_collection as $collection) {
            \Log::debug(print_r($collection));
            \Log::debug($collection->name);
            \Log::debug($collection->get('name'));
            \Log::debug($collection['name']);
    
        }

        return;
    }
}
