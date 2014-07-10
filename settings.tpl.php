<?php
/**
 * Settings page for the Mapply module.
 */
?>

<div class='mapply'>
  <div class='header'>
    <img class='logo' src='/<?php echo drupal_get_path('module', 'mapply'); ?>/imgs/logo2.png'/>
  </div>
  <hr />
  <div class='instructions'>
    <p>Step 1 - First we'll need to have a Mapply account. If you don't have one
      already, you can sign up for a 
      <a href='http://mapply.net'>free 30 day trial here!</a> :-)
    </p>
    <p>
      Step 2 - Once you're signed up and inside your Mapply account, navigate
      to the <a href='https://app.mapply.net/settings.php'> API setup page</a>
      to grab your Mapply and Google Map API keys to populate the fields below.
    </p>
    <p>
      Step 3 - Once you have all of your <a href='https://app.mapply.net/admin.php'>
        stores setup</a> in your Mapply account, you can insert your map on any
      page by using the [mapply/] shortcode.
    </p>
    <p>
      Step 4 - Your content types will need to be configured to allow the [mapply/]
      shortcode.  This setting is disabled by default, but can be 
      <a href='?q=#overlay=admin/config/content/formats'>re-enabled here</a>.
    </p>
    <p>
      Step 5 - Your content types will need to be able to allow a script tag.
      This is disabled by default, but moving the shortcode filter to the bottom
      of the 'Filter Processing Order' for each of your content types 
      <a href='?q=#overlay=admin/config/content/formats'>listed here</a> should
      allow it to work as expected.
    </p>
  </div>
  <?php echo drupal_render(drupal_get_form('mapply_settings_form')); ?>
</div>
