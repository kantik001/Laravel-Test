<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\IndexRequest;
use App\Http\Requests\Worker\storeRequest;
use App\Http\Requests\Worker\UpdateRequest;
use App\Models\Worker;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class NewController extends Controller
{
    public function index(IndexRequest $request)
    {
        $data = $request->validated();
        $workerQuery = Worker::query();
        if(isset($data['name'])) {
            $workerQuery->where('name', 'like', "%{$data['name']}%");
        }
        if(isset($data['surname'])) {
            $workerQuery->where('surname', 'like', "%{$data['surname']}%");
        }
        if(isset($data['email'])) {
            $workerQuery->where('email', 'like', "%{$data['email']}%");
        }
        if(isset($data['from'])) {
            $workerQuery->where('age', '>', $data['from']);
        }
        if(isset($data['to'])) {
            $workerQuery->where('age', '<=', $data['to']);
        }
        if(isset($data['description'])) {
            $workerQuery->where('description', 'like', "%{$data['description']}%");
        }
        if(isset($data['is_married'])) {
            $workerQuery->where('is_married', true);
        }

        $workers = $workerQuery->paginate(10);

        return view('worker.index', compact('workers'));
    }

    public function show(Worker $worker)
    {
        return view('worker.show', compact('worker'));
        dd($worker);
    }

    public function create()
    {
        return view('worker.create');
    }

    public function store(storeRequest $request)
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);
        Worker::create($data);
        return redirect()->route('worker.index');
    }

    public function edit(Worker $worker)
    {
        return view('worker.edit', compact('worker'));
    }
    public function update(UpdateRequest $request,Worker $worker)
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);
        $worker->update($data);
        return redirect()->route('worker.show', $worker->id);
    }

    public function delete(Worker $worker)
    {
        $worker->delete();
        return redirect()->route("worker.index");
    }

}
