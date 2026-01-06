Registration Reminder
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
    According to our records, you have not yet visited Booker <strong>{BRANCHNAME}</strong> to activate your account. To complete your registration, and enable you to shop with us, please visit Booker <strong>{BRANCHNAME}</strong> with two proofs of business id, which can be either a utility bill, business invoice or bank statement that shows your registered address before <strong>{DEADLINE}</strong>. After this date, your account will expire if not fully activated.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Your branch details are:
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    {BRANCHNAME}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    {BRANCHADDRESS}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    {BRANCHTRADINGHOURS}
  </p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
