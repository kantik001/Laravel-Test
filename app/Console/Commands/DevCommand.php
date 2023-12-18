<?php

namespace App\Console\Commands;

use App\Http\Filters\Var1\WorkerFilter;
use App\Http\Filters\Var2\Worker\From;
use App\Http\Filters\Var2\Worker\To;
use App\Http\Filters\Var2\Worker\Name;
use App\Jobs\SomeJob;
use App\Models\Avatar;
use App\Models\Client;
use App\Models\Department;
use App\Models\Position;
use App\Models\Project;
use App\Models\Review;
use App\Models\Tag;
use App\Models\Worker;
use Illuminate\Console\Command;
use Illuminate\Pipeline\Pipeline;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some develops';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        request()->merge(['from' => 15, 'to' => 100]);
        $workers = app()->make(Pipeline::class)
            ->send(Worker::query())
            ->through([
                From::class,
                To::class,
                Name::class,
            ])
            ->thenReturn();

        dd($workers->get());
        return 0;
    }


}





