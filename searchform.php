<form class="search_form" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
  <input type="text" name="input" class="input" placeholder="" value="<?php echo get_search_query() ?>"
    title="Search" />
  <button type="reset" class="search pseudo_search"></button>
</form>
