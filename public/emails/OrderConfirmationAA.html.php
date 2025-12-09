<?php include '../components/type.html.php' ?>

<?php include '../components/dearcustomer.html.php' ?>

<tr>
  <td
    style="
                    padding: 0 24px;
                    font-family: <?php if ($type == 'venus'): ?> Inter<?php else: ?>Open Sans<?php endif ?>, Arial, sans-serif;
                    margin: 0;
                    font-size: 16px;
                    line-height: 22.4px;
                  ">

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
  <td
    style="
                    padding: 0 24px;
                    font-family: <?php if ($type == 'venus'): ?> Inter<?php else: ?>Open Sans<?php endif ?>, Arial, sans-serif;
                    margin: 0;
                    font-size: 16px;
                    line-height: 22.4px;
                  ">

    <p>
      Please note that estimates are a guide only. Your final invoice will be the cost of the products when we pick and process your order.
    </p>
  </td>
</tr>

<?php include '../components/smallheight.html.php' ?>
<tr>
  <td
    style="
                    padding: 0 24px;
                    font-family: <?php if ($type == 'venus'): ?> Inter<?php else: ?>Open Sans<?php endif ?>, Arial, sans-serif;
                    margin: 0;
                    font-size: 16px;
                    line-height: 22.4px;
                  ">

    <p>
      <b><u>Payment Delivery Enquiries</u></b>
    </p>
  </td>
</tr>
<tr>
  <td
    style="
                    padding: 0 24px;
                    font-family: <?php if ($type == 'venus'): ?> Inter<?php else: ?>Open Sans<?php endif ?>, Arial, sans-serif;
                    margin: 0;
                    font-size: 16px;
                    line-height: 22.4px;
                  ">

    <p>
      If you have any enquiries about payment or delivery please contact Customer Services on <?php if ($type == 'venus'): ?> {customer services number} {customer services opening times}<?php else: ?>0800 298 0758, open 6am - 9pm, Monday to Saturday, and Sunday 6am - 2pm<?php endif ?>.  Alternatively e-mail us at <!--[if mso]>
                        <a
                          href="mailto:<?php if ($type == 'venus'): ?>{venus enquiries email}<?php else: ?>enquiries@bookerretail.co.uk<?php endif ?> style="text-decoration: underline; color: #000"
                          ><?php if ($type == 'venus'): ?>{venus enquiries email}<?php else: ?>enquiries@bookerretail.co.uk<?php endif ?></a
                        >.
                      <![endif]-->
					  <!--[if !mso> <!-->
					  <a href="mailto:<?php if ($type == 'venus'): ?>{venus enquiries email}<?php else: ?>enquiries@bookerretail.co.uk<?php endif ?>" style="
                          text-decoration: none;
                          border-bottom: 1px dotted #000;
                          color: #000;
                        "><?php if ($type == 'venus'): ?>{venus enquiries email}<?php else: ?>enquiries@bookerretail.co.uk<?php endif ?></a>.
						<!--<![endif]-->
    </p>
  </td>
</tr>
<tr>
  <td
    style="
                    padding: 0 24px;
                    font-family: <?php if ($type == 'venus'): ?> Inter<?php else: ?>Open Sans<?php endif ?>, Arial, sans-serif;
                    margin: 0;
                    font-size: 16px;
                    line-height: 22.4px;
                  ">

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
