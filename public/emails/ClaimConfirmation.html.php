<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Dear <strong>{CUSTOMERNAME}</strong>,
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Your claim has been successfully submitted.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Your claim reference is <strong>{REFNUMBER}</strong>.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    You can view your claims details here <!--[if mso]>
<a style="text-decoration: underline; color: #000; font-weight: 700" href="{DETAILSURL}">{DETAILSURL}</a>
<![endif]--><!--[if !mso> <!--><a style="text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;" href="{DETAILSURL}">{DETAILSURL}</a><!--<![endif]-->.
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
