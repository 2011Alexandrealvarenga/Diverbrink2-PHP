<form role="search" method="get" action="<?php echo home_url( '/' ); ?> ">
  <div class="input-group">
    <input placeholder="Pesquise aqui" type="search" class="form-control"  value="<?php echo get_search_query(); ?>"  name="s"/>
    <div class="input-group-append">
      <button class="btn" type="submit"><i class="icon-search"></i></button>
    </div>
  </div>
</form>