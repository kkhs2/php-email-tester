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

    <p style="padding: 12px 0; margin: 0">
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
      Should you want to make any changes to this part of the order, or you have any queries about it, please contact the relevant supplier on their contact email address (listed above). The supplier will contact you directly if there are any issues with your order. 
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
    <p>Please note that goods will be supplied to you in accordance with our website <?php include '../components/tandc.html.php' ?>, and with the supplier terms of business.</p>

  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';