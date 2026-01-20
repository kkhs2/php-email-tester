Request to become a Central Billing Customer
<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Dear Supplier,
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    BOOKER - SUPPLIER TO CONTACT MEMBER REQUEST
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Please arrange for your representative to contact, without delay, the following retail member as they are interested in supply:
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>BOOKER Store Number: {CUSTOMER_NUMBER}</p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>{BUSINESS_NAME}</p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>{BUSINESS_ADDRESS}</p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>{BUSINESS_POSTCODE}</p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>Email: {EMAIL_ADDRESS}</p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>Telephone: {TELEPHONE_NUMBER}</p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>{ADDITIONAL_DETAILS}</p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>Please ensure contact is made and a response has been sent to the retailer & <!--[if mso]> <a href="mailto:centralbilling@booker.co.uk" style="text-decoration: underline; color: #000; font-weight: 700">centralbilling@booker.co.uk</a><![endif]--><!--[if !mso> <!--> <a href="mailto:centralbilling@booker.co.uk" style="text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;">centralbilling@booker.co.uk</a><!--<![endif]--> within 7 days.</p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>If you have any queries please contact the Central Billing team on 0345 850 5051.</p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>Many Thanks,</p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>Booker Central Billing</p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
