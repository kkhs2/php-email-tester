Form Submission: Gold Card - Sign Up
<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Customer Number: {CUSTOMERNUMBER}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    E-mail Address: {EMAILADDRESS}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Mobile Number: {MOBILENUMBER}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Contact via Email: {CONTACTEMAIL}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Contact via SMS: {CONTACTSMS}
  </p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
