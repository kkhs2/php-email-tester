<?php include '../components/type.html.php'; ?>

<?php include '../components/dearcustomer.html.php' ?>
<tr>
  <td style="
                    padding: 0 24px;
                    font-family: <?php if ($type == 'venus'): ?> Inter<?php else: ?>Open Sans<?php endif ?>, Arial, sans-serif;
                    margin: 0;
                    font-size: 16px;
                    line-height: 22.4px;
                  ">
    <p>
      Thank you for placing an order <?php include '../components/maintype.html.php' ?>. We will have this ready for you to collect from <strong>{BRANCHNAME}</strong> branch, on <strong>{ORDERCOLLECTDATE}</strong> after <strong>{ORDERCOLLECTTIME}</strong>.
    </p>
  </td>
</tr>
<tr>
  <td style="
                    padding: 0 24px;
                    font-family: <?php if ($type == 'venus'): ?> Inter<?php else: ?>Open Sans<?php endif ?>, Arial, sans-serif;
                    margin: 0;
                    font-size: 16px;
                    line-height: 22.4px;
                  ">
    <p>
      Please note that acceptance of your order will take place upon collection of the products you have ordered. At that point the purchase contract will be made and we will supply the goods to you in accordance with our website <?php include '../components/tandc.html.php' ?>.
    </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/ordernumber.html.php' ?>
<?php include '../components/bigheight.html.php' ?>
<?php include '../components/estimatedorderbs.html.php' ?>
<?php include '../components/smallheight.html.php' ?>
<tr>
  <td style="
                    padding: 0 24px;
                    font-family: <?php if ($type == 'venus'): ?> Inter<?php else: ?>Open Sans<?php endif ?>, Arial, sans-serif;
                    margin: 0;
                    font-size: 16px;
                    line-height: 22.4px;
                  ">
    <p>
      Please note that the shown estimated values are based on guide prices only. Your final invoice will be the cost of the products you have ordered at the time of picking and processing your order. Please refer to the <?php include '../components/tandc.html.php' ?> on the website for more information.
    </p>
  </td>
</tr>
<tr>
  <td style="
                    padding: 0 24px;
                    font-family: <?php if ($type == 'venus'): ?> Inter<?php else: ?>Open Sans<?php endif ?>, Arial, sans-serif;
                    margin: 0;
                    font-size: 16px;
                    line-height: 22.4px;
                  ">
    <p><b><u>Enquiries</u></b></p>
  </td>
</tr>
<tr>
  <td style="
                    padding: 0 24px;
                    font-family: <?php if ($type == 'venus'): ?> Inter<?php else: ?>Open Sans<?php endif ?>, Arial, sans-serif;
                    margin: 0;
                    font-size: 16px;
                    line-height: 22.4px;
                  ">
    <p>If you have any enquiries about this order please contact your local branch manager at:</p>
  </td>
</tr>
<?php include '../components/branchinfotable.html.php' ?>
<?php include '../components/smallheight.html.php' ?>
<?php
$content = ob_get_clean();
include './base.html.php';