<?php
/**
 * フォールバックテンプレート
 * WordPress のテンプレート階層により、より具体的なテンプレートファイルが
 * 存在しない場合にこのファイルが使用されます。
 * フロントページは front-page.php が使用されます。
 */
get_header();
?>

<main class="max-w-7xl mx-auto px-6 py-32">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-16' ); ?>>
        <h2 class="font-serif-jp text-2xl text-brand-text mb-4">
          <a href="<?php the_permalink(); ?>" class="hover:text-brand-primary transition-colors">
            <?php the_title(); ?>
          </a>
        </h2>
        <div class="text-brand-muted text-sm leading-relaxed tracking-wider">
          <?php the_excerpt(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p class="font-serif-jp text-brand-muted tracking-wider">コンテンツが見つかりません。</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
