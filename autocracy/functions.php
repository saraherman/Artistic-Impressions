<?php

//Field Definition Functions

function autoc_def_textfield($optioname, $id) {

	$option = get_option($optioname);

	echo '<input type="text" size="36" ';
	echo 'name='.$optioname. '['. $id .'] ';
	echo 'value="'.__($option[$id]).'" />'; 
}

function autoc_def_textarea($optioname, $id) {

	$option = get_option($optioname);

	echo '<textarea size="36" ';
	echo 'name='.$optioname. '['. $id .'] ';
	echo '>';
	echo __($option[$id]);
	echo '</textarea>'; 

}

//Accessor Functions

function autoc_get_img($id) {
        global $wpdb;
        $images = get_post_meta( get_the_ID(), $id, false );
        $images = implode( ',' , $images );
        $images = $wpdb->get_col( "
                SELECT ID FROM {$wpdb->posts}
                WHERE post_type = 'attachment'
                AND ID in ({$images})
                ORDER BY menu_order ASC
                " );

        foreach ( $images as $att )
        {
                $src = wp_get_attachment_image_src( $att, 'full' );
                $src = $src[0];
                echo "<li>";
                echo "<img alt='image' src='{$src}' />";
                echo "</li>";
        }

}

function autoc_get_postdata($id) {
        global $wpdb;
        $postdata = get_post_meta( get_the_ID(), $id, false );
        print_r($postdata);
}

function imageGallery($id) {

	global $wpdb;
	$images = get_post_meta( get_the_ID(), $id, false );
	$images = implode( ',' , $images );
	$images = $wpdb->get_col( "
		SELECT ID FROM {$wpdb->posts}
		WHERE post_type = 'attachment'
		AND ID in ({$images})
		ORDER BY menu_order ASC
		" );

	$counter = 1;
	foreach ( $images as $att )
	{
		$src = wp_get_attachment_image_src( $att, 'full' );
		$src = $src[0];
		if ($counter === 1) {
			echo "<img class='main-img' src='{$src}'>";
			echo "<ul>";
		}
		else {
			echo "<li><img alt='image' src='{$src}' /></li>";
		}
		$counter++;
	}
	echo '</ul>';
}
?>