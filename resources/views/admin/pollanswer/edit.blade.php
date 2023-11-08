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

            <form action="{{ route('pollanswer.update', $pollanswer->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="poll_id">Questions</label>
                                <select name="poll_id" id="poll_id" class="form-control">
                                    @foreach ($poll as $poll)
                                    <option @if($poll->id == $pollanswer->poll_id) selected @endif value="{{ $poll->id }}">{{ $poll->question_en }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('poll_id'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('poll_id') }}
                                </div>
                                @endif
                            </div>
                        </div><br>
                    </div><br><samp></samp>


                    <div class="row">
                        <div class="col-md-4">
                            <label for="answer_uz">Answer [Uzbek]</label>
                            <input type="text" id="answer_uz" value="{{ $pollanswer->answer_uz }}" class="form-control" name="answer_uz">
                            @if($errors->has('answer_uz'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('answer_uz') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <label for="answer_ru">Answer [Russian]</label>
                            <input type="text" id="answer_ru" value="{{ $pollanswer->answer_ru }}"  class="form-control" name="answer_ru">
                            @if($errors->has('answer_ru'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('answer_ru') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <label for="answer_en">Answer [English]</label>
                            <input type="text" id="answer_en" value="{{ $pollanswer->answer_en }}" class="form-control" name="answer_en">
                            @if($errors->has('answer_en'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('answer_en') }}
                                </div>
                            @endif
                        </div>

                    </div><br><samp></samp>


                    <div class="col-md-6">
                        <label class="form-label" for="order">Order</label>
                        <div class="input-group">
                            <input id="order" value="{{ $pollanswer->order }}" name="order" type="number" aria-label="Order"
                                aria-describedby="order" class="touchspin" value="1"/>
                        </div>
                    </div><br><br>




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
