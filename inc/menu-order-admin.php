<?php
/**
 * Ordering the administration menu
 * 
 * Reorders the provision of the administrative panel menu
 * 
 */
function custom_menu_order() {
	return array( 
		'index.php',
		'separator1', // First separator
		'edit.php',
		'edit.php?post_type=plano', // Custom type "plano"
        'edit.php?post_type=historia', // Custom type "timeline"
		/*'edit.php?post_type=produto', // Custom type "produto"
		'edit.php?post_type=topo', // Custom type "parceiro"
		'edit.php?post_type=demelhor', // Custom type "demelhor"
		'edit.php?post_type=area', // Custo
		'edit.php?post_type=parceiro', // Custom type "parceiro"
		'edit.php?post_type=pagamento', // Custom type "pagamento"*/
		'upload.php', // Media      	
      	'edit-comments.php', // Comments
      	'edit.php?post_type=page', // Pages      	'      	 
      	'separator2', // Second separator
		
		);
}	
add_filter( 'custom_menu_order', '__return_true' ); #filter
add_filter( 'menu_order', 'custom_menu_order' ); #filter