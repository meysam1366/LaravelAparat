<!-- sidebar -->
<div class="large-4 columns" style="text-align: right; direction: rtl;">
    <aside class="secBg sidebar">
        <div class="row">
            <!-- categories -->
            <div class="large-12 medium-7 medium-centered columns">
                <div class="widgetBox">
                    <div class="widgetTitle">
                        <h5>آپلود ویدئو</h5>
                    </div>
                    <div class="widgetContent">
                        <ul class="accordion" data-accordion>
                            <li class="accordion-item {{ url()->current() == route('getProfile') ? 'is-active' : '' }}" data-accordion-item>
                                <a href="{{ route('getProfile') }}" class="accordion-title">نمایش پروفایل</a>
                            </li>
                            <li class="accordion-item {{ url()->current() == route('videos') ? 'is-active' : '' }}" data-accordion-item>
                                <a href="{{ route('videos') }}" class="accordion-title">ویدئوها</a>
                            </li>
                            <li class="accordion-item {{ url()->current() == route('sendVideo') ? 'is-active' : '' }}" data-accordion-item>
                                <a href="{{ route('sendVideo') }}" class="accordion-title">آپلود ویدئو</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>
