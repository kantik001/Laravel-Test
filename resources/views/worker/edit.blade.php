@extends('layout.main')

@section('content')
<div>
    <hr>

    <div>
        <form action="{{ route('workers.update', $worker->id) }}" method="Post">
            @csrf
            @method('Patch')
            <div style="margin-bottom: 15px;"><input type="text" name="name" value="{{ old('name') ?? $worker->name }}"
                                                     placeholder="name">
                @error('name')
                <div>
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div style="margin-bottom: 15px;"><input type="text" name="surname"
                                                     value="{{ old('surname') ?? $worker->surname }}"
                                                     placeholder="surname">
                @error('surname')
                <div>
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div style="margin-bottom: 15px;"><input type="email" name="email"
                                                     value="{{ old('email') ?? $worker->email }}"
                                                     placeholder="email">
                @error('email')
                <div>
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div style="margin-bottom: 15px;"><input type="number" name="age" value="{{ old('age') ?? $worker->age }}"
                                                     placeholder="age">
                @error('age')
                <div>
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div style="margin-bottom: 15px;"><textarea name="description" placeholder="description">
                         {{ old('description') ?? $worker->description }}
                    </textarea>

                @error('description')
                <div>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;">
                <input id="isMarried" type="checkbox" name="is_married"
                    {{ $worker->is_married ? ' checked' : '' }}
                >
                <label for="isMarried">Is married</label>
                @error('is_married')
                <div>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;"><input type="submit" value="Сохранить"></div>
        </form>
    </div>
</div>

@endsection
