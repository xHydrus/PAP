<nav>
         <div class="logo">
            <h4>MakeIt<span>B</span>uild</h4>
         </div>
         <ul class="nav-links">
            <li>
               <a href="?pagina=Home">Home</a>
            </li>
            <li>
               <a href="?pagina=Sobre-Nos">Sobre Nós</a>
            </li>
            <li>
               <a href="?pagina=Projetos">Projetos</a>
            </li>
            <li>
               <a href="?pagina=Contactos">Contactos</a>
            </li>
         </ul>
         <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
         </div>
      </nav>
      <script>
         const navSlides = () => {
            const burger = document.querySelector('.burger');
            const nav = document.querySelector('.nav-links');
            const navLinks = document.querySelectorAll('.nav-links li');

            burger.addEventListener('click', ()=>{
               nav.classList.toggle('nav-active');

               navLinks.forEach((link, index)=>{
                  if(link.style.animation){
                     link.style.animation = ''
                  }else{
                     link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
                  }
               })

               burger.classList.toggle('toggle');
            })
         }
         navSlides();
      </script>
<style>
nav{
  display: flex;
  justify-content: space-around;
  align-items: center;
  min-height: 12vh;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)),
   url("https://miro.medium.com/max/3060/1*rGiHBnlqf6-koapA2DzUoA.jpeg")
     center no-repeat;
}
.logo{
  color: white;
  text-transform: uppercase;
  letter-spacing: 5px;
}
.logo span{
  color: crimson;
}
.nav-links{
  display: flex;
  justify-content: space-around;
  width: 45%;
  z-index: 2;
}
.nav-links li{
  list-style: none;
}
.nav-links a{
  color: white;
  text-decoration: none;

}
/*Inicio barras links*/
nav ul li a{
  margin-top: 5rem;
padding: 1rem 0;
margin: 0 3rem;
position: relative;
letter-spacing: 2px;
}

nav ul li a:last-child {
margin-right: 0;
}

nav ul li a::before,nav ul li a::after {
content: "";
position: absolute;
width: 100%;
height: 2px;
background-color: crimson;
left: 0;
transform: scaleX(0);
transition: all 0.5s;
}

nav ul li a::before {
top: 0;
transform-origin: left;
}

nav ul li a::after {
bottom: 0;
transform-origin: right;
}

nav ul li a:hover::before,nav ul li a:hover::after {
transform: scaleX(1);
}
/*Fim barras links*/
.burger{
  display: none;
  cursor: pointer;
}
.burger div{
  width: 25px;
  height: 3px;
  background-color: white;
  margin: 5px;
  transition: all 0.3s ease;
}
@media screen and (max-width: 1050px){
  .nav-links{
     width: 60%;
  }
}
@media screen and (max-width: 650px){
  body{
     overflow-x: hidden;
  }
  .nav-links{
     position: absolute;
     right: 0px;
     height: 88vh;
     top: 12vh;
     background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)),
   url("https://miro.medium.com/max/3060/1*rGiHBnlqf6-koapA2DzUoA.jpeg")
     center no-repeat;
     display: flex;
     flex-direction: column;
     align-items: center;
     width: 60%;
     transform: translateX(100%);
     transition: transform 0.5s ease-in;
  }
  .nav-links li{
     opacity: 0;
  }
  .burger{
     display: block;
  }
}
.nav-active{
  transform: translateX(0%);
}
@keyframes navLinkFade{
  from{
     opacity: 0;
     transform: translateX(50px);
  }to{
     opacity: 1;
     transform: translateX(0px);
  }
}
.toggle .line1{
  transform: rotate(-45deg) translate(-5px, 6px);
}
.toggle .line2{
  opacity: 0;
}
.toggle .line3{
  transform: rotate(45deg) translate(-5px, -6px);
}
</style>