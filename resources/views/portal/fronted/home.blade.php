@extends('portal.fronted.layouts.master')
@section('content')
    <div class="container pt-8 pt-md-14">
        <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
                <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>
                <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
                <figure class="rounded">
                    <img src="{{asset($headline->post_image)}}" srcset="{{asset($headline->post_image_retina)}} 2x" alt=""/>
                </figure>
            </div>
            <div class="col-lg-5 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
                <h1 class="display-1 mb-5">{{$headline->post_title}}</h1>
                <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0">{{strip_tags(Str::limit($headline->post_content, 500))}}</p>
                <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                    <span><a href="{{route('portal.post.read', $headline->post_id)}}" class="btn btn-lg btn-primary rounded-pill me-2">Selengkapnya</a></span>
                </div>
            </div>
        </div>
    {{--                    <div class="px-lg-5 mb-14 mb-md-17">--}}
    {{--                        <div class="row gx-0 gx-md-8 gx-xl-12 gy-8 align-items-center">--}}
    {{--                            <div class="col-4 col-md-2">--}}
    {{--                                <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="img/brands/c1.png" alt="" /></figure>--}}
    {{--                            </div>--}}
    {{--                            <!--/column -->--}}
    {{--                            <div class="col-4 col-md-2">--}}
    {{--                                <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="img/brands/c2.png" alt="" /></figure>--}}
    {{--                            </div>--}}
    {{--                            <!--/column -->--}}
    {{--                            <div class="col-4 col-md-2">--}}
    {{--                                <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="img/brands/c3.png" alt="" /></figure>--}}
    {{--                            </div>--}}
    {{--                            <!--/column -->--}}
    {{--                            <div class="col-4 col-md-2">--}}
    {{--                                <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="img/brands/c4.png" alt="" /></figure>--}}
    {{--                            </div>--}}
    {{--                            <!--/column -->--}}
    {{--                            <div class="col-4 col-md-2">--}}
    {{--                                <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="img/brands/c5.png" alt="" /></figure>--}}
    {{--                            </div>--}}
    {{--                            <!--/column -->--}}
    {{--                            <div class="col-4 col-md-2">--}}
    {{--                                <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="img/brands/c6.png" alt="" /></figure>--}}
    {{--                            </div>--}}
    {{--                            <!--/column -->--}}
    {{--                        </div>--}}
    {{--                        <!--/.row -->--}}
    {{--                    </div>--}}
    <!-- /div -->
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
                <h2 class="fs-15 text-uppercase text-muted mb-3">{{$section->value('home_section_1_title')}}</h2>
                <h3 class="display-4 mb-10">{{$section->value('home_section_1_subtitle')}}</h3>
            </div>
        </div>
        <div class="row gx-md-8 gy-8 text-center mb-14 mb-md-17">
            <div class="col-md-6 col-lg-3">
                <div class="icon btn btn-circle btn-lg btn-primary disabled mb-5"> <i class="{{$section->value('home_section_1_1_icon')}}"></i> </div>
                <h4>{{$section->value('home_section_1_1_title')}}</h4>
                <p class="mb-3">{{$section->value('home_section_1_1_content')}}</p>
                <a href="{{$section->value('home_section_1_1_link')}}" class="more hover">Selengkapnya</a>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon btn btn-circle btn-lg btn-primary disabled mb-5"> <i class="{{$section->value('home_section_1_2_icon')}}"></i> </div>
                <h4>{{$section->value('home_section_1_2_title')}}</h4>
                <p class="mb-3">{{$section->value('home_section_1_2_content')}}</p>
                <a href="{{$section->value('home_section_1_2_link')}}" class="more hover">Selengkapnya</a>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon btn btn-circle btn-lg btn-primary disabled mb-5"> <i class="{{$section->value('home_section_1_3_icon')}}"></i> </div>
                <h4>{{$section->value('home_section_1_3_title')}}</h4>
                <p class="mb-3">{{$section->value('home_section_1_3_content')}}</p>
                <a href="{{$section->value('home_section_1_3_link')}}" class="more hover">Selengkapnya</a>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon btn btn-circle btn-lg btn-primary disabled mb-5"> <i class="{{$section->value('home_section_1_4_icon')}}"></i> </div>
                <h4>{{$section->value('home_section_1_4_title')}}</h4>
                <p class="mb-3">{{$section->value('home_section_1_4_content')}}</p>
                <a href="{{$section->value('home_section_1_4_link')}}" class="more hover">Selengkapnya</a>
            </div>
        </div>
        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-17 mb-lg-19">
            <div class="col-md-8 col-lg-6 position-relative">
                <div class="shape bg-line red rounded-circle rellax w-18 h-18" data-rellax-speed="1" style="top: -2.2rem; left: -2.4rem;"></div>
                <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
                <figure class="rounded"><img src="{{asset($lastpost->post_image)}}" srcset="{{asset($lastpost->post_image_retina)}} 2x" alt="" /></figure>
            </div>
            <div class="col-lg-5 col-xl-4 offset-lg-1">
                <h2 class="display-4 mb-3">Artikel Terbaru</h2>
                <br/>
                @php($number = 1)
                @foreach($recentpost as $post)
                    <div class="d-flex flex-row mb-6">
                        <div>
                            <span class="icon btn btn-circle btn-primary disabled me-5"><span class="number fs-18">{{$number++}}</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">{{$post->post_title}}</h4>
                            <p class="mb-0">{{strip_tags(Str::limit($post->post_content, 200))}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                <h2 class="fs-15 text-uppercase text-muted mb-3">Galeri Kegiatan Terakhir</h2>
                <h3 class="display-4 mb-10">{{$lastgalery->galery_name}}</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid px-md-6">
        <div class="carousel owl-carousel blog grid-view mb-16 mb-md-19" data-margin="30" data-nav="true" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "1500":{"items": "3"}}'>
            @for($i=0;$i<count($lastgalery->images());$i++)
            <div class="item">
                <figure class="rounded">
                    <img src="{{asset($lastgalery->images()[$i])}}" alt="" />
                    <a class="item-link" href="{{route('portal.galery.read', $lastgalery->galery_id)}}"><i class="uil uil-link"></i></a>
                </figure>
            </div>
            @endfor
        </div>
    </div>
    <div class="container">
        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-17 mb-lg-19">
            <div class="col-md-8 col-lg-6 position-relative light-gallery-wrapper">
                <a href="{{$section->value('home_section_2_yotube')}}" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 lightbox position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;"><i class="icn-caret-right"></i></a>
                <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
                <figure class="rounded"><img src="{{asset($section->value('home_section_2_image'))}}" srcset="{{asset($section->value('home_section_2_image_retina'))}} 2x" alt=""></figure>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <h2 class="fs-15 text-uppercase text-muted mb-3">{{$section->value('home_section_2_title')}}</h2>
                <h3 class="display-4 mb-6">{{$section->value('home_section_2_subtitle')}}</h3>
                <p class="mb-6" style="text-align: justify">{{$section->value('home_section_2_content')}}</p>
            </div>
        </div>
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-16 mb-md-17 mb-xl-20 align-items-center">
            <div class="col-lg-4">
                <h2 class="fs-15 text-uppercase text-muted mb-3">{{$section->value('home_section_3_title')}}</h2>
                <h3 class="display-5 mb-5">{{$section->value('home_section_3_subtitle')}}</h3>
                <p>{{$section->value('home_section_3_content')}}</p>
                <a href="{{route('portal.management')}}" class="btn btn-primary rounded-pill mt-3">Lihat Semua</a>
            </div>
            <div class="col-lg-8">
                <div class="carousel owl-carousel text-center" data-margin="30" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                    @foreach($management as $manage)
                    <div class="item">
                        <img class="rounded-circle w-20 mx-auto mb-4" src="{{asset($manage->management_image)}}" srcset="{{asset($manage->management_image_retina)}} 2x" alt="" />
                        <h4 class="mb-1">{{$manage->management_name}}</h4>
                        <div class="meta mb-2">{{$manage->management_position}}</div>
                        <p class="mb-2">{{$manage->management_desc}}</p>
                        <nav class="nav social justify-content-center text-center mb-0">
                            <a href="#"><i class="uil uil-facebook"></i></a>
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                        </nav>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="card bg-soft-primary">
            <div class="card-body p-md-10 py-xxl-16 position-relative">
                <div class="position-absolute d-none d-lg-block" style="bottom:0; left:10%; width: 28%; z-index:2">
                    <figure><img src="{{asset($testimonial->testimonial_image)}}" srcset="{{asset($testimonial->testimonial_image)}} 2x" alt=""></figure>
                </div>
                <div class="row gx-md-0 gx-xl-12 text-center">
                    <div class="col-lg-7 offset-lg-5 col-xl-6">
                        <span class="ratings five mb-3"></span>
                        <blockquote class="border-0 fs-lg mb-0">
                            <p>“{{$testimonial->testimonial_content}}”</p>
                            <div class="blockquote-details justify-content-center text-center">
                                <div class="info p-0">
                                    <h5 class="mb-1">{{$testimonial->testimonial_name}}</h5>
                                    <div class="meta mb-0">{{$testimonial->testimonial_position}}</div>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
