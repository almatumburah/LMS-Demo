@extends('layouts.dashboard')

@section('content')
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>Enrollment</p>
                    <h2>Add New Course</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="/add-new-course">
                    @csrf

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="status" value="awaiting">
                    <input type="hidden" name="progress" value="not started">
                    <div class="section_tittle">
                        <p class="section_tittle">Pick a Course By clicking the small circle on the top left corner on each course for selection</p>
                        <h3>Based on Your Level</h3>
                    </div>
                    <div class="row">
                        @foreach($courses as $course)
                            <div class="col-sm-6 col-lg-4">
                                <input type="radio" name="course" id="course" value="{{ $course->name }}" required>
                                <div class="single_special_cource">
                                    <div class="special_cource_text">
                                        <a href="#" class="btn_4 mr-1 mb-1">{{ $course->name }}</a>
                                        <h4>{{ $course->getPrice() }}</h4>
                                        <a href="{{ route('courses.show', $course->id) }}"><h3>{{ $course->name }}</h3></a>
                                        <p>{{ Str::limit($course->description, 100) }}</p>
                                        @if($course->institution)
                                            <div class="author_info">
                                                <div class="author_img">
                                                    <div class="author_info_text">
                                                        <p>Center Offering Course</p>
                                                        <h5><a href="{{ route('courses.index') }}?institution={{ $course->institution->id }}">{{ $course->institution->name }}</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <br><br><br><br>
                    <div class="section_tittle">
                        <p class="section_tittle">Pick a Course By clicking the small circle on the top left corner on each course for selection</p>
                        <h3>Based on Your Level and Center</h3>
                    </div>
                    <div class="row">
                        @foreach($centers as $course)
                            <div class="col-sm-6 col-lg-4">
                                <input type="radio" name="course" id="course" value="{{ $course->name }}" required>
                                <div class="single_special_cource">
                                    <div class="special_cource_text">
                                        <a href="#" class="btn_4 mr-1 mb-1">{{ $course->name }}</a>
                                        <h4>{{ $course->getPrice() }}</h4>
                                        <a href="{{ route('courses.show', $course->id) }}"><h3>{{ $course->name }}</h3></a>
                                        <p>{{ Str::limit($course->description, 100) }}</p>
                                        @if($course->institution)
                                            <div class="author_info">
                                                <div class="author_img">
                                                    <div class="author_info_text">
                                                        <p>Center Offering Course</p>
                                                        <h5><a href="{{ route('courses.index') }}?institution={{ $course->institution->id }}">{{ $course->institution->name }}</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <br><br>
                    <div class="form-group row mb-0">
                        <div class="col">
                            <button type="submit" class="btn_4 mr-1 mb-1">
                                {{ __('Add Course') }}
                            </button>
                        </div>
                    </div>

                    <br><br><br>
                    
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
