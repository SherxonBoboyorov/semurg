@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">All Automobile Year</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

             <a href="{{ route('year.create')}}" class="btn bg-success mb-2">Add Automobile Year +</a>

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
                            <th style="width: 2%;">#</th>
                            <th>Automobile Type</th>
                            <th>Automobile Model</th>
                            <th>Automobile Name</th>
                            <th>Automobile Price</th>
                            <th>Automobile Year</th>
                            <th colspan="2" style="width: 2%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($years as $year)
                        <tr>
                            <td>{{ $year->id }}</td>
                            <td>{{ $year->car->type ?? "" }}</td>
                            <td>{{ $year->automobilemodel->automobile_name ?? "" }}</td>
                            <td>{{ $year->equipment->name ?? "" }}</td>
                            <td>{{ $year->automobileprice->price ?? "" }}</td>
                            <td>{{ $year->year }}</td>
                            <td>
                                <a href="{{ route('year.edit', $year->id) }}" class="btn btn-primary btn-icon">
                                    <i class="fa fa-edit">Edit</i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('year.destroy', $year->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-icon">
                                        <i class="fa fa-trash">delete</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $years->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
