<?php 
	
	add_action('rest_api_init', 'customPostRegister');

	function customPostRegister()
	{
		register_rest_route('mayur/v1', 'posts', array(
			'methods' => WP_REST_Server::READABLE,
			'callback' => 'customPostResults'
		));

	}
	
	function customPostResults($data)
	{
		// pull 5 posts 
		$posts_api = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => '5',
			's' => sanitize_text_field($data['term'])
		));

		$postResults = array();

		while ($posts_api->have_posts()) {
			$posts_api->the_post();

			// get category
			$categoryResult = array();
			$categories = get_the_category();//get categories of the post
			if ( ! empty( $categories ) ) {
			    foreach( $categories as $category ) {
			    	array_push($categoryResult, array(
						'id' => $category->term_id,
						'name' => $category->name,
						'slug' => $category->slug
					));  
			    }
			}
			// img id
			$imgId = get_post_thumbnail_id();

			// for nepali date
			// $day = get_the_date("d");
			// $month = get_the_date("m");
			// $year = get_the_date("Y");
			// $date = new Nepali_Calendar();
			// $dt = $date->eng_to_nep($year, $month, $day);

			// get date of the post
			$dt = get_the_date( 'Y-m-d' ) .'T'. get_the_time('H:i:s');

			// store in the array
			array_push($postResults, array(
				'id' => get_the_ID(),
				'title' => get_the_title(),
				'link' => get_the_permalink(),
				'category' => $categoryResult,// category array from earlier
				'featured_img' => get_the_post_thumbnail_url(), // get thumbnail
				'date' => $dt
			));
		}

		return $postResults;
	}

?>