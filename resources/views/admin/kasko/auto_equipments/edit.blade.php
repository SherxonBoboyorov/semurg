@extends('layouts.admin')

@section('title', 'Edit Kasko Auto Equipment')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Kasko Auto Equipment</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- end page title end breadcrumb -->
            <form action="{{ route('kasko_auto_equipment.update', $equipment->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="model_id">Choose Model</label>
                                <select name="model_id" id="model_id" class="form-control">
                                    @foreach ($models as $model)
                                        <option @if($model->id == $equipment->model->id) selected @endif value="{{ $model->id }}">{{ $model->brand->name_en }} | {{ $model->name_en }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('model_id'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('model_id') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label for="price">Price</label>
                                <input type="number" id="price" class="form-control" value="{{ $equipment->price }}" name="price" required>
                                @if($errors->has('price'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('price') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label for="tariff">Tariff</label>
                                <input type="number" id="tariff" step="0.1" max="100" value="{{ $equipment->tariff }}" class="form-control" name="tariff" required>
                                @if($errors->has('tariff'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('tariff') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label for="name_ru">Name RU</label>
                                <input type="text" id="name_ru" class="form-control" value="{{ $equipment->name_ru }}" name="name_ru" required>
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
                                <label for="name_uz">Name UZ</label>
                                <input type="text" id="name_uz" class="form-control" value="{{ $equipment->name_uz }}" name="name_uz" required>
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
                                <label for="name_en">Name EN</label>
                                <input type="text" id="name_en" class="form-control" value="{{ $equipment->name_en }}" name="name_en" required>
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
                                <button type="submit" class="btn btn-success btn-block">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
