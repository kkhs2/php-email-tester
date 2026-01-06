Central Billing Order Placed
<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Dear <strong>{SUPPLIER_NAME}</strong>,
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Customer <strong>{CUSTOMER_NAME}</strong> has requested a delivery from you through the Central Billing area of booker.co.uk.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Please find customer and order details in the attachment below:-
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    {SUPPLIER_REFERENCE}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    <strong>Customer No - {CUSTOMER_ID}</strong>
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    {ORDER_SUMMARY}
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
<a style="text-decoration: underline; color: #000; font-weight: 700" href="mailto:centralbilling@booker.co.uk">centralbilling@booker.co.uk/a>
<![endif]--><!--[if !mso> <!--><a style="text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;" href="mailto:centralbilling@booker.co.uk">centralbilling@booker.co.uk</a>.<!--<![endif]-->
  </p>
  </td>
</tr>

<?php
$content = ob_get_clean();
include './base.html.php';
