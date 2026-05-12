<!-- ===== Site Footer ===== -->
<footer class="bg-brand-bg pt-20 pb-10 border-t border-brand-border px-6">
  <div class="max-w-7xl mx-auto flex flex-col items-center">

    <nav class="flex flex-wrap justify-center gap-6 sm:gap-10 mb-12">
      <div class="flex items-center gap-6 sm:gap-10">
        <a href="#about" class="font-serif-jp text-xs tracking-widest text-brand-muted hover:text-brand-primary transition-colors">事業概要</a>
        <span class="w-px h-3 bg-brand-border block"></span>
      </div>
      <div class="flex items-center gap-6 sm:gap-10">
        <a href="#company" class="font-serif-jp text-xs tracking-widest text-brand-muted hover:text-brand-primary transition-colors">会社概要</a>
        <span class="w-px h-3 bg-brand-border block"></span>
      </div>
      <div class="flex items-center gap-6 sm:gap-10">
        <a href="#access" class="font-serif-jp text-xs tracking-widest text-brand-muted hover:text-brand-primary transition-colors">アクセス</a>
        <span class="w-px h-3 bg-brand-border block"></span>
      </div>
      <div class="flex items-center gap-6 sm:gap-10">
        <a href="#contact" class="font-serif-jp text-xs tracking-widest text-brand-muted hover:text-brand-primary transition-colors">お問い合わせ</a>
      </div>
    </nav>

    <p class="font-serif-en text-xs tracking-[0.2em] text-brand-muted/70 uppercase text-center text-balance">
      &copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> All Rights Reserved.
    </p>

  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
