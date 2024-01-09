var loader = document.getElementById("preLoader");

window.addEventListener("load", function () {
  loader.style.display = "none";
});

const canvas = document.querySelector("#canvas");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const context = canvas.getContext("2d");
const frameCount = 120;

const currentFrame = (index) =>
  `./assets/images/entrance/${(index + 1).toString()}.jpg`;

const images = [];
let ball = { frame: 0 };

for (let i = 0; i < frameCount; i++) {
  const img = new Image();
  img.src = currentFrame(i);
  console.log(currentFrame(i));
  images.push(img);
}

gsap.to(ball, {
  frame: frameCount - 1,
  snap: "frame",
  ease: "none",
  scrollTrigger: {
    scrub: 0.5,
    pin: "canvas",
    end: "500%",
  },
  onUpdate: render,
});

gsap.fromTo(
  ".labText",
  {
    opacity: 0,
  },
  {
    opacity: 1,
    scrollTrigger: {
      scrub: 1,

      start: "65%",
      end: "80%",
    },
    onComplete: () => {
      gsap.to(".labText", { opacity: 0 });
    },
  }
);

images[0].onload = render;

function render() {
  context.canvas.width = images[0].width;
  context.canvas.height = images[0].height;

  context.clearRect(0, 0, canvas.width, canvas.height);
  context.drawImage(images[ball.frame], 0, 0);
}

function toggleMenu() {
  var menuCheck = document.getElementById("menu-check");

  if (menuCheck.checked == true) {
    // alert("checked");
    var menuToggle = document.querySelector(".menu-line3");
    menuToggle.classList.add("cross-menu");
  } else {
    var menuToggle = document.querySelector(".menu-line3");
    menuToggle.classList.remove("cross-menu");
  }
}
