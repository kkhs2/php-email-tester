<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    <strong>Credit Application Submission</strong>
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
    Customer <strong>{CustomerNumber}</strong> has successfully completed all stages of the online credit application (Application signing, ID Verification & Credit Safe Checks).
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    To Access the signed Credit Safe and GBG ID Verification Documents, please log into CDW and choose the desired documents you wish to view.
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
