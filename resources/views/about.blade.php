<x-layouts>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                    <div class="overlap-grid overlap-grid-2">
                        <div class="item">
                            <figure class="rounded shadow"><img src="./assets/img/photos/about2.jpg" srcset="./assets/img/photos/about2@2x.jpg 2x" alt=""></figure>
                        </div>
                        <div class="item">
                            <figure class="rounded shadow"><img src="./assets/img/photos/about3.jpg" srcset="./assets/img/photos/about3@2x.jpg 2x" alt=""></figure>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <img src="./assets/img/icons/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                    <h2 class="display-4 mb-3">Who Are We?</h2>
                    <p class="lead fs-lg">We are a digital and branding company that believes in the power of creative strategy and along with great design.</p>
                    <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                    <div class="row gy-3 gx-xl-8">
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare curabitur blandit tempus.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare donec elit.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna mollis euismod.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa vivamus faucibus amet euismod.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
                    <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem;"></div>
                    <figure class="rounded"><img src="./assets/img/photos/about4.jpg" srcset="./assets/img/photos/about4@2x.jpg 2x" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <img src="./assets/img/icons/telemarketer.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                    <h2 class="display-4 mb-8">Convinced yet? Let's make something great together.</h2>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Address</h5>
                            <address>{{ $street }} <br class="d-none d-md-block" />{{ $city }}</address>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Phone</h5>
                            <p>{{ $phone }}</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">E-mail</h5>
                            <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">{{ $email }}</a></p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
</x-layouts>
