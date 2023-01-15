function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
  }
  const sr = ScrollReveal({
    distance:'40px',
    duration: 2600,
    reset: true
 })
  ScrollReveal().reveal('.home-text',{delay:300,origin:'left'})
 ScrollReveal().reveal('.about, .contact, .rules',{delay:100, origin:'bottom'})