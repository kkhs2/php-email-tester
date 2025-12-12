<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    A customer has requested permission to reprint a voucher.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Customer Details:
      <ul>
        <li>Customer Number: {CUSTOMERNUMBER}</li>
        <li>Name: {NAME}</li>
        <li>Email Address: {EMAIL}</li>
        <li>Phone Number: {PHONE}</li>
      </ul>
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    The customer has printed this voucher <strong>{PRINTCOUNT}</strong> time{PRINTCOUNTPLURAL} already.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    To enable the customer to re-print the voucher, please <!--[if mso]>
<a style="text-decoration: underline; color: #000; font-weight: 700" href="{REPRINTURL}">click this link</a>
<![endif]--><!--[if !mso> <!--><a style="text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;" href="{REPRINTURL}">click this link</a><!--<![endif]-->.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    If you do not wish the re-enable the voucher please contact the customer to explain why.
  </p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
