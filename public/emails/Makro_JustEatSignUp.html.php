<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Booker Account: {ACCOUNTNUMBER}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Just Eat Restaurant ID: {RESTAURANTID}
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
<?php
$content = ob_get_clean();
include './base.html.php';
