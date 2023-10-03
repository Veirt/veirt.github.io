function toggleDark() {
  const queries = [
    "body",
    ".link",
    ".hero",
    ".hero-text",
    ".hero-brightness",
    ".quote-content",
    ".about-me",
    ".item",
    ".item-buy",
    ".section-title",
    "footer",
  ];

  for (const q of queries) {
    const elements = document.querySelectorAll(`${q}`);
    elements.forEach((el) => {
      el.classList.toggle(`dark`);
    });
  }

  document.getElementById("toggle-dark").classList.toggle("white");
}

/// jquery
$(document).ready(function () {
  $("#toggle-dark").click(function () {
    if (localStorage.getItem("dark-mode") === "true") {
      localStorage.setItem("dark-mode", "false");
    } else {
      localStorage.setItem("dark-mode", "true");
    }
    toggleDark();
  });
});

// manipulasi dom 1 selain dark mode
function hideItem(item) {
  item.parentElement.remove();
}

const text = `"Audiophiles don't use their equipment to listen to your music."`;
const text2 = `"Audiophiles use your music to listen to their equipment."`;
const speed = 50;
let i = 0;
let currentText = text;

// manipulasi dom 2 selain dark mode
const quoteTextElement = document.querySelector(".quote-text");
function typeWriter() {
  const interval = setInterval(() => {
    if (i < currentText.length) {
      quoteTextElement.innerHTML += currentText.charAt(i);
      i++;
    } else {
      clearInterval(interval);
      setTimeout(() => {
        quoteTextElement.innerHTML = "";
        i = 0;
        currentText = currentText === text ? text2 : text; // toggle
        typeWriter();
      }, 2000);
    }
  }, speed);
}
if (quoteTextElement) typeWriter();

// addEventListener
document.getElementById("product").addEventListener("click", () => {
  // pop up box
  alert("Coming soon!");
});

const darkMode = localStorage.getItem("dark-mode");
if (darkMode === "true") {
  toggleDark();
}
