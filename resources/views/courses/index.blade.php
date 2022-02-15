@extends('layouts.dashboard')

@section('content')
    @if (isset(Auth::user()->learners))
        <section class="special_cource padding_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="section_tittle text-center">
                            <h2>Hallo</h2>
                            <br><br>
                            <h3>{{ Auth::user()->learners->first_name }} {{ Auth::user()->learners->last_name }}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    @if (isset(Auth::user()->enrollments))
                        <div class="row">
                            @foreach ($enrollments as $course)
                                <div class="col-sm-6 col-lg-4">
                                    <div class="single_special_cource">
                                        <div class="special_cource_text">
                                            <p>Course Name:</p>
                                            <a href="/my-course/{{ $course->id }}" class="btn_4 mr-1 mb-1">{{ $course->course }}</a>
                                            <div class="author_info">
                                                <div class="author_img">
                                                    <div class="author_info_text">
                                                        <p>Course Date:</p>
                                                        <p>{{date('d M Y, h:i a',strtotime( $course->created_at))}}</p>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        @else
                        <div class="col-12">
                            <div class="section_tittle text-center">
                                @if (Auth::user()->learners->status == 'awaiting')
                                    <h4>Your Application has not yet been accepted!</h4>
                                    @elseif (Auth::user()->learners->status == 'rejected')
                                    <h4>Your Application has been rejected!</h4>
                                    @else
                                    <a class="btn_4 mr-1 mb-1" href="/register-for-this-course">Add New Course</a>

                                    <div class="row">
                                        @foreach ($enrollments as $course)
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="single_special_cource">
                                                <div class="special_cource_text">
                                                    <p>Course Name:</p>
                                                    <a href="/my-course/{{ $course->id }}" class="btn_4 mr-1 mb-1">{{ $course->course }}</a>
                                                    <div class="author_info">
                                                        <div class="author_img">
                                                            <div class="author_info_text">
                                                                <p>Course Date: </p>
                                                                <p>{{date('d M Y, h:i a',strtotime( $course->created_at))}}</p>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>

                                @endif
                            </div>
                        </div>

                    @endif
                    </div>
                </div>
            </div>
        </section>
        @else
        <section class="special_cource padding_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section_tittle text-center">
                            <h2>Hallo</h2>
                            <br><br>
                            <h3>{{ Auth::user()->learners->first_name }} {{ Auth::user()->learners->last_name }}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-12">
                            <div class="section_tittle text-center">
                                @if (Auth::user()->learners->status == 'awaiting')
                                    <h4>Your Application has not yet been accepted!</h4>
                                    @elseif (Auth::user()->learners->status == 'rejected')
                                    <h4>Your Application has been rejected!</h4>
                                    @else
                                    <a class="btn_4 mr-1 mb-1" href="/register-for-this-course">Add New Course</a>

                                    <div class="row">
                                        @foreach ($enrollments as $course)
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="single_special_cource">
                                                <div class="special_cource_text">
                                                    <p>Course Name:</p>
                                                    <a href="/my-course/{{ $course->id }}" class="btn_4 mr-1 mb-1">{{ $course->course }}</a>
                                                    <div class="author_info">
                                                        <div class="author_img">
                                                            <div class="author_info_text">
                                                                <p>Course Date:</p>
                                                                <p>{{date('d M Y, h:i a',strtotime( $course->created_at))}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
