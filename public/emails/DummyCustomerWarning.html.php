<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    A customer has just registered on the website.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    The number of remaining dummy customer accounts available for registration is now <strong>{CUSTOMERCOUNT}</strong>.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    To avoid problems with customers being unable to register online please ensure that a new batch of dummy customers is made available to the website as soon as possible.
  </p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
