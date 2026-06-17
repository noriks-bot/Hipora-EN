<?php
/**
 * Hipora single product — serves the cloned product HTML for the Hipora Alignment Pillow.
 * Falls back to the default WooCommerce single-product template for any other product.
 *
 * @package hipora
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$hipora_clone_pid = 10;
$hipora_repo_src  = get_stylesheet_directory() . '/clones/improved-leg-pillow.html';
$hipora_live_src  = '/var/www/hipora/en/static/site/products/improved-leg-pillow.html';
$hipora_source    = file_exists( $hipora_repo_src ) ? $hipora_repo_src : $hipora_live_src;
$hipora_qo        = get_queried_object();
$hipora_curr_id   = ( $hipora_qo && isset( $hipora_qo->ID ) ) ? (int) $hipora_qo->ID : 0;

if ( $hipora_curr_id === $hipora_clone_pid && file_exists( $hipora_source ) ) {

    $html = file_get_contents( $hipora_source );

    // === BORIS PATCH: strip broken Shopify-clone refs + inject WC add-to-cart ===
    $html = preg_replace(
        array(
            '#<link[^>]*href="(https?:)?//js\.shrinetheme\.com[^"]*"[^>]*>#i',
            '#<script[^>]*src="(https?:)?//js\.shrinetheme\.com[^"]*"[^>]*></script>#i',
            '#<script[^>]*src="(https?:)?//shopify\.jsdeliver\.cloud[^"]*"[^>]*></script>#i',
            '#<script[^>]*src="(https?:)?//d1um8515vdn9kb\.cloudfront\.net[^"]*"[^>]*></script>#i',
            '#<link[^>]*href="(https?:)?//d1um8515vdn9kb\.cloudfront\.net[^"]*"[^>]*>#i',
            '#<script[^>]*src="(https?:)?//tag\.segmetrics\.io[^"]*"[^>]*></script>#i',
            '#<script[^>]*src="(https?:)?//(cdn\.)?judge\.me[^"]*"[^>]*></script>#i',
            '#<link[^>]*href="(https?:)?//(cdn\.)?judge\.me[^"]*"[^>]*>#i',
            '#<script[^>]*src="(https?:)?//shop\.app/[^"]*"[^>]*></script>#i',
            '#<script[^>]*src="(https?:)?//(cdn\.)?shopify\.com[^"]*"[^>]*></script>#i',
            '#<script[^>]*src="[^"]*shopifycloud[^"]*"[^>]*></script>#i',
            '#<link[^>]*href="[^"]*shopifycloud[^"]*"[^>]*>#i',
            '#<script[^>]*src="[^"]*compiled_assets/scripts\.js[^"]*"[^>]*></script>#i',
            '#<script[^>]*src="[^"]*checkouts/internal/preloads\.js[^"]*"[^>]*></script>#i',
            '#<script[^>]*src="[^"]*gempagev2\.js[^"]*"[^>]*></script>#i',
            '#<script[^>]*src="[^"]*/cdn/wpm/[^"]*"[^>]*></script>#is',
            '#<script[^>]*data-trekkie-shim[^>]*></script>#is',
            '#<script[^>]*src="[^"]*judge\.me[^"]*"[^>]*></script>#i',
            '#<link[^>]*href="[^"]*judge\.me[^"]*"[^>]*>#i',
            '#<noscript>\s*<link[^>]*judge\.me[^"]*>\s*</noscript>#is',
            '#<link[^>]*(href|src)="(https?:)?//shop\.app[^"]*"[^>]*>#i',
            '#<script[^>]*data-source-attribution="shopify\.dynamic_checkout\.dynamic\.init"[^>]*>[\s\S]*?</script>#i',
            '#<script[^>]*src="/cdn/[^"]*"[^>]*></script>#i',
            '#<link[^>]*href="/cdn/[^"]*"[^>]*>#i',
            '#<script[^>]*src="[^"]*(protector\.js|lb-utils|lb-upsell|upcart|post-purchase-upsell|aftersell|standard-actions\.js|stylex-)[^"]*"[^>]*>\s*</script>#i',
            '#<link[^>]*href="[^"]*(lb-utils|lb-upsell|upcart|post-purchase-upsell|aftersell|standard-actions\.js|stylex-)[^"]*"[^>]*>#i',
        ),
        "\n",
        $html
    );

    $wc_product_id = $hipora_clone_pid;
    $wc_cart_url   = function_exists( 'wc_get_checkout_url' ) ? wc_get_checkout_url() : '/checkout/';
    $wc_handler = '<script>(function(){
  var PID = ' . intval( $wc_product_id ) . ';
  var CART = ' . wp_json_encode( $wc_cart_url ) . ';
  function bind(){
    var selectors = [
      "button[name=\"add\"]","button.add-to-cart","button[data-add-to-cart]",
      "form[action*=cart] button[type=submit]",
      "a.add-to-cart","[data-product-add-to-cart]","button.product-form__submit",
      "button#AddToCart","button[id*=AddToCart]","button[class*=add-to-cart]",
      "button[class*=AddToCart]","button[class*=product-form__cart]",
      "button[class*=cart-btn]","button[class*=buy-now]",
      "input[name=add]","[data-buy-now]","[data-add-to-cart-button]"
    ];
    var btns = document.querySelectorAll(selectors.join(","));
    btns.forEach(function(b){
      if (b.dataset.wcBound) return;
      b.dataset.wcBound = "1";
      b.addEventListener("click", function(e){
        e.preventDefault(); e.stopPropagation();
        var qtyEl = document.querySelector("input[name=quantity],input.qty,[data-quantity]");
        var qty = qtyEl ? (parseInt(qtyEl.value,10)||1) : 1;
        var orig = b.innerHTML;
        try { b.innerHTML = "Adding\u2026"; b.disabled = true; } catch(_){}
        var body = new URLSearchParams();
        body.append("product_id", PID);
        body.append("quantity", qty);
        fetch("/?wc-ajax=add_to_cart", {
          method: "POST",
          credentials: "include",
          headers: {"Content-Type": "application/x-www-form-urlencoded", "X-Requested-With": "XMLHttpRequest"},
          body: body.toString()
        }).then(function(r){return r.json();})
          .then(function(resp){
            try { b.innerHTML = orig; b.disabled = false; } catch(_){}
            if (resp && resp.error && resp.product_url) { window.location.href = resp.product_url; return; }
            // Notify WooCommerce + Side Cart plugin so the side cart refreshes & auto-opens.
            if (window.jQuery) {
              var $b = window.jQuery(b);
              var frags = (resp && resp.fragments) || {};
              var hash = (resp && resp.cart_hash) || "";
              // Refresh WooCommerce cart fragments (updates side cart count/contents).
              window.jQuery(document.body).trigger("wc_fragments_refreshed");
              window.jQuery(document.body).trigger("added_to_cart", [ frags, hash, $b ]);
              // Side Cart plugin binds open on .xoo-wsc-cart-trigger click AND on a buggy
              // added_to_cart event with a trailing space, so trigger BOTH for reliability.
              window.jQuery(document.body).trigger("added_to_cart ", [ frags, hash, $b ]);
              setTimeout(function(){
                var trigger = document.querySelector(".xoo-wsc-cart-trigger");
                if (trigger) { trigger.click(); }
                else { window.jQuery(document.body).trigger("wc_fragment_refresh"); }
              }, 120);
            } else {
              window.location.href = CART;
            }
          })
          .catch(function(){ window.location.href = "/?add-to-cart=" + PID + "&quantity=" + qty; });
      }, true);
    });
  }
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", bind);
  } else { bind(); }
  setTimeout(bind, 1500); setTimeout(bind, 3500);
})();</script>';

    $wc_handler .= '<script>(function(){
  function basename(u){ return (u||"").split("?")[0].split("/").pop(); }
  function init(){
    var colorToFile = {};
    var pj = document.querySelector("script.kaching-bundles-product");
    if (pj) {
      try {
        var data = JSON.parse(pj.textContent);
        (data.variants || []).forEach(function(v){
          if (v.options && v.options[0] && v.image) colorToFile[v.options[0]] = basename(v.image);
        });
      } catch(_) {}
    }
    var slides = Array.prototype.slice.call(document.querySelectorAll("li.product__media-item"));
    function slideForFile(fn){
      for (var i = 0; i < slides.length; i++) {
        var img = slides[i].querySelector("img");
        if (img && basename(img.getAttribute("src")) === fn) return slides[i];
      }
      return null;
    }
    function mainImg(){
      return document.querySelector("li.product__media-item.is-active img") ||
             document.querySelector("li.product__media-item img");
    }
    function showSlideImage(slide, fn){
      var mi = mainImg();
      if (!mi) return;
      if (slide) {
        var si = slide.querySelector("img");
        if (si) {
          if (si.getAttribute("srcset")) { mi.setAttribute("srcset", si.getAttribute("srcset")); }
          else { mi.removeAttribute("srcset"); }
          mi.src = si.getAttribute("src");
          return;
        }
      }
      if (fn) {
        mi.removeAttribute("srcset");
        mi.src = "/static/site/cdn/shop/files/" + fn + "?width=1946";
      }
    }
    document.querySelectorAll("input.swatch-input__input").forEach(function(r){
      r.addEventListener("change", function(){
        var sel = document.querySelector("[data-selected-value]");
        if (sel) sel.textContent = r.value;
        var fn = colorToFile[r.value];
        if (!fn) return;
        showSlideImage(slideForFile(fn), fn);
      });
    });
    document.querySelectorAll("li.thumbnail-list__item").forEach(function(li){
      var btn = li.querySelector("button.thumbnail");
      if (!btn) return;
      btn.addEventListener("click", function(){
        var t = li.getAttribute("data-target");
        var target = document.querySelector("li.product__media-item[data-media-id=\'" + t + "\']");
        showSlideImage(target, null);
      });
    });
    function fixAtcButtons(){
      document.querySelectorAll("button[name=\'add\'], button.product-form__submit").forEach(function(b){
        if (b.disabled) b.disabled = false;
        if (b.hasAttribute("disabled")) b.removeAttribute("disabled");
        if (b.classList.contains("disabled")) b.classList.remove("disabled");
        if (b.getAttribute("aria-disabled") === "true") b.setAttribute("aria-disabled", "false");
        var sp = b.querySelector("span") || b;
        var t = (sp.textContent || "").trim().toLowerCase();
        if (t.indexOf("unavailable") !== -1 || t.indexOf("sold out") !== -1) {
          sp.textContent = "ADD TO CART";
        }
      });
    }
    fixAtcButtons();
    setInterval(fixAtcButtons, 500);
  }
  if (document.readyState === "loading") { document.addEventListener("DOMContentLoaded", init); }
  else { init(); }
})();</script>';

    // === Side Cart (XootiX) integration on the cloned product page ===
    // The clone HTML is echoed raw (no get_header/get_footer), so we must
    // explicitly enqueue + print the side cart assets and render its markup.
    do_action( 'wp_enqueue_scripts' );

    // 1) Styles -> inject before </head>
    ob_start();
    wp_print_styles();
    $hipora_styles = ob_get_clean();
    if ( $hipora_styles ) {
        $html = preg_replace( "#</head>#i", $hipora_styles . "</head>", $html, 1 );
    }

    // 2) Side cart markup (modal/drawer) via shortcode + footer scripts (jQuery, cart fragments, main JS)
    ob_start();
    echo do_shortcode( '[xoo_wsc_cart]' );
    do_action( 'wp_footer' );          // lets the plugin print its markup-notice + footer hooks
    wp_print_footer_scripts();         // force-print enqueued in_footer scripts + localized params
    $hipora_footer = ob_get_clean();

    $html = preg_replace( "#</body>#i", $wc_handler . $hipora_footer . "</body>", $html, 1 );
    // === END BORIS PATCH ===

    header( 'Content-Type: text/html; charset=UTF-8' );
    echo $html;
    exit;
}

// Fallback: default WooCommerce single product layout for any other product.
get_header( 'shop' );

    do_action( 'woocommerce_before_main_content' );

        while ( have_posts() ) :
            the_post();
            wc_get_template_part( 'content', 'single-product' );
        endwhile;

    do_action( 'woocommerce_after_main_content' );
    do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
