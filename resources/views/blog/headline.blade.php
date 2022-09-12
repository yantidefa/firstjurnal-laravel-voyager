@extends('blog.content')
@section('content')
    @foreach ($data as $article)
        <main class="main">
            <div class="page-header text-center"
                style="background-image: url('{{ asset('assets/images/page-header-bg.jpg') }}')">
                <!-- <div class="container">
                <h1 class="page-title">Default With Sidebar<span>Single Post</span></h1>
            </div> -->
            </div>
            <br>
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <article lass="entry single-entry">
                                <h3 class="">
                                    <b>{{ $article->title }}</b>
                                </h3><!-- End .entry-title -->
                                <br>
                                <figure class="entry-media">
                                    <img src="{{ asset('storage/' . $article->image) }}" alt="image desc">
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <p><i>{{ $article->caption_image }}</i></p>
                                    </div><!-- End .entry-meta -->
                                    <br>


                                    <div class="entry-cats">
                                        <p>{{ $article->created_at }} | <a href="#">{{ $article->category->name }}</a>
                                        </p>
                                    </div><!-- End .entry-cats -->

                                    <div class="entry-content">
                                        <p>{!! $article->body !!}</p>
                                    </div><!-- End .entry-content -->

                                    <div class="entry-footer row no-gutters flex-column flex-md-row">
                                        <div class="col-md">
                                            Author : <span>{{ $article->authorId['name'] }}<span>
                                                    <div class="entry-tags">
                                                        <span>Tags :</span> <a href="#">{{ $article->meta_keywords }}</a>
                                                    </div>
                                        </div>

                                        <div class="col-md-auto mt-2 mt-md-0">
                                            <div class="social-icons social-icons-color">
                                                <span class="social-label">Share this post:</span>
                                                <a href="#" class="social-icon social-facebook" title="Facebook"
                                                    target="_blank"><i class="icon-facebook-f"></i></a>
                                                <a href="#" class="social-icon social-twitter" title="Twitter"
                                                    target="_blank"><i class="icon-twitter"></i></a>
                                                <a href="#" class="social-icon social-pinterest" title="Pinterest"
                                                    target="_blank"><i class="icon-pinterest"></i></a>
                                                <a href="#" class="social-icon social-linkedin" title="Linkedin"
                                                    target="_blank"><i class="icon-linkedin"></i></a>
                                            </div><!-- End .soial-icons -->
                                        </div><!-- End .col-auto -->
                                    </div><!-- End .entry-footer row no-gutters -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .sidebar sidebar-shop -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
            </div><!-- End .page-content -->
            <div class="page-header text-center"
                style="background-image: url('{{ asset('assets/images/page-header-bg.jpg') }}')">
                <!-- <div class="container">
                <h1 class="page-title">Default With Sidebar<span>Single Post</span></h1>
            </div> -->
            </div>
        </main><!-- End .main -->
    @endforeach
@endsection
