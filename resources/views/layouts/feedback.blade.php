@if($errors->any())
<div class="alert alert-danger">
  <ul>
      @foreach ($errors->all() as $error)
          <li style="color: red">{{ $error }}</li>
      @endforeach
  </ul>
</div>
@endif

<section class="feedback" data-aos="zoom-in">
    <div class="container">
        <h1 class="title3">@lang('front.feedback')</h1>
        <form method="POST" class="feedback__form" action="{{ route('feedback-form.store') }}">
            @csrf
            <input class="base-input" name="fullname" type="text" placeholder="@lang('front.full_name')">
            <input class="base-input" name="phone" type="number" placeholder="@lang('front.phone')">
            <textarea class="base-input" name="comment" placeholder="@lang('front.comment')"></textarea>
            <button type="submit" class="form-btn">@lang('front.send')</button>
        </form>
    </div>
</section>
