@extends('blog.content')
@section('content')
    <main class="main">
        <div class="container py-5">
            <div class="page-header page-header-big text-center" style="background-image: url('')">
                <h1 class="page-title text-white">{{ $company_name->value }}</h1>
            </div><!-- End .page-header -->
        </div><!-- End .container -->
        <br>
        <div class="page-content pb-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p>{!! $company_privacy->value !!}</p>
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->
                <div class="mb-5"></div><!-- End .mb-4 -->
            </div>
            <div class="mb-2"></div><!-- End .mb-2 -->
        </div>
        <br><br>
    </main>
@endsection
