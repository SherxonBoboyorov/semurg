@extends('layouts.admin')

@section('content')

    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <form action="{{ route('poll.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="question_uz">Question UZ</label>
                                <input type="text" id="question_uz" class="form-control" name="question_uz">
                                @if($errors->has('question_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('question_uz') }}

                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="question_ru">Question RU</label>
                                <input type="text" id="question_ru" class="form-control" name="question_ru">
                                @if($errors->has('question_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('question_ru') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="question_en">Question EN</label>
                                <input type="text" id="question_en" class="form-control" name="question_en">
                                @if($errors->has('question_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('question_en') }}
                                    </div>
                                @endif
                            </div>

                        </div><br><samp></samp>

                        <h1>Answer</h1>

                        <div class="answers">
                            <button class="btn btn-primary" id="add-answer">Add Answer</button>
                        
                            <div class="answer-template" style="display: none;">
                                <div class="answer">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="answer_uz">Answer UZ</label>
                                            <input type="text" id="answer_uz" class="form-control" name="answer_uz[]">
                                            @if($errors->has('answer_uz'))
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    {{ $errors->first('answer_uz') }}
            
                                                </div>
                                            @endif
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="answer_ru">Answer RU</label>
                                            <input type="text" id="answer_ru" class="form-control" name="answer_ru[]">
                                            @if($errors->has('answer_ru'))
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    {{ $errors->first('answer_ru') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="answer_en">Answer EN</label>
                                            <input type="text" id="answer_en" class="form-control" name="answer_en[]">
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
                                            <input id="order" name="order[]" type="number" aria-label="Order"
                                                aria-describedby="order" class="touchspin" value="1"/>
                                        </div>
                                    </div><br><br>


                                
                                    <button style="width: 50px; border: 2px solid red" class="remove-answer">-</button>
                                </div>
                            </div>
                        
                            <div class="added-answers"></div>
                        </div>

                    
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-success btn-block">Save</button>
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

  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('add-answer').addEventListener('click', function(event) {
        event.preventDefault(); 
        
        var newAnswer = document.querySelector('.answer-template .answer').cloneNode(true);
        document.querySelector('.added-answers').appendChild(newAnswer);
    });

    document.addEventListener('click', function(event) {
        if (event.target && event.target.classList.contains('remove-answer')) {
            event.target.closest('.answer').remove();
        }
    });
    
  });


                

</script>
@endsection


    
