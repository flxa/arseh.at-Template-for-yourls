<?php
class paypal{
  function ppdonate() {
    //get PayPal configuration
    $reselleremail      = '';
    $ppcurrency         = 'AUD';
    $ppreturnurl        = 'http://arseh.at/index.php';
    $ppshoppingurl      = 'http://arseh.at/index.php';
    $ppreturncancelurl  = 'http://arseh.at/index.php';
    $sandbox_mode       = 0; // 0=live, 1=sandbox
    $html .= '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_donations">
    <input type="hidden" name="business" value="stuart@coscom.net">
    <input type="hidden" name="lc" value="US">
    <input type="hidden" name="no_note" value="0">
    <input type="hidden" name="currency_code" value="AUD">
    <input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
    <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>';
    return $html; 
  }
}
?>