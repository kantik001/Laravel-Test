@extends('layout.main')

@section('sector')
Create page
<hr>
<div>
        <div>
            <form action="{{route('workers.update', $worker->id)}}" method="Post">
                @csrf
                @method('Patch')
                <div><input type="text" name="name" placeholder="name" value="{{old("name") ?? $worker->name}}">
                    <div>
                        @error('name')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div><input type="text" name="surname" placeholder="surname" value="{{old("surname") ?? $worker->surname}}">
                    <div>
                        @error('surname')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div><input type="email" name="email" placeholder="email" value="{{old("email") ?? $worker->email}}">
                    <div>
                        @error('email')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div><input type="number" name="age" placeholder="age" value="{{old("age") ?? $worker->age}}"></div>
                <div><textarea name="description" placeholder="description">{{old("description") ?? $worker->description}}</textarea></div>
                <div>
                    <input id="isMarried" type="checkbox" name="is_married">
                    {{$worker->is_married ? 'checked' : ''}}
                </div>
                <div><label for="isMarried">Is married?</label></div>
                <div><input type="submit" value="Save"></div>
            </form>
        </div>
    <hr>
</div>
@endsection
