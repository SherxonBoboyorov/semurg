@extends('layouts.admin')

@section('title', 'Add Kasko Auto Model')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add Kasko Auto Model</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- end page title end breadcrumb -->
            <form action="{{ route('kasko_auto_model.store') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="brand_id">Choose Brand</label>
                                <select name="brand_id" id="brand_id" class="form-control">
                                    @foreach ($autoBrands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name_en }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('brand_id'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('brand_id') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label for="name_ru">Name RU</label>
                                <input type="text" id="name_ru" class="form-control" name="name_ru" required>
                                @if($errors->has('name_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('name_ru') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label for="name_uz">Name UZ</label>
                                <input type="text" id="name_uz" class="form-control" name="name_uz" required>
                                @if($errors->has('name_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('name_uz') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label for="name_en">Name EN</label>
                                <input type="text" id="name_en" class="form-control" name="name_en" required>
                                @if($errors->has('name_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('name_en') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-success btn-block">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
