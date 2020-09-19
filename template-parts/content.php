<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 "> 
  <div class="card">                
    <a href="<?php the_permalink(); ?>">
      <div class="card-body ">
          <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid img-responsive')); ?>
      </div>
      <div class="card-text">
        
      
        <h4>
          <?php the_title(); ?>
        </h4>

        <button class="btn btn-primary btn-block">Saiba Mais</button>

            
      </div>
    </a>
  </div>
</div> 