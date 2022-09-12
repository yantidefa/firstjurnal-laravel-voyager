@extends('blog.content')
@section('content')
<main class="main">
    <div class="page-header text-center" style="background-image: url('{{ asset('assets/images/page-header-bg.jpg')}}')">
        <!-- <div class="container">
            <h1 class="page-title">Default With Sidebar<span>Single Post</span></h1>
        </div> -->
    </div>
    <br>
    <div class="page-content">
        <div class="blog-posts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <br>
                        <!-- <h2 class="title text-left mb-2">Latest Post</h2> -->
                        <!-- <hr> -->
                        <article class="entry entry-list">
                            <div class="row align-items-center">
                                @foreach($data as $new_post)
                                <div class="col-md-4">
                                    <figure class="entry-media">
                                        <a href="single.html">
                                            <img src="{{asset('storage/'.$new_post->image)}}" alt="image desc">
                                        </a>
                                    </figure><!-- End .entry-media -->
                                </div><!-- End .col-md-4 -->
                                <div class="col-md-8">
                                    <div class="entry-body">
                                        <div class="entry-meta">
                                            <span class="entry-author">
                                                by <a href="#">{{$new_post->authorId['name']}}</a>
                                            </span>
                                            <span class="meta-separator">|</span>
                                            <a href="#">{{$new_post->created_at}}</a>
                                        </div><!-- End .entry-meta -->

                                        <h2 class="entry-title">
                                            <a href="{{ route('blog.content', $new_post->slug) }}">{{$new_post->title}}</a>
                                        </h2><!-- End .entry-title -->

                                        <div class="entry-cats">
                                            in <a href="#">{{$new_post->category['name']}}</a>
                                        </div><!-- End .entry-cats -->

                                        <div class="entry-content">
                                            <p>{{$new_post->excerpt}} </p>
                                        </div><!-- End .entry-content -->
                                    </div><!-- End .entry-body -->
                                </div><!-- End .col-md-8 -->
                                @endforeach
                            </div>
                            <hr>
                        </article>
                    </div><!-- End .col-lg-9 -->

                    <aside class="col-lg-3">
                        <div class="sidebar">
                            <div class="widget">
                                <div class="widget widget-banner-sidebar">
                                    <div class="banner-sidebar-title">ad box 280 x 280</div><!-- End .ad-title -->

                                    <div class="banner-sidebar banner-overlay">
                                        <a href="#">
                                            <img src="assets/images/blog/sidebar/banner.jpg" alt="banner">
                                        </a>
                                    </div><!-- End .banner-ad -->
                                </div><!-- End .widget -->

                            </div><!-- End .sidebar -->
                    </aside> <!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div>
    </div>
    <div class="page-header text-center" style="background-image: url('{{ asset('assets/images/page-header-bg.jpg')}}')">

    </div>
</main>
@endsection