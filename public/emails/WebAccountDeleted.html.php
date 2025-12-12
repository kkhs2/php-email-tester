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
    Your account on the Booker website has been cancelled and as a result you will not be able to place any more orders online.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    If you believe this has been done in error, or should you require technical assistance please contact us on {CONTACTPHONE}. Our opening times are as follows;
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    {OPENINGHOURS}.
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
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Should you require further assistance please contact us on 0345 602 3108.  Our opening times are as follows;
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    7am to 7pm, 7 days a week. 
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
