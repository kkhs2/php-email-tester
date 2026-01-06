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
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      <b><u>Marketplace</u></b>
    </p>
  </td>
</tr>
<?php include '../components/bigproductcard.html.php' ?>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/totalguideprice.html.php' ?>
<?php include '../components/smallheight.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      Your invoice will be available on <?php include '../components/mainlink.html.php' ?> when the products have been dispatched.
    </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      Should you want to make any changes to this order, or you have any queries about it, please contact the relevant supplier on their contact e-mail address (listed above). The supplier will contact you directly if there are any issues with your order.
    </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      Please note that the goods will be supplied to you in accordance with the supplier terms of business.
    </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/deliverytracker.html.php' ?>
<?php
$content = ob_get_clean();
include './base.html.php';
