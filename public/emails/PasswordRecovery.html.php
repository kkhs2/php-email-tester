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
    We have received a request to reset the password associated with this e-mail address for account <strong>{CUSTOMERNUMBER}</strong>. If you made this request, please click the link below:
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    <!--[if mso]>
<a style="text-decoration: underline; color: #000; font-weight: 700" href="{RESETGUID}">{RESETGUID}</a>
<![endif]--><!--[if !mso> <!--><a style="text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;" href="{RESETGUID}">{RESETGUID}</a><!--<![endif]-->
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    If you did not request to have your password reset you can safely ignore this e-mail and continue to use your existing password. Rest assured your account is safe.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Should you require further assistance please contact us on {CONTACTPHONE}. Our opening times are as follows;
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    {OPENINGHOURS}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    You can also contact us by email at {CONTACTEMAIL}.
  </p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
