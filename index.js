const form = document.getElementById("main");
const carousel = document.querySelector(".carousel");
const heading = document.getElementById("heading");
const table = document.getElementById("table2");

form.classList.add("hidden");
heading.classList.remove("hidden");

carousel.addEventListener("click", function () {
  carousel.style.display = "none";
  form.style.display = "block";
  heading.classList.add("hidden");
  document.getElementById("table2").style.display = "none";
});
if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
  document.getElementById("table2").style.display = "none";
}
