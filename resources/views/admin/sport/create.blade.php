@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <form action="{{ route('sport.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-4">
                                    <label for="name_uz">Name [Uzbek]</label>
                                    <input type="text" id="name_uz" class="form-control" name="name_uz">
                                    @if($errors->has('name_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('name_uz') }}
                                    </div>
                                    @endif
                                </div>


                                <div class="col-md-4">
                                    <label for="name_ru">Name [Russian]</label>
                                    <input type="text" id="name_ru" class="form-control" name="name_ru">
                                    @if($errors->has('name_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('name_ru') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="col-md-4">
                                    <label for="name_en">Name [English]</label>
                                    <input type="text" id="name_en" class="form-control" name="name_en">
                                    @if($errors->has('name_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('name_en') }}
                                    </div>
                                    @endif
                                </div>

                             </div><br>


                             <div class="row" style="margin-top: 15px">
                                <div class="col-md-2">
                                    <label for="six_month">6 Month</label>
                                    <input name="six_month" class="form-control" id="six_month">
                                    @if($errors->has('six_month'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('six_month') }}
                                    </div>
                                    @endif
                                </div><br><br>

                                <div class="col-md-2">
                                    <label for="twelve_month">12 Month</label>
                                    <input name="twelve_month" class="form-control" id="twelve_month">
                                    @if($errors->has('twelve_month'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('twelve_month') }}
                                    </div>
                                    @endif
                                </div>
                             </div>




                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection

