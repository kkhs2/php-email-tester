Booker Price Comparison E-mail
<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Thank you for registering with <?php include '../components/maintype.html.php' ?> to use the price comparison service.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Now you can enter product codes from your Brakes or 3663 invoice and we will show you how much you could save on equivalent <?php include '../components/maintype.html.php' ?> products.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    To access the service please click on the link below:
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
    If this does not work, please cut and paste the link into your browsers address bar.
  </p>
  </td>
</tr>

<?php
$content = ob_get_clean();
include './base.html.php';
