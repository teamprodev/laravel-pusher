<?php

namespace App\Console\Commands;

use App\Events\MyEvent;
use Illuminate\Console\Command;

class SendPusher extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:pusher';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return array
     */
    public function handle()
    {
        dd(broadcast(new MyEvent('hello world'))->toOthers());
    }
}
