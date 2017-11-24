@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                <h3 class="panel-title">Languages 
                	<span class="pull-right" >
                		<a href="{{url('languages/create')}}" type="button"  class="btn btn-success " aria-label="Left Align" data-product-name="1">
                			Create New Language
                        </a>
                    </span>
                </h3>

                </div>

                <div class="panel-body">
                    <ol>
                    	@foreach ($languages as $language)
						    <li><a href="{{url('languages').'/'.$language->id}}">{{$language->name}}</a> </li>
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

