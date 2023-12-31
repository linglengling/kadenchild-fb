<?php
function theme_styles() 
{
	wp_register_style('custom-styles', get_stylesheet_directory_uri() . '/style.css' ,array(),time());
	wp_enqueue_style('custom-styles');

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


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

	if($prase['path'] == '/bong-da/'){
		return $url.'vi/';
	}elseif ($prase['path'] == '/futebol/') {
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

	$location = (isset($args['location']) && !empty($args['location'])) ? $args['location'] : 'top';
	ob_start(); ?>

	<!-- START ID wm-post-shortcode -->
	<div id="wm-post-shortcode">
		<?php 
		$recent_args = array(
			"post_type" => "post",
			"posts_per_page" => 12,	
			"post_status" => "publish",		
			"orderby"        => "date",
			"order"          => "DESC"
		);      

		$recent = get_posts($recent_args);

		foreach ($recent as $key => $value) { ?>

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
						echo '<ul>';
						foreach( $child_cat as $child_term ) {
							echo '<li>'.$child_term->name . '</li>';
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