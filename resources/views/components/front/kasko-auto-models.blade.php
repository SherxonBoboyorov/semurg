<div class="kacko__info">
    <h3>@lang('front.automobile_model')</h3>
    <div class="types">
        @foreach ($models as $model)
        <div class="types__item">
            <label>
                <input onclick="getModelsValue()" type="radio" name="model" value="{{ $model->id }}" required>
                <span>{{ $model->{'name_' . app()->getLocale()} }}</span>
            </label>
        </div>
        @endforeach
    </div>
    <div class="line"></div>
    <div class="btns">
        <a href="#" onclick="removeCookies('brand_id', 'brand_name', 'model_id', 'model_name')" class="btn form-btn" id="prev">@lang('front.back')</a>
        <a href="#" onclick="window.location.reload()" class="btn-right btn form-btn">@lang('front.further')</a>
    </div>
</div>
