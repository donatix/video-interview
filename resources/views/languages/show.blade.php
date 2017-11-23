@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                <h3 class="panel-title">Language
                	<span class="pull-right" >

                        <form class="form-inline" action="{{ url('languages', $languages->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"> Delete language</i></button> 
                                       
                        </form>

                    </span>
                </h3>

                </div>

                <div class="panel-body">
                <p>
                    <form class="form-inline" action="{{ url('languages', $languages->id) }}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
                        <input type="text" name="name" value="{{$languages->name}}" />
                        <input type="text" name="abbr" value="{{$languages->abbr}}" />

                        <button class="btn btn-success btn-sm"><i class="fa fa-trash"> Update language</i></button> 
                    </form>
                </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

