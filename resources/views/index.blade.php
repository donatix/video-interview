@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Initial Information</div>

                <div class="panel-body">
                    <div id="warnBrowserMessage">
                        <div class="alert alert-warning">
                          <strong>Warning</strong> Your Browser is not supporting. Please use Chrome or Mozilla
                        </div>
                    </div>
                    <form  id="userLoginForm" class="form-horizontal" role="form" method="POST" files='true' action="{{ url('/apply') }}">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Your Name</label>
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Your Email</label>
                                    <div class="col-md-6">
                                        <input type="text" name="email" class="form-control" required value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Language</label>
                                    <div class="col-md-6">
                                    @foreach ($languages as $language)
                                        <div class="radio">
                                            <label>
                                                <input type="radio" id="language_id" name="language_id" @if ($language->id === 1) checked="checked" @endif value="{{ $language->id }}">
                                                {{ $language->name }} / {{ $language->abbr }}
                                            </label>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>

                                <?php /*  <!-- <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Captcha</label>

                                    <div class="col-md-6">
                                        {!! app('captcha')->display() !!}

                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div> -->*/
                                ?>

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
@section('scripts')
    <script src="js/questions.js"></script>
@endsection