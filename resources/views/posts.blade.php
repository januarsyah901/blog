<x-layouts>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-10">
            <h2 class="display-4 mb-3 text-center">Artikel</h2>
            <p class="lead fs-lg mb-10 text-center px-md-16 px-lg-21 px-xl-0">Here are the latest company news from our blog that got the most attention.</p>
            <div class="carousel owl-carousel blog grid-view" data-margin="30" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                <div class="item">
                    <article>
                        <figure class="overlay overlay1 hover-scale rounded mb-5"><a href="#"> <img src="./assets/img/photos/b4.jpg" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                             </figcaption>
                        </figure>
                        <div class="post-header">
                            <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">Coding</a>
                            </div>
                            <!-- /.post-category -->
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ligula tristique quis risus</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></li>
                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                    </article>
                    <!-- /article -->
                </div>
                <!-- /.item -->
                <div class="item">
                    <article>
                        <figure class="overlay overlay1 hover-scale rounded mb-5"><a href="#"> <img src="./assets/img/photos/b5.jpg" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">
                            <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">Workspace</a>
                            </div>
                            <!-- /.post-category -->
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Nullam id dolor elit id nibh</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2021</span></li>
                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                    </article>
                    <!-- /article -->
                </div>
                <!-- /.item -->
                <div class="item">
                    <article>
                        <figure class="overlay overlay1 hover-scale rounded mb-5"><a href="#"> <img src="./assets/img/photos/b6.jpg" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">
                            <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">Meeting</a>
                            </div>
                            <!-- /.post-category -->
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ultricies fusce porta elit</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2021</span></li>
                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                    </article>
                    <!-- /article -->
                </div>
                <!-- /.item -->
                <div class="item">
                    <article>
                        <figure class="overlay overlay1 hover-scale rounded mb-5"><a href="#"> <img src="./assets/img/photos/b7.jpg" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">
                            <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">Business Tips</a>
                            </div>
                            <!-- /.post-category -->
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Morbi leo risus porta eget</a></h2>
                        </div>
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2021</span></li>
                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                    </article>
                    <!-- /article -->
                </div>
                <!-- /.item -->
            </div>
            <!-- /.owl-carousel -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
</x-layouts>
