<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Tailwind CSS v4 (Browser Build) -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <style type="text/tailwindcss">
    @import "tailwindcss";

    @theme {
      --color-brand-bg: #0d0d0d;
      --color-brand-surface: #1a1a1a;
      --color-brand-primary: #c9a96e;
      --color-brand-text: #f0ece4;
      --color-brand-muted: #888888;
      --color-brand-border: #2e2e2e;

      --font-serif-en: "Cormorant Garamond", serif;
      --font-serif-jp: "Noto Serif JP", serif;
      --font-sans-jp: "Noto Sans JP", sans-serif;
    }

    body {
      background-color: var(--color-brand-bg);
      color: var(--color-brand-text);
      font-family: var(--font-sans-jp);
      -webkit-font-smoothing: antialiased;
    }

    html {
      scroll-behavior: smooth;
    }

    /* Fade-in animation for scroll reveal */
    .fade-in {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.8s cubic-bezier(0.25, 0.1, 0.25, 1),
                  transform 0.8s cubic-bezier(0.25, 0.1, 0.25, 1);
    }
    .fade-in.delay-1 { transition-delay: 0.2s; }
    .fade-in.delay-2 { transition-delay: 0.4s; }
    .fade-in.delay-3 { transition-delay: 0.6s; }
    .fade-in.delay-4 { transition-delay: 0.8s; }
    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Hero scroll indicator */
    @keyframes scrollLine {
      0%   { transform: translateY(-100%); }
      100% { transform: translateY(200%); }
    }
    .scroll-line-inner {
      animation: scrollLine 2s cubic-bezier(0.77, 0, 0.18, 1) infinite;
    }

    /* Mobile menu overlay */
    #mobile-menu {
      transition: opacity 0.3s ease;
    }
    #mobile-menu.hidden-menu {
      opacity: 0;
      pointer-events: none;
    }
    #mobile-menu.visible-menu {
      opacity: 1;
      pointer-events: auto;
    }
  </style>

  <?php wp_head(); ?>
</head>
<body <?php body_class( 'relative w-full min-h-screen' ); ?>>
<?php wp_body_open(); ?>

<!-- ===== Site Header ===== -->
<header
  id="site-header"
  class="fixed top-0 left-0 w-full z-50 transition-colors duration-300"
>
  <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

    <!-- Logo -->
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex flex-col">
      <span class="font-serif-en text-2xl font-semibold tracking-wider text-brand-primary">
        <?php bloginfo( 'name' ); ?>
      </span>
    </a>

    <!-- Desktop Nav -->
    <nav class="hidden md:flex gap-8">
      <a href="#about"   class="text-xs font-serif-jp tracking-widest text-brand-text hover:text-brand-primary transition-colors">ABOUT / 事業概要</a>
      <a href="#company" class="text-xs font-serif-jp tracking-widest text-brand-text hover:text-brand-primary transition-colors">COMPANY / 会社概要</a>
      <a href="#access"  class="text-xs font-serif-jp tracking-widest text-brand-text hover:text-brand-primary transition-colors">ACCESS / アクセス</a>
      <a href="#contact" class="text-xs font-serif-jp tracking-widest text-brand-text hover:text-brand-primary transition-colors">CONTACT / お問い合わせ</a>
    </nav>

    <!-- Mobile Menu Button -->
    <button
      id="menu-open-btn"
      class="md:hidden text-brand-text p-2 -mr-2"
      aria-label="メニューを開く"
      aria-expanded="false"
      aria-controls="mobile-menu"
    >
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>
</header>

<!-- ===== Mobile Menu Overlay ===== -->
<div
  id="mobile-menu"
  class="fixed inset-0 z-[60] bg-brand-bg/98 backdrop-blur-lg flex flex-col justify-center items-center hidden-menu"
  aria-hidden="true"
  role="dialog"
  aria-label="ナビゲーションメニュー"
>
  <button
    id="menu-close-btn"
    class="absolute top-6 right-6 text-brand-text p-2"
    aria-label="メニューを閉じる"
  >
    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
    </svg>
  </button>

  <nav class="flex flex-col gap-10 text-center">
    <a href="#about"   class="font-serif-jp text-lg tracking-widest text-brand-text hover:text-brand-primary transition-colors mobile-nav-link">ABOUT / 事業概要</a>
    <a href="#company" class="font-serif-jp text-lg tracking-widest text-brand-text hover:text-brand-primary transition-colors mobile-nav-link">COMPANY / 会社概要</a>
    <a href="#access"  class="font-serif-jp text-lg tracking-widest text-brand-text hover:text-brand-primary transition-colors mobile-nav-link">ACCESS / アクセス</a>
    <a href="#contact" class="font-serif-jp text-lg tracking-widest text-brand-text hover:text-brand-primary transition-colors mobile-nav-link">CONTACT / お問い合わせ</a>
  </nav>
</div>
