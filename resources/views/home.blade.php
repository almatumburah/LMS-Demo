@extends('layouts.main')

@section('content')
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>About</p>
                    <h2>Inspire Academy initiative</h2>
                </div>
            </div>
            

            <p>
                To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders. 
                Case study provided to the Information Systems Department of the University of Cape Town with the consent of the Executive 
                Chairman of the Inspire Foundation Group Africa, Unathi September.
                Inspire Foundation Group (IFG) Africa is a youth led, education focused, 
                non-profit organisation (NPO: 119-669 | PBO 930045542). The foundation aims to bridge the gap between the rural-township 
                youthand their private schooling counterparts through high impact education programmes. Inspire Academy, Inspire Personal 
                Development, Inspire School Support, and Inspire Career Awareness, have impacted over 23 000 learners in South Africa in 
                the last 7 years. This initiative has been the brain child of the executive chairperson, Unathi September, an Information 
                Systems Honours graduate of 2011. During his time as a student at UCT, Unathi was already passionate about finding a solution to the 
                low pass rates in gateway subjects such as Mathematics and Science in the Eastern Cape, and lack of information penetration about 
                education related development programmes. <br><br><br>
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <h2>Newest Courses</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($newestCourses as $course)
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <div class="special_cource_text">
                            <a href="#" class="btn_4 mr-1 mb-1">{{ $course->name }}</a>
                            <h4>{{ $course->getPrice() }}</h4>
                            <a href="#"><h3>{{ $course->name }}</h3></a>
                            <p>{{ Str::limit($course->description, 100) }}</p>
                            @if($course->institution)
                                <div class="author_info">
                                    <div class="author_img">
                                       
                                        <div class="author_info_text">
                                            <p>Institution</p>
                                            <h5><a href="#">{{ $course->institution->name }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="blog_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>Centers</p>
                    <h2>Random Centers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($randomInstitutions as $institution)
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-body">
                                <a href="#">
                                    <h5 class="card-title">{{ $institution->name }}</h5>
                                </a>
                                <p>{{ Str::limit($institution->description, 100) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection