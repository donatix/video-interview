@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All Videos</div>

                <div class="panel-body">
                    <div class="row">
                         @for ($i = 0; $i < $videos->count(); $i++)
                             @if ($i%2== 0)
                                 <div class="col-md-4 col-md-offset-1">
                                    <video width="320" controls>
                                      <source src='{{"uploads\\".$videos[$i]}}' type='video/webm; codecs="vp8, vorbis"'>
                                    </video>
                                
                                </div>

                            @else
                                <div class="col-md-4 col-md-offset-1">
                                    <video width="320" controls>
                                      <source src='{{"uploads\\".$videos[$i]}}' type='video/webm; codecs="vp8, vorbis"'>
                                    </video>
                            
                                </div>
                            @endif
                        
                        
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="js/player.js"></script>
    <script src="js/questions.js"></script>



@endsection
