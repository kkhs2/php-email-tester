Booker Newsletter
<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Dear <strong>{FIRSTNAME}</strong>,
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Thank you for registering with Booker to receive our newsletter e-mail. You will now receive notification of our latest promotions which we hope you will find useful.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    To activate the service please click on the link below:
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    <!--[if mso]>
<a style="text-decoration: underline; color: #000; font-weight: 700" href="{WEBSITE_LINK}">{WEBSITE_LINK}</a>
<![endif]--><!--[if !mso> <!--><a style="text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;" href="{WEBSITE_LINK}">{WEBSITE_LINK}</a><!--<![endif]-->
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    If this link does not direct you to our website, please copy and paste it into your internet browser&#39;s address bar.
  </p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
