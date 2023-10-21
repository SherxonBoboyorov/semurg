@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <form action="{{ route('licensesdocument.update', $licensesdocument->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="licensescategory_id">Licenses and certificates Type</label>
                                <select name="licensescategory_id" id="licensescategory_id" class="form-control">
                                    @foreach ($licensescategory as $licensescategory)
                                    <option @if($licensescategory->id == $licensesdocument->licensescategory_id) selected @endif value="{{ $licensescategory->id }}">{{ $licensescategory->title_en }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('licensescategory_id'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('licensescategory_id') }}
                                </div>
                                @endif
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="title_uz">Title [Uzbek]</label>
                                <input type="text" id="title_uz" value="{{ $licensesdocument->title_uz }}" class="form-control" name="title_uz">
                                @if($errors->has('title_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('title_uz') }}

                                    </div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label for="title_ru">Title [Russian]</label>
                                <input type="text" id="title_ru" value="{{ $licensesdocument->title_ru }}" class="form-control" name="title_ru">
                                @if($errors->has('title_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('title_ru') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label for="title_en">Title [English]</label>
                                <input type="text" id="title_en" value="{{ $licensesdocument->title_en}}" class="form-control" name="title_en">
                                @if($errors->has('title_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('title_en') }}
                                    </div>
                                @endif
                            </div>

                        </div><br><samp></samp>



                        
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="image">File</label>
                                <input type="file" id="file" name="image" class="form-control-file" onchange="inputData(event)">
                                @if($errors->has('image'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('image') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <a href="{{ asset($licensesdocument->image) }}" download=""><fieldset>{{ asset($licensesdocument->image) }}</fieldset></a>
                            </div>
                        </div><br>

                        <div>
                            <input id="fileSize"  value="{{ $licensesdocument->size }}" name="size" readonly>
                          </div>

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
@section('custom_js')
    <script>

    function inputData(e) {
        const bytes = e.target.files[0].size
        const sufixes = ['B', 'kB', 'MB', 'GB', 'TB'];
        const i = Math.floor(Math.log(bytes) / Math.log(1024));
        const fileSize = document.getElementById('fileSize')
        fileSize.value = `${(bytes / Math.pow(1024, i)).toFixed(0)} ${sufixes[i]}`
    }


    </script>
@endsection
