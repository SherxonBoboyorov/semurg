@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">@lang('front.insurance_products')</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                        <li><a>@lang('front.insurance_products')</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="insurance-products for-individuals">
            <div class="container">
                  <div class="tab">
                    @foreach ($insurancecategories as $insurancecategory)
                    <button class="tablinks" onclick="openCity(event, 'category_{{ $insurancecategory->id }}')">{{ $insurancecategory->{'title_' . app()->getLocale()} }}</button>
                    @endforeach
                  </div>
                     
                  @foreach ($insurancecategories as $insurancecategory)
                  <div id="category_{{ $insurancecategory->id }}" class="tab-content">
                      @foreach($insurancecategory->insuranceproducts as $insuranceproduct)
                      <a href="{{ route('product', $insuranceproduct->id) }}" class="tab-content__item" data-aos="slide-right">
                          <div class="img-item">
                              <img src="{{ asset($insuranceproduct->image) }}" alt="">
                          </div>
                          <p>{{ $insuranceproduct->{'title_' . app()->getLocale()} }} </p>
                      </a>
                      @endforeach
                  </div>
              @endforeach
            </div>
        </section>
    </main>

@endsection