<?php /* Template name: pag eletronico */ ?>
<?php get_header(); ?>
<div class="container eletronico pt-5 pb-5"><!--brinquedao -->
  <div class="row pt-4">
    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 d-flex justify-content-center">
      <div class="dizeres">
        <h3 class="h3_titulo">Eletrônicos</h3> 
        <p>Eletrônicos fabricados com os mais atuais jogos e games do mercado, adesivado e personalizado de acordo com a sua nescessidade.</p>
      </div>
      
    </div>
    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 carousel">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/eletronico/1.JPG">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/eletronico/2.JPG">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/eletronico/3.JPG">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/eletronico/4.JPG">
          </div>
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    
  </div>

</div><!--brinquedao -->
<div class="pt-4 pb-5 container conteudo-categoria-eletronicos">

  <?php 
    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')):1;
    // args
    $my_args = array(
      'post_type' => 'post',
      'category_name' => 'eletronico',          
      'paged' => $paged,
    );

    // query
    $the_query = new WP_Query ( $my_args );
  ?> 
    
  <div class="card-group mt-4 ">
    <?php if($the_query->have_posts()): ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>      
        <?php get_template_part('template-parts/content'); ?>       
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <?php endif; ?>
  


  
  </div>
  <div class="paginacao">
    <?php 
    $big = 999999;
    echo paginate_links(array(
      'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big)) ),
      'format' => '?paged=%#%',
      'current' => max(1, get_query_var('paged')),
      'total' => $the_query->max_num_pages,
    ));

  ?>
  </div>
  
  
</div>


<?php get_footer(); ?>