// ********** close links ************
const navToggle = document.querySelector(".nav-toggle");
const linksContainer = document.querySelector(".menu-container");
const links = document.getElementById("menu-menu-principal");
const social = document.getElementById("menu-redes-sociales");


navToggle.addEventListener("click", () => {
  const linksHeight = links.getBoundingClientRect().height;
   const socialHeight = social.getBoundingClientRect().height;
   const containerHeight = linksContainer.getBoundingClientRect().height;
   (containerHeight === 0) ?
     linksContainer.style.height = `${linksHeight + socialHeight}px` :
     linksContainer.style.height = 0;

  navToggle.classList.toggle("show-btn");
  });
  

// ********** fixed navbar ************

const navbar = document.getElementById("nav");
const topLink = document.querySelector(".top-link");

window.addEventListener("scroll", () => {
    const scrollHeight = window.pageYOffset;
    const navHeight = navbar.getBoundingClientRect().height;
    (scrollHeight > navHeight) ?
      navbar.classList.add("fixed-nav") :
      navbar.classList.remove("fixed-nav");
  });

