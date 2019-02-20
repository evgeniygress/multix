<?php 

	add_action( 'after_setup_theme', function() {
		add_theme_support( 'title-tag' );
		add_theme_support('post-thumbnails');
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat',
		) );
		register_nav_menus( array(
			'header-nav' => 'primary menu',
		) );
		add_image_size ('small', 78, 64, true);
		add_image_size ('full-size', 1900, 900, true);
		add_image_size ('portfolio-thumb', 650, 650, true);
	} );

	

// add style and script
	function multix_scripts() {
		
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css' );
		wp_enqueue_style( 'awesome', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css' );
		wp_enqueue_style( 'et-line-font', get_template_directory_uri() . '/css/et-line-font/et-line-font.css' );
		wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup/magnific-popup.css' );
		wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/owl-carousel/owl.carousel.min.css' );
		wp_enqueue_style( 'owl-default', get_template_directory_uri() . '/css/owl-carousel/owl.theme.default.min.css' );
		wp_enqueue_style( 'style-css', get_stylesheet_uri() );
		wp_enqueue_style( 'g-red', get_template_directory_uri() . '/css/colors/g-red.css' );
		wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );

		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
		wp_enqueue_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true);
		wp_enqueue_script('countTo', get_template_directory_uri() . '/js/jquery.countTo.js', array('jquery'), '', true);
		wp_enqueue_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '', true);
		wp_enqueue_script('masonry', get_template_directory_uri() . '/js/js/masonry.pkgd.min.js', array('jquery'), '', true);
		wp_enqueue_script('popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true);
		wp_enqueue_script('parsley', get_template_directory_uri() . '/js/parsley.js', array('jquery'), '', true);
		wp_enqueue_script('scrollIt', get_template_directory_uri() . '/js/scrollIt.min.js', array('jquery'), '', true);
		wp_enqueue_script('custom', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
	}
	add_action( 'wp_enqueue_scripts', 'multix_scripts' );


	// add options page
	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'options site',
			'menu_title'	=> 'options themes',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'settings header',
			'menu_title'	=> 'header',
			'parent_slug'	=> 'theme-general-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'settings footer',
			'menu_title'	=> 'footer',
			'parent_slug'	=> 'theme-general-settings',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'settings main',
			'menu_title'	=> 'main',
			'parent_slug'	=> 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'settings price-block',
			'menu_title'	=> 'price-block',
			'parent_slug'	=> 'theme-general-settings',
		));
	}

	//add new post type
	add_action( 'init', 'create_post_types' );
	function create_post_types(){
		register_post_type('work', array(
			'label'  => null,
				'labels' => array(
					'name'               => 'work', // основное название для типа записи
					'singular_name'      => 'work', // название для одной записи этого типа
					'add_new'            => 'add new', // для добавления новой записи
					'add_new_item'       => 'add new item', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'edit item', // для редактирования типа записи
					'new_item'           => 'new item', // текст новой записи
					'view_item'          => 'view item', // для просмотра записи этого типа.
				),
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => null, // зависит от public
				'exclude_from_search' => null, // зависит от public
				'show_ui'             => null, // зависит от public
				'show_in_menu'        => null, // показывать ли в меню адмнки
				'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
				'show_in_nav_menus'   => null, // зависит от public
				'show_in_rest'        => null, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => null,
				'menu_icon'           => 'dashicons-format-gallery',
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => false,
				'supports'            => array('title','editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => array('work-category'),
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
		) );
		register_post_type('price', array(
			'label'  => null,
				'labels' => array(
					'name'               => 'price', // основное название для типа записи
					'singular_name'      => 'price', // название для одной записи этого типа
					'add_new'            => 'add new', // для добавления новой записи
					'add_new_item'       => 'add new item', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'edit item', // для редактирования типа записи
					'new_item'           => 'new item', // текст новой записи
					'view_item'          => 'view item', // для просмотра записи этого типа.
				),
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => null, // зависит от public
				'exclude_from_search' => null, // зависит от public
				'show_ui'             => null, // зависит от public
				'show_in_menu'        => null, // показывать ли в меню адмнки
				'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
				'show_in_nav_menus'   => null, // зависит от public
				'show_in_rest'        => null, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => null,
				'menu_icon'           => 'dashicons-format-gallery',
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => false,
				'supports'            => array('title', 'page-attributes'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => array('price'),
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
		) );
	}

	//register taxonomy

	add_action('init', 'create_taxonomy');
	function create_taxonomy(){
		// список параметров: http://wp-kama.ru/function/get_taxonomy_labels
		register_taxonomy('work-category', array('work'), array(
			'label'                 => '', // определяется параметром $labels->name
			'labels'                => array(
				'name'              => 'work-category',
				'singular_name'     => 'category',
				'search_items'      => 'Search category',
				'all_items'         => 'All category',
				'view_item '        => 'View category',
				'parent_item'       => 'Parent category',
				'parent_item_colon' => 'Parent category:',
				'edit_item'         => 'Edit category',
				'update_item'       => 'Update category',
				'add_new_item'      => 'Add New category',
				'new_item_name'     => 'New category Name',
				'menu_name'         => 'category',
			),
				'description'           => '', // описание таксономии
				'public'                => true,
				'publicly_queryable'    => null, // равен аргументу public
				'hierarchical'          => false,
				'rewrite'               => true,
			) );

	}

	

	
?>