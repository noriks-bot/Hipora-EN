<?php
/**
 * Hipora front page (homepage).
 * Sections modeled after revoget.com (custom columns -> trust badges ->
 * featured product -> reviews), localized to the Hipora brand.
 * Header & footer come from get_header() / get_footer() and are untouched.
 *
 * @package hipora
 */

get_header();

$product_url = home_url( '/product/hipora-alignment-pillow/' );
$shop_url    = home_url( '/shop/' );
$img         = '/static/site/cdn/shop/files/';
$hero_img    = $img . '1.jpg%3Fv=1742559560&width=1100';
$life_img    = $img . 'kathy_2.jpg';
$rev_img     = $img . 'feedback_1.jpg';
?>

<style>
  .hp{font-family:'Montserrat','Inter',system-ui,-apple-system,sans-serif;color:#16202b;}
  .hp-wrap{max-width:1400px;margin:0 auto;padding:0 50px;}
  @media (max-width:749px){.hp-wrap{padding:0 15px;}}
  .hp section{box-sizing:border-box;}

  /* ---- 1. Hero / The Key to Pain-Free Slumber ---- */
  .hp-hero{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center;padding:64px 0;}
  .hp-hero-eyebrow{display:inline-block;font-size:13px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:#2f6fb3;margin:0 0 16px;}
  .hp-hero h1{font-size:46px;line-height:1.08;font-weight:800;margin:0 0 20px;letter-spacing:-.02em;}
  .hp-hero p.lead{font-size:18px;line-height:1.65;color:#46586b;margin:0 0 26px;}
  .hp-quote{border-left:3px solid #2f6fb3;padding:10px 0 10px 18px;margin:0 0 28px;font-style:italic;color:#37475a;font-size:15px;line-height:1.6;}
  .hp-quote .who{display:block;margin-top:8px;font-style:normal;font-weight:700;color:#16202b;}
  .hp-stars{color:#f5a623;letter-spacing:2px;}
  .hp-btn{display:inline-flex;align-items:center;justify-content:center;font-weight:700;font-size:16px;padding:16px 34px;border-radius:8px;text-decoration:none;transition:.15s;}
  .hp-btn-primary{background:#2f6fb3;color:#fff;}
  .hp-btn-primary:hover{background:#27598f;}
  .hp-hero-img{width:100%;border-radius:16px;display:block;object-fit:cover;aspect-ratio:1/1;box-shadow:0 18px 40px rgba(20,40,70,.12);}

  /* ---- 2. Trust badges ---- */
  .hp-trust{background:#f4f8fd;padding:28px 0;}
  .hp-trust-grid{display:flex;flex-wrap:wrap;justify-content:center;gap:38px;text-align:center;}
  .hp-trust-item{flex:1 1 200px;max-width:260px;}
  .hp-trust-item .ico{font-size:26px;}
  .hp-trust-item .t{font-weight:700;font-size:15px;margin:8px 0 2px;}
  .hp-trust-item .s{font-size:13px;color:#5a6b7c;}

  /* ---- 3. Featured product ---- */
  .hp-feat{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center;padding:72px 0;}
  .hp-feat-img{width:100%;border-radius:16px;display:block;object-fit:cover;aspect-ratio:1/1;}
  .hp-feat h2{font-size:34px;font-weight:800;margin:0 0 8px;letter-spacing:-.01em;}
  .hp-feat .rating{color:#f5a623;font-weight:700;margin:0 0 16px;font-size:15px;}
  .hp-feat .rating small{color:#5a6b7c;font-weight:500;}
  .hp-feat ul{list-style:none;padding:0;margin:0 0 24px;}
  .hp-feat li{display:flex;gap:10px;align-items:flex-start;font-size:16px;line-height:1.5;margin-bottom:12px;color:#2b3a49;}
  .hp-feat li b{color:#16202b;}
  .hp-feat li .chk{color:#2f6fb3;font-weight:800;flex:0 0 auto;}
  .hp-price{display:flex;align-items:baseline;gap:14px;margin:0 0 24px;}
  .hp-price .now{font-size:30px;font-weight:800;}
  .hp-price .was{font-size:18px;color:#9aa8b6;text-decoration:line-through;}
  .hp-price .save{background:#e9f1fa;color:#2f6fb3;font-size:13px;font-weight:700;padding:5px 12px;border-radius:999px;}

  /* ---- 4. Reviews ---- */
  .hp-rev{padding:72px 0;text-align:center;}
  .hp-rev h2{font-size:32px;font-weight:800;margin:0 0 6px;}
  .hp-rev .sub{color:#5a6b7c;margin:0 0 40px;}
  .hp-rev-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;text-align:left;}
  .hp-card{background:#fff;border:1px solid #e7eef5;border-radius:14px;padding:24px;box-shadow:0 6px 18px rgba(20,40,70,.05);}
  .hp-card .stars{color:#f5a623;letter-spacing:2px;margin-bottom:10px;}
  .hp-card p{font-size:15px;line-height:1.6;color:#37475a;margin:0 0 16px;}
  .hp-card .who{font-weight:700;font-size:14px;}
  .hp-card .badge{font-size:12px;color:#2f8a4a;font-weight:600;}

  /* ---- final CTA ---- */
  .hp-cta{background:#16202b;color:#fff;text-align:center;padding:64px 20px;}
  .hp-cta h2{font-size:32px;font-weight:800;margin:0 0 12px;}
  .hp-cta p{color:#b9c6d3;margin:0 0 28px;font-size:17px;}
  .hp-cta .hp-btn-primary{background:#2f6fb3;}

  @media (max-width:860px){
    .hp-hero,.hp-feat{grid-template-columns:1fr;gap:32px;padding:44px 0;}
    .hp-hero h1{font-size:34px;}
    .hp-rev-grid{grid-template-columns:1fr;}
    .hp-hero-img,.hp-feat-img{aspect-ratio:4/3;}
  }
</style>

<div class="hp">

  <!-- 1. HERO -->
  <section class="hp-hero hp-wrap">
    <div>
      <span class="hp-hero-eyebrow">The Key to Pain-Free Slumber</span>
      <h1>Wake up without back &amp; hip pain.</h1>
      <p class="lead">The Hipora&trade;&#65039; Alignment Pillow is your gateway to uninterrupted sleep and serene mornings. Let rest be the luxury you afford yourself every night.</p>
      <blockquote class="hp-quote">
        &ldquo;Sciatica made it impossible to find a comfortable sleeping position. After just a few nights with this pillow, my pain dropped noticeably. I now sleep soundly through the night.&rdquo;
        <span class="who">&mdash; Sarah J. <span class="hp-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span></span>
      </blockquote>
      <a href="<?php echo esc_url( $product_url ); ?>" class="hp-btn hp-btn-primary">Transform Your Sleep</a>
    </div>
    <div>
      <img class="hp-hero-img" src="<?php echo esc_attr( $hero_img ); ?>" alt="Hipora Alignment Pillow" loading="eager">
    </div>
  </section>

  <!-- 2. TRUST BADGES -->
  <section class="hp-trust">
    <div class="hp-trust-grid hp-wrap">
      <div class="hp-trust-item"><div class="ico">&#128666;</div><div class="t">Free Shipping</div><div class="s">On orders over &euro;70</div></div>
      <div class="hp-trust-item"><div class="ico">&#8617;&#65039;</div><div class="t">30-Day Risk-Free</div><div class="s">Money-back guarantee</div></div>
      <div class="hp-trust-item"><div class="ico">&#11088;</div><div class="t">4.8/5 Rating</div><div class="s">12,000+ happy sleepers</div></div>
      <div class="hp-trust-item"><div class="ico">&#128274;</div><div class="t">Secure Payment</div><div class="s">SSL encrypted checkout</div></div>
    </div>
  </section>

  <!-- 3. FEATURED PRODUCT -->
  <section class="hp-feat hp-wrap">
    <div>
      <img class="hp-feat-img" src="<?php echo esc_attr( $life_img ); ?>" alt="Hipora Alignment Pillow in use" loading="lazy">
    </div>
    <div>
      <h2>Hipora&trade;&#65039; Alignment Pillow</h2>
      <div class="rating">&#9733;&#9733;&#9733;&#9733;&#9733; <small>(4.8/5 rated by 80,000+ customers)</small></div>
      <ul>
        <li><span class="chk">&#10003;</span><span><b>Stabilizes Spine Alignment</b> &ndash; Promotes balanced posture</span></li>
        <li><span class="chk">&#10003;</span><span><b>Safeguards Against Sciatica</b> &ndash; Eases lumbar tension</span></li>
        <li><span class="chk">&#10003;</span><span><b>Minimizes Joint Contact</b> &ndash; Comforts arthritic areas</span></li>
        <li><span class="chk">&#10003;</span><span><b>Enhances Circulation</b> &ndash; Boosts leg and hip blood flow</span></li>
      </ul>
      <div class="hp-price">
        <span class="now">&euro;34.95</span>
        <span class="was">&euro;69.90</span>
        <span class="save">SAVE 50%</span>
      </div>
      <a href="<?php echo esc_url( $product_url ); ?>" class="hp-btn hp-btn-primary">Shop Now</a>
    </div>
  </section>

  <!-- 4. REVIEWS -->
  <section class="hp-rev">
    <div class="hp-wrap">
      <h2>Happy Sleepers Share</h2>
      <p class="sub">Real results from people who reclaimed their nights.</p>
      <div class="hp-rev-grid">
        <div class="hp-card">
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p>&ldquo;My hip pain used to wake me up every single night. Three weeks with the Hipora pillow and I finally sleep through till morning.&rdquo;</p>
          <div class="who">Michael R. <span class="badge">&#10003; Verified Buyer</span></div>
        </div>
        <div class="hp-card">
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p>&ldquo;I was skeptical, but the lower-back relief is real. Best purchase I&rsquo;ve made for my sleep in years.&rdquo;</p>
          <div class="who">Anna K. <span class="badge">&#10003; Verified Buyer</span></div>
        </div>
        <div class="hp-card">
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p>&ldquo;Knee and hip pressure is gone when I side-sleep now. Wish I had found this years ago.&rdquo;</p>
          <div class="who">David P. <span class="badge">&#10003; Verified Buyer</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="hp-cta">
    <h2>Don&rsquo;t let back pain control your nights.</h2>
    <p>Join 80,000+ sleepers who wake up pain-free.</p>
    <a href="<?php echo esc_url( $product_url ); ?>" class="hp-btn hp-btn-primary">Transform Your Sleep</a>
  </section>

</div>

<?php
get_footer();
