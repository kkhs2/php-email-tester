<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    A customer has applied for Central Billing credit. Details are shown below:-
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    {PROPRIETOR_NAME}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    {BUSINESS_NAME}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
   {CUSTOMER_NUMBER}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    {BUSINESS_ADDRESS}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    {BUSINESS_POSTCODE}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    {EMAIL_ADDRESS}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    {TELEPHONE_NUMBER}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Please post a copy of the registration form, Terms and Conditions, and Direct Debit form to this customer, along with the address for them to return the paperwork to the credit control team in Deeside.
  </p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
