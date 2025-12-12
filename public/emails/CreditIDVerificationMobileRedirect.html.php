<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    <strong>Identity Verification</strong>
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    E-mail to <!--[if mso]>
<a style="text-decoration: underline; color: #000; font-weight: 700" href="mailto:{EMAIL}">{EMAIL}</a>
<![endif]--><!--[if !mso> <!--><a style="text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;" href="mailto:{EMAIL}">{EMAIL}</a><!--<![endif]-->
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    We have recently received a request to proceed with your credit application.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
   In order to complete this action, please click the following link or click the "Begin Identity Verification".
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    <!--[if mso]>
<a style="text-decoration: underline; color: #000; font-weight: 700" href="{LINK}">{LINK}</a>
<![endif]--><!--[if !mso> <!--><a style="text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;" href="{LINK}">{LINK}</a><!--<![endif]-->
  </p>
  </td>
</tr>

<?php
$content = ob_get_clean();
include './base.html.php';
