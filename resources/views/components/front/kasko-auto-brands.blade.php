<div class="kacko__info">
    <h3>@lang('front.automobile_model')</h3>
    <div class="types">
        @foreach ($brands as $brand)
        <div class="types__item">
            <label>
                <input onclick="getBrandsValue()" type="radio" name="brand" value="{{ $brand->id }}" required>
                <span>{{ $brand->{'name_' . app()->getLocale()} }}</span>
            </label>
        </div>
        @endforeach
    </div>
    <div class="line"></div>
    <div class="btns odd-btn">
        <a href="#" onclick="window.location.reload()" class="btn-right btn form-btn">@lang('front.further')</a>
    </div>
</div>
