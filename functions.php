<?php
function theme_styles() 
{
	wp_register_style('custom-styles', get_stylesheet_directory_uri() . '/style.css' ,array(),time());
	wp_enqueue_style('custom-styles');
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


// function kadence_child_setup() {
// 	$path = get_stylesheet_directory().'/languages';
// 	load_child_theme_textdomain( 'kadence-child', $path );
// }
// add_action( 'after_setup_theme', 'kadence_child_setup' );


function kadence_before_main_content_custom() 
{
	echo do_shortcode('[sc name="navigation-responsive"][/sc]');

}
add_action( 'kadence_before_main_content', 'kadence_before_main_content_custom' );


function result_yesterday_func($attr,$content){
	return '<span class="wm-yesterday">'.date('Y-m-d',strtotime("-1 days")).'</span>'.do_shortcode('[anwpfl-matches competition_id="" show_secondary="0" season_id="" type="result" limit="0" date_from="'.date('Y-m-d',strtotime("-1 days")).'" date_to="'.date('Y-m-d').'" stadium_id="" filter_by_clubs="" filter_by_matchweeks="" days_offset="" sort_by_date="" sort_by_matchweek="" group_by="" group_by_header_style="" show_club_logos="1" show_match_datetime="1" competition_logo="1" outcome_id=""]');
}
add_shortcode("result_yesterday","result_yesterday_func");

function video_latest_func($attr,$content){
	ob_start();?>

	<div class="anwp-v-video anwpfl-not-ready">
		<h3>Latest Video</h3>
		<div class="anwp-v-video__wrapper">
			<div class="anwp-v-video__item d-inline-block" data-url="SxYZ0VCUp8k">
				<a href="#anwp-v-videos-modal" class="position-relative d-block">
					<span class="anwp-v-video__gradient position-absolute"></span>
					<span class="anwp-v-video__title position-absolute">The top 10 saves of May | Top Saves | Serie A 2022/23</span>
					<img data-perfmatters-preload="" decoding="async" src="https://i.ytimg.com/vi_webp/SxYZ0VCUp8k/mqdefault.webp" alt="youtube video" loading="lazy">
					<button type="button" class="anwp-v-playbtn"><span class="anwp-v-playbtn__visually-hidden">Play</span></button>
				</a>
			</div>
			<div class="anwp-v-video__item d-inline-block" data-url="X_An8DnUtfg">
				<a href="#anwp-v-videos-modal" class="position-relative d-block">
					<span class="anwp-v-video__gradient position-absolute"></span>
					<span class="anwp-v-video__title position-absolute">18 Clubs, 18 Goals - The best Goal from every Bundesliga Team in 2022/23</span>
					<img data-perfmatters-preload="" decoding="async" src="https://i.ytimg.com/vi_webp/X_An8DnUtfg/mqdefault.webp" alt="youtube video" loading="lazy">
					<button type="button" class="anwp-v-playbtn"><span class="anwp-v-playbtn__visually-hidden">Play</span></button>
				</a>
			</div>
			<div class="anwp-v-video__item d-inline-block" data-url="-_BWG_6cUcI">
				<a href="#anwp-v-videos-modal" class="position-relative d-block">
					<span class="anwp-v-video__gradient position-absolute"></span>
					<span class="anwp-v-video__title position-absolute">Alejandro Garnacho's BREAKTHROUGH season 🤩 | Player Cam 2022/23 🎥</span>
					<img decoding="async" src="https://i.ytimg.com/vi_webp/-_BWG_6cUcI/mqdefault.webp" alt="youtube video" loading="lazy">
					<button type="button" class="anwp-v-playbtn"><span class="anwp-v-playbtn__visually-hidden">Play</span></button>
				</a>
			</div>
			<div class="anwp-v-video__item d-inline-block" data-url="i3-w3wafj_0">
				<a href="#anwp-v-videos-modal" class="position-relative d-block">
					<span class="anwp-v-video__gradient position-absolute"></span>
					<span class="anwp-v-video__title position-absolute">Lecce 1-0 Fiorentina aet | Lecce clinch the title: Goal &amp; Highlights | Primavera 1 TIM 2022/23</span>
					<img decoding="async" src="https://i.ytimg.com/vi_webp/i3-w3wafj_0/mqdefault.webp" alt="youtube video" loading="lazy">
					<button type="button" class="anwp-v-playbtn"><span class="anwp-v-playbtn__visually-hidden">Play</span></button>
				</a>
			</div>
			<div class="anwp-v-video__item d-inline-block" data-url="alWsYkusOc0">
				<a href="#anwp-v-videos-modal" class="position-relative d-block">
					<span class="anwp-v-video__gradient position-absolute"></span>
					<span class="anwp-v-video__title position-absolute">10 things you should know about Fran García | New Real Madrid player</span>
					<img decoding="async" src="https://i.ytimg.com/vi_webp/alWsYkusOc0/mqdefault.webp" alt="youtube video" loading="lazy">
					<button type="button" class="anwp-v-playbtn"><span class="anwp-v-playbtn__visually-hidden">Play</span></button>
				</a>
			</div>
			<div class="anwp-v-video__item d-inline-block" data-url="wKbmNpVACHM">
				<a href="#anwp-v-videos-modal" class="position-relative d-block">
					<span class="anwp-v-video__gradient position-absolute"></span>
					<span class="anwp-v-video__title position-absolute">TOP 10 CHAMPIONS LEAGUE GOALS! Man City's best goals featuring Toure, Aguero, Haaland and more!</span>
					<img decoding="async" src="https://i.ytimg.com/vi_webp/wKbmNpVACHM/mqdefault.webp" alt="youtube video" loading="lazy">
					<button type="button" class="anwp-v-playbtn"><span class="anwp-v-playbtn__visually-hidden">Play</span></button>
				</a>
			</div>
			<div class="anwp-v-video__item d-inline-block" data-url="JR51jz6hu6A">
				<a href="#anwp-v-videos-modal" class="position-relative d-block">
					<span class="anwp-v-video__gradient position-absolute"></span>
					<span class="anwp-v-video__title position-absolute">UNBELIEVABLE Passes ☄️ | Best Assists 2022/23 🔥</span>
					<img decoding="async" src="https://i.ytimg.com/vi_webp/JR51jz6hu6A/mqdefault.webp" alt="youtube video" loading="lazy">
					<button type="button" class="anwp-v-playbtn"><span class="anwp-v-playbtn__visually-hidden">Play</span></button>
				</a>
			</div>
			<div class="anwp-v-video__item d-inline-block" data-url="Aul8SB_PlvE">
				<a href="#anwp-v-videos-modal" class="position-relative d-block">
					<span class="anwp-v-video__gradient position-absolute"></span>
					<span class="anwp-v-video__title position-absolute">Goal Of The Month May 2023 | Presented By crypto.com | Serie A 2022/23</span>
					<img decoding="async" src="https://i.ytimg.com/vi_webp/Aul8SB_PlvE/mqdefault.webp" alt="youtube video" loading="lazy">
					<button type="button" class="anwp-v-playbtn"><span class="anwp-v-playbtn__visually-hidden">Play</span></button>
				</a>
			</div>
			
		</div>
	</div>

	<?php

	$html = ob_get_contents();
	ob_end_clean();
	return $html;
}
add_shortcode("video_latest","video_latest_func");


function wm_modal_func(){
	?>
	<div id="anwp-v-modal" class="anwp-v-modal" aria-hidden="true">
		<div class="anwp-v-modal__overlay" tabindex="-1" data-micromodal-close="">
			<div class="anwp-v-modal__container" role="dialog" aria-modal="true">
				<button class="anwp-v-modal__close" aria-label="Close modal" type="button">
					<svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<g>
							<g>
								<rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect>
								<path d="M13.41 12l4.3-4.29a1 1 0 1 0-1.42-1.42L12 10.59l-4.29-4.3a1 1 0 0 0-1.42 1.42l4.3 4.29-4.3 4.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l4.29-4.3 4.29 4.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z"></path>
							</g>
						</g>
					</svg>
				</button>
				<div id="anwp-v-spinner"></div>
				<figure id="anwp-v-modal__container"></figure>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript">
		(function ($) {       
			$(document).ready(function(){
				$(document).on('click','.anwp-v-video__item a',function(e){
					e.preventDefault();
					var link_id = $(this).parent().attr('data-url');
					$("#anwp-v-modal").addClass('anwp-v-is-open');
					$("#anwp-v-modal__container").html('<iframe width="100%" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" src="https://www.youtube-nocookie.com/embed/'+link_id+'?autoplay=1&amp;playsinline=1"></iframe>')
				});

				$(document).on('click','.anwp-v-modal__close,.anwp-v-modal__overlay',function(e){
					e.preventDefault();
					$("#anwp-v-modal").removeClass('anwp-v-is-open');
					$("#anwp-v-modal__container").html('');
				});
			})
		})(jQuery);
	</script>
	<?php

}
add_action('wp_footer','wm_modal_func');


add_filter( 'kadence_logo_url', 'custom_logo_url' );
function custom_logo_url( $url ) {
	$url = 'https://24hscore.com/';
	$prase = parse_url(site_url('/'));

	if($prase['path'] == '/bong-da/' || $prase['path'] == '/tin-tuc/'){
		return $url.'vi/';
	}elseif ($prase['path'] == '/futebol/' || $prase['path'] == '/noticias/') {
		return $url.'pt-br/';
	}else{
		return $url;
	}
	
}


/*==================================================
>>>  ADD SETTING PAGE     
==================================================*/
class WM_Fields_Plugin {

	public function __construct() {
    	// Hook into the admin menu
		add_action( 'admin_menu', array( $this, 'wm_create_settings_page' ) );

        // Add Settings and Fields
		add_action( 'admin_init', array( $this, 'wm_setup_sections' ) );
		add_action( 'admin_init', array( $this, 'wm_setup_fields' ) );
	}

	public function wm_create_settings_page() {
    	// Add the menu item and page
		$page_title = 'WM Settings Page';
		$menu_title = 'WM Settings';
		$capability = 'manage_options';
		$slug = 'smashing_fields';
		$callback = array( $this, 'plugin_settings_page_content' );
		$icon = 'dashicons-admin-plugins';
		$position = 100;

		add_menu_page( $page_title, $menu_title, $capability, $slug, $callback, $icon, $position );
	}

	public function plugin_settings_page_content() {?>
		<div class="wrap">
			<h2>Settings Page</h2><?php
			if ( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] ){
				$this->admin_notice();
			} ?>
			<form method="POST" action="options.php">
				<?php
				settings_fields( 'smashing_fields' );
				do_settings_sections( 'smashing_fields' );
				submit_button();
				?>
			</form>
			</div> <?php
		}

		public function admin_notice() { ?>
			<div class="notice notice-success is-dismissible">
				<p>Your settings have been updated!</p>
				</div><?php
			}

			public function wm_setup_sections() {
				add_settings_section( 'our_first_section', 'Setting Link', array( $this, 'section_callback' ), 'smashing_fields' );
			}

			public function section_callback( $arguments ) {
				switch( $arguments['id'] ){
					case 'our_first_section':
					echo '';
					break;
					case 'our_second_section':
					echo 'This one is number two';
					break;
					case 'our_third_section':
					echo 'Third time is the charm!';
					break;
				}
			}

			public function wm_setup_fields() {
				$fields = array(
					array(
						'uid' => 'wm_op_betting_url',
						'label' => 'Bet now URL',
						'section' => 'our_first_section',
						'type' => 'text',
						'placeholder' => 'ex:https://dailysports.net/',
						'helper' => 'Does this help?',
						'supplimental' => 'I am underneath!',
						'default' => ''
					),
					
				);
				foreach( $fields as $field ){
					add_settings_field( $field['uid'], $field['label'], array( $this, 'field_callback' ), 'smashing_fields', $field['section'], $field );
					register_setting( 'smashing_fields', $field['uid'] );
				}
			}

			public function field_callback( $arguments ) {

				$value = get_option( $arguments['uid'] );

				if( ! $value ) {
					$value = $arguments['default'];
				}

				switch( $arguments['type'] ){
					case 'text':
					case 'password':
					case 'number':
					printf( '<input name="%1$s" id="%1$s" type="%2$s" placeholder="%3$s" value="%4$s" />', $arguments['uid'], $arguments['type'], $arguments['placeholder'], $value );
					break;
					case 'textarea':
					printf( '<textarea name="%1$s" id="%1$s" placeholder="%2$s" rows="5" cols="50">%3$s</textarea>', $arguments['uid'], $arguments['placeholder'], $value );
					break;
					case 'select':
					case 'multiselect':
					if( ! empty ( $arguments['options'] ) && is_array( $arguments['options'] ) ){
						$attributes = '';
						$options_markup = '';
						foreach( $arguments['options'] as $key => $label ){
							$options_markup .= sprintf( '<option value="%s" %s>%s</option>', $key, selected( $value[ array_search( $key, $value, true ) ], $key, false ), $label );
						}
						if( $arguments['type'] === 'multiselect' ){
							$attributes = ' multiple="multiple" ';
						}
						printf( '<select name="%1$s[]" id="%1$s" %2$s>%3$s</select>', $arguments['uid'], $attributes, $options_markup );
					}
					break;
					case 'radio':
					case 'checkbox':
					if( ! empty ( $arguments['options'] ) && is_array( $arguments['options'] ) ){
						$options_markup = '';
						$iterator = 0;
						foreach( $arguments['options'] as $key => $label ){
							$iterator++;
							$options_markup .= sprintf( '<label for="%1$s_%6$s"><input id="%1$s_%6$s" name="%1$s[]" type="%2$s" value="%3$s" %4$s /> %5$s</label><br/>', $arguments['uid'], $arguments['type'], $key, checked( $value[ array_search( $key, $value, true ) ], $key, false ), $label, $iterator );
						}
						printf( '<fieldset>%s</fieldset>', $options_markup );
					}
					break;
				}

				if( $helper = $arguments['helper'] ){
					printf( '<span class="helper"> %s</span>', $helper );
				}

				if( $supplimental = $arguments['supplimental'] ){
					printf( '<p class="description">%s</p>', $supplimental );
				}

			}

		}
		new WM_Fields_Plugin();



/*==================================================
>>>  SC SHOW POST     
==================================================*/
function wm_show__post($args, $content) {	

	ob_start(); ?>

	<!-- START ID wm-post-shortcode -->
	<div id="wm-post-shortcode">
		<?php 
		$orderby       = (isset($args['orderby']) && !empty($args['orderby'])) ? $args['orderby'] : 'date';
		$order         = (isset($args['order']) && !empty($args['order'])) ? $args['order'] : 'DESC';
		$show_articles = (isset($args['show_articles']) && !empty($args['show_articles'])) ? $args['show_articles'] : '12';


		$number   = $show_articles;
		$paged    = (get_query_var('page')) ? get_query_var('page') : 1;
		
		$offset   = ($paged - 1) * $number;

		$p_args                     = array();
		$p_args['post_type']        = 'post';
		$p_args['orderby']          = $orderby;
		$p_args['order']            = $order;    
		$p_args['posts_per_page']   = -1;
		$p_args['suppress_filters'] = 0;    

		$nwm_article = get_posts($p_args);

		$p_args['posts_per_page']   = $show_articles;
		$p_args['offset']           = $offset;

		$nwm_article_offset = get_posts($p_args); 

		$total_users = count($nwm_article_offset);
		$total_query = count($nwm_article);
		$total_pages = intval($total_query / $number);   		

		foreach ($nwm_article_offset as $key => $value) { ?>

			<article class="item">
				<div class="item-thumbnail">
					<a href="<?php echo esc_url(get_permalink( $value)) ?>" title="<?php echo get_the_title( $value ) ?>">
						<img src="<?php echo get_the_post_thumbnail_url( $value, $size = 'full' ) ?>">
					</a>
				</div><!-- End Class item-thumbnail -->

				<div class="item-meta">					
					<span class="cat"><?php echo get_the_category_list( ' ,', '', $value->ID ); ?></span>
					<span class="sape"> | </span>
					<span class="date"><?php echo get_day_name(strtotime($value->post_date)) ?></span>
				</div><!-- End Class item-meta -->	

				<div class="item-title">
					<a href="<?php echo esc_url(get_permalink( $value)) ?>" title="<?php echo get_the_title( $value ) ?>">
						<?php echo get_the_title( $value ) ?>
					</a>
				</div><!-- End Class item-title -->

			</article><!-- End Class item -->	
			<?php
		}
		?>
	</div>
	<!-- END ID wm-post-shortcode -->

	<?php
	if ($nwm_article > $total_query) {
		echo '<div id="pagination" class="clearfix">';
                    // echo '<span class="pages">Pages:</span>';
		$current_page = max(1, get_query_var('page'));
		echo paginate_links(array(
			'base' => get_pagenum_link(1) . '%_%',
			'format' => 'page/%#%/',
			'current' => $current_page,
			'total' => $total_pages,
			'prev_next'    => false,
			'type'         => 'list',
		));
		echo '</div>';
	}
	?>

	<style>
		#pagination{
			width: 100%;
			display: flex;
			justify-content: center;
			margin: 20px 0;
		}
		#pagination ul{
			list-style-type: none;
			padding: 0;
			margin: 0;
			display: flex;
		}
		#pagination ul li{
			margin-right: 10px;
		}
		#pagination ul li a,
		#pagination ul li span{
			display: block;
			width: 40px;
			height: 40x;
			line-height: 40px;
			border: 1px solid transparent;
			border-radius: 8px;
			box-shadow: 0 1px 4px rgba(0,0,0,.25);
			text-align: center;
			color: #000;
			text-decoration: none;
		}
		#pagination ul li a:hover,
		#pagination ul li span.current{
			box-shadow: 0 10px 13px -7px rgba(0,0,0,.3);
			border: 1px solid hsla(0,0%,8%,.48);
			background-color: #141414;
			color: #fff;
		}
	</style>


	<?php
	$list_post = ob_get_contents();
	ob_end_clean();

	return $list_post;
}
add_shortcode( 'sc_wm_posts', 'wm_show__post' );

function get_day_name($timestamp) {

	$date = date('d/m/Y', $timestamp);

	if($date == date('d/m/Y')) {
		$date = 'Today '.date('H:i A',$timestamp);
	} 
	// else if($date == date('d/m/Y',now() - (24 * 60 * 60))) {
	// 	$date = 'Yesterday '.date('H:i A',$timestamp);
	// }
	return $date;
}

/*==================================================
>>>  SC SELECT SPORT CATEGORY     
==================================================*/
add_filter('kadence_before_main_content','wm_add_before_main_content');
function wm_add_before_main_content(){
	echo do_shortcode('[sc name="selectbox_sport"][/sc]');
}

add_shortcode( 'sc_wm_selectbox_cat', 'wm_add_selectbox_cat' );
function wm_add_selectbox_cat(){

	if(!is_category() && !is_front_page()){
		return;
	}

	if(is_front_page()){
		$queried = new stdClass();
		
		// $prase = parse_url(site_url('/'));

		// if($prase['path'] == '/tin-tuc/'){
		// 	$queried->name = 'Tất cả các môn thể thao';
		// }elseif ($prase['path'] == '/noticias/') {
		// 	$queried->name = 'Todos os esportes';
		// }else{
		// 	$queried->name = 'All Sports';
		// }

		$queried->name = 'All Sports';

		$queried->term_id = 0;	
	}else{
		$queried = get_queried_object();
	}
	
	$parent_cat_arg = array('hide_empty' => false, 'parent' => 0 ,'exclude'=>1);
	$parent_cat = get_terms('category',$parent_cat_arg);
	?>
	<div class="wm-content-header">
		<h1><?php echo $queried->name; ?></h1>
		<div class="wm-dropdown">
			<button type="button" class="dropdown-button fl_c_btn">
				<span class="text">
					<?php //echo $queried->name; ?>
					<?php echo sprintf(__('%s', 'kadence' ), $queried->name); ?>
				</span>
				<svg class="vector" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0 0L5 5L10 0H0Z" fill="#141414"></path>
				</svg>
			</button>
			<div class="dropdown-content">
				<?php 
				foreach ($parent_cat as $catVal) {

					if($catVal->term_id == $queried->term_id){
						echo '<span class="dropdown-item fl_c">
						<span class="item-value__active">
						'.$catVal->name.'
						</span>
						</span>';
					}else{
						echo '<span class="dropdown-item fl_c">
						<span class="item-content">
						<a href="'.get_term_link($catVal).'" class="item-value">'.$catVal->name.' </a>
						</span>
						</span>';
					}				


					$child_arg = array( 'hide_empty' => false, 'parent' => $catVal->term_id );
					$child_cat = get_terms( 'category', $child_arg );

					if ($child_cat) {
						echo '<ul style="margin-bottom:0;">';
						foreach( $child_cat as $child_term ) {
							echo '<li><a href="'.get_term_link($child_term).'" class="item-value">'.$child_term->name.' </a></li>';
						}
						echo '</ul>';
					}

				}
				?>

			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		(function($){
			$(document).ready(function(){
				$(document).on("click",".wm-dropdown",function(e){
					$(this).toggleClass("dropdown-active");
				});
			});
		})(jQuery);
	</script>
	<?php
}

// Function to get a cached object or retrieve it from the database if not cached
function get_my_custom_cache_data( $post_id , $key = "_anwpfl_league_odds" , $time = 20 ) {
    // Try to get the cached object
	$cached_object = get_transient( 'my_custom_data_' . $key. $post_id );
// echo "cache ddd";
    // If the object was found in the cache, return it
	if ( $cached_object !== false ) {
//        echo "cache roi";
		return $cached_object;
	}

    // The object was not found in the cache, so retrieve it from the database
	$my_custom_data = get_post_meta( $post_id, $key, true );

    // Store the object in the cache for future use
    // Set the transient to expire after 12 hours (43200 seconds)
	set_transient( 'my_custom_data_'. $key. $post_id, $my_custom_data, $time );

    // Return the freshly retrieved object
	return $my_custom_data;
}


function wm_theme_scripts(){
	wp_register_style('wm-slick-theme-styles', get_stylesheet_directory_uri() . '/assets/js/slick/slick-theme.min.css');
	wp_enqueue_style('wm-slick-theme-styles');
	wp_register_style('wm-slick-styles', get_stylesheet_directory_uri() . '/assets/js/slick/slick.min.css');
	wp_enqueue_style('wm-slick-styles');

	wp_register_script( 'wm-slick-script', get_stylesheet_directory_uri().'/assets/js/slick/slick.min.js',array('jquery'));
	wp_enqueue_script( 'wm-slick-script' );

	wp_enqueue_script( 'wm-custom-script', get_stylesheet_directory_uri() . '/assets/js/wm-script.js', array( 'jquery' ) );
	wp_localize_script( 'wm-custom-script', 'MyAjax', 
		array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'wm_theme_scripts' );



function wm_slider_func(){
	echo do_shortcode('[sc name="wm_add_slider_nav"][/sc]');
}
add_action( 'kadence_before_content', 'wm_slider_func' );

add_shortcode('wm_add_slider_nav','wm_add_slider_nav_func');
function wm_add_slider_nav_func(){
	?>
	<div id="wm-top-slider" class="site-container">
		<div class="wm-competition slick-slider">
			<a href="https://24hscore.com/football"><span >Prediction</span></a>      
			<a href="https://24hscore.com/football/competition/bundesliga-2023-2024/">Bundesliga</a>                       
			<a href="https://24hscore.com/football/competition/ligue-1-2023-2024/">Ligue 1</a>
			<a href="https://24hscore.com/football/competition/premier-league-2023-2024/">Premier League</a>
			<a href="https://24hscore.com/football/competition/serie-a-2023-2024/">Serie A</a>
			<a href="https://24hscore.com/football/competition/uefa-champions-league-2023-2024/">UEFA Champions League</a>

		</div>
	</div>
	<?php
}

/*==================================================
>>>   BREADCRUM SHORTCODE         
==================================================*/
function wm_breadcrum_func(){
	echo do_shortcode('[sc name="wm_breadcrum"][/sc]');
}
add_action( 'kadence_before_content', 'wm_breadcrum_func' );

add_shortcode('wm_breadcrum','nwm_breadcrumbs_func');
function nwm_breadcrumbs_func(){
	if (function_exists('wgl_breadcrumbs')) wgl_breadcrumbs();
}
if(!function_exists('wgl_breadcrumbs')){

	function wgl_breadcrumbs() {

	    // Settings
		$separator          = '<img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik00IC43NTVsMTQuMzc0IDExLjI0NS0xNC4zNzQgMTEuMjE5LjYxOS43ODEgMTUuMzgxLTEyLTE1LjM5MS0xMi0uNjA5Ljc1NXoiLz48L3N2Zz4=">';
		$breadcrums_id      = 'breadcrumbs';
		$breadcrums_class   = 'breadcrumbs site-container';
		$home_icon         = '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M20 7.093v-5.093h-3v2.093l3 3zm4 5.907l-12-12-12 12h3v10h18v-10h3zm-5 8h-14v-10.26l7-6.912 7 6.99v10.182zm-5-1h-4v-6h4v6z"/></svg>';
		$home_title = 'Home';

	    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
		$custom_taxonomy    = 'product-category';

	    // Get the query & post information
		global $post,$wp_query;

	    // Do not display on the homepage
		if ( !is_front_page() ) {

	        // Build the breadcrums
			echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';

	        // Home page
			echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_icon.' '.$home_title . '</a></li>';
			echo '<li class="separator separator-home"> ' . $separator . ' </li>';

			if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
				$prefix = '';
				echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';

			} else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {

	            // If post is a custom post type
				$post_type = get_post_type();

	            // If it is a custom post type display name and link
				if($post_type != 'post') {

					$post_type_object = get_post_type_object($post_type);
					$post_type_archive = get_post_type_archive_link($post_type);

					echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
					echo '<li class="separator"> ' . $separator . ' </li>';

				}

				$custom_tax_name = get_queried_object()->name;
				echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';

			} else if ( is_single() ) {

	            // If post is a custom post type
				$post_type = get_post_type();

	            // If it is a custom post type display name and link
				if($post_type != 'post') {

					$post_type_object = get_post_type_object($post_type);
					$post_type_archive = get_post_type_archive_link($post_type);

					echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
					echo '<li class="separator"> ' . $separator . ' </li>';

				}

	            // Get post category info
				$category = get_the_category();
				

				if(!empty($category)) {

	                // Get last category post is in
					$last_category = end($category);

	                // Get parent any categories and create array
					$get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
					$cat_parents = explode(',',$get_cat_parents);

	                // Loop through parent categories and store in variable $cat_display
					$cat_display = '';
					foreach($cat_parents as $parents) {
						$cat_display .= '<li class="item-cat">'.$parents.'</li>';
						$cat_display .= '<li class="separator"> ' . $separator . ' </li>';
					}

				}

	            // If it's a custom post type within a custom taxonomy
				$taxonomy_exists = taxonomy_exists($custom_taxonomy);
				if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {

					$taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
					$cat_id         = $taxonomy_terms[0]->term_id;
					$cat_nicename   = $taxonomy_terms[0]->slug;
					$cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
					$cat_name       = $taxonomy_terms[0]->name;

				}

	            // Check if the post is in a category
				if(!empty($last_category)) {
					echo $cat_display;
					echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

	            // Else if post is in a custom taxonomy
				} else if(!empty($cat_id)) {

					echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
					echo '<li class="separator"> ' . $separator . ' </li>';
					echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

				} else {

					echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

				}

			} else if ( is_category() ) {

	            // Category page
				echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';

			} else if ( is_page() ) {

	            // Standard page
				if( $post->post_parent ){

	                // If child page, get parents 
					$anc = get_post_ancestors( $post->ID );

	                // Get parents in the right order
					$anc = array_reverse($anc);

	                // Parent page loop
					foreach ( $anc as $ancestor ) {
						$parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
						$parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
					}

	                // Display parent pages
					echo $parents;

	                // Current page
					echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';

				} else {

	                // Just display current page if not parents
					echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';

				}

			} else if ( is_tag() ) {

	            // Tag page

	            // Get tag information
				$term_id        = get_query_var('tag_id');
				$taxonomy       = 'post_tag';
				$args           = 'include=' . $term_id;
				$terms          = get_terms( $taxonomy, $args );
				$get_term_id    = $terms[0]->term_id;
				$get_term_slug  = $terms[0]->slug;
				$get_term_name  = $terms[0]->name;

	            // Display the tag name
				echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';

			} elseif ( is_day() ) {

	            // Day archive

	            // Year link
				echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
				echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

	            // Month link
				echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
				echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';

	            // Day display
				echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';

			} else if ( is_month() ) {

	            // Month Archive

	            // Year link
				echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
				echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

	            // Month display
				echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';

			} else if ( is_year() ) {

	            // Display year archive
				echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';

			} else if ( is_author() ) {

	            // Auhor archive

	            // Get the author information
				global $author;
				$userdata = get_userdata( $author );

	            // Display author name
				echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';

			} else if ( get_query_var('paged') ) {

	            // Paginated archives
				echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';

			} else if ( is_search() ) {

	            // Search results page
				echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';

			} elseif ( is_404() ) {

	            // 404 page
				echo '<li>' . 'Error 404' . '</li>';
			}

			echo '</ul>';

		}
		?>

		<style>
			#breadcrumbs{
				list-style:none;
				margin:10px auto;
				overflow:hidden;
			}

			#breadcrumbs li{
				display:inline-block;
				vertical-align:middle;
				margin-right:5px;
			}

			#breadcrumbs li a{
				text-decoration: none;
				color: #ed533a;
			}

			#breadcrumbs li a svg{
				position: relative;
				top: 2px;
			}

			#breadcrumbs .separator img{
				width: 12px;
			}

		</style>
		<?php

	}


}




/*==================================================
>>>  ADD METABOX TO MATCH POST TYPE  
==================================================*/
add_action( 'add_meta_boxes', 'nwm_meta_box_add' );
function nwm_meta_box_add(){
	add_meta_box( 'nwm-meta-box-id', 'Additional Text Content', 'nwm_meta_box_func', 'anwp_match', 'normal', 'high' );
}
function nwm_meta_box_func( $post ){
	$values = get_post_custom( $post->ID );
	$text_content = $post->post_content;
	$text_excerpt = $post->post_excerpt;

	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );	
	?>
	<p>		<label for="my_meta_box_text">Content</label>
		<?php wp_editor( htmlspecialchars($text_content), 'nwm_match_content', array('textarea_name'=>'wm_input_match_content','textarea_rows' => 10,) );
		?>
	</p>
	<p>
		<label for="my_meta_box_text">Excerpt</label>
		<?php wp_editor( htmlspecialchars($text_excerpt), 'nwm_match_excerpt', $settings = array('textarea_name'=>'nwm_input_match_excerpt','textarea_rows' => 10,) );
		?>
	</p>

	<?php	
}


add_action( 'save_post', 'nwm_meta_box_save' );
function nwm_meta_box_save( $post_id ){	
	// Check post type
	if ( 'anwp_match' !== $_POST['post_type'] ) {
		return $post_id;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// Check the user's permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}

	// if our nonce isn't there, or we can't verify it, bail
	if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;



	// now we can actually save the data
	$allowed = array( 
		'a' => array( // on allow a tags
			'href' => array() // and those anchords can only have href attribute
		)
	);

	remove_action( 'save_post', 'nwm_meta_box_save' );

	$mydata = array(
		'ID' => $post_id,
		'post_content' => $_POST['wm_input_match_content'],
		'post_excerpt' => $_POST['nwm_input_match_excerpt']
	);

	wp_update_post( $mydata );

	add_action( 'save_post', 'nwm_meta_box_save' );

	// This is purely my personal preference for saving checkboxes
	// $chk = ( isset( $_POST['my_meta_box_check'] ) && $_POST['my_meta_box_check'] ) ? 'on' : 'off';
	// update_post_meta( $post_id, 'my_meta_box_check', $chk );

	return $post_id;
}

function nwm_match_content_func($attr,$content){	
	if(!is_single()){
		return false;
	}
	global $post;
	return wpautop($post->post_content);
}
add_shortcode("nwm_match_content","nwm_match_content_func");

function nwm_match_excerpt_func($attr,$content){	
	if(!is_single()){
		return false;
	}
	global $post;
	return wpautop($post->post_excerpt);
}
add_shortcode("nwm_match_excerpt","nwm_match_excerpt_func");


add_action('admin_head', 'my_custom_fonts');
function my_custom_fonts() { ?>
	<style>
		#_anwpfl_summary_ifr{
			height: 300px !important;
		}
	</style>
  <?php
}

function plugin_mce_css( $mce_css ) {
  if ( !empty( $mce_css ) )
    $mce_css .= ',';
    $mce_css .= get_stylesheet_directory_uri().'/admin_editor.css';
    return $mce_css;
  }
add_filter( 'mce_css', 'plugin_mce_css' );