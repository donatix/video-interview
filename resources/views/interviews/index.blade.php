@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Interviews</h3>
                </div>

                <div class="panel-body">
                    <ol>
                    	@foreach ($interviews as $interview)
						    <li>
                                <a href="{{url('interviews').'/'.$interview->id}}">{{$interview->name}}</a>
                                @ <strong>{{$interview->email}}</strong>
                                <p>{{$interview->app_data}}</p>
                                Video: <a href="{{url('uploads').'/'.$interview->video}}">{{$interview->video}}</a>
                            </li>
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

