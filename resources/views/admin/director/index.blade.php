@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">List Director</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            {{-- <a href="{{ route('director.create')}}" class="btn bg-success mb-2">Add Director +</a> --}}

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
                            <th>Image</th>
                            <th>Name [Uzbek]</th>
                            <th>Name [Russian]</th>
                            <th>Name [English]</th>
                            <th colspan="2" style="width: 2%;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($directors as $director)
                            <tr>
                                <td>{{ $director->id }}</td>
                                <td>
                                    <img src="{{ asset($director->image) }}" alt="" width="35" height="35">
                                </td>
                                <td>{{ $director->title_uz }}</td>
                                <td>{{ $director->title_ru }}</td>
                                <td>{{ $director->title_en }}</td>
                                <td>
                                    <a href="{{ route('director.edit', $director->id) }}" class="btn btn-primary btn-icon">
                                        <i class="fa fa-edit">Edit</i>
                                    </a>
                                </td>
                                {{-- <td>
                                    <form action="{{ route('director.destroy', $director->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon">
                                            <i class="fa fa-trash">Delete</i>
                                        </button>
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
@endsection
