@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Apply</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">

                            <video id="myVideo" class="video-js vjs-default-skin"></video>
        
                        </div>
                        <div class="col-md-6">
                            <div id="question-container">
                                <div class="bs-calltoaction bs-calltoaction-success" id="startButton">
                                    <div class="row">
                                        <div class="col-md-3 cta-button" >
                                            <a href="#" class="btn btn-lg btn-block btn-success">Start Inverview</a>
                                        </div>
                                     </div>
                                </div>
                                <div id="questions">
                                    <div id="w">
                                        <div id="content">
                                          
                                          <div id="testimonials">

                                            <h3>Questions <span id="currentQuestion">X</span>/<span id="totalQuestions">{{ $questions->count() }}</span></h3>

                                            
                                            <div class="carousel-wrap">
                                              <ul id="testimonial-list" class="clearfix">
                                                @foreach ($questions as $question)
                                                   <li>
                                                  <p class="context">{{ $question->body }}</p>
                                                </li>
                                                @endforeach
                                                
                                              </ul><!-- @end #testimonial-list -->
                                            </div><!-- @end .carousel-wrap -->
                                            <div class="carousel-nav clearfix">
                                                <a href="#" id="nxt-testimonial" class="btn btn-lg btn-block btn-success">Next Question</a>
                                              <!-- <span id="nxt-testimonial">Next</span> -->
                                            </div>
                                            
                                          </div><!-- @end #testimonials -->
                                         
                                        </div><!-- @end #content -->
                                      </div><!-- @end #w -->

                                </div>
                                
                                <form id="application_data" role="form" method="POST">
                                    <input type="hidden" name="name" value="{{ session('name') }}" />
                                    <input type="hidden" name="email" value="{{ session('email') }}" />
                                    <input type="hidden" name="language_id" value="{{ session('language_id') }}" />
                                </form>
                                
                                <div class="bs-calltoaction bs-calltoaction-success" id="finishButton">
                                    <div class="row">
                                        <div class="col-md-3 cta-button" >
                                            <a href="#" class="btn btn-lg btn-block btn-success">Finish Inverview</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bs-calltoaction bs-calltoaction-success" id="submitButton">
                                    <div class="row">
                                        <div class="col-md-3 cta-button" >
                                            <a href="#" class="btn btn-lg btn-block btn-success">Submit Inverview</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="successMessage">
                                    <div class="alert alert-success">
                                      <strong>Success!</strong> You have applied Successfully.
                                    </div>
                                </div>
                                 <div id="loadingMessage">
                                    <div class="alert alert-warning">
                                      <strong>Please Wait</strong> Video is uploading to the server.
                                    </div>
                                </div>
                                <div id="errorMessage">
                                    <div class="alert alert-danger">
                                      <strong>Oops!</strong>Something wents wrong, Try One more time.
                                    </div>
                                </div>
                            </div>
                        </div>
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
