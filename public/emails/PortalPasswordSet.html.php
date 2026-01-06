Booker Portal Password Set
<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    An account has recently been created for you in the Booker portal. To complete the setup please follow the link below to set a password.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    <!--[if mso]>
<a style="text-decoration: underline; color: #000; font-weight: 700" href="{RESETURL}">{RESETURL}</a>
<![endif]--><!--[if !mso> <!--><a style="text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;" href="{RESETURL}">{RESETURL}</a><!--<![endif]-->
  </p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
