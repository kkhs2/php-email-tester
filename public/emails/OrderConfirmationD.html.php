<?php include '../components/type.html.php' ?>
<?php include '../components/dearcustomer.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>
      Thank you for placing an order <?php include '../components/maintype.html.php' ?>. We will have this ready for you to collect from <strong>{BRANCHNAME}</strong> branch, on <strong>{COLLECTIONDATE}</strong> after <strong>{COLLECTIONTIME}</strong>.
    </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>
      Please note that acceptance of your order will take place upon collection of the products you have ordered. At that point the purchase contract will be made and we will supply the goods to you in accordance with our website <?php include '../components/tandc.html.php' ?>.
    </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>
      This e-mail is confirmation of the receipt of your order received <strong>{ORDERDATETIME}</strong>.
    </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/ordernumber.html.php' ?>
<?php include '../components/bigheight.html.php' ?>
<?php include '../components/totalprice.html.php' ?>
<?php include '../components/smallheight.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>
      Please note that the shown estimated values are based on guide prices only. Your final invoice will be the cost of the products you have ordered at the time of collecting your order. Please refer to the <?php include '../components/tandc.html.php' ?> on the website for more information.
    </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>
      <b><u>Enquires</u></b>
    </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>
      If you have any enquires about this order please contact your local branch manager at : -
    </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/branchinfotable.html.php' ?>
<?php include '../components/smallheight.html.php' ?>
<?php
$content = ob_get_clean();
include './base.html.php';
