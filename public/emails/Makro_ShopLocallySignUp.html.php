Form Submission: Shop Locally - Sign Up
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
   Trading Name: {TRADINGNAME}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Licenced: {LICENCED}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Shop Locally Sign Up: {CLUBSIGNUP}
  </p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
