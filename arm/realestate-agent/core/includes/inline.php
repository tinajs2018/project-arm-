<?php


$realestate_agent_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$realestate_agent_text_transform = get_theme_mod( 'menu_text_transform_realestate_agent','CAPITALISE');
    if($realestate_agent_text_transform == 'CAPITALISE'){

		$realestate_agent_custom_css .='#main-menu ul li a{';

			$realestate_agent_custom_css .='text-transform: capitalize ; font-size: 14px !important;';

		$realestate_agent_custom_css .='}';

	}else if($realestate_agent_text_transform == 'UPPERCASE'){

		$realestate_agent_custom_css .='#main-menu ul li a{';

			$realestate_agent_custom_css .='text-transform: uppercase ; font-size: 14px !important';

		$realestate_agent_custom_css .='}';

	}else if($realestate_agent_text_transform == 'LOWERCASE'){

		$realestate_agent_custom_css .='#main-menu ul li a{';

			$realestate_agent_custom_css .='text-transform: lowercase ; font-size: 14px !important';

		$realestate_agent_custom_css .='}';
	}

	/*---------------------------menu-zoom-------------------*/

		$realestate_agent_menu_zoom = get_theme_mod( 'realestate_agent_menu_zoom','None');

    if($realestate_agent_menu_zoom == 'None'){

		$realestate_agent_custom_css .='#main-menu ul li a{';

			$realestate_agent_custom_css .='';

		$realestate_agent_custom_css .='}';

	}else if($realestate_agent_menu_zoom == 'Zoominn'){

		$realestate_agent_custom_css .='#main-menu ul li a:hover{';

			$realestate_agent_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #fff;';

		$realestate_agent_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

		$realestate_agent_container_width = get_theme_mod('realestate_agent_container_width');

		$realestate_agent_custom_css .='body{';

			$realestate_agent_custom_css .='width: '.esc_attr($realestate_agent_container_width).'%; margin: auto';

		$realestate_agent_custom_css .='}';

		/*---------------------------Slider-content-alignment-------------------*/


		$realestate_agent_slider_content_alignment = get_theme_mod( 'realestate_agent_slider_content_alignment','RIGHT-ALIGN');

		 if($realestate_agent_slider_content_alignment == 'LEFT-ALIGN'){

				$realestate_agent_custom_css .='.blog_box{';

					$realestate_agent_custom_css .='text-align:left; right:50%; left:20%;';

				$realestate_agent_custom_css .='}';


			}else if($realestate_agent_slider_content_alignment == 'CENTER-ALIGN'){

				$realestate_agent_custom_css .='.blog_box{';

					$realestate_agent_custom_css .='text-align:center; right:30%; left:30%;';

				$realestate_agent_custom_css .='}';


			}else if($realestate_agent_slider_content_alignment == 'RIGHT-ALIGN'){

				$realestate_agent_custom_css .='.blog_box{';

					$realestate_agent_custom_css .='text-align:right;';

				$realestate_agent_custom_css .='}';

			}


 		/*---------------------------Copyright Text alignment-------------------*/

$realestate_agent_copyright_text_alignment = get_theme_mod( 'realestate_agent_copyright_text_alignment','CENTER-ALIGN');

 if($realestate_agent_copyright_text_alignment == 'LEFT-ALIGN'){

		$realestate_agent_custom_css .='.copy-text p{';

			$realestate_agent_custom_css .='text-align:left;';

		$realestate_agent_custom_css .='}';


	}else if($realestate_agent_copyright_text_alignment == 'CENTER-ALIGN'){

		$realestate_agent_custom_css .='.copy-text p{';

			$realestate_agent_custom_css .='text-align:center;';

		$realestate_agent_custom_css .='}';


	}else if($realestate_agent_copyright_text_alignment == 'RIGHT-ALIGN'){

		$realestate_agent_custom_css .='.copy-text p{';

			$realestate_agent_custom_css .='text-align:right;';

		$realestate_agent_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/

	$realestate_agent_related_product_setting = get_theme_mod('realestate_agent_related_product_setting',true);

		if($realestate_agent_related_product_setting == false){

			$realestate_agent_custom_css .='.related.products, .related h2{';

				$realestate_agent_custom_css .='display: none;';

			$realestate_agent_custom_css .='}';
		}


/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$realestate_agent_scroll_top_position = get_theme_mod( 'realestate_agent_scroll_top_position','Right');

	if($realestate_agent_scroll_top_position == 'Right'){

		$realestate_agent_custom_css .='.scroll-up{';

			$realestate_agent_custom_css .='right: 20px;';

		$realestate_agent_custom_css .='}';

	}else if($realestate_agent_scroll_top_position == 'Left'){

		$realestate_agent_custom_css .='.scroll-up{';

			$realestate_agent_custom_css .='left: 20px;';

		$realestate_agent_custom_css .='}';

	}else if($realestate_agent_scroll_top_position == 'Center'){

		$realestate_agent_custom_css .='.scroll-up{';

			$realestate_agent_custom_css .='right: 50%;left: 50%;';

		$realestate_agent_custom_css .='}';
	}

			/*---------------------------Pagination Settings-------------------*/


$realestate_agent_pagination_setting = get_theme_mod('realestate_agent_pagination_setting',true);

	if($realestate_agent_pagination_setting == false){

		$realestate_agent_custom_css .='.nav-links{';

			$realestate_agent_custom_css .='display: none;';

		$realestate_agent_custom_css .='}';
	}

		/*--------------------------- Slider Opacity -------------------*/

	$realestate_agent_slider_opacity_color = get_theme_mod( 'realestate_agent_slider_opacity_color','0.6');

	if($realestate_agent_slider_opacity_color == '0'){

		$realestate_agent_custom_css .='.slider img{';

			$realestate_agent_custom_css .='opacity:0';

		$realestate_agent_custom_css .='}';

		}else if($realestate_agent_slider_opacity_color == '0.1'){

		$realestate_agent_custom_css .='.slider img{';

			$realestate_agent_custom_css .='opacity:0.1';

		$realestate_agent_custom_css .='}';

		}else if($realestate_agent_slider_opacity_color == '0.2'){

		$realestate_agent_custom_css .='.slider img{';

			$realestate_agent_custom_css .='opacity:0.2';

		$realestate_agent_custom_css .='}';

		}else if($realestate_agent_slider_opacity_color == '0.3'){

		$realestate_agent_custom_css .='.slider img{';

			$realestate_agent_custom_css .='opacity:0.3';

		$realestate_agent_custom_css .='}';

		}else if($realestate_agent_slider_opacity_color == '0.4'){

		$realestate_agent_custom_css .='.slider img{';

			$realestate_agent_custom_css .='opacity:0.4';

		$realestate_agent_custom_css .='}';

		}else if($realestate_agent_slider_opacity_color == '0.5'){

		$realestate_agent_custom_css .='.slider img{';

			$realestate_agent_custom_css .='opacity:0.5';

		$realestate_agent_custom_css .='}';

		}else if($realestate_agent_slider_opacity_color == '0.6'){

		$realestate_agent_custom_css .='.slider img{';

			$realestate_agent_custom_css .='opacity:0.6';

		$realestate_agent_custom_css .='}';

		}else if($realestate_agent_slider_opacity_color == '0.7'){

		$realestate_agent_custom_css .='.slider img{';

			$realestate_agent_custom_css .='opacity:0.7';

		$realestate_agent_custom_css .='}';

		}else if($realestate_agent_slider_opacity_color == '0.8'){

		$realestate_agent_custom_css .='.slider img{';

			$realestate_agent_custom_css .='opacity:0.8';

		$realestate_agent_custom_css .='}';

		}else if($realestate_agent_slider_opacity_color == '0.9'){

		$realestate_agent_custom_css .='.slider img{';

			$realestate_agent_custom_css .='opacity:0.9';

		$realestate_agent_custom_css .='}';

		}else if($realestate_agent_slider_opacity_color == '1.0'){

		$realestate_agent_custom_css .='.slider img{';

			$realestate_agent_custom_css .='opacity:0.9';

		$realestate_agent_custom_css .='}';

		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$realestate_agent_overlay_option = get_theme_mod('realestate_agent_overlay_option', true);

	if($realestate_agent_overlay_option == false){

		$realestate_agent_custom_css .='.slider img{';

			$realestate_agent_custom_css .='opacity:0.6;';

		$realestate_agent_custom_css .='}';
	}

	/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$realestate_agent_woocommerce_pagination_position = get_theme_mod( 'realestate_agent_woocommerce_pagination_position','Center');

	if($realestate_agent_woocommerce_pagination_position == 'Left'){

		$realestate_agent_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$realestate_agent_custom_css .='text-align: left;';

		$realestate_agent_custom_css .='}';

	}else if($realestate_agent_woocommerce_pagination_position == 'Center'){

		$realestate_agent_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$realestate_agent_custom_css .='text-align: center;';

		$realestate_agent_custom_css .='}';

	}else if($realestate_agent_woocommerce_pagination_position == 'Right'){

		$realestate_agent_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$realestate_agent_custom_css .='text-align: right;';

		$realestate_agent_custom_css .='}';
	}



