<footer class="footer">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="widget widget-about">
                        <img src="{{ asset('storage/' . $site_logo->value) }}" class="footer-logo" alt="Footer Logo"
                            width="155" height="35">
                        <div class="social-icons">
                            <a href="#" class="social-icon" target="_blank" title="Facebook"><i
                                    class="icon-facebook-f"></i></a>
                            <a href="#" class="social-icon" target="_blank" title="Twitter"><i
                                    class="icon-twitter"></i></a>
                            <a href="#" class="social-icon" target="_blank" title="Instagram"><i
                                    class="icon-instagram"></i></a>
                            <a href="#" class="social-icon" target="_blank" title="Youtube"><i
                                    class="icon-youtube"></i></a>
                            <a href="#" class="social-icon" target="_blank" title="Pinterest"><i
                                    class="icon-pinterest"></i></a>
                        </div><!-- End .soial-icons -->
                    </div><!-- End .widget about-widget -->
                </div><!-- End .col-sm-6 col-lg-4 -->
                <div class="col-sm-6 col-lg-4">
                    <div class="widget">
                        <h4 class="widget-title"><a href="{{ route('about') }}">About</a></h4>
                        <h4 class="widget-title"><a href="{{ route('contact') }}">Contact</a></h4>
                        <h4 class="widget-title"><a href="{{ route('mediasiber') }}">Media Siber</a></h4>
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-4 -->
                <div class="col-sm-6 col-lg-4">
                    <div class="widget">
                        <h4 class="widget-title"><a href="{{ route('advertisement') }}">Advertisment</a></h4>
                        <h4 class="widget-title"><a href="{{ route('privacy') }}">Privacy</a></h4>
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .footer-middle -->

    <div class="footer-bottom">
        <div class="container">
            {{-- <p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p> --}}
        </div><!-- End .container -->
    </div><!-- End .footer-bottom -->
</footer><!-- End .footer -->
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                placeholder="Search in..." required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <nav class="mobile-nav">
            <ul class="mobile-menu">
                @foreach ($category_menu as $menu)
                    <li class="active">
                        <a href="{{ route('blog.category', $menu->slug) }}">{{ $menu->name }}</a>
                    </li>
                @endforeach
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<!-- Sign in / Register Modal -->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>
            </div><!-- End .modal-body -->
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div><!-- End .modal -->
