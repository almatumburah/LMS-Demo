@extends('layouts.dashboard')

@section('styles')
    
@endsection

@section('content')
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>My Courses</p>
                        <h2>{{ $enrollment->course }}</h2>
                    </div>
                </div>
            </div>

            @if ( $enrollment->status != 'accepted')
                <div class="row">
                    <h6>This course has not been approved, wait for approval so you can get progress and marks details!</h6>
                </div>
            @endif

            <br><br>
            <div class="row">
                <div class="col-md-12">
                <div class="row">
                    <div class="col">
                        <h5>Course Name</h5>
                    </div>

                    <div class="col">
                        <h6>{{ $enrollment->course }}</h6>
                    </div>
                </div>

                <br>
                <div class="row">
                        <div class="col">
                            <h5>Course Status</h5>
                        </div>

                        <div class="col">
                            <h6>{{ $enrollment->status }}</h6>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h5>Course Date</h5>
                        </div>

                        <div class="col">
                            <h6>{{date('d M Y, h:i a',strtotime($enrollment->created_at))}}</h6>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h5>Course Marks</h5>
                        </div>

                        <div class="col">
                            @if (isset($enrollment->marks))
                                <h6>{{ $enrollment->marks }}</h6>
                                @else
                                <h6>-----</h6>
                            @endif
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h5>Course Progress</h5>
                        </div>

                        <div class="col">
                            <h6>{{ $enrollment->progress }}</h6>
                        </div>
                    </div>
                    
                    <br>
                    <div class="row">
                        <div class="col">
                            <h5>Course Comment</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            @if (isset($enrollment->comment))
                                <p><b>{{ $enrollment->comment }}</b></p>
                                @else
                                <p><b>No Comment yet.</b></p>
                            @endif
                        </div>
                    </div>

                    <br><br><br>
                    <div class="row">
                        <button type="submit" class="btn btn-xs btn-danger" onclick="myBtnFunction()">
                            {{ __('Deregister Course') }}
                        </button>
                    </div>

                    <br><br>
                    <div id="myBtn" style="display: none">
                        <div class="row">
                            <form method="POST" action="/deregister">
                                @csrf
                                <p>
                                    Hie <b>{{ Auth::user()->learners->first_name }} {{ Auth::user()->learners->last_name }} </b> if you want to deregister 
                                    this course, we would like to know why. You can use the field below, so we can improve our service in the future.
                                    <br> Note, your course is deleted there is no rolling back.
                                </p>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="course" value="{{ $enrollment->course }}">
                                        <input type="hidden" name="enrollment_id" value="{{ $enrollment->id }}">
                                    <textarea name="reason" id="reason" cols="80" rows="10" required></textarea>
            
                                        @error('reason')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
            
                                <br><br>
                                <div class="form-group row mb-0">
                                    <div class="col">
                                        <button type="submit" class="btn_4 mr-1 mb-1" onclick="myFunction()">
                                            {{ __('Submit') }}
                                        </button>
                                    </div>
                                </div>
            
                                <br>
                                
                            </form>
                        </div>
    
                        <div class="row"  id="myDIV" style="display: none">
                            <form action="/enrollments/{{ $enrollment->id }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-xs btn-danger" value="Click here to Delete this Course">
                            </form>
                        </div>
                    </div>

                    <br><br>


                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
      function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
        }
    </script>

<script>
    function myBtnFunction() {
      var x = document.getElementById("myBtn");
      if (x.style.display === "none") {
          x.style.display = "block";
      } else {
          x.style.display = "none";
      }
      }
  </script>
@endsection
