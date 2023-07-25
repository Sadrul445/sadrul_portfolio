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

    <!-- Page Navbar -->
    @includeIf('layouts.portfolio.partials.navbar')
    <!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <!-- project section -->
            <section class="section" id="projects">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <img class="zoom rounded"
                                        src="{{ asset('assets/projects/ksl/ksl_landing_p1.png') }}" alt=""
                                        srcset="" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- end of projects section -->
        </div>
    </header>
    <!-- end of page header -->



    <!-- footer -->
    <div class="container">
        @includeIf('layouts.portfolio.partials.footer')
    </div> <!-- end of page footer -->

    @includeIf('layouts.portfolio.partials.js')
</body>

</html>
