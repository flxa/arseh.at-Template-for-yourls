<?php include('includes/header.php'); ?>
<div id="container">
  <h2>Using the bookmarklet</h2>
  <ul>
    <li> Drag the bookmarklet link to the bookmark bar in your browser</li>
    <li> Browse to the page you wish to shorten</li>
    <li> Click the bookmarklet</li>
  </ul>
  <p>Your page will be automatically shortened.</p>
  <br>
  <h2>Tweetdeck</h2>
  <ul>
    <li> Open Tweetdeck</li>
    <li> Go into <b>Settings > Services</b></li>
    <li> Change the <b>URL shortening service</b> to <b>Other</b></li>
    <li> Enter the following into <b>Other URL shortening endpoint</b></li>
  </ul>
  <code>http://arseh.at/api.php?action=shorturl&format=simple&url=%@</code>
  <br><br>
  <h2>Twitter for iPhone</h2>
  <ul>
    <li> Open Twitter for iPhone</li>
    <li> Go into <b>Settings > Services</b></li>
    <li> Select <b>URL Shortening</b></li>
    <li> Select <b>Custom</b> and enter the following:</li>
  </ul>
  <code>http://arseh.at/api.php?action=shorturl&format=simple&url=%@</code>
  <a href="donate.php" class="donate-banner">&nbsp;</a>
  <br class="clear" />
</div>
<?php include('includes/footer.php'); ?>