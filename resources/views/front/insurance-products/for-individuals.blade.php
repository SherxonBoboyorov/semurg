@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">Физическим лицам</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">Главная</a></li>
                        <li><a>Физическим лицам</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="insurance-products for-individuals">
            <div class="container">
                <div>
                  @foreach ($insurancecategories as $insurancecategory)  
                   <div class="tab">
                       <button class="tablinks" onclick="openCity(event, '{{ $insurancecategory->id }}')">{{ $insurancecategory->{'title_' . app()->getLocale()} }}</button>
                    </div>
                     
                    <div id="{{$insurancecategory->id}}" class="tab-content">
                        @foreach ($insurancecategory->insuranceproducts as $insuranceproduct)
                    <a href="{{ route('product.show', $insuranceproduct->id) }}" class="tab-content__item" data-aos="slide-left">
                        <div class="img-item">
                            <img src="{{ asset($insuranceproduct->image) }}" alt="">
                        </div>
                        <p>{{ $insuranceproduct->{'title_' . app()->getLocale()} }}</p>
                    </a>
                    @endforeach
                </div>
                @endforeach
             </div>
                
                <div class="insurance-products__btn">
                    <button class="btn primary-btn">Все продукты</button>
                </div>
            </div>
        </section>
    </main>

@endsection