@extends('layouts.app')

@section('content')

    <form action="{{ route('sendVideo') }}" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name="title" value="{{ old('title') }}" id="title" class="form-control" placeholder="select title" />
        </div>
        <div class="form-group">
            <select name="category" id="category" class="form-control">
                @foreach($categories['categories'] as $category)
                    <option for="{{ $category['id'] }}">{{ $category['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="text" name="tags" value="{{ old('tags') }}" id="tags" class="form-control" placeholder="select tags" />
        </div>
        <div class="form-group">
            <textarea col="3" row="5" name="description" id="description" placeholder="select description">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <input type="file" name="video" id="video" class="form-control" placeholder="select video" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Send Video
            </button>
        </div>
    </form>

@endsection
