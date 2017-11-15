@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                <h3 class="panel-title">Questions 
                	<span class="pull-right" >
                		<a href="{{url('questions/create')}}" type="button"  class="btn btn-success " aria-label="Left Align" data-product-name="1">
                			Create New Question
                        </a>
                    </span>
                </h3>

                </div>

                <div class="panel-body">
                    <ol>
                    	@foreach ($questions as $question)
						    <li><a href="{{url('questions').'/'.$question->id}}">{{substr($question->body,0,50).' ...'  }}</a> </li>
						@endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')


@endsection

