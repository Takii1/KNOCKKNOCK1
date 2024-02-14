let navbar = document.querySelector('#header .navbar');
let menuBtn = document.querySelector('#menu-btn');

menuBtn.onclick = () => {
    menuBtn.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

// const canvas = document.querySelector(".canvas");
// canvas.width = window.innerWidth;
// canvas.height = window.innerHeight;

// const context = canvas.getContext("2d");
// const frameCount = 179;

// const currentFrame = (index) => `./best-ball/${(index + 1).toString()}.jpg`;

// const images = [];
// let ball = { frame: 0 };

// for (let i = 0; i < frameCount; i++) {
//   const img = new Image();
//   img.src = currentFrame(i);
//   console.log(currentFrame(i));
//   images.push(img);
// }

// gsap.to(ball, {
//   frame: frameCount - 1,
//   snap: "frame",
//   ease: "none",
//   scrollTrigger: {
//     scrub: 0.5,
//     pin: "canvas",
//     end: "500%",
//   },
//   onUpdate: render,
// });

// gsap.fromTo(
//   ".ball-text",
//   {
//     opacity: 0,
//   },
//   {
//     opacity: 1,
//     scrollTrigger: {
//       scrub: 1,

//       start: "50%",
//       end: "60%",
//     },
//     onComplete: () => {
//       gsap.to(".ball-text", { opacity: 0 });
//     },
//   }
// );

// images[0].onload = render;

// function render() {
//   context.canvas.width = images[0].width;
//   context.canvas.height = images[0].height;

//   context.clearRect(0, 0, canvas.width, canvas.height);
//   context.drawImage(images[ball.frame], 0, 0);
// }


// Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
