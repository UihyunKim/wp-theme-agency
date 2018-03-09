<?php get_header(); ?>

<div id="fp-news">

  <?php query_posts('category_name=News&showposts=3'); ?>

  <?php 
    $i = 1;
    while (have_posts()) : the_post();
  ?>
    <section 
      id="news-section<?php echo $i; ?>" 
      class="section" 
      data-anchor="slide<?php echo $i; ?>"
      style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)"
      >
      <div class="content text-center">
        <h5 class="text-white js-bg-anim invisible"><?php the_date() ?></h2>
        <h1 class="mx-auto px-4 text-white js-title-anim invisible"> <?php the_title() ?> </h1>
        <!-- <div class="d-flex flex-row justify-content-center">
          <div class="">
            <h6 class="text-white">aaa</h6>
          </div>
          <div class="mx-3">
            <h6 class="text-white">
              <?php comments_number('0 comment', 'one comment', '% comments'); ?>
            </h6>
          </div>
          <div class="">
            <h6 class="text-white">bbb</h6>
          </div>
        </div> -->
        <div class="mt-4 mt-lg-5 js-bg-anim invisible">
          <a class="py-2 py-lg-3 px-3 px-lg-4 read-more badge badge-pill badge-light text-uppercase" href="<?php the_permalink(); ?>">Read More</a>
        </div>
      </div>
    </section>
  <?php 
    $i++;
    endwhile;
  ?>

</div>


<?php get_footer(); ?>
