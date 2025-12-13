<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Dear <strong>{CUSTOMER_NAME}</strong>,
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Thank you for placing an order with <strong>{SUPPLIER_COUNT}</strong> Central Billing supplier(s) on booker.co.uk, which was received on <strong>{ORDER_DATE}</strong> at <strong>{ORDER_TIME}</strong>.
  </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/ordernumber.html.php' ?>
<?php include '../components/smallheight.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    A summary of your order is attached below:-
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
    Payment for this order will be taken from your Central Billing credit account when supplier invoices have been received and processed by Booker.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Copies of your invoices and Central Billing statements are loaded weekly into your Account area on booker.co.uk for you to view and print.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Should you want to make any changes to this order, or you have any queries about it, please contact the relevant supplier directly.
  </p>
  </td>
</tr>

<?php
$content = ob_get_clean();
include './base.html.php';
