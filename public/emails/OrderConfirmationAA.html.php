Order Confirmation {TRACKINGNUMBER}/Customer Number {CUSTOMERNUMBER}
<?php include '../components/type.html.php' ?>

<?php include '../components/dearcustomer.html.php' ?>

<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      Thank you for placing an order on <?php include '../components/mainlink.html.php' ?>, which was received on <strong>{ORDERDATE}</strong> at <strong>{ORDERTIME}</strong>.
    </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/ordernumber.html.php' ?>
<?php include '../components/bigheight.html.php' ?>
<?php include '../components/estimatedorderbs.html.php' ?>
<?php include '../components/smallheight.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      Please note that estimates are a guide only. Your final invoice will be the cost of the products when we pick and process your order.
    </p>
  </td>
</tr>

<?php include '../components/smallheight.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      <b><u>Payment Delivery Enquiries</u></b>
    </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      If you have any enquiries about payment or delivery please contact Customer Services on <?php if ($type == 'venus'): ?> {customer services number} {customer services opening times}<?php else: ?>0800 298 0758, open 6am - 9pm, Monday to Saturday, and Sunday 6am - 2pm<?php endif ?>.  Alternatively e-mail us at <!--[if mso]>
                        <a style="text-decoration: underline; color: #000000; font-weight: 700;"
                          href="mailto:<?php if ($type == 'venus'): ?>{venus enquiries email}<?php else: ?>enquiries@bookerretail.co.uk<?php endif ?> 
                          ><?php if ($type == 'venus'): ?>{venus enquiries email}<?php else: ?>enquiries@bookerretail.co.uk<?php endif ?></a
                        >.
                      <![endif]-->
					  <!--[if !mso> <!-->
					  <a style="text-decoration: underline; font-weight: 700;
                          border-bottom: 1px dotted #000000;
                          color: #000000;
                        " href="mailto:<?php if ($type == 'venus'): ?>{venus enquiries email}<?php else: ?>enquiries@bookerretail.co.uk<?php endif ?>"><?php if ($type == 'venus'): ?>{venus enquiries email}<?php else: ?>enquiries@bookerretail.co.uk<?php endif ?></a>.
						<!--<![endif]-->
    </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      Please note that goods will be supplied to you in accordance with our website <?php include '../components/tandc.html.php' ?>.
    </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/deliverytracker.html.php' ?>
<?php
$content = ob_get_clean();
include './base.html.php';
