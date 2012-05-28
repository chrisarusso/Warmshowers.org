<?php
/**
 * Member contact location block template
 *
 * Supported variables
 * - $account (not sanitized)
 * - $uid
 * - $username
 * - $fullname (User's full name from wsuser)
 * - $homephone
 * - $mobilephone
 * - $homephone
 * - $street
 * - $additional
 * - $city
 * - $province
 * - $country
 * - $postal_code
 * - $latitude
 * - $longitude
 *
 * @see wsuser_preprocess_wsuser_member_contact_location()
 */
?>

<div class="member-map">
  <a class="thickbox" href="/maponly/uid=<?php print $uid; ?>?KeepThis=true&TB_iframe=true&height=600&width=800" accesskey="" >
    <img src="http://maps.googleapis.com/maps/api/staticmap?zoom=8&size=200x200&sensor=false&markers=color:blue%7Clabel:S%7C <?php print $latitude . ',' . $longitude; ?>" />
  </a>
</div>

<div class="member-address">
  <span class="member-fullname"><?php print $fullname; ?></span><br/>
  <?php if ($homephone) : ?>
    <span class="phone homephone"><?php print t('Home') . ': ' . $homephone; ?></span><br/>
  <?php endif; ?>
  <?php if ($mobilephone) : ?>
    <span class="phone mobilephone"><?php print t('Mobile') . ': ' . $mobilephone; ?></span><br/>
  <?php endif; ?>
  <?php if ($workphone) : ?>
  <span class="phone workphone"><?php print t('Work') . ': ' . $workphone; ?></span><br/>
  <?php endif; ?>

  <?php if ($street): ?>
    <span class="member-street"><?php print $street; ?></span><br/>
  <?php endif; ?>
  <?php if ($additional): ?>
    <span class="member-additional"><?php print $additional; ?></span><br/>
  <?php endif; ?>
  <span class="member-city"><?php print $city . ', ' . $province . ' ' . $postal_code . ' ' . $country; ?></span>
</div>

<?php print drupal_get_form('wsuser_contact_button', $account); ?>