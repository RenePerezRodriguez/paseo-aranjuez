<?php get_header(); ?>

<?php while(have_posts() ): the_post(); ?>

    <h1>
        <?php the_title(); ?>
    </h1>

    <?php the_content(); ?>

    Escrito por <?php the_author(); ?>
    Fecha <?php the_date(); ?>

<?php    endwhile; ?>

<div class="sticky_share_btn">
    <div class="fixed_share">
      <ul class="listing">
        <li class="facebook">
          <a href="https://www.facebook.com/stackfindover" target="_blank">
            <i class="fa fa-facebook-square"></i>
          </a>
        </li>
        <li class="twitter">
          <a href="https://twitter.com/stackfindover" target="_blank">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
        <li class="pinterest">
          <a href="https://in.pinterest.com/stackfindover/" target="_blank">
            <i class="fa fa-pinterest"></i>
          </a>
        </li>
        <li class="linkedin">
          <a href="https://www.linkedin.com/in/stackfindover/" target="_blank">
            <i class="fa fa-linkedin-square"></i>
          </a>
        </li>
        <li class="linkedin">
          <a href="http://blogs.stackfindover.com/" target="_blank">
            <i class="fa fa-globe"></i>
          </a>
        </li>

        <li class="whatsapp">
          <a href="https://dev.to/stackfindover" target="_blank">
            <i class="fa fa-whatsapp"></i>
          </a>
        </li>
      </ul>
      <span class="share-toggle">
        <i class="fa fa-share-alt"></i>
      </span>
    </div>
  </div>
  
<?php get_footer(); ?>