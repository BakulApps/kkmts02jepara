@extends('portal.fronted.layouts.master', ['title' => 'Artikel'])
@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                    <h1 class="display-1 mb-3">ARTIKEL & BERITA</h1>
                    <p class="lead px-lg-5 px-xxl-8">Artikel & Berita terkini seputar KKMTs.02 Jepara dan Dunia Pendidikan.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper bg-light wrapper-border">
        <div class="container inner py-8">
            <div class="row gx-lg-8 gx-xl-12 gy-4 gy-lg-0">
                <div class="col-lg-8 align-self-center">
                    <div class="blog-filter filter">
                        <p>Kategori:</p>
                        <ul>
                            @foreach($lastcat as $cat)
                            <li><a href="{{route('portal.post.category', $cat->category_id)}}">{{$cat->category_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <aside class="col-lg-4 sidebar">
                    <form class="search-form">
                        <div class="form-label-group mb-0">
                            <input id="search-form" type="text" class="form-control" placeholder="Pencarian">
                            <label for="search-form">Pencarian</label>
                        </div>
                    </form>
                </aside>
            </div>
        </div>
    </section>
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12">
                <div class="col-lg-8">
                    <div class="blog grid grid-view">
                        <div class="row isotope gx-md-8 gy-8 mb-8">
                            @foreach($posts as $post)
                            <article class="item post col-md-6">
                                <div class="card">
                                    <figure class="card-img-top overlay overlay1 hover-scale"><a href="{{route('portal.post.read', $post->post_id)}}"> <img src="{{asset($post->post_image)}}" alt="" /></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Selengkapnya</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="{{route('portal.post.category', $post->category->category_id)}}" class="hover" rel="category">{{$post->category->category_name}}</a>
                                            </div>
                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{route('portal.post.read', $post->post_id)}}">{{$post->post_title}}</a></h2>
                                        </div>
                                        <div class="post-content">
                                            <p style="text-align: justify">{{strip_tags(Str::limit($post->post_content, 400))}}</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <ul class="post-meta d-flex mb-0">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{$post->created_at()}}</span></li>
                                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>{{$post->comment->count()}}</a></li>
                                            <li class="post-author ms-auto"><a href="#"><i class="uil uil-user"></i>{{$post->user->user_name}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>
                    @if($posts->lastPage() > 1)
                    <nav class="d-flex" aria-label="pagination">
                        <ul class="pagination">
                            <li class="page-item {{$posts->currentPage() == 1 ? 'disabled' : ''}}">
                                <a class="page-link" href="{{$posts->previousPageUrl()}}}}" aria-label="Previous">
                                    <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                                </a>
                            </li>
                            @for($i=1;$i <= $posts->lastPage(); $i++)
                                <li class="page-item {{$posts->currentPage() == $i ? 'active' : null}}"><a class="page-link" href="{{$posts->url($i)}}">{{$i}}</a></li>
                            @endfor
                            <li class="page-item {{$posts->currentPage() == $posts->lastPage() ? 'disabled' : ''}}">
                                <a class="page-link" href="{{$posts->nextPageUrl()}}" aria-label="Next">
                                    <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    @endif
                    <!-- /nav -->
                </div>
                <!-- /column -->
                <aside class="col-lg-4 sidebar mt-8 mt-lg-6">
                    <div class="widget">
                        <h4 class="widget-title mb-3">Artikel Terpopuler</h4>
                        <ul class="image-list">
                            @foreach($popularpost as $post)
                            <li>
                                <figure class="rounded"><a href="{{route('portal.post.read', $post->post_id)}}"><img src="{{asset($post->post_image)}}" alt="" /></a></figure>
                                <div class="post-content">
                                    <h6 class="mb-2"> <a class="link-dark" href="{{route('portal.post.read', $post->post_id)}}">{{$post->post_title}}</a> </h6>
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{$post->created_at()}}</span></li>
                                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>{{$post->comment->count()}}</a></li>
                                    </ul>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title mb-3">Kategori</h4>
                        <ul class="unordered-list bullet-primary text-reset">
                            @foreach($category as $cat)
                            <li><a href="{{route('portal.post.category', $cat->category_id)}}">{{$cat->category_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title mb-3">Tagar</h4>
                        <ul class="list-unstyled tag-list">
                            @foreach($tag as $taggar)
                            <li><a href="{{route('portal.post.tag', $taggar->tag_id)}}" class="btn btn-soft-ash btn-sm rounded-pill">{{$taggar->tag_name}}e</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title mb-3">Arsip Artikel</h4>
                        <ul class="unordered-list bullet-primary text-reset">
                            <li><a href="#">September 2021</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
