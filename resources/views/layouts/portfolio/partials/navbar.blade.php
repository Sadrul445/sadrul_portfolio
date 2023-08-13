<nav class="custom-navbar" data-spy="affix" data-offset-top="20">
    <div class="container">
        <a class="logo" href="/">
            <img src="assets/icons/favicon-32x32.png" class="rounded box-shadow mb-1">
            Sadrul's Portfolio</a>
        <ul class="nav">
            <li class="item">
                <a class="link" href="#about">About</a>
            </li>
            <li class="item">
                <a class="link" href="#resume">Career</a>
            </li>
            <li class="item">
                <a class="link" href="#project">Portfolio</a>
            </li>
            <li class="item">
                <a class="link" href="#testmonial">Testmonial</a>
            </li>
            {{-- <li class="item">
                <a class="link" href="#blog">Blog</a>
            </li> --}}
            <li class="item">
                <a class="link" href="#skill">Skills</a>
            </li>
            <li class="item">
                <a class="link" href="#achievement">Achievements</a>
            </li>
            <li class="item ml-md-3">
                <a class="rounded zoom btn btn-primary text-white" id="scrollToContact">Contact</a>
            </li>
            
            {{-- <li class="item ml-md-3">
                <a href="components.html" class="btn btn-primary">Components</a>
            </li> --}}
        </ul>
        <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </a>
    </div>
</nav>
<script>
    document.getElementById('scrollToContact').addEventListener('click', function() {
  const contactSection = document.getElementById('contact');
  contactSection.scrollIntoView({ behavior: 'smooth' });
});
</script>