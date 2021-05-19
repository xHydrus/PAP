<header>
  <div class="navegar">
  <nav>
        <div class="hamburger">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
        <ul class="nav-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">Sobre Nós</a></li> 
          <li><a href="#">Projetos</a></li>
          <li><a href="#">Contactos</a></li>
          <li><a href="#">Contactos</a></li>
        </ul>
    </nav>1
  </div>
<script>
   const hamburger = document.querySelector('.hamburger');
   const navLinks = document.querySelector('.nav-links');
   const links = document.querySelectorAll('.nav-links li');
   hamburger.addEventListener('click', () => {
      navLinks.classList.toggle("open");
      links.forEach(link => {
         link.classList.toggle("fade");
      });
   });   
</script>
</header>