# Hipora-EN

WordPress theme + plugins for **en-hipora.noriks.com** (Hipora Alignment Pillow store).

## Structure
- `wp-content/themes/hipora/` — active theme (Veinora-based)
  - `front-page.php` — homepage (hero landing, CTAs to Shop + Product)
  - `single-product.php` — serves the cloned product HTML for the Hipora Alignment Pillow (PID 10); WC fallback for other products
  - `header.php` — header with **Home / Shop / Product** menu
- `wp-content/plugins/` — plugin set (WooCommerce active)

## Pages
- Home: `/`
- Shop: `/shop/` (WooCommerce)
- Product: `/product/hipora-alignment-pillow/` (cloned product page, ATC -> checkout, PID 10)
