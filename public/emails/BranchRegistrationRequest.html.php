<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    The following business has visited the <?php include '../components/maintype.html.php' ?> web site and would like to become a customer:
  </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/businesstable.html.php' ?>
<?php include '../components/smallheight.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    If this message was received Mon to Fri before 4pm then you must contact the customer today.
  </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>If this Message was received after 4pm or over the weekend you must contact the customer on the next working day:</p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>Please contact the potential customer to arrange their registration with Booker. Note that proof of business will be required to complete the registration process, and the due diligence procedure for anti-money laundering must also be followed.</p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <ul>
    <li>Confirm that the business owner has made this request</li>
    <li>Discuss online ordering, delivery and payment arrangements as required</li>
    <li>Make sure you key the customers e-mail address correctly into SAP</li>
    <li>If you are accepting online orders from the customer then set the SAP web flag (See Booker Customer Equipment tab in SAP):-
      <ul>
        <li>To &#39;C&#39; if you wish the customer to only pay by credit / debit card</li>
        <li>To &#39;O&#39; if you wish the customer to pay via branch account or credit/debit card</li>
      </ul>
    </li>
    <li>Set the SOP flag to 2 (See Booker Delivery Details tab in SAP)</li>
  </ul>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
