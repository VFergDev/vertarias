function toggleNavbar() {
    var navbar = document.getElementById("navbar");
    navbar.classList.toggle("show");
}

const menuIcon = document.querySelector('.menu-icon');
  const navbar = document.querySelector('.navbar');

  menuIcon.addEventListener('click', function() {
    navbar.classList.toggle('show');
  });

  console.log('hello');