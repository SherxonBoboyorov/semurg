@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Automobile Price</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <form action="{{ route('automobileprice.update', $automobileprice->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="car_id">Automobile Type</label>
                                <select name="car_id" id="car_id" class="form-control">
                                    @foreach ($car as $car)
                                    <option @if($car->id == $automobileprice->car_id) selected @endif value="{{ $car->id }}">{{ $car->type }}</option>
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
                                    <option @if($automobilemodel->id == $automobileprice->automobilemodel_id) selected @endif value="{{ $automobilemodel->id }}">{{ $automobilemodel->automobile_name }}</option>
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

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="equipment_id">Automobile Model</label>
                                <select name="equipment_id" id="equipment_id" class="form-control">
                                    @foreach ($equipment as $equipment)
                                    <option @if($equipment->id == $automobileprice->equipment_id) selected @endif value="{{ $equipment->id }}">{{ $equipment->name }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('equipment_id'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('equipment_id') }}
                                </div>
                                @endif
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="price">Automobile Price</label>
                                <input type="text" id="price" value="{{ $automobileprice->price }}" class="form-control" name="price">
                                @if($errors->has('price'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('price') }}
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

