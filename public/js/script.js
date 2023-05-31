// navbar fixed
window.onscroll = function () {
  const header = document.querySelector("header");
  const fixedNav = header.offsetTop;
  const toTop = document.querySelector("#to-top");

  if (window.pageYOffset > fixedNav) {
      header.classList.add("navbar-fixed");
      toTop.classList.remove("hidden");
      toTop.classList.add("flex");
  } else {
      header.classList.remove("navbar-fixed");
      toTop.classList.remove("flex");
      toTop.classList.add("hidden");
  }
};

// hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

// import { Chart, initTE } from "tw-elements";

// initTE({ Chart });

// // Chart
// const dataBar = {
//     type: "bar",
//     data: {
//         labels: [
//             "Monday",
//             "Tuesday",
//             "Wednesday",
//             "Thursday",
//             "Friday",
//             "Saturday",
//             "Sunday ",
//         ],
//         datasets: [
//             {
//                 label: "Traffic",
//                 data: [2112, 2343, 2545, 3423, 2365, 1985, 987],
//             },
//         ],
//     },
// };

// new Chart(document.getElementById("bar-chart"), dataBar);
