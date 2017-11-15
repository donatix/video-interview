@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus-circle"></i>
                Create New Question</div>
                <div class="panel-body">
                    <form  class="form-horizontal" role="form" method="POST" files='true' action="{{ url('/questions') }}">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Question Body</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" name="body" value="{{ old('body') }}"></textarea>
                                        @if ($errors->has('body'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('body') }}</strong>
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


