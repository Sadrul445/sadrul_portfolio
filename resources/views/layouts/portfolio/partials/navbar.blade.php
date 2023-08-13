<nav class="custom-navbar" data-spy="affix" data-offset-top="20">
    <div class="container">
        <a class="logo" href="/">
            <img src="assets/icons/favicon-32x32.png" class="rounded box-shadow mb-1">
            Sadrul's Portfolio</a>
        <ul class="nav">
            <li class="item">
                <a class="link" id="scrollToAbout" style="cursor: pointer">About</a>
            </li>
            <li class="item">
                <a class="link" id="scrollToSkill" style="cursor: pointer">Skills</a>
            </li>
            <li class="item">
                <a class="link" id="scrollToCareer" style="cursor: pointer">Career</a>
            </li>
            <li class="item">
                <a class="link" id="scrollToAchievement" style="cursor: pointer">Achievements</a>
            </li>
            <li class="item">
                <a class="link" id="scrollToProject" style="cursor: pointer">Portfolio</a>
            </li>
            <li class="item">
                <a class="link" id="scrollToTestmonial" style="cursor: pointer">Testmonial</a>
            </li>
            {{-- <li class="item">
                <a class="link" href="#blog">Blog</a>
            </li> --}}   
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
    document.getElementById('scrollToAbout').addEventListener('click', function() {
  const aboutSection = document.getElementById('about');
  aboutSection.scrollIntoView({ behavior: 'smooth' });
});
    document.getElementById('scrollToSkill').addEventListener('click', function() {
  const skillSection = document.getElementById('skill');
  skillSection.scrollIntoView({ behavior: 'smooth' });
});
    document.getElementById('scrollToCareer').addEventListener('click', function() {
  const careerSection = document.getElementById('career');
  careerSection.scrollIntoView({ behavior: 'smooth' });
});
    document.getElementById('scrollToAchievement').addEventListener('click', function() {
  const achievementSection = document.getElementById('achievement');
  achievementSection.scrollIntoView({ behavior: 'smooth' });
});
    document.getElementById('scrollToProject').addEventListener('click', function() {
  const projectSection = document.getElementById('project');
  projectSection.scrollIntoView({ behavior: 'smooth' });
});
    document.getElementById('scrollToTestmonial').addEventListener('click', function() {
  const testmonialSection = document.getElementById('testmonial');
  testmonialSection.scrollIntoView({ behavior: 'smooth' });
});
</script>