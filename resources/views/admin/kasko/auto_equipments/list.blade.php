@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Kasko Auto Equipments</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <a href="{{ route('kasko_auto_equipment.create')}}" class="btn bg-success mb-2">Add Equipment +</a>


            <div class="card">
                <div class="card-body">

                    @if(session('message'))

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ session('message') }}
                        </div>

                    @endif

                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 2%;">ID</th>
                            <th>Brand EN</th>
                            <th>Model EN</th>
                            <th>Name UZ [Uzbek]</th>
                            <th>Name RU [Russian]</th>
                            <th>Name EN [Engish]</th>
                            <th>Price</th>
                            <th>Tariff</th>
                            <th colspan="2" style="width: 2%; border-radius: 5px">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($autoEquipments as $autoEquipment)
                            <tr>
                                <td>{{ $autoEquipment->id }}</td>
                                <td>{{ $autoEquipment->model->brand->name_en }}</td>
                                <td>{{ $autoEquipment->model->name_en }}</td>
                                <td>{{ $autoEquipment->name_uz }}</td>
                                <td>{{ $autoEquipment->name_ru }}</td>
                                <td>{{ $autoEquipment->name_en }}</td>
                                <td>{{ Illuminate\Support\Number::currency($autoEquipment->price, in: "UZS", locale: "de") }}</td>
                                <td>{{ $autoEquipment->tariff }}</td>
                                <td>
                                    <a href="{{ route('kasko_auto_equipment.edit', $autoEquipment->id) }}" class="btn btn-primary btn-icon">
                                        <i class="fa fa-edit">Edit</i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('kasko_auto_equipment.destroy', $autoEquipment->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon">
                                            <i class="fa fa-trash">Delete</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="row" style="margin-top: 10px">
                        {!! $autoEquipments->links() !!}
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
