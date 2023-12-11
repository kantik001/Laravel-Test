@extends('layout.main')

@section('sector')

Create page
<hr>
<div>

        <div>
            <form action="{{route('workers.store')}}" method="Post">
                @csrf
                <div><input type="text" name="name" placeholder="name" value="{{old("name")}}">
                    <div>
                        @error('name')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div><input type="text" name="surname" placeholder="surname" value="{{old("surname")}}">
                    <div>
                        @error('surname')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div><input type="email" name="email" placeholder="email" value="{{old("email")}}">
                    <div>
                        @error('email')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div><input type="number" name="age" placeholder="age" value="{{old("age")}}"></div>
                <div><textarea name="description" placeholder="description" value="{{old("description")}}"></textarea></div>

                <div>
                    <input
                        {{old('is_married') == 'on' ? 'checked' : ''}}
                        id="isMarried" type="checkbox" name="is_married">
                </div>
                <div>
                    <label for="isMarried">Is married?</label>
                </div>
                <div><input type="submit" value="Add"></div>
            </form>
        </div>
    <hr>
</div>
@endsection
