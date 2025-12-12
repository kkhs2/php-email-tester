<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    The following on-line customer has completed a contact form.
  </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/customertable.html.php' ?>
<?php include '../components/smallheight.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Message from customer : -
  </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>{MESSAGE}</p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>Please contact the customer as soon as possible.</p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
