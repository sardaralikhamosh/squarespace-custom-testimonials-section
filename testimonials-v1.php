<!-- Testimonial Carousel (conflict-safe) -->
<div class="tclone-wrap" role="region" aria-label="Testimonials">
  <div class="tclone-slider">

    <!-- Testimonial 1 -->
    <div class="tclone-slide active">
      <blockquote class="tclone-quote">
        “This was hands down the best massage I have ever had. The therapist was professional, respectful, and incredibly strong. Once she realized I could handle it, she just did her magic. I left feeling like a new person, met with water and a business card I am practically ready to frame because I am never going anywhere else.”<br><br>
 —HANNAH S.
      </blockquote><br><br>
      <div class="tclone-stars">
        <span>★</span><span>★</span><span>★</span><span>★</span><span class="tclone-star-empty">★</span>
      </div>
    </div>

    <!-- Testimonial 2 -->
    <div class="tclone-slide">
      <blockquote class="tclone-quote">
        “I cannot say enough wonderful things about my massage. I booked a deep tissue session and it broke a terrible migraine cycle with thoughtful attention to the tension in my neck and shoulders. The therapist was incredibly skilled and intuitive.
I am used to sports massages or more casual Thai massages, so everything in the studio felt extra special. The soft sheets, the high quality massage oil, and even the music in the room made the experience feel elevated. The entire space is beautiful.”
<br><br>—CARLY D.
      </blockquote><br><br>
      <div class="tclone-stars">
        <span>★</span><span>★</span><span>★</span><span class="tclone-star-empty">★</span><span class="tclone-star-empty">★</span>
      </div>
    </div>

    <!-- Testimonial 3 -->
    <div class="tclone-slide">
      <blockquote class="tclone-quote">
        ”Arguably one of the best massages I have ever had. If you are looking for a strong deep tissue massage, this is the place. It was strong and precise, not just elbows sliding around, but hands that were able to identify those stubborn knots and precisely, and relentlessly, work them out.”
<br><br>—BILLY P.
      </blockquote><br><br>
      <div class="tclone-stars">
        <span>★</span><span>★</span><span>★</span><span class="tclone-star-empty">★</span><span class="tclone-star-empty">★</span>
      </div>
    </div>
    
    <!-- Testimonial 4 -->
    <div class="tclone-slide">
      <blockquote class="tclone-quote">
        ”I came here for my first prenatal massage and booked with ALTH because of their special pillow that let me lie face down for part of the session. IT WAS THE BEST MASSAGE OF MY LIFE, and I have had plenty. Thai, Chinese, sports, deep tissue, Swedish you name it. Every bit of pressure and muscle work was so intentional. I cannot wait to book again.”
<br><br>—THUY A.
      </blockquote><br><br>
      <div class="tclone-stars">
        <span>★</span><span>★</span><span>★</span><span class="tclone-star-empty">★</span><span class="tclone-star-empty">★</span>
      </div>
    </div>

    <!-- Testimonial 5 -->
    <div class="tclone-slide">
      <blockquote class="tclone-quote">
        ”My husband gifted me a 90 minute full body Swedish massage for our anniversary while we were vacationing in town, and it was truly the best massage I’ve ever had. The therapist was thorough, attentive, and a master at her craft. I left feeling like a new person, completely relaxed, especially after the flawless scalp massage. The back patio was also super cute, and I enjoyed reading my book there with a complimentary water and glass of champagne.”
<br><br>—KAYLI B.
      </blockquote><br><br>
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
.tclone-wrap {
  position: relative;
  padding: 24px 24px 84px;
  min-height: 250px;
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
  width: 400%; /* 5 slides */
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
.tclone-quote {
   font-family: 'Paragraph' !important;
  font-size: 17px;
  font-weight: 100;
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
   font-family: 'Paragraph' !important;
  font-size: 17px;
  font-weight: 100;
}
.tclone-nav a:hover { opacity: .7; }

/* Mobile */
@media (max-width: 640px) {
  .tclone-wrap { padding: 100px 18px 72px; min-height: 250px; }
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
