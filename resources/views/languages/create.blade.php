@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus-circle"></i>
                Create New Language</div>
                <div class="panel-body">
                    <form  class="form-horizontal" role="form" method="POST" files='true' action="{{ url('/languages') }}">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Name</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="name" type="text" value="{{ old('name') }}" />
                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <label class="col-md-4 control-label">Abbreviation</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="abbr" type="text" value="{{ old('abbr') }}" />
                                        @if ($errors->has('abbr'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('abbr') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                               <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user-plus"></i>Create
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


