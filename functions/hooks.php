<?php
/*
 * b4st Hooks
 * Designed to be used by a child theme.
 */

// Navbar (in `header.php`)

function b4st_navbar_before() {
  do_action('navbar_before');
}

function b4st_navbar_after() {
  do_action('navbar_after');
}
function b4st_navbar_brand() {
  if ( ! has_action('navbar_brand') ) {
    ?>
    <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>
    <?php
  } else {
		do_action('navbar_brand');
	}
}
function b4st_navbar_search() {
  if ( ! has_action('navbar_search') ) {
    ?>
    <form class="form-inline ml-auto pt-2 pt-md-0" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <div class="input-group">
        <input class="form-control border-secondary" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
        <div class="input-group-append">
          <button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'b4st') ?>" class="btn btn-outline-secondary">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <?php
  } else {
		do_action('navbar_search');
	}
}


// Main

function b4st_main_before() {
  do_action('main_before');
}
function b4st_main_after() {
  do_action('main_after');
}

// Main Widgets

function b4st_main_widgets_before() {
  do_action('sidebar_before');
}
function b4st_main_widgets_after() {
  do_action('sidebar_after');
}

// Footer (in `footer.php`)

function b4st_footer_before() {
  do_action('footer_before');
}
function b4st_footer_after() {
  do_action('footer_after');
}
function b4st_bottomline() {
	if ( ! has_action('bottomline') ) {
		?>
    <div class="container az-footer__bottomline text-dark">
      <div class="row">
        <div class="col-sm">
          <p class="text-center text-sm-left text-uppercase">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
        </div>
        <div class="col-sm">
          <p class="text-center text-sm-right text-uppercase">Designed and Developed by <a href="https://mpirecreative.com" target="_blank" ><span style="color: #c51520;">M</span>pirecreative</a></p>
        </div>
      </div>
    </div>
		<?php		
	} else {
		do_action('bottomline');
	}
}