<?php 
require_once( dirname(__FILE__).'/includes/load-yourls.php' );
include('includes/header.php'); 
?>
  <div id="container">
    <?php
    // Part to be executed if FORM has been submitted
	  if ( isset($_REQUEST['url']) ) {
		$url     = yourls_sanitize_url( $_REQUEST['url'] );
	    $keyword = isset( $_REQUEST['keyword'] ) ? yourls_sanitize_keyword( $_REQUEST['keyword'] ): '' ;
	    $title   = isset( $_REQUEST['title'] ) ? yourls_sanitize_title( $_REQUEST['title'] ) : '' ;
		$return  = yourls_add_new_link( $url, $keyword, $title );
	    $shorturl = isset( $return['shorturl'] ) ? $return['shorturl'] : '';
	    $message  = isset( $return['message'] ) ? $return['message'] : '';
	    $title    = isset( $return['title'] ) ? $return['title'] : '';
	    echo '<h2>URL has been shortened</h2>
	    <p>Original URL: <code>'.$url.'</code></p>';
	        
	    // Include the Copy box and the Quick Share box
	    yourls_share_box( $url, $shorturl, $title );
	
	  // Part to be executed when no form has been submitted
	  } else {
	  	echo '<h2>Enter a new URL to shorten</h2>';
	  	$site = YOURLS_SITE;
		echo '<form method="post" action="">
	    <p><label>URL: <input type="text" name="url" value="http://" size="70" /></label></p>
	    <p><label>Optional custom keyword: <input type="text" name="keyword" size="8" /></label></p>
	    <p><input type="submit" value="Shorten" class="btn" /></p>
	    </form>';
	  }
	?>
    <a href="donate.php" class="donate-banner">&nbsp;</a>
    <br class="clear" />
  </div>
<?php include('includes/footer.php'); ?>