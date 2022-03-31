@extends('vendor.aparat.layouts.app')

@section('video')
    <div class="row secBg">
        <div class="large-12 columns">
            @if (count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form action="{{ route('sendVideo') }}" class="mt-3" method="POST" enctype="multipart/form-data" style="padding-top: 15px; direction: rtl; text-align: right;">
                @csrf
                <div class="input-group">
                    <span class="input-group-label"><i class="fa fa-user"></i></span>
                    <input type="text" name="title" value="{{ old('title') }}" id="title" class="input-group-field"
                        placeholder="select title" />
                </div>
                <div class="input-group">
                    <span class="input-group-label"><i class="fa fa-user"></i></span>
                    <select name="category" class="input-group-field">
                        @foreach ($categories['categories'] as $category)
                            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group">
                    <span class="input-group-label"><i class="fa fa-user"></i></span>
                    <input type="text" name="tags" value="{{ old('tags') }}" id="tags" class="input-group-field"
                        placeholder="select tags" />
                </div>
                <div class="input-group">
                    <span class="input-group-label"><i class="fa fa-user"></i></span>
                    <textarea col="3" row="5" name="description" id="description" class="input-group-field"
                        placeholder="select description">{{ old('description') }}</textarea>
                </div>
                <div class="input-group">
                    <span class="input-group-label"><i class="fa fa-user"></i></span>
                    <input type="file" name="video" id="video" class="input-group-field" placeholder="select video" />
                </div>
                <div class="input-group">
                    <button type="submit" class="button expanded">
                        Send Video
                    </button>
                </div>
            </form>

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>
    </div>
@endsection
