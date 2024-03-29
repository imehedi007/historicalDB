@extends("frontend.layouts.app")
@section("content")

<section class="hero-carousel">
    <div class="container-xl">
        <div class="post-carousel-lg">
            <!-- post -->
            <div class="post featured-post-xl">
                <div class="details clearfix">
                    <a href="category.html" class="category-badge lg">Historical Place</a>
                    <h4 class="post-title"><a href="blog-single.html">9 Most Awesome Blue Lake With Snow Mountain</a></h4>
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"><a href="#">Database</a></li>
                        <li class="list-inline-item">29 March 2024</li>
                    </ul>
                </div>
                <a href="blog-single.html">
                    <div class="thumb rounded">
                        <div class="inner data-bg-image" data-bg-image="images/posts/featured-xl-1.jpg"></div>
                    </div>
                </a>
            </div>
            <!-- post -->
            <div class="post featured-post-xl">
                <div class="details clearfix">
                    <a href="category.html" class="category-badge lg">Culture</a>
                    <h4 class="post-title"><a href="blog-single.html">Important Thing You Need To Know About historical landmarks</a></h4>
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"><a href="#">Database</a></li>
                        <li class="list-inline-item">29 March 2024</li>
                    </ul>
                </div>
                <a href="blog-single.html">
                    <div class="thumb rounded">
                        <div class="inner data-bg-image" data-bg-image="images/posts/featured-xl-2.jpg"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- section main content -->
<section class="main-content">
    <div class="container-xl">

        <div class="row gy-4">

            <div class="col-lg-8">

                <!-- post -->
                <div class="post post-classic rounded bordered">
                    <div class="thumb top-rounded">
                        <a href="category.html" class="category-badge lg position-absolute">Historical place</a>
                        {{-- <span class="post-format">
                            <i class="icon-picture"></i>
                        </span> --}}
                        <a href="blog-single.html">
                            <div class="inner">
                                <img src="{{ asset('frontend/images/posts/His1.jpg') }}" alt="post-title" />
                            </div>
                        </a>
                    </div>
                    <div class="details">
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend/images/other/author-sm.png') }}" class="author" alt="author"/>Database</a></li>
                            <li class="list-inline-item">29 March 2024</li>
                            <li class="list-inline-item"><i class="icon-bubble"></i> (0)</li>
                        </ul>
                        <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quaerat.</a></h5>
                        <p class="excerpt mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="post-bottom clearfix d-flex align-items-center">
                        <div class="social-share me-auto">
                            <button class="toggle-button icon-share"></button>
                            <ul class="icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                            </ul>
                        </div>
                        <div class="float-end d-none d-md-block">
                            <a href="blog-single.html" class="more-link">Continue reading<i class="icon-arrow-right"></i></a>
                        </div>
                        <div class="more-button d-block d-md-none float-end">
                            <a href="blog-single.html"><span class="icon-options"></span></a>
                        </div>
                    </div>
                </div>

                <!-- post -->
                <div class="post post-classic rounded bordered">
                    <div class="thumb top-rounded">
                        <a href="category.html" class="category-badge lg position-absolute">Inspiration</a>
                        <a href="blog-single.html">
                            <div class="inner">
                                <img src="{{ asset('frontend/images/posts/His2.jpg') }}" alt="post-title" />
                            </div>
                        </a>
                    </div>
                    <div class="details">
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Database</a></li>
                            <li class="list-inline-item">29 March 2024</li>
                            <li class="list-inline-item"><i class="icon-bubble"></i> (0)</li>
                        </ul>
                        <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, consequuntur.</a></h5>
                        <p class="excerpt mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="post-bottom clearfix d-flex align-items-center">
                        <div class="social-share me-auto">
                            <button class="toggle-button icon-share"></button>
                            <ul class="icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                            </ul>
                        </div>
                        <div class="float-end d-none d-md-block">
                            <a href="blog-single.html" class="more-link">Continue reading<i class="icon-arrow-right"></i></a>
                        </div>
                        <div class="more-button d-block d-md-none float-end">
                            <a href="blog-single.html"><span class="icon-options"></span></a>
                        </div>
                    </div>
                </div>

                <!-- post -->
                <div class="post post-classic rounded bordered">
                    <div class="thumb top-rounded">
                        <a href="category.html" class="category-badge lg position-absolute">Culture</a>
                        <span class="post-format">
                            <i class="icon-camrecorder"></i>
                        </span>
                        <a href="blog-single.html">
                            <div class="inner">
                                <img src="{{ asset('frontend/images/posts/His3.jpg') }}" alt="post-title" />
                            </div>
                        </a>
                    </div>
                    <div class="details">
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Database</a></li>
                            <li class="list-inline-item">29 March 2024</li>
                            <li class="list-inline-item"><i class="icon-bubble"></i> (0)</li>
                        </ul>
                        <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Most Important Thing You Need To Know About historical place</a></h5>
                        <p class="excerpt mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="post-bottom clearfix d-flex align-items-center">
                        <div class="social-share me-auto">
                            <button class="toggle-button icon-share"></button>
                            <ul class="icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                            </ul>
                        </div>
                        <div class="float-end d-none d-md-block">
                            <a href="{{ route('blog.read') }}" class="more-link">Continue reading<i class="icon-arrow-right"></i></a>
                        </div>
                        <div class="more-button d-block d-md-none float-end">
                            <a href="blog-single.html"><span class="icon-options"></span></a>
                        </div>
                    </div>
                </div>

                <!-- post -->
                <div class="post post-classic rounded bordered">
                    <div class="thumb top-rounded">
                        <a href="category.html" class="category-badge lg position-absolute">Lifestyle</a>
                        <a href="blog-single.html">
                            <div class="inner">
                                <img src="{{ asset('frontend/images/posts/His4.jpg') }}" alt="post-title" />
                            </div>
                        </a>
                    </div>
                    <div class="details">
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Database</a></li>
                            <li class="list-inline-item">29 March 2024</li>
                            <li class="list-inline-item"><i class="icon-bubble"></i> (0)</li>
                        </ul>
                        <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, placeat.</a></h5>
                        <p class="excerpt mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="post-bottom clearfix d-flex align-items-center">
                        <div class="social-share me-auto">
                            <button class="toggle-button icon-share"></button>
                            <ul class="icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                            </ul>
                        </div>
                        <div class="float-end d-none d-md-block">
                            <a href="blog-single.html" class="more-link">Continue reading<i class="icon-arrow-right"></i></a>
                        </div>
                        <div class="more-button d-block d-md-none float-end">
                            <a href="blog-single.html"><span class="icon-options"></span></a>
                        </div>
                    </div>
                </div>

                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">1</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>

            </div>
            <div class="col-lg-4">

                <!-- sidebar -->
                <div class="sidebar">
                    <!-- widget about -->
                    <div class="widget rounded">
                        <div class="widget-about data-bg-image text-center" data-bg-image="images/map-bg.png">
                            <img src="images/logo.svg" alt="logo" class="mb-4" />
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rem.</p>
                            <ul class="social-icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item"><a href="#"><i class ="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>



                    <!-- widget categories -->
                    <div class="widget rounded">
                        <div class="widget-header text-center">
                            <h3 class="widget-title">Explore Topics</h3>
                            <img src="images/wave.svg" class="wave" alt="wave" />
                        </div>
                        <div class="widget-content">
                            <ul class="list">
                                <li><a href="#">Historical place</a><span>(5)</span></li>
                                <li><a href="#">Historical Country</a><span>(2)</span></li>
                                <li><a href="#">Historical City</a><span>(4)</span></li>
                                <li><a href="#">Historical State</a><span>(1)</span></li>
                                <li><a href="#">Trending</a><span>(7)</span></li>
                                <li><a href="#">Culture</a><span>(3)</span></li>
                            </ul>
                        </div>

                    </div>

                    <!-- widget newsletter -->
                    <div class="widget rounded">
                        <div class="widget-header text-center">
                            <h3 class="widget-title">Newsletter</h3>
                            <img src="images/wave.svg" class="wave" alt="wave" />
                        </div>
                        <div class="widget-content">
                            <span class="newsletter-headline text-center mb-3">Join 70,000 subscribers!</span>
                            <form>
                                <div class="mb-2">
                                    <input class="form-control w-100 text-center" placeholder="Email address…" type="email">
                                </div>
                                <button class="btn btn-default btn-full" type="submit">Sign Up</button>
                            </form>
                            <span class="newsletter-privacy text-center mt-3">By signing up, you agree to our <a href="#">Privacy Policy</a></span>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- instagram feed -->
{{-- <div class="instagram">
    <div class="container-xl">
        <!-- button -->
        <a href="#" class="btn btn-default btn-instagram">@Katen on Instagram</a>
        <!-- images -->
        <div class="instagram-feed d-flex flex-wrap">
            <div class="insta-item col-sm-2 col-6 col-md-2">
                <a href="#">
                    <img src="images/insta/insta-1.jpg" alt="insta-title" />
                </a>
            </div>
            <div class="insta-item col-sm-2 col-6 col-md-2">
                <a href="#">
                    <img src="images/insta/insta-2.jpg" alt="insta-title" />
                </a>
            </div>
            <div class="insta-item col-sm-2 col-6 col-md-2">
                <a href="#">
                    <img src="images/insta/insta-3.jpg" alt="insta-title" />
                </a>
            </div>
            <div class="insta-item col-sm-2 col-6 col-md-2">
                <a href="#">
                    <img src="images/insta/insta-4.jpg" alt="insta-title" />
                </a>
            </div>
            <div class="insta-item col-sm-2 col-6 col-md-2">
                <a href="#">
                    <img src="images/insta/insta-5.jpg" alt="insta-title" />
                </a>
            </div>
            <div class="insta-item col-sm-2 col-6 col-md-2">
                <a href="#">
                    <img src="images/insta/insta-6.jpg" alt="insta-title" />
                </a>
            </div>
        </div>
    </div>
</div> --}}
@endsection
