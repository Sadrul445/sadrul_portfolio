<header id="home" class="header">
    <div class="overlay"></div>
    <div class="header-content container">
        <h1 class="header-title">
            <span class="up">HI!</span>
            <span class="down">I am Sadrul</span>
        </h1>
        <p class="header-subtitle" id="typing-text">Junior Software Engineer<strong> - Backend</strong></p>
        {{-- <p class="header-subtitle"><strong> - Backend</strong></p> --}}
        <button class="zoom box-shadow btn btn-primary" id="scrollToProject">Visit My Works</button>
    </div>
</header>
<script>
    document.getElementById('scrollToProject').addEventListener('click', function() {
  const projectSection = document.getElementById('project');
  projectSection.scrollIntoView({ behavior: 'smooth' });
});
</script>
<script>
     const typingTextElement = document.getElementById("typing-text");
  const textToType = " ";
  let charIndex = 0;

  function typeText() {
    if (charIndex < textToType.length) {
      typingTextElement.innerHTML += textToType.charAt(charIndex);
      charIndex++;
      setTimeout(typeText, 100); // Adjust typing speed here (in milliseconds)
    }
  }

  setTimeout(typeText, 1000); // Delay the typing effect to start after 1 second
  </script>

