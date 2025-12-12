<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Dear <strong>{DISPLAYNAME}</strong>,
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    You have recently requested to reset your password. In order to complete this action please click the following link:
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    <!--[if mso]>
    <a href="https://{DOMAIN}/ManagersWipeboard/ResetPassword.aspx?rid={RESETGUID}" style="text-decoration: underline; color: #000; font-weight: 700">https://{DOMAIN}/ManagersWipeboard/ResetPassword?resetId={RESETGUID}</a><![endif]--><!--[if !mso> <!--> <a href="https://{DOMAIN}/ManagersWipeboard/ResetPassword.aspx?rid={RESETGUID}" style="text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;">https://{DOMAIN}/ManagersWipeboard/ResetPassword?resetId={RESETGUID}</a><!--<![endif]-->
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    The reset password link will only be valid for one day. Your existing password will continue to work until you reset the password through the link above.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Should you need any further assistance please contact the Service Desk on 03700 117 357.
  </p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
