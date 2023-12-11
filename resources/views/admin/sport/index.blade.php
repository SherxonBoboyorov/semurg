@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">All Sport</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <a href="{{ route('sport.create')}}" class="btn bg-success mb-2">Add Sport +</a>

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
                            <th>Name [Uzbek]</th>
                            <th>Name [Russian]</th>
                            <th>Name [Engish]</th>
                            <th colspan="2" style="width: 2%; border-radius: 5px">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($sports as $sport)
                            <tr>
                                <td>{{ $sport->id }}</td>

                                <td>{{ $sport->name_uz }}</td>
                                <td>{{ $sport->name_ru }}</td>
                                <td>{{ $sport->name_en }}</td>
                                <td>
                                    <a href="{{ route('sport.edit', $sport->id) }}" class="btn btn-primary btn-icon">
                                        <i class="fa fa-edit">Edit</i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('sport.destroy', $sport->id) }}" method="POST">
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
                    {!! $sports->links() !!}
                </div>
            </div>

        </div>
    </div>
@endsection
