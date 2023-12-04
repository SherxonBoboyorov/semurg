<div class="kacko__info" data-aos="zoom-in">
    <h3>@lang('front.year_of_manufacture_of_the_car')</h3>
    <div class="types">
        @foreach ($years as $year)
        <div class="types__item">
            <label>
                <input onclick="getYearsValue()" type="radio" name="year" value="{{ $year }}" required>
                <span>{{ $year }}</span>
            </label>
        </div>
        @endforeach
    </div>
    <div class="line"></div>
    <div class="btns">
        <a href="#" onclick="removeCookies('equipment_id', 'equipment_name', 'kasko_year', 'insurancePremium', 'amountLiability')" class="btn-right btn form-btn">@lang('front.back')</a>
    </div>
</div>
