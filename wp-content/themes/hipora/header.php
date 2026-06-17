<?php
/**
 * Hipora theme header — Shopify-clone (Dawn) header to match product page styling.
 *
 * @package hipora
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Hipora clone (Dawn) base styles to match product page -->
<link rel="stylesheet" href="/static/site/cdn/shop/t/2/assets/base.css%3Fv=19506001652290873291706540609.css" media="all">
<link rel="stylesheet" href="/static/site/cdn/shop/t/2/assets/component-predictive-search.css%3Fv=76514217051199997821706540610.css" media="all">
<link rel="stylesheet" href="/static/site/cdn/shop/t/2/assets/component-card.css%3Fv=97748468422666499891706540609.css" media="all">
<script src="/static/site/cdn/shop/t/2/assets/secondary.js%3Fv=70897601511734191871706540610" defer="defer"></script>
<script src="/static/site/ext/shrine-main.js" defer="defer"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class( 'gradient' ); ?>>
<?php wp_body_open(); ?>

<a class="skip-to-content-link button visually-hidden" href="#MainContent">Skip to content</a>

<?php /* boris-hide-hf */ if ( ! ( ( function_exists( 'is_cart' ) && is_cart() ) || ( function_exists( 'is_checkout' ) && is_checkout() ) ) ) : ?>
<div id="shopify-section-sections--16730261455006__1774378119694337d6" class="shopify-section shopify-section-group-header-group"><div id="shopify-block-AUlFvS0ZnRTIzQmY5S__ai_gen_block_2338cec_gVekk7" class="shopify-block">


<style data-shopify>
  .ai-announcement-bar-aulfvs0znrtizqmy5saigenblock2338cecgvekk7 {
    display: block;
    width: 100%;
    background-color: #68a7fa;
    color: #ffffff;
    text-align: center;
    padding: 12px 20px;
    text-decoration: none;
    transition: background-color 0.3s ease;
    cursor: pointer;
  }

  .ai-announcement-bar-aulfvs0znrtizqmy5saigenblock2338cecgvekk7:hover {
    background-color: #347de4;
  }

  .ai-announcement-bar-content-aulfvs0znrtizqmy5saigenblock2338cecgvekk7 {
    font-size: 17px;
    font-weight: 600;
    letter-spacing: 0.5px;
  }

  @media screen and (max-width: 749px) {
    .ai-announcement-bar-content-aulfvs0znrtizqmy5saigenblock2338cecgvekk7 {
      font-size: 15.3px;
    }
  }
</style>

<a
  href="/collections/best-sellers"
  class="ai-announcement-bar-aulfvs0znrtizqmy5saigenblock2338cecgvekk7"
  
>
  <div class="ai-announcement-bar-content-aulfvs0znrtizqmy5saigenblock2338cecgvekk7">
    Sales Ends Tonight - Free Shipping
  </div>
</a>


</div>


</div><div id="shopify-section-sections--16730261455006__header" class="shopify-section shopify-section-group-header-group section-header"><style>
  header-drawer {
    justify-self: start;
    margin-left: -1.2rem;
  }

  .header__heading-link.media {
    --media-radius: 0;
    width: 200px;
    max-width: 200px;
  }
  
  .header__heading-link.media img {
    object-fit: contain;
  }

  .header__heading-link.media .header__heading-logo--secondary {
    display: none;
  }
  
  @media screen and (max-width: 749px) {
    .header__heading-link.media {
      width: 130px;
      max-width: 130px;
    }
  }

  
    .header__icon--search {
      display: none;
    }
  
@media screen and (min-width: 990px) {
    header-drawer {
      display: none;
    }
  }

  .menu-drawer-container {
    display: flex;
  }

  .list-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .list-menu--inline {
    display: inline-flex;
    flex-wrap: wrap;
  }

  summary.list-menu__item {
    padding-right: 2.7rem;
  }

  .list-menu__item {
    display: flex;
    align-items: center;
    line-height: calc(1 + 0.3 / var(--font-body-scale));
  }

  .list-menu__item--link {
    text-decoration: none;
    padding-bottom: 1rem;
    padding-top: 1rem;
    line-height: calc(1 + 0.8 / var(--font-body-scale));
  }

  @media screen and (min-width: 750px) {
    .list-menu__item--link {
      padding-bottom: 0.5rem;
      padding-top: 0.5rem;
    }
  }
</style><style data-shopify>.header {
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .section-header {
    position: sticky; /* This is for fixing a Safari z-index issue. PR #2147 */
    margin-bottom: 0px;
  }

  @media screen and (min-width: 750px) {
    .section-header {
      margin-bottom: 0px;
    }
  }

  @media screen and (min-width: 990px) {
    .header {
      padding-top: 20px;
      padding-bottom: 20px;
    }
  }</style>

<svg xmlns="http://www.w3.org/2000/svg" class="hidden">
  <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z" fill="currentColor"/>
  </symbol>

  <symbol id="icon-reset" class="icon icon-close"  fill="none" viewBox="0 0 18 18" stroke="currentColor">
    <circle r="8.5" cy="9" cx="9" stroke-opacity="0.2"/>
    <path d="M6.82972 6.82915L1.17193 1.17097" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
    <path d="M1.22896 6.88502L6.77288 1.11523" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
  </symbol>

  <symbol id="icon-close" class="icon icon-close" fill="none" viewBox="0 0 18 17">
    <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
  </symbol>
</svg>
<sticky-header data-sticky-type="on-scroll-up" class="header-wrapper color-background-1 gradient header-wrapper--border-bottom">
  <header class="header header--middle-center header--mobile-center page-width header--has-menu"><header-drawer data-breakpoint="tablet" data-drawer="56WXXJmLZx6vvdwsZA0WayH9uoWlpGpfbrY6W8KgYvPks5tUinpP4kZSrcpx6sKL+rOaGEpN5+sotLSpDIuVHpLNKfbTFjKClyheDkLrSsJRxNSzZTNLs1ilh7BcE8Ab290wUxDd/SHsTQoKEKv0E3S/xsMj7LJAGF4qqb7TVzzmWVmQO86PitJcEj3gNgvM8aqFb/b87heOqPa2JEMllQN9tz5xvBDLCN/sXFnr3WginHy5/yZ+hQtF3I76F1xz4olLoREhJbcflPhHjAFw2d9Xtog5j7uzDbNmDVojGrJEA8KxymCphkAHE+Q/Ys4v18qseKlmQvKVaV+SK6jItSvKhSl78W1lQR5Neta1ImuFqcwvmw7eWmE8KsK8uDves9PW9+S5wE2WqJzVip4f6g==">
        <details id="Details-menu-drawer-container" class="menu-drawer-container">
          <summary class="header__icon header__icon--menu header__icon--summary link focus-inset" aria-label="Menu">
            <span>
              <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-hamburger"
  fill="none"
  viewBox="0 0 18 16"
>
  <path d="M1 .5a.5.5 0 100 1h15.71a.5.5 0 000-1H1zM.5 8a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1A.5.5 0 01.5 8zm0 7a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1a.5.5 0 01-.5-.5z" fill="currentColor">
</svg>

              <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

            </span>
          </summary>
          <div id="menu-drawer" class="gradient menu-drawer motion-reduce color-background-1" tabindex="-1">
            <div class="menu-drawer__inner-container">
              <div class='menu-drawer__mobile-content menu-drawer__title-and-close-btn'>
                <h3 class='menu-drawer__title'>Menu</h3>
                <button class='menu-drawer__close-btn menu-drawer__close-menu-btn header__icon header__icon--menu header__icon--summary link focus-inset'>
                  <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

                </button>
              </div>
              <div class="menu-drawer__navigation-container">
                <nav class="menu-drawer__navigation">
                  <ul class="menu-drawer__menu has-submenu list-menu" role="list"><li><a href="/" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                            Home
                          </a></li><li><a href="/shop/" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                            Shop
                          </a></li><li><a href="/product/hipora-alignment-pillow/" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                            Product
                          </a></li></ul>
                </nav>
<!--                 start secondary nav -->
                
<!--                 end secondary nav -->
                <div class="menu-drawer__utility-links"><a href="#" class="menu-drawer__account link focus-inset h5">
                      <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-account"
  fill="none"
  viewBox="0 0 18 19"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M6 4.5a3 3 0 116 0 3 3 0 01-6 0zm3-4a4 4 0 100 8 4 4 0 000-8zm5.58 12.15c1.12.82 1.83 2.24 1.91 4.85H1.51c.08-2.6.79-4.03 1.9-4.85C4.66 11.75 6.5 11.5 9 11.5s4.35.26 5.58 1.15zM9 10.5c-2.5 0-4.65.24-6.17 1.35C1.27 12.98.5 14.93.5 18v.5h17V18c0-3.07-.77-5.02-2.33-6.15-1.52-1.1-3.67-1.35-6.17-1.35z" fill="currentColor">
</svg>

Log in</a><ul class="list list-social list-unstyled" role="list"><li class="list-social__item">
                        <a href="#" class="list-social__link link"><svg aria-hidden="true" focusable="false" class="icon icon-facebook" viewBox="0 0 18 18">
  <path fill="currentColor" d="M16.42.61c.27 0 .5.1.69.28.19.2.28.42.28.7v15.44c0 .27-.1.5-.28.69a.94.94 0 01-.7.28h-4.39v-6.7h2.25l.31-2.65h-2.56v-1.7c0-.4.1-.72.28-.93.18-.2.5-.32 1-.32h1.37V3.35c-.6-.06-1.27-.1-2.01-.1-1.01 0-1.83.3-2.45.9-.62.6-.93 1.44-.93 2.53v1.97H7.04v2.65h2.24V18H.98c-.28 0-.5-.1-.7-.28a.94.94 0 01-.28-.7V1.59c0-.27.1-.5.28-.69a.94.94 0 01.7-.28h15.44z">
</svg>
<span class="visually-hidden">Facebook</span>
                        </a>
                      </li></ul>
                </div>
              </div>
            </div>
          </div>
        </details>
      </header-drawer><nav class="header__inline-menu">
        <ul class="list-menu list-menu--inline" role="list"><li><a href="/" class="header__menu-item header__menu-item--main list-menu__item link link--text focus-inset">
                  <span>Home</span>
                </a></li><li><a href="/shop/" class="header__menu-item header__menu-item--main list-menu__item link link--text focus-inset">
                  <span>Shop</span>
                </a></li><li><a href="/product/hipora-alignment-pillow/" class="header__menu-item header__menu-item--main list-menu__item link link--text focus-inset">
                  <span>Product</span>
                </a></li></ul>
      </nav><a 
            href="/" 
            class="header__heading-link link link--text focus-inset media media--transparent ratio"style="--ratio-percent: 25.0%"
            
          ><span style="font-weight:900;font-size:26px;letter-spacing:2px;color:#05467E;font-family:Arial,Helvetica,sans-serif;">HIPORA</span>
</a><div class="header__icons">

      <div class="CC_KT_WRAPPER_MANUAL"></div>
      <style>
        .CC_KT_WRAPPER_MANUAL { display: inline-block; font-size: 15px; }
        .ktc-dropdown { top: 8px; }
        .ktc-dropdown .ktc-body .ktc-content { color: black; }
        .ktc-dropdown .ktc-body { background-color: white; min-width: 96px; z-index: 1; left: -25px; }
        .ktc-dropdown .ktc-body .ktc-content .ktc-item:hover { background-color: #e8e8e8; }
        .ktc-dropdown .ktc-head { align-items: center; padding: 0 0 0 6px; }
        .ktc-dropdown .ktc-head .ktc-message { white-space: nowrap; }
        .ktc-dropdown .currency-flag { border-radius: unset; margin-right: 0px; }
        .ktc-dropdown .ktc-head .ktc-message .ktcurrency { display: none; }
        @media (min-width: 480px) {
          .ktc-dropdown { top: 8px; }
          .ktc-dropdown .ktc-head .ktc-message .ktcurrency { display: inline-block; }
          .ktc-dropdown .ktc-head { padding: 3px 8px; }
          .ktc-dropdown .ktc-body { left: 0; }
        }
        @media (min-width: 769px) {
          .ktc-dropdown { top: 8px; }
        }
      </style>
        
      <details-modal class="header__search">
        <details>
          <summary class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle" aria-haspopup="dialog" aria-label="Search">
            <span>
              <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false">
                <use href="#icon-search">
              </svg>
              <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false">
                <use href="#icon-close">
              </svg>
            </span>
          </summary>
          <div class="search-modal modal__content gradient" role="dialog" aria-modal="true" aria-label="Search">
            <div class="modal-overlay"></div>
            <div class="search-modal__content search-modal__content--right search-modal__content-bottom" tabindex="-1"><predictive-search class="search-modal__form" data-main='false' data-loading-text="Loading..."><form action="/search" method="get" role="search" class="search search-modal__form search-modal__form--border-light search-modal__form--polyfill search-modal__form--predictive" data-modal="56WXXJmLZx6vvdwsZA0WayH9uoWlpGpfbrY6W8KgYvPks5tUinpP4kZSrcpx6sKL+rOaGEpN5+sotLSpDIuVHpLNKfbTFjKClyheDkLrSsJRxNSzZTNLs1ilh7BcE8Ab290wUxDd/SHsTQoKEKv0E3S/xsMj7LJAGF4qqb7TVzzmWVmQO86PitJcEj3gNgvM8aqFb/b87heOqPa2JEMllQN9tz5xvBDLCN/sXFnr3WginHy5/yZ+hQtF3I76F1xz4olLoREhJbcflPhHjAFw2d9Xtog5j7uzDbNmDVojGrJEA8KxymCphkAHE+Q/Ys4v18qseKlmQvKVaV+SK6jItSvKhSl78W1lQR5Neta1ImuFqcwvmw7eWmE8KsK8uDves9PW9+S5wE2WqJzVip4f6g==">
                    <div class="field">
                      <input class="search__input field__input"
                        id="Search-In-Modal"
                        type="search"
                        name="q"
                        value=""
                        placeholder="Search"role="combobox"
                          aria-expanded="false"
                          aria-owns="predictive-search-results"
                          aria-controls="predictive-search-results"
                          aria-haspopup="listbox"
                          aria-autocomplete="list"
                          autocorrect="off"
                          autocomplete="off"
                          autocapitalize="off"
                          spellcheck="false">
                      <label class="field__label" for="Search-In-Modal">Search</label>
                      <input type="hidden" name="options[prefix]" value="last">
                      <button type="reset" class="reset__button field__button hidden" aria-label="Clear search term">
                        <svg class="icon icon-close" aria-hidden="true" focusable="false">
                          <use xlink:href="#icon-reset">
                        </svg>
                      </button>
                      <button class="search__button field__button" aria-label="Search">
                        <svg class="icon icon-search" aria-hidden="true" focusable="false">
                          <use href="#icon-search">
                        </svg>
                      </button>
                    </div><div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>
                        <div class="predictive-search__loading-state">
                          <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                            <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                          </svg>
                        </div>
                      </div>

                      <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span></form></predictive-search><button type="button" class="search-modal__close-button modal__close-button link link--text focus-inset" aria-label="Close">
                <svg class="icon icon-close" aria-hidden="true" focusable="false">
                  <use href="#icon-close">
                </svg>
              </button>
            </div>
          </div>
        </details>
      </details-modal><a href="#" class="header__icon header__icon--account link focus-inset small-hide">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-account"
  fill="none"
  viewBox="0 0 18 19"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M6 4.5a3 3 0 116 0 3 3 0 01-6 0zm3-4a4 4 0 100 8 4 4 0 000-8zm5.58 12.15c1.12.82 1.83 2.24 1.91 4.85H1.51c.08-2.6.79-4.03 1.9-4.85C4.66 11.75 6.5 11.5 9 11.5s4.35.26 5.58 1.15zM9 10.5c-2.5 0-4.65.24-6.17 1.35C1.27 12.98.5 14.93.5 18v.5h17V18c0-3.07-.77-5.02-2.33-6.15-1.52-1.1-3.67-1.35-6.17-1.35z" fill="currentColor">
</svg>

          <span class="visually-hidden">Log in</span>
        </a><a href="/cart/" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble">
    <svg class="icon icon-cart" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.53 44.83" style='transform: scale(0.9);'>
      <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12.36,10.93l29.38-.08q.72,16.41,1.45,32.8H10.66Z" transform="translate(-9.16 -0.32)"/>
      <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19.39,10.85V9.52a7.7,7.7,0,1,1,15.39,0v1.33" transform="translate(-9.16 -0.32)"/>
      <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19.12,15.46a7.7,7.7,0,0,0,15.08,0" transform="translate(-9.16 -0.32)"/>
    </svg>
<span class="visually-hidden">Cart</span></a>
    </div>
  </header>
</sticky-header>

<?php endif; ?>

<div id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
