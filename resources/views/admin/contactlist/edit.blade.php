@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <form action="{{ route('contactlist.update', $contactlist->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-4">
                                    <label for="title_uz">Title [Uzbek]</label>
                                    <input type="text" id="title_uz" value="{{ $contactlist->title_uz }}" class="form-control" name="title_uz">
                                    @if($errors->has('title_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('title_uz') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="col-md-4">
                                    <label for="title_ru">Title [Russian]</label>
                                    <input type="text" id="title_ru" value="{{ $contactlist->title_ru }}" class="form-control" name="title_ru">
                                    @if($errors->has('title_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('title_ru') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="col-md-4">
                                    <label for="title_en">Title [English]</label>
                                    <input type="text" id="title_en" value="{{ $contactlist->title_en }}" class="form-control" name="title_en">
                                    @if($errors->has('title_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('title_en') }}
                                    </div>
                                    @endif
                                </div>

                             </div><br><hr>

                             <div class="row" style="margin-top: 15px">
                                <div class="col-md-4">
                                    <label for="address_uz">Address [Uzbek]</label>
                                    <input type="text" id="address_uz" value="{{ $contactlist->address_uz }}" class="form-control" name="address_uz">
                                    @if($errors->has('address_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('address_uz') }}
                                    </div>
                                    @endif
                                </div>


                                <div class="col-md-4">
                                    <label for="address_ru">Address [Russian]</label>
                                    <input type="text" id="address_ru" value="{{ $contactlist->address_ru }}" class="form-control" name="address_ru">
                                    @if($errors->has('address_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('address_ru') }}
                                    </div>
                                    @endif
                                </div>

                                 <div class="col-md-4">
                                    <label for="address_en">Address [English]</label>
                                    <input type="text" id="address_en" value="{{ $contactlist->address_en }}" class="form-control" name="address_en">
                                    @if($errors->has('address_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('address_en') }}
                                    </div>
                                    @endif
                                </div>
                             </div><br><br>


                            <div class="row" style="margin-top: 15px">
                             <div class="col-md-4">
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" value="{{ $contactlist->phone }}" class="form-control" name="phone">
                                @if($errors->has('phone'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('phone') }}
                                </div>
                                @endif
                            </div>
                        </div><br><hr>

                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-4">
                                    <label for="work_days_uz">Work days [Uzbek]</label>
                                    <input type="text" id="work_days_uz" value="{{ $contactlist->work_days_uz }}" class="form-control" name="work_days_uz">
                                    @if($errors->has('work_days_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('work_days_uz') }}
                                    </div>
                                    @endif
                                </div>


                                <div class="col-md-4">
                                    <label for="work_days_ru">Work days [Russian]</label>
                                    <input type="text" id="work_days_ru" value="{{ $contactlist->work_days_ru }}" class="form-control" name="work_days_ru">
                                    @if($errors->has('work_days_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('work_days_ru') }}
                                    </div>
                                    @endif
                                </div>

                                 <div class="col-md-4">
                                    <label for="work_days_en">Work days [English]</label>
                                    <input type="text" id="work_days_en" value="{{ $contactlist->work_days_en }}" class="form-control" name="work_days_en">
                                    @if($errors->has('work_days_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('work_days_en') }}
                                    </div>
                                    @endif
                                </div>

                             </div><br><hr>


                             <div class="row" style="margin-top: 15px">
                                <div class="col-md-4">
                                    <label for="opening_hours_uz">Opening hours [Uzbek]</label>
                                    <input type="text" id="opening_hours_uz" value="{{ $contactlist->opening_hours_uz }}" class="form-control" name="opening_hours_uz">
                                    @if($errors->has('opening_hours_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('opening_hours_uz') }}
                                    </div>
                                    @endif
                                </div>


                                <div class="col-md-4">
                                    <label for="opening_hours_ru">Opening hours [Russian]</label>
                                    <input type="text" id="opening_hours_ru" value="{{ $contactlist->opening_hours_ru }}" class="form-control" name="opening_hours_ru">
                                    @if($errors->has('opening_hours_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('opening_hours_ru') }}
                                    </div>
                                    @endif
                                </div>

                                 <div class="col-md-6">
                                    <label for="opening_hours_en">Opening hours [English]</label>
                                    <input type="text" id="opening_hours_en" value="{{ $contactlist->opening_hours_en }}" class="form-control" name="opening_hours_en">
                                    @if($errors->has('opening_hours_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('opening_hours_en') }}
                                    </div>
                                    @endif
                                </div>

                             </div><br>

                            
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block">Update</button>
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

