@extends('vendor.aparat.layouts.app')

@section('video')
    <div class="row secBg">
        <div class="large-12 columns">
            <div class="page-heading text-center profile-img">
                تصوبر پروفایل: 
                <p>
                    <img src="{{ $profile['profile']['pic_s'] }}" alt="">
                </p>
            </div>
            <ul class="vertical menu off-menu list-profile">
                <li class="submenu menu vertical">نام کاربری: {{ $profile['profile']['username'] }}</li>
                <li>نام کانال: {{ $profile['profile']['name'] }}</li>
                <li>توضیحات کانال: {{ $profile['profile']['descr'] }}</li>
                <li>تعداد ویدئوها: {{ $profile['profile']['video_cnt'] }}</li>
                <li>تعداد دنبال کننده: {{ $profile['profile']['follower_cnt'] }}</li>
            </ul>
        </div>
    </div>
@endsection
