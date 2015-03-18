<?php

/**
* Strong Marriage Now Legacy Page Template
*/

/**
 * Load the header
 *
 */
define('__TEMPLATE__', dirname(dirname(__FILE__))); 
require_once(__TEMPLATE__.'/smnlegacy-onecol/header.php') ;
?>

		<!-- content -->
		<div id="container" class="fix ">

			<?php
			/* display Page content */
			if (have_posts()) :
			while (have_posts()) : the_post();

			the_content();

			endwhile;
			endif;
			?>

		</div>



		
<?php
/**
 * Load the footer
 *
 */
require_once(__TEMPLATE__.'/smnlegacy-onecol/footer.php') ;

?>