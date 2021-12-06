<?php while( have_posts()): ?>
<article>
<?php the_title(); ?>
<?php the_post(); ?>
</article>
<?php endwhile;
