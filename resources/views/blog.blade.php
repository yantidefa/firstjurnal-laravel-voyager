@extends('blog.content')
@section('content')
    <main class="main">
        <div class="page-header text-center"
            style="background-image: url('{{ asset('assets/images/page-header-bg.jpg') }}')">
        </div>
        <br>
        <div class="page-content">
            <div class="blog-posts">
                <div class="container">
                    <div class="owl-carousel owl-simple mb-4" data-toggle="owl" data-owl-options='{
                                                                                                                    "nav": false,
                                                                                                                    "dots": true,
                                                                                                                    "items": 3,
                                                                                                                    "margin": 20,
                                                                                                                    "loop": false,
                                                                                                                    "responsive": {
                                                                                                                        "0": {
                                                                                                                            "items":1
                                                                                                                        },
                                                                                                                        "600": {
                                                                                                                            "items":2
                                                                                                                        },
                                                                                                                        "992": {
                                                                                                                            "items":3
                                                                                                                        },
                                                                                                                        "1200": {
                                                                                                                            "items":3,
                                                                                                                            "nav": true,
                                                                                                                            "dots": false
                                                                                                                        }
                                                                                                                    }
                                                                                                                }'>
                        @foreach ($head as $head_post)
                            <article class="entry">
                                <figure class="entry-media">
                                    <a href="{{ route('blog.headline', $head_post->posts->slug) }}">
                                        <img src="{{ asset('storage/' . $head_post->posts->image) }}" alt="image desc"
                                            style="height: 220px;">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <a href="#">{{ $head_post->posts->category['name'] }}</a>
                                    </div><!-- End .entry-meta -->

                                    <h3 class="entry-title">
                                        <a
                                            href="{{ route('blog.headline', $head_post->posts->slug) }}">{{ $head_post->posts->title }}</a>
                                    </h3><!-- End .entry-title -->


                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                        @endforeach
                    </div><!-- End .owl-carousel -->
                    <div class="row">
                        <div class="col-lg-12">
                            <br>
                            <h2 class="title text-left mb-2">Latest Post</h2>
                            <hr>
                            <article class="entry entry-list">
                                <div class="row align-items-center">
                                    @foreach ($data as $new_post)
                                        <div class="col-md-4">
                                            <figure class="entry-media">
                                                <a href="{{ route('blog.content', $new_post->slug) }}">
                                                    <img src="{{ Voyager::image($new_post->image) }}" alt="firstjurnal"
                                                        style="height: 220px;">
                                                </a>
                                            </figure><!-- End .entry-media -->
                                        </div><!-- End .col-md-4 -->
                                        <div class="col-md-8">
                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <span class="entry-author">
                                                        by {{ $new_post->authorId['name'] }}
                                                    </span>
                                                    <span class="meta-separator">|</span>{{ $new_post->created_at }}
                                                </div><!-- End .entry-meta -->

                                                <h2 class="entry-title">
                                                    <a
                                                        href="{{ route('blog.content', $new_post->slug) }}">{{ $new_post->title }}</a>
                                                </h2><!-- End .entry-title -->

                                                <div class="entry-cats">
                                                    in {{ $new_post->category['name'] }}
                                                </div><!-- End .entry-cats -->

                                                <div class="entry-content">
                                                    <p>{{ $new_post->excerpt }} </p>
                                                </div><!-- End .entry-content -->
                                            </div><!-- End .entry-body -->
                                        </div><!-- End .col-md-8 -->
                                    @endforeach
                                </div><!-- End .row -->
                                {{ $data->links() }}
                                <hr>
                            </article>
                        </div><!-- End .col-lg-9 -->
                        {{-- iklan --}}
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </div>
        <div class="page-header text-center"
            style="background-image: url('{{ asset('assets/images/page-header-bg.jpg') }}')">
            <!-- <div class="container">
                                                                                                    <h1 class="page-title">Default With Sidebar<span>Single Post</span></h1>
                                                                                                </div> -->
        </div>
    </main>
@endsection
