function showMenu() {
  let navLinks = document.getElementById("navLinks");
  navLinks.classList.add('active');
}

function hideMenu() {
  let navLinks = document.getElementById("navLinks");
  navLinks.classList.remove('active');
}

function handleClick(pageName, event) {
  event.preventDefault(); 

  let currentPage = window.location.pathname.split("/").pop().replace(".html", "");
  let message = "You are on the " + currentPage + " page. Do you want to navigate to the " + pageName + " page?";

  let confirmed = confirm(message);

  if (confirmed) {
    window.location.href = pageName + ".html";
  }
}

function submitForm(event) {
  event.preventDefault(); 
}
