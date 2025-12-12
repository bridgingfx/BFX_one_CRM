<div class="sliders-container">
    <!-- LEFT SLIDER (with arrows) -->
    <div class="slider-col-left">
        <div class="slider-wrapper slider-with-arrows" id="sliderLeft">
            <button class="slider-nav-btn slider-nav-left" onclick="prevSlide('left')">
                &#10094;
            </button>

            <div class="slider-images">
                <img id="leftSlideImage" src="" alt="Slide" />
            </div>

            <button class="slider-nav-btn slider-nav-right" onclick="nextSlide('left')">
                &#10095;
            </button>

            <div class="slider-dots" id="leftDots"></div>
        </div>
    </div>

    <!-- RIGHT SLIDER (without arrows) -->
    <div class="slider-col-right">
        <div class="slider-wrapper slider-no-arrows" id="sliderRight">
            <div class="slider-images">
                <img id="rightSlideImage" src="" alt="Slide" />
            </div>

            <div class="slider-dots" id="rightDots"></div>
        </div>
    </div>
</div>
<script>
const images = [
  "assets/images/big/img1.jpg",
  "assets/images/big/img2.jpg",
  "assets/images/big/img3.jpg"
];
const images_right = [
  "assets/images/big/img4.jpg",
  "assets/images/big/img5.jpg",
  "assets/images/big/img6.jpg"
];

let leftIndex = 0;
let rightIndex = 0;

/* --- SETUP DOTS --- */
function initDots(id, count) {
  const dotContainer = document.getElementById(id);
  dotContainer.innerHTML = "";
  for (let i = 0; i < count; i++) {
    const dot = document.createElement("button");
    dot.onclick = () => goToSlide(id.includes("left") ? "left" : "right", i);
    dotContainer.appendChild(dot);
  }
}

/* --- UPDATE SLIDE --- */
function updateSlide(slider) {
  if (slider === "left") {
    document.getElementById("leftSlideImage").src = images[leftIndex];
    updateDots("left");
  } else {
    document.getElementById("rightSlideImage").src = images_right[rightIndex];
    updateDots("right");
  }
}

/* --- UPDATE DOT ACTIVE STATE --- */
function updateDots(slider) {
  const dots = document.getElementById(slider + "Dots").children;
  let activeIndex = slider === "left" ? leftIndex : rightIndex;

  [...dots].forEach((d, i) => {
    d.classList.toggle("active", i === activeIndex);
  });
}

/* NEXT & PREVIOUS */
function nextSlide(slider) {
  if (slider === "left") {
    leftIndex = (leftIndex + 1) % images.length;
    updateSlide("left");
  } else {
    rightIndex = (rightIndex + 1) % images.length;
    updateSlide("right");
  }
}

function prevSlide(slider) {
  leftIndex = (leftIndex - 1 + images.length) % images.length;
  updateSlide("left");
}

/* GO TO SPECIFIC SLIDE */
function goToSlide(slider, index) {
  if (slider === "left") leftIndex = index;
  else rightIndex = index;

  updateSlide(slider);
}

/* AUTOPLAY */
setInterval(() => nextSlide("left"), 5000);
setInterval(() => nextSlide("right"), 5000);

/* INIT */
initDots("leftDots", images.length);
initDots("rightDots", images.length);

updateSlide("left");
updateSlide("right");
</script>

