<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    We have recently received a request to reset your password. If you did not make this request or you no longer need to reset your password you can safely ignore this email. In order to complete this action please click the following link:
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
