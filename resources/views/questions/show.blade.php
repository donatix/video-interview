@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                <h3 class="panel-title">Questions {{$question->id}}
                	<span class="pull-right" >



                        <form class="form-inline" action="{{ url('questions', $question->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"> Delete question</i></button> 
                                       
                        </form>


                    </span>
                </h3>

                </div>

                <div class="panel-body">
                <p>
                    {{$question->body}}
                </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

