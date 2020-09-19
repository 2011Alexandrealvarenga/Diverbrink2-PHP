
<?php get_header(); ?>
<div class="container resultado-busca"><!--como trabalhamos -->
  <div class="row">
    <div class="col mt-4">
      <h3 class="h3_titulo">Resultado de busca</h3>

          <?php 
          // Se houver resultados exibe o conteúdo, se não exibe um formuládio de buscas
          if (is_search()) :
            $total_results = $wp_query->found_posts;

            echo "<h3 class='h3_titulo mb-3'>" . sprintf( __('%s resultado(s) para "%s"','BS 4 + WP'), $total_results, get_search_query()) . "</h3>";

          endif;
          ?>
    </div>
  </div>
  <div class="row">

    <div class="card-group mt-4 ">
      
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="col-4 "> 
        <div class="card">                

            <div class="card-body ">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid img-responsive')); ?>
                
              </a>
            </div>
            <div class="card-text">
              <a href="<?php the_permalink(); ?>">
            
                  <h3 class="h3_titulo">
                    <?php the_title(); ?>
                  </h3>
                  <h4>Saiba mais</h4> 
              </a>
            </div>
        </div>
      </div>
              <?php endwhile; ?>

              <?php else : 
              
              echo "<p>Sua busca não econtrou resultados. Use o formulário abaixo para refazer a busca.</p>";
              get_search_form();  

              endif; ?>
    </div>
  </div>
        <div class="row">
          <div class="col blog-pagination mb-5 ">
            <button class="btn">
             <?php next_posts_link( 'Mais antigos' ); ?> <?php previous_posts_link( 'Mais novos' ); ?>
            </button>
 
          </div> 
        </div>
  
</div><!--como trabalhamos -->


<?php get_footer(); ?>
