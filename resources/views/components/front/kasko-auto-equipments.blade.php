<div class="kacko__info" data-aos="zoom-in">
    <h3>Комплектация</h3>
    <div class="types">
        @foreach ($equipments as $equipment)
        <div class="types__item">
            <label>
                <input onclick="getEquipmentsValue()" type="radio" name="equipment" value="{{ $equipment->id }}" required>
                <span>{{ $equipment->{'name_' . app()->getLocale()} }}</span>
            </label>
        </div>
        @endforeach
    </div>
    <div class="line"></div>
    <div class="btns">
        <a href="#" onclick="removeCookies('model_id', 'model_name')" class="btn form-btn" id="prev">Назад</a>
        <a href="#" onclick="window.location.reload()" class="btn-right btn form-btn">Далее</a>
    </div>
</div>