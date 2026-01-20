Credit Application Submission - Council / Local Authority
<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    <strong>Credit Application Submission - Council / Local Authority</strong>
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    To Better Credit Team (KYC),
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Customer <strong>{CustomerNumber}</strong> has successfully completed all stages of the online credit application as a <strong>Council / Local Authority</strong> trading style (Application signing only).
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    You should have already received an email from Docusign, confirming the signing of the Application by the customer.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Please note, if you have not received the Signed Credit Application from the applicant, this can be viewed within the Docusign Portal with the current status of the application and any outstanding signatures.
  </p>
  </td>
</tr>

<?php
$content = ob_get_clean();
include './base.html.php';
