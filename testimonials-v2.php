<!-- Testimonial Carousel (conflict-safe) -->
<div class="tclone-wrap" role="region" aria-label="Testimonials">
  <div class="tclone-slider">

    <!-- Testimonial 1 -->
    <div class="tclone-slide active">
      <blockquote class="tclone-quote">
        <p class="sqsrte-large preFade fadeIn" style="white-space: pre-wrap; transition-timing-function: ease; transition-duration: 0.9s; transition-delay: 0.281416s;">
        ”I came to ALTH with blemished, tired skin and left the skin of an angel. For so long I trusted expensive “all natural” products and harsh treatments that only damaged my skin. ALTH taught me quality over quantity and the importance of understanding product labels. After two months of using their vitamin rich products, my skin has improved tremendously.”
<br> —LAUREN R.
      </blockquote>
      <div class="tclone-stars">
        <span>★</span><span>★</span><span>★</span><span>★</span><span class="tclone-star-empty">★</span>
      </div>
    </div>

    <!-- Testimonial 2 -->
    <div class="tclone-slide">
      <blockquote class="tclone-quote">
        <p class="sqsrte-large preFade fadeIn" style="white-space: pre-wrap; transition-timing-function: ease; transition-duration: 0.9s; transition-delay: 0.281416s;">
        “I received a facial and massage here and both were absolutely fantastic. I have had services at resorts and other spas, but nothing compares. I am so happy I found this place. Thank you for the relaxing and much needed care.”
<br> —BROOKE G.
      </blockquote>
      <div class="tclone-stars">
        <span>★</span><span>★</span><span>★</span><span class="tclone-star-empty">★</span><span class="tclone-star-empty">★</span>
      </div>
    </div>

    <!-- Testimonial 3 -->
    <div class="tclone-slide">
      <blockquote class="tclone-quote">
        <p class="sqsrte-large preFade fadeIn" style="white-space: pre-wrap; transition-timing-function: ease; transition-duration: 0.9s; transition-delay: 0.281416s;">
        “Incredible attention to detail! From the back patio and glass of champagne to the eye mask, peppermint oil scalp massage you can’t beat this place. You won’t be disappointed. Highly recommend is not even enough to describe this place."
<br> —LEAH C.
      </blockquote>
      <div class="tclone-stars">
        <span>★</span><span>★</span><span>★</span><span class="tclone-star-empty">★</span><span class="tclone-star-empty">★</span>
      </div>
    </div>
    
    <!-- Testimonial 4 -->
    <div class="tclone-slide">
      <blockquote class="tclone-quote">
        <p class="sqsrte-large preFade fadeIn" style="white-space: pre-wrap; transition-timing-function: ease; transition-duration: 0.9s; transition-delay: 0.281416s;">
        “Just the best spa in OC, nice staff, experts in skin care! They have worked on me, my teens and my mom. Wouldn’t trust anyone else with our skin!”
<br> —KERI B.
      </blockquote>
      <div class="tclone-stars">
        <span>★</span><span>★</span><span>★</span><span class="tclone-star-empty">★</span><span class="tclone-star-empty">★</span>
      </div>
    </div>

    <!-- Testimonial 5 -->
    <div class="tclone-slide">
      <blockquote class="tclone-quote">
        <p class="sqsrte-large preFade fadeIn" style="white-space: pre-wrap; transition-timing-function: ease; transition-duration: 0.9s; transition-delay: 0.281416s;">
        “I love this place!! My skin feels the best is has in years. Thanks ALTH!!”
<br> —EMILY S.
      </blockquote>
      <div class="tclone-stars">
        <span>★</span><span>★</span><span>★</span><span class="tclone-star-empty">★</span><span class="tclone-star-empty">★</span>
      </div>
    </div>

  </div>

  <!-- Navigation -->
  <div class="tclone-nav">
    <a class="tclone-prev" href="#" role="button"><b>Previous</b></a>
    <a class="tclone-next" href="#" role="button"><b>Next</b></a>
  </div>
</div>

<style>
/* ====== Scoped styles ====== */
.botton-buttom-border{
  font-family: 'Archivo' !important;
  font-size: 13px;
  font-weight: 400;
}
.tclone-wrap {
  position: relative;
  padding: 100px 0 100px 0;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  font-family: 'Paragraph' !important;
  font-size: 17px;
  font-weight: 100;
  overflow: hidden;
}

.tclone-slider {
  display: flex;
  width: 100%; /* 5 slides */
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
   font-family: 'Paragraph' !important;
  font-size: 17px;
  font-weight: 100;
  margin: 0 auto 24px;
  letter-spacing: 2px;
}
.tclone-stars span:nth-child(1) { color: #0b4da2; }
.tclone-stars span:nth-child(2) { color: #1a64b6; }
.tclone-stars span:nth-child(3) { color: #178fb9; }
.tclone-stars span:nth-child(4) { color: #1eb5be; }
.tclone-stars .tclone-star-empty { color: #9fd9dc; }

/* Quote */


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
   font-family: 'Archivo' !important;
  font-size: 13px;
  font-weight: 400;
}
.tclone-nav a:hover { opacity: .7; }

/* Mobile */
@media (max-width: 640px) {
  .tclone-wrap { padding: 100px 18px 72px; min-height: 0px; }
  
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
