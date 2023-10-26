@extends('layout.main')

@section('sector')
Index page
<hr>
<div>
        <div>
            <div>Name: {{$worker->name}}</div>
            <div>Surname: {{$worker->surname}}</div>
            <div>Age: {{$worker->age}}</div>
            <div>Description: {{$worker->description}}</div>
            <div>Email: {{$worker->email}}</div>
            <div>Is married? {{$worker->is_married}}</div>
        </div>
        <div>
            <a href="{{route('worker.index')}}">Back</a>
        </div>
    <hr>

</div>
@endsection
