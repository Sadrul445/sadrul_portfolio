<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Sadrul's Portfolio</title>
    <link rel="icon" href="{{ asset('assets/imgs/sadrul_logo.svg') }}" type="image/x-icon">
    @includeIf('layouts.portfolio.partials.css')
    <!-- Bootstrap + Meyawo main styles -->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    @includeIf('layouts.portfolio.partials.navbar')
    <!-- page header -->
    <div id="home" class="ksl-bg">
        <div class="overlay"></div>
        <div class="container">
            <span>
                <p class="section-subtitle" style="position: relative;margin-top:2rem;text-align:center">What I Did ?</p>
            </span>
            <div class="text-center">
                <h3 id="grad1">Kabir Securities Website Backend</h3>
                <p id="grad1_p" class="p-3">The Kabir Securities website Backend API is a secure and
                    efficient system facilitating seamless communication between frontend and
                    server, handling user authentication, data retrieval, and form submissions.
                    Comprehensive documentation accompanies the API, detailing endpoints, methods,
                    and responses, ensuring smooth integration for developers and reliable user
                    experience.</p>
                <p class="rounded py-2 mx-auto"
                    style="font-weight:400;border-bottom:2px solid #695aa6 ; width:50%;color:#695aa6">
                    Technologies We Use: </p>
                <div class="icons-container rounded py-2 box-shadow" id="box-grad">
                    <img src="{{ asset('assets/icons/laravel.svg') }}" alt="Laravel Icon" class="icon" />
                    <img src="{{ asset('assets/icons/php.svg') }}" alt="PHP Icon" class="icon" />
                    <img src="{{ asset('assets/icons/sqlite.svg') }}" alt="sqlite Icon" class="icon" />
                    <img src="{{ asset('assets/icons/nextjs.svg') }}" alt="Next.js Icon" class="icon" />
                    <img src="{{ asset('assets/icons/github.svg') }}" alt="github Icon" class="icon" />
                    <img src="{{ asset('assets/icons/vs-code.svg') }}" alt="vs-code Icon" class="icon" />
                </div>
            </div>
            <div class="card my-2" style="background: none;border:none">
                <a href="https://www.kslbd.net/" class="btn btn-danger zoom box-shadow my-2 mx-auto">Live</a>
            </div>
            <!-- row -->
            <div class="row my-4">
                <div class="col-md-4 ">
                    <a href="#" class="portfolio-card box-shadow">
                        <img class="portfolio-card-img img-responsive rounded zoom image-modal-trigger "
                            src="assets/projects/ksl/ksl_landing_p1.png">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="portfolio-card box-shadow">
                        <img class="portfolio-card-img img-responsive rounded zoom image-modal-trigger"
                            src="assets/projects/ksl/ksl_landing_p2.png">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="portfolio-card box-shadow">
                        <img class="portfolio-card-img img-responsive rounded zoom image-modal-trigger"
                            src="assets/projects/ksl/single blog.png">
                    </a>
                    <a href="#" class="portfolio-card mt-4 box-shadow">
                        <img class="portfolio-card-img img-responsive rounded zoom image-modal-trigger"
                            src="assets/projects/ksl/digital booth.png">
                    </a>
                </div>
            </div><!-- end of row -->
            <div class="card bg-primary p-2">
                @includeIf('layouts.portfolio.partials.hireMe')
            </div>
        </div>
        <!-- The modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel">Kabir Securities Page</h5>
                        <button type="button" class="btn btn-outline-secondary btn-close rounded"
                            data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">
                        <!-- Add an empty image element to display the image later -->
                        <img class="rounded w-100" id="enlargedImg" src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of page header -->
        <!-- footer -->
        <div class="container">
            @includeIf('layouts.portfolio.partials.footer')
        </div> <!-- end of page footer -->

    @includeIf('layouts.portfolio.partials.js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const imageModalTriggers = document.querySelectorAll(".image-modal-trigger");
            const enlargedImg = document.getElementById("enlargedImg");
            imageModalTriggers.forEach((trigger) => {
                trigger.addEventListener("click", function() {
                    // Get the image source of the clicked image
                    const imageSource = this.getAttribute("src");
                    // Set the source of the enlarged image in the modal
                    enlargedImg.setAttribute("src", imageSource);
                    // Show the modal
                    const modal = new bootstrap.Modal(document.getElementById("imageModal"));
                    modal.show();
                });
            });
        });
    </script>
</body>

</html>
