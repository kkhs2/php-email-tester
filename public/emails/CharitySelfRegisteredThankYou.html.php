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
    Thank you for registering with Booker.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Your customer number is <strong>{CUSTOMERNUMBER}</strong>.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    When you visit your chosen Booker branch, please bring a copy of a letter of authorisation from the charity on headed notepaper, and either a utility bill, business invoice or bank statement that shows your charity's address.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>Please find details of your account in the attached PDF file.</p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>{BRANCHNAME}</p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>{BRANCHADDRESS}</p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>{BRANCHTRADINGHOURS}</p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
