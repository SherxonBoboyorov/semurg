@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Automobile Model</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <form action="{{ route('equipment.update', $equipment->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="car_id">Automobile Type</label>
                                <select name="car_id" id="car_id" class="form-control">
                                    @foreach ($car as $car)
                                    <option @if($car->id == $equipment->car_id) selected @endif value="{{ $car->id }}">{{ $car->type }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('car_id'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('car_id') }}
                                </div>
                                @endif
                            </div>
                        </div><br>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="automobilemodel_id">Automobile Model</label>
                                <select name="automobilemodel_id" id="automobilemodel_id" class="form-control">
                                    @foreach ($automobilemodel as $automobilemodel)
                                    <option @if($automobilemodel->id == $equipment->automobilemodel_id) selected @endif value="{{ $automobilemodel->id }}">{{ $automobilemodel->automobile_name }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('automobilemodel_id'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('automobilemodel_id') }}
                                </div>
                                @endif
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="name">Automobile Name</label>
                                <input type="text" id="name" value="{{ $equipment->name }}" class="form-control" name="name">
                                @if($errors->has('name'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>

                        </div><br><samp></samp>

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
