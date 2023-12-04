<section class="about-insurance">
    <div class="about-insurance__main">
        <div class="container">
            @foreach (\App\Models\OcagoBanner::orderBy('id')->take(1)->get() as $item)
            <div class="about-insurance__main-left">
                <h1>{{ $item->{'title_' . app()->getLocale()} }}</h1>
                <p>{!! $item->{'content_' . app()->getLocale()} !!}</p>
            </div>
            <div class="about-insurance__main-right">
                <div class="img">
                    <img src="{{ asset($item->image) }}" alt="about-inc-img">
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="about-insurance__info">
        @foreach (\App\Models\OcagoBanner::orderBy('id')->take(1)->get() as $content)
        <div class="container">
            {{-- <h1 class="title3">Страхование в Узбекистане</h1> --}}
            <p class="text">{!! $content->{'footercontent_' . app()->getLocale()} !!}</p>
        </div>
        @endforeach
    </div>
</section>
