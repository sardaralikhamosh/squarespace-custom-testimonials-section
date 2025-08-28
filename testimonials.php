<!-- Testimonial Carousel (conflict-safe) -->
<div class="tclone-wrap" role="region" aria-label="Testimonials">
  <div class="tclone-slider">

    <!-- Testimonial 1 -->
    <div class="tclone-slide active">
      <div class="tclone-stars">
        <span>★</span><span>★</span><span>★</span><span>★</span><span class="tclone-star-empty">★</span>
      </div>
      <blockquote class="tclone-quote">
        Best massage I've had! I never write reviews and felt the need to bc it was that enjoyable.
        Kennedy was amazing and I will definitely be back. Loved the ambience, very clean, good music,
        relaxing scents, and friendly staff.
      </blockquote>
    </div>

    <!-- Testimonial 2 -->
    <div class="tclone-slide">
      <div class="tclone-stars">
        <span>★</span><span>★</span><span>★</span><span class="tclone-star-empty">★</span><span class="tclone-star-empty">★</span>
      </div>
      <blockquote class="tclone-quote">
        Wonderful service! The therapist listened carefully to what I needed and made sure I was comfortable
        the entire session. The spa was clean, peaceful, and beautifully decorated. Highly recommended!
      </blockquote>
    </div>

    <!-- Testimonial 3 -->
    <div class="tclone-slide">
      <div class="tclone-stars">
        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
      </div>
      <blockquote class="tclone-quote">
        Absolutely the best experience I've ever had at a wellness center. The staff were attentive,
        the music was soothing, and the atmosphere was truly relaxing. I will definitely bring friends along next time!
      </blockquote>
    </div>

  </div>

  <!-- Navigation -->
  <div class="tclone-nav">
    <a class="tclone-prev" href="#" role="button">Previous</a>
    <a class="tclone-next" href="#" role="button">Next</a>
  </div>
</div>

<style>
/* ====== Scoped styles ====== */
.tclone-wrap {
  position: relative;
  padding: 120px 24px 84px;
  min-height: 420px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  font-family: "Helvetica Neue", Arial, sans-serif;
  overflow: hidden;
}

.tclone-slider {
  display: flex;
  width: 300%; /* 3 slides */
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.tclone-slide {
  min-width: 100%;
  opacity: 0.2;
  transition: opacity 0.6s ease;
  padding: 0 20px;
  box-sizing: border-box;
}
.tclone-slide.active {
  opacity: 1;
}

/* Stars */
.tclone-stars {
  font-size: 18px;
  margin: 0 auto 24px;
  letter-spacing: 2px;
}
.tclone-stars span:nth-child(1) { color: #0b4da2; }
.tclone-stars span:nth-child(2) { color: #1a64b6; }
.tclone-stars span:nth-child(3) { color: #178fb9; }
.tclone-stars span:nth-child(4) { color: #1eb5be; }
.tclone-stars .tclone-star-empty { color: #9fd9dc; }

/* Quote */
.tclone-quote {
  font-size: 20px;
  line-height: 1.75;
  color: #222;
  font-weight: 400;
  margin: 0 auto;
  max-width: 750px;
}

/* Nav */
.tclone-nav {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 18px;
  display: flex;
  justify-content: space-between;
  padding: 0 24px;
  font-size: 13px;
  text-transform: uppercase;
  letter-spacing: 2px;
}
.tclone-nav a {
  color: #0b4da2;
  text-decoration: none;
}
.tclone-nav a:hover { opacity: .7; }

/* Mobile */
@media (max-width: 640px) {
  .tclone-wrap { padding: 100px 18px 72px; min-height: 380px; }
  .tclone-quote { font-size: 18px; }
  .tclone-stars { font-size: 16px; margin-bottom: 20px; }
  .tclone-nav { bottom: 14px; padding: 0 18px; }
}
</style>

<script>
(function(){
  const slider = document.querySelector('.tclone-slider');
  const slides = document.querySelectorAll('.tclone-slide');
  const prevBtn = document.querySelector('.tclone-prev');
  const nextBtn = document.querySelector('.tclone-next');
  let current = 0;

  function showSlide(index) {
    slider.style.transform = `translateX(-${index * 100}%)`;
    slides.forEach((s, i) => {
      s.classList.toggle('active', i === index);
    });
  }

  prevBtn.addEventListener('click', e => {
    e.preventDefault();
    current = (current - 1 + slides.length) % slides.length;
    showSlide(current);
  });

  nextBtn.addEventListener('click', e => {
    e.preventDefault();
    current = (current + 1) % slides.length;
    showSlide(current);
  });

  // init
  showSlide(current);
})();
</script>
