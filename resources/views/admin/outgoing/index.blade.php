
@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">All Outgoing reinsurance</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

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
                        <div>
                        <thead>
                        <tr>
                            <th style="width: 2%;">#</th>
                            <th>Content [Uzbek]</th>
                            <th>Content [Russian]</th>
                            <th>Content [English]</th>
                            <th colspan="2" style="width: 2%;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($outgoings as $outgoing)
                            <tr>
                                <td>{{ $outgoing->id }}</td>
                                <td class="table_cart_list">{!! $outgoing->content_uz !!}</td>
                                <td class="table_cart_list">{!! $outgoing->content_ru !!}</td>
                                <td class="table_cart_list">{!! $outgoing->content_en !!}</td>
                                <td>
                                    <a href="{{ route('outgoing.edit', $outgoing->id) }}" class="btn btn-primary btn-icon">
                                        <i class="fa fa-edit">Edit</i>
                                    </a>
                                </td>
                                {{-- <td>
                                    <form action="{{ route('outgoing.destroy', $outgoing->id) }}" method="POST">
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
                    </div>
                    </table>

                </div>
            </div>

        </div>
    </div>

    <style>
        .table_cart_list p+p {
            max-height: 72px;
            -webkit-line-clamp: 3;
            position: relative;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
        }

        .table_cart_list img{
           display: none;
        }
    </style>

@endsection

