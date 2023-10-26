<?php

namespace App\Console\Commands;

use App\Jobs\SomeJob;
use App\Models\Client;
use App\Models\Position;
use App\Models\Project;
use App\Models\Rewiew;
use App\Models\Tag;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'developer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command developer test';

    /**
     * Execute the console command.
     */
    public function handle()
    {
    //    $this->prepareData();
     //   $this->prepareManyToMany();

       SomeJob::dispatch()->onQueue('some_queue');


     /*   $worker->reviews()->create([
            'body' => 'body 1'
        ]);

        $worker->reviews()->create([
            'body' => 'body 2'
        ]);

        $worker->reviews()->create([
            'body' => 'body 3'
        ]);

        $client->reviews()->create([
            'body' => 'body 1'
        ]);

        $client->reviews()->create([
            'body' => 'body 2'
        ]);

        $client->reviews()->create([
            'body' => 'body 3'
        ]);

        dd($worker->reviews->toArray());

     */
    }

    public function prepareData()
    {

        Client::create([
            'name' => 'Bob'
        ]);

        Client::create([
            'name' => 'Nick'
        ]);

        Client::create([
            'name' => 'Elena'
        ]);



        $position1 = Position::create([
            'title' => 'Developer',
        ]);

        $position2 = Position::create([
            'title' => 'Manager',
        ]);


        $workerData1 = [

            'name' => 'Ivan',
            'surname' => 'Ivanov',
            'email' => 'ivan@mail.ru',
            'position_id' => $position1->id,
            'age' => 20,
            'description' => 'Some text',
            'is_married' => false,

        ];

        $workerData2 = [

            'name' => 'Karl',
            'surname' => 'Petrov',
            'email' => 'petr@mail.ru',
            'position_id' => $position2->id,
            'age' => 28,
            'description' => 'Some text',
            'is_married' => true,

        ];

        $workerData3 = [

            'name' => 'Kate',
            'surname' => 'Popova',
            'email' => 'kate@mail.ru',
            'position_id' => $position1->id,
            'age' => 21,
            'description' => 'Some text',
            'is_married' => true,

        ];

        $worker1 = Worker::create($workerData1);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);

        $profileData1 = [
            'city' => 'London',
            'skill' => 'Debug',
            'experience' => 5,
            'finished_study_at' => '2018-06-01',
        ];
        $profileData2 = [
            'city' => 'Rio',
            'skill' => 'Boss',
            'experience' => 10,
            'finished_study_at' => '2008-06-01',
        ];

        $profileData3 = [
            'city' => 'Oslo',
            'skill' => 'Developer',
            'experience' => 1,
            'finished_study_at' => '2022-06-01',
        ];

        $worker1->profile()->create($profileData1);
        $worker2->profile()->create($profileData2);
        $worker3->profile()->create($profileData3);
    }
        public function prepareManyToMany()
    {
        $workerManager = Worker::find(2);
        $workerDesigner = Worker::find(1);
        $workerBoss = Worker::find(3);

        $project1 = Project::create([
            'title'=> 'Shop'
        ]);
        $project2 = Project::create([
            'title'=> 'Blog'
        ]);

        $project1->workers()->attach([
            $workerManager->id,
            $workerDesigner->id,

        ]);

        $project2->workers()->attach([
            $workerBoss->id,
        ]);

    }
}
