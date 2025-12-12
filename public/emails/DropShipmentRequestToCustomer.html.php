<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Dear <strong>{CUSTOMER_NAME}</strong>
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    You have requested to receive Central Billing deliveries from <strong>{SUPPLIER_NAME}</strong>.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    <strong>{SUPPLIER_NAME}</strong> will now review your request, and confirm whether they are able to make deliveries to you. This decision will be confirmed via an email from Booker.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
   Should you require further assistance, please contact us on 0345 850 5051.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    You can also contact us by email at <!--[if mso]>
<a style="text-decoration: underline; color: #000; font-weight: 700" href="mailto:centralbilling@booker.co.uk">centralbilling@booker.co.uk</a>
<![endif]--><!--[if !mso> <!--><a style="text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;" href="mailto:centralbilling@booker.co.uk">centralbilling@booker.co.uk</a><!--<![endif]-->.
  </p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
