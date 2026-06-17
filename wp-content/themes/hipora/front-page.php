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
$hero_img    = $img . 'home-mine.png%3Fv=1713833230&width=1500';
$pay_img     = $img . 'Anadir_un_titulo_2_23fc34aa-b8b8-4cef-9664-b782ba3013b1.png%3Fv=1709037417&width=1100';
$advert_img  = $img . 'Anadir_un_titulo_3.png%3Fv=1709037748';
$feat_img    = $img . '1st80.jpg%3Fv=1761050181&width=1100';
$avatar_img  = $img . 'homeReview.png%3Fv=1711118659';
$life_img    = $img . 'kathy_2.jpg';
$rev_img     = $img . 'feedback_1.jpg';
?>

<style>
  .hp{font-family:'Montserrat','Inter',system-ui,-apple-system,sans-serif;color:#16202b;}
  .hp-wrap{max-width:1400px;margin:0 auto;padding:0 50px;}
  @media (max-width:749px){.hp-wrap{padding:0 15px;}}
  .hp section{box-sizing:border-box;}

  /* ---- 1. Hero / The Key to Pain-Free Slumber (revoget 1:1) ---- */
  .hp-hero{display:grid;grid-template-columns:8fr 4fr;gap:40px;align-items:center;padding:36px 0;}
  .hp-hero h1{font-size:40px;line-height:1.12;font-weight:700;margin:0 0 20px;letter-spacing:-.01em;}
  .hp-hero h1 u{text-decoration:underline;text-underline-offset:4px;}
  .hp-hero p.lead{font-size:17px;line-height:1.6;color:#3a4754;margin:0 0 24px;}
  .hp-btn{display:inline-flex;align-items:center;justify-content:center;font-weight:600;font-size:16px;padding:15px 34px;border-radius:6px;text-decoration:none;transition:.15s;}
  .hp-btn-primary{background:#121212;color:#fff;}
  .hp-btn-primary:hover{opacity:.85;}
  .hp-pay{margin:22px 0 26px;}
  .hp-pay img{max-width:340px;width:100%;height:auto;display:block;}
  .hp-review{display:flex;gap:14px;align-items:flex-start;background:#f3f3f3;border-radius:8px;padding:16px 18px;}
  .hp-review img{width:64px;height:64px;border-radius:50%;object-fit:cover;flex:0 0 auto;}
  .hp-review p{margin:0;font-size:13.5px;line-height:1.55;color:#121212;}
  .hp-review .stars{color:#f5a623;letter-spacing:1px;}
  .hp-hero-img{width:100%;display:block;height:auto;}

  /* ---- 2. Trust badges ---- */
  /* ---- 2. AS ADVERTISED ON (logo_list) ---- */
  .hp-advert{padding:8px 0;text-align:center;}
  .hp-advert img{max-height:50px;width:auto;max-width:100%;display:inline-block;}

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
    .hp-hero,.hp-feat{grid-template-columns:1fr;gap:28px;padding:32px 0;}
    .hp-hero h1{font-size:30px;}
    .hp-rev-grid{grid-template-columns:1fr;}
    .hp-feat-img{aspect-ratio:4/3;}
  }
</style>

<div class="hp">

  <!-- 1. HERO (revoget 1:1) -->
  <section class="hp-hero hp-wrap">
    <div>
      <h1><u>The Key to Pain-Free Slumber</u></h1>
      <p class="lead">Our Alignment Pillow is your gateway to uninterrupted slumber and serene mornings. Let rest be the luxury you afford yourself every night.</p>
      <a href="<?php echo esc_url( $product_url ); ?>" class="hp-btn hp-btn-primary">Transform Your Sleep</a>
      <div class="hp-pay">
        <img src="<?php echo esc_attr( $pay_img ); ?>" alt="Accepted payment methods" loading="lazy">
      </div>
      <div class="hp-review">
        <img src="<?php echo esc_attr( $avatar_img ); ?>" alt="Sarah J." loading="lazy">
        <p>&ldquo;Sciatica was making it impossible for me to find a comfortable sleeping position, and daily tasks such as walking or sitting were excruciating. However, after just a few nights of using this pillow, I experienced a <strong>noticeable decrease in pain</strong>. I&rsquo;m now able to <strong>sleep soundly throughout the night and go about my day</strong> without enduring constant pain.&rdquo; &ndash; Sarah J. <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>
      </div>
    </div>
    <div>
      <img class="hp-hero-img" src="<?php echo esc_attr( $hero_img ); ?>" alt="Hipora Alignment Pillow" loading="eager">
    </div>
  </section>

  <!-- 2. AS ADVERTISED ON (revoget logo_list) -->
  <section class="hp-advert">
    <div class="hp-wrap">
      <img src="<?php echo esc_attr( $advert_img ); ?>" alt="As advertised on Yahoo, GQ, Health, AOL, MSN" loading="lazy">
    </div>
  </section>

  <!-- 3. FEATURED PRODUCT -->
  <section class="hp-feat hp-wrap">
    <div>
      <img class="hp-feat-img" src="<?php echo esc_attr( $feat_img ); ?>" alt="Hipora Alignment Pillow" loading="lazy">
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

</div>

<?php
get_footer();
