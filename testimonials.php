<!-- Testimonial Clone (conflict-safe) -->
<div class="tclone-wrap" role="region" aria-label="Testimonial">
  <div class="tclone-inner">

    <!-- Centered quote -->
    <blockquote class="tclone-quote">
      Best massage I've had! I never write reviews and felt the need to bc it was that enjoyable.
      Kennedy was amazing and I will definitely be back. Loved the ambience, very clean, good music,
      relaxing scents, and friendly staff.
    </blockquote><br><br>
     <!-- Stars (top & centered) -->
    <div class="tclone-stars" aria-label="4 out of 5 stars">
      <span aria-hidden="true">★</span>
      <span aria-hidden="true">★</span>
      <span aria-hidden="true">★</span>
      <span aria-hidden="true">★</span>
      <span class="tclone-star-empty" aria-hidden="true">★</span>
    </div>
    <!-- Bottom nav: corners, same row -->
    <div class="tclone-nav">
      <a class="tclone-prev" href="#" role="button"><b>Previous</b></a>
      <a class="tclone-next" href="#" role="button"><b>Next</b></a>
    </div>
  </div>
</div>

<style>
/* ====== Scoped styles (tclone- prefix avoids Squarespace conflicts) ====== */
.tclone-wrap {
  position: relative;
  padding: 120px 24px 84px; /* generous whitespace like the reference */
  min-height: 200px;       /* ensures room for top stars + centered text + bottom nav */
  display: flex;
  align-items: center;     /* vertically centers the inner content area */
  justify-content: center;
  text-align: center;
  font-family: "Helvetica Neue", Arial, sans-serif;
}

.tclone-inner {
  max-width: 820px;
  width: 100%;
}

/* Stars — centered at the top */
.tclone-stars {
  font-size: 18px;
  line-height: 1;
  margin: 0 auto 24px;
  letter-spacing: 2px;     /* visual spacing between stars like the screenshot */
}

/* Subtle blue→teal palette per star, last star lighter/empty */
.tclone-stars span:nth-child(1) { color: #0b4da2; } /* deep blue */
.tclone-stars span:nth-child(2) { color: #1a64b6; }
.tclone-stars span:nth-child(3) { color: #178fb9; }
.tclone-stars span:nth-child(4) { color: #1eb5be; }
.tclone-stars .tclone-star-empty { color: #9fd9dc; } /* pale teal for unfilled star */

/* Quote text */
.tclone-quote {
  font-family: 'Paragraph' !important;
  margin: 0 auto;
  font-size: 18px;
  font-weight: 300;
  line-height: 1.75;
  color: #222;
}

/* Bottom nav — fixed to section corners on same row */
.tclone-nav {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 18px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 24px;
  pointer-events: none; /* container ignores clicks so only links are clickable */
}

.tclone-nav a{
  font-family: 'Paragraph' !important;
  pointer-events: auto;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 13px;
  font-weight: 500;
  color: #0b4da2;          /* match blue tone from stars */
  transition: opacity .2s;
}

.tclone-nav a:hover,
.tclone-nav a:focus { opacity: .7; }

/* Mobile adjustments */
@media (max-width: 640px) {
  .tclone-wrap { padding: 100px 18px 72px; min-height: 380px; }
  .tclone-quote { font-size: 18px; }
  .tclone-stars { font-size: 16px; margin-bottom: 20px; }
  .tclone-nav { bottom: 14px; padding: 0 18px; }
}
</style>
