<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Sadrul's Portfolio</title>
    <link rel="icon" href="{{ asset('assets/icons/sadrul-logo.ico') }}" type="image/x-icon">
    @includeIf('layouts.portfolio.partials.css')
    <!-- Bootstrap + Meyawo main styles -->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- Page Navbar -->
    @includeIf('layouts.portfolio.partials.navbar')
    <!-- End of Page Navbar -->

    <!-- page header -->
    @includeIf('layouts.portfolio.partials.header')
    <!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="about">
        <!-- container -->
        @includeIf('layouts.portfolio.partials.about')
        <!-- end of container -->
    </section> <!-- end of about section -->
    <button id="scrollUpButton" class="zoom box-shadow scroll-up-btn" title="Scroll to top">
        <i class="fas fa-chevron-up fa-bounce fa-lg"></i>
      </button>
    {{-- skill section --}}
    <section class="section pt-0" id="skill">
        @includeIf('layouts.portfolio.skills')
    </section>
    {{-- end of skill section --}}
    {{-- resume/career section --}}
    <section class="section pt-0" id="career">
        @includeIf('layouts.portfolio.resume')
    </section>
    {{-- end of resume/career section --}}
    {{-- achievement section --}}
    <section class="section pt-0" id="achievement">
        @includeIf('layouts.portfolio.achievement')
    </section>
    {{-- end of achievement section --}}
    <!-- service section -->
    <section class="section" id="service">
        @includeIf('layouts.portfolio.partials.service')
    </section><!-- end of service section -->

    <!-- project section -->
    <section class="section" id="project">
        @includeIf('layouts.portfolio.partials.project')
        <!-- end of container -->
    </section> <!-- end of projects section -->

    <!-- pricing section -->
    {{-- <section class="section" id="pricing">
        <div class="container text-center">
            <p class="section-subtitle">How Much I Charge ?</p>
            <h6 class="section-title mb-6">My Pricing</h6>
            <!-- row -->
            <div class="pricing-wrapper">
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <img class="pricing-card-icon" src="assets/imgs/scooter.svg"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="pricing-card-body">
                        <h6 class="pricing-card-title">Free</h6>
                        <div class="pricing-card-list">
                            <p>accusamus reprehenderit</p>
                            <p>provident dolorem </p>
                            <p>quos neque</p>
                            <p>fugiat quibusdam</p>
                            <p><i class="ti-close"></i></p>
                            <p><i class="ti-close"></i></p>
                        </div>
                    </div>
                    <div class="pricing-card-footer">
                        <span>$</span>
                        <span>0.00/Month</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-3 pricing-card-btn">Subscribe</a>
                </div>
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <img class="pricing-card-icon" src="assets/imgs/shipped.svg"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="pricing-card-body">
                        <h6 class="pricing-card-title">Basic</h6>
                        <div class="pricing-card-list">
                            <p>accusamus reprehenderit</p>
                            <p>provident dolorem </p>
                            <p>quos neque</p>
                            <p>fugiat quibusdam</p>
                            <p>accusamus laboriosam</p>
                            <p><i class="ti-close"></i></p>
                        </div>
                    </div>
                    <div class="pricing-card-footer">
                        <span>$</span>
                        <span>9.99/Month</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-3 pricing-card-btn">Subscribe</a>
                </div>
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <img class="pricing-card-icon" src="assets/imgs/startup.svg"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="pricing-card-body">
                        <h6 class="pricing-card-title">Premium</h6>
                        <div class="pricing-card-list">
                            <p>accusamus reprehenderit</p>
                            <p>provident dolorem </p>
                            <p>quos neque</p>
                            <p>fugiat quibusdam</p>
                            <p>accusamus laboriosam</p>
                            <p>inventore omnis</p>
                        </div>
                    </div>
                    <div class="pricing-card-footer">
                        <span>$</span>
                        <span>99.9/Month</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-3 pricing-card-btn">Subscribe</a>
                </div>

            </div><!-- end of pricing wrapper -->
        </div> <!-- end of container -->
    </section><!-- end of pricing section --> --}}

    <!-- section -->
    <section class="section-sm bg-primary">
        <!-- container -->
        @includeIf('layouts.portfolio.partials.hireMe') <!-- end of container -->
    </section> <!-- end of section -->

    <!-- testimonial section -->
    <section class="section" id="testmonial">
        <div class="container text-center">
            <p class="section-subtitle">What Think Client About Me ?</p>
            <h6 class="section-title mb-6">Testmonial</h6>

            <!-- row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="assets/imgs/avatar2.jpg" class="testimonial-card-img"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Eaque doloribus autem aperiam earum nostrum omnis blanditiis corporis perspiciatis
                                adipisci nihil.</p>
                            <h6 class="testimonial-card-title">Emily Reb</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="assets/imgs/avatar3.jpg" class="testimonial-card-img"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Eaque doloribus autem aperiam earum nostrum omnis blanditiis corporis perspiciatis
                                adipisci nihil.</p>
                            <h6 class="testimonial-card-title">Emily Reb</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of testimonial section -->

    <!-- blog section -->
    {{-- <section class="section" id="blog">
        <!-- container -->
        <div class="container text-center">
            <p class="section-subtitle">Recent Posts?</p>
            <h6 class="section-title mb-6">Blog</h6>
            <!-- blog-wrapper -->
            <div class="blog-card">
                <div class="blog-card-header">
                    <img src="assets/imgs/img-1.jpg" class="blog-card-img"
                        alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div>
                <div class="blog-card-body">
                    <h5 class="blog-card-title">Consectetur adipisicing elit</h6>

                        <p class="blog-card-caption">
                            <a href="#">By: Admin</a>
                            <a href="#"><i class="ti-heart text-danger"></i> 234</a>
                            <a href="#"><i class="ti-comment"></i> 123</a>
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nesciunt qui sit velit
                            delectus voluptates, repellat ipsum culpa id deleniti. Rerum debitis facilis accusantium
                            neque numquam mollitia modi quasi distinctio.</p>

                        <p><b>Necessitatibus nihil impedit! Ex nisi eveniet, dolor aliquid consequuntur repudiandae.</b>
                        </p>
                        <p>Magnam in repellat enim harum omnis aperiam! Explicabo illo, commodi, dolor blanditiis
                            cupiditate harum nisi vero accusamus laudantium voluptatibus dolores quae obcaecati.</p>

                        <a href="#" class="blog-card-link">Read more <i class="ti-angle-double-right"></i></a>
                </div>
            </div><!-- end of blog wrapper -->

            <!-- blog-wrapper -->
            <div class="blog-card">
                <div class="blog-card-header">
                    <img src="assets/imgs/img-2.jpg" class="blog-card-img"
                        alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div>
                <div class="blog-card-body">
                    <h5 class="blog-card-title">Explicabo illo</h6>

                        <p class="blog-card-caption">
                            <a href="#">By: Admin</a>
                            <a href="#"><i class="ti-heart text-danger"></i> 456</a>
                            <a href="#"><i class="ti-comment"></i> 264</a>
                        </p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit excepturi laborum enim,
                            vitae ipsam atque eum, ad iusto consequuntur voluptas, esse doloribus. Perferendis porro
                            quisquam vitae exercitationem aliquid, minus eos laborum repudiandae, cumque debitis iusto
                            omnis praesentium? Laborum placeat sit adipisci illum tempore maxime, esse qui quae?
                            Molestias excepturi corporis similique doloribus. Esse vitae earum architecto nulla non
                            dolores illum at perspiciatis quod, et deleniti cupiditate reiciendis harum facere, delectus
                            eum commodi soluta distinctio sit repudiandae possimus sunt. Ipsum, rem.</p>

                        <a href="#" class="blog-card-link">Read more <i class="ti-angle-double-right"></i></a>
                </div>
            </div><!-- end of blog wrapper -->

        </div><!-- end of container -->
    </section><!-- end of blog section --> --}}

    <!-- contact section -->
    <section class="section" id="contact">
        @includeIf('layouts.portfolio.contact.create')
    </section><!-- end of contact section -->

    <!-- footer -->
    <div class="container">
        @includeIf('layouts.portfolio.partials.footer')
    </div> <!-- end of page footer -->

    <!-- core  -->

    <script>
        document.getElementById('downloadButton').addEventListener('click', function() {
            const cvFilePath = 'assets/cv/M.S.Sadrul_Pasha_Chowdhury_CV_23_07_23.pdf'; // 
            const anchor = document.createElement('a');
            anchor.href = cvFilePath;
            anchor.setAttribute('download', 'M.S.Sadrul_Pasha_Chowdhury_CV_23_07_23.pdf');
            anchor.click();
        });
    </script>
    <script>
        // JavaScript code to show/hide scroll-up button
        const scrollUpButton = document.getElementById("scrollUpButton");

        window.addEventListener("scroll", function() {
            if (window.pageYOffset > 300) {
                scrollUpButton.classList.add("show");
            } else {
                scrollUpButton.classList.remove("show");
            }
        });

        scrollUpButton.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
    @includeIf('layouts.portfolio.partials.js')
</body>

</html>
