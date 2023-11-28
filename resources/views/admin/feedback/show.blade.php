@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Show</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- end page title end breadcrumb -->
            <form action="{{ route('feedback.update', $feedback->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <label for="fullname">Full name</label>
                                <input type="text" id="fullname" value="{{ $feedback->fullname }}" class="form-control" name="fullname">
                            </div>
                        </div><br><br>


                        <div class="row">
                            <div class="col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" value="{{ $feedback->phone }}" class="form-control" name="phone">
                            </div>
                        </div><br><br>

                       <div class="row">
                            <div class="col-md-6">
                                <label for="comment">Comment</label>
                                 <textarea type="text" id="comment"  class="form-control" name="comment">{{ $feedback->comment }}</textarea>
                            </div>
                        </div><br><br> <br>

                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
