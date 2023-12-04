@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    @foreach ($menu as $item)
                    <h1 class="title">{{ $item->{'title_' . app()->getLocale()} }}</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                        <li><a>{{ $item->{'title_' . app()->getLocale()} }}</a></li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
        <section class="insurance-products for-individuals">
            <div class="container">
                  <div class="tab">
                    @foreach ($insurancecategories as $insurancecategory)
                        <a href="{{ route('products', ['id' => $insurancecategory->id]) }}"><button style="display: block" class="tablinks @if($insurancecategory->id == $id) active @endif">{{ $insurancecategory->{'title_' . app()->getLocale()} }}</button></a>
                     @endforeach
                  </div>

                  <div class="tab-content" style="display: grid">
                    @foreach($insuranceproducts as $insuranceproduct)
                      <a href="{{ route('product', $insuranceproduct->id) }}" class="tab-content__item" data-aos="slide-right">
                          <div class="img-item">
                              <img src="{{ asset($insuranceproduct->image) }}" alt="">
                          </div>
                          <p>{{ $insuranceproduct->{'title_' . app()->getLocale()} }} </p>
                      </a>
                      @endforeach
                    </div>
            </div>
        </section>
    </main>

@endsection
