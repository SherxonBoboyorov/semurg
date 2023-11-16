@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add Automobile Model</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <form action="{{ route('automobilemodel.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label>Automobile type</label>
                                <select name="car_id" id="car_id" class="form-control">
                                    @foreach ($cars as $car)
                                        <option value="{{ $car->id }}">{{ $car->type }}</option>
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

                        <div class="row">
                            <div class="col-md-4">
                                <label for="automobile_name">Automobile Model</label>
                                <input type="text" id="automobile_name" class="form-control" name="automobile_name">
                                @if($errors->has('automobile_name'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('automobile_name') }}
                                    </div>
                                @endif
                            </div>

                        </div><br><samp></samp>

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

