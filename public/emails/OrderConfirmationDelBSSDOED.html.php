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
      Your order also contains Online Exclusive products that are not currently available in your branch.
    </p>
  </td>
</tr>
<?php include '../components/productcard.html.php' ?>
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
      These will be ordered in for you, and may take <strong>{BRANCHMESSAGE}</strong> to arrive at your local branch. You will not be invoiced for these products until they have been despatched on your next available delivery.
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
      If you have any queries about payment or delivery, please contact your local branch manager at :
    </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/branchinfotable.html.php' ?>
<?php include '../components/smallheight.html.php' ?>
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
      <b><u>Marketplace</u></b>
    </p>
  </td>
</tr>
<?php include '../components/bigproductcard.html.php' ?>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/totalguidepricedd.html.php' ?>
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
      Your invoice will be available on <?php include '../components/mainlink.html.php' ?> when the products have been dispatched.
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
      Should you want to make any changes to this order, or you have any queries about it, please contact the relevant supplier on their contact e-mail address (listed above). The supplier will contact you directly if there are any issues with your order.
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
      Please note that goods will be supplied to you in accordance with our <?php include '../components/tandc.html.php' ?>, and with the supplier terms of business.
    </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/deliverytracker.html.php' ?>
<?php
$content = ob_get_clean();
include './base.html.php';
