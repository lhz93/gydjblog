<?php

namespace App\Console\Commands;

use App\Vote;
use Illuminate\Console\Command;

class VoteLimitSet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vote:mysql';

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
    public function handle(Vote $vote)
    {
        //
        $vote->insertMysqlFromRedis();
    }
}
