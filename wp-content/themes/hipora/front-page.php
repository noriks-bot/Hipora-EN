<?php
/**
 * Hipora front page (homepage).
 * Hero landing in theme style with CTAs to Shop and Product.
 *
 * @package hipora
 */

get_header();

$product_url = home_url( '/product/hipora-alignment-pillow/' );
$shop_url    = home_url( '/shop/' );
$img_base    = '/static/site/cdn/shop/files/';
?>

<style>
  .hip-home{font-family:'Inter',system-ui,-apple-system,sans-serif;color:#0e1726;}
  .hip-wrap{max-width:1180px;margin:0 auto;padding:0 20px;}
  .hip-hero{display:grid;grid-template-columns:1.05fr .95fr;gap:48px;align-items:center;padding:64px 0 56px;}
  .hip-hero-eyebrow{display:inline-block;font-size:13px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:#0E7C7B;margin-bottom:16px;}
  .hip-hero h1{font-size:48px;line-height:1.08;font-weight:800;margin:0 0 18px;letter-spacing:-.02em;}
  .hip-hero p.lead{font-size:18px;line-height:1.6;color:#475569;margin:0 0 28px;max-width:520px;}
  .hip-stars{color:#f5a623;font-size:16px;margin-bottom:8px;}
  .hip-stars small{color:#475569;margin-left:8px;}
  .hip-price{display:flex;align-items:baseline;gap:12px;margin:0 0 28px;}
  .hip-price .now{font-size:30px;font-weight:800;color:#0e1726;}
  .hip-price .was{font-size:18px;color:#94a3b8;text-decoration:line-through;}
  .hip-price .save{background:#0E7C7B;color:#fff;font-size:13px;font-weight:700;padding:4px 10px;border-radius:999px;}
  .hip-cta{display:flex;gap:14px;flex-wrap:wrap;}
  .hip-btn{display:inline-flex;align-items:center;justify-content:center;font-weight:700;font-size:16px;padding:16px 30px;border-radius:12px;text-decoration:none;transition:.15s;}
  .hip-btn-primary{background:#0E7C7B;color:#fff;}
  .hip-btn-primary:hover{background:#0a5f5e;}
  .hip-btn-ghost{background:#fff;color:#0e1726;border:2px solid #e2e8f0;}
  .hip-btn-ghost:hover{border-color:#0E7C7B;color:#0E7C7B;}
  .hip-hero-img{border-radius:20px;overflow:hidden;box-shadow:0 24px 60px -20px rgba(14,124,123,.35);}
  .hip-hero-img img{display:block;width:100%;height:auto;}
  .hip-trust{display:flex;gap:14px;flex-wrap:wrap;margin-top:22px;}
  .hip-trust span{font-size:13px;color:#475569;display:flex;align-items:center;gap:6px;}
  .hip-features{background:#f6f9f9;padding:56px 0;}
  .hip-features-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;}
  .hip-feature{background:#fff;border-radius:16px;padding:30px 26px;border:1px solid #eef2f2;}
  .hip-feature .ico{width:48px;height:48px;border-radius:12px;background:#e6f4f3;display:flex;align-items:center;justify-content:center;margin-bottom:16px;color:#0E7C7B;}
  .hip-feature h3{font-size:18px;font-weight:700;margin:0 0 8px;}
  .hip-feature p{font-size:15px;line-height:1.55;color:#64748b;margin:0;}
  .hip-final{padding:64px 0;text-align:center;}
  .hip-final h2{font-size:34px;font-weight:800;letter-spacing:-.02em;margin:0 0 14px;}
  .hip-final p{font-size:17px;color:#475569;margin:0 0 28px;}
  @media(max-width:880px){
    .hip-hero{grid-template-columns:1fr;gap:30px;padding:36px 0;}
    .hip-hero h1{font-size:34px;}
    .hip-features-grid{grid-template-columns:1fr;}
    .hip-hero-img{order:-1;}
  }
</style>

<div class="hip-home">

  <!-- HERO -->
  <section class="hip-wrap hip-hero">
    <div class="hip-hero-copy">
      <span class="hip-hero-eyebrow">Better sleep. Better alignment.</span>
      <h1>Wake up without the back &amp; hip pain.</h1>
      <div class="hip-stars">★★★★★ <small>4.8/5 · 12,000+ happy sleepers</small></div>
      <p class="lead">The Hipora Alignment Pillow keeps your spine, hips and knees in a natural position all night — so you stop tossing, turning and waking up sore.</p>
      <div class="hip-price">
        <span class="now">€34.95</span>
        <span class="was">€69.90</span>
        <span class="save">−50%</span>
      </div>
      <div class="hip-cta">
        <a class="hip-btn hip-btn-primary" href="<?php echo esc_url( $product_url ); ?>">Shop the pillow →</a>
        <a class="hip-btn hip-btn-ghost" href="<?php echo esc_url( $shop_url ); ?>">Browse all products</a>
      </div>
      <div class="hip-trust">
        <span>🚚 Free shipping over €70</span>
        <span>↩ 30-day money-back</span>
        <span>🔒 Secure checkout</span>
      </div>
    </div>
    <div class="hip-hero-img">
      <a href="<?php echo esc_url( $product_url ); ?>">
        <img src="<?php echo esc_attr( $img_base ); ?>1st80.jpg?width=1100" alt="Hipora Alignment Pillow" loading="eager" width="1100" height="1100">
      </a>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="hip-features">
    <div class="hip-wrap">
      <div class="hip-features-grid">
        <div class="hip-feature">
          <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M2 12h20"/></svg></div>
          <h3>Neutral spine all night</h3>
          <p>Ergonomic contour fills the gap between your knees to keep hips and lower back aligned.</p>
        </div>
        <div class="hip-feature">
          <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg></div>
          <h3>Pressure relief</h3>
          <p>Soft yet supportive memory foam eases pressure on hips, knees and joints.</p>
        </div>
        <div class="hip-feature">
          <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
          <h3>Stays in place</h3>
          <p>Designed to hold its position so you wake up refreshed, not realigning all night.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="hip-wrap hip-final">
    <h2>Ready for pain-free mornings?</h2>
    <p>Join thousands who finally sleep through the night — risk-free for 30 days.</p>
    <a class="hip-btn hip-btn-primary" href="<?php echo esc_url( $product_url ); ?>">Get the Hipora Pillow — €34.95</a>
  </section>

</div>

<?php
get_footer();
