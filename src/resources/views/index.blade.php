@extends('vendor.aparat.layouts.app')

@section('video')
    <!-- left side content area -->

    <!-- newest video -->
    <div class="main-heading removeMargin">
        <div class="row secBg padding-14 removeBorderBottom">
            <div class="medium-8 small-8 columns">
                <div class="head-title">
                    <i class="fa fa-film"></i>
                    <h4>همه ویدئوها</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row secBg">
        <div class="large-12 columns">
            <div class="row column head-text clearfix" style="font-weight: bold; font-family: Tahoma; font-size: 13px;direction: rtl; text-align: right;">
                <p>تعداد ویدئوها : <span style="color: red;">{{ number_format($total_video) }} ویدئو</span></p>
            </div>
            <div class="tabs-content" data-tabs-content="newVideos">
                <div class="tabs-panel is-active" id="new-all">
                    <div class="row list-group">
                        @foreach ($videos['videobyuser'] as $video)
                            <div class="item large-4 medium-6 columns group-item-secondary-button grid-default">
                                <div class="post thumb-border">
                                    <div class="post-thumb">
                                        <img src="{{ $video['small_poster'] }}" alt="new video">
                                        <a href="single-video-v2.html" class="hover-posts">
                                            <span><i class="fa fa-play"></i>نمایش ویدئو</span>
                                        </a>
                                        <div class="video-stats clearfix">
                                            <div class="thumb-stats pull-right">
                                                <span>{{ gmdate("i:s", $video['duration']) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-des">
                                        <h6>
                                            <a href="single-video-v2.html">
                                                {{ $video['title'] }}
                                            </a>
                                        </h6>
                                        <div class="post-stats clearfix">
                                            <p class="pull-right">
                                                <i class="fa fa-user"></i>
                                                <span><a href="#">{{ $video['username'] }}</a></span>
                                            </p>
                                            <p class="pull-right">
                                                <i class="fa fa-clock-o"></i>
                                                <span>{{ $video['sdate'] }}</span>
                                            </p>
                                            <p class="pull-right">
                                                <i class="fa fa-eye"></i>
                                                <span>{{ number_format($video['visit_cnt']) }}</span>
                                            </p>
                                        </div>
                                        <div class="post-summary">
                                            <p>
                                                {{ $video['title'] }}
                                            </p>
                                        </div>
                                        <div class="post-button">
                                            <a href="single-video-v2.html" class="secondary-button"><i
                                                    class="fa fa-play-circle"></i>نمایش ویدئو</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="pagination">
                <a href="#" class="prev page-numbers">« Previous</a>
                <a href="#" class="page-numbers">1</a>
                <span class="page-numbers current">2</span>
                <a href="#" class="page-numbers">3</a>
                <a href="#" class="next page-numbers">Next »</a>
            </div>
        </div>
    </div>
    <!-- end left side content area -->
    <!-- end sidebar -->

    <!--end off canvas content-->
@endsection
