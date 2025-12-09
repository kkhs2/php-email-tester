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
<?php include '../components/smallheight.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>
      Your order contains Online Exclusive products that are not stocked in your branch.
    </p>
  </td>
</tr>
<?php include '../components/productcard.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>
      These will be ordered in for you, and may take <strong>{BRANCHMESSAGE}</strong> to arrive at your local branch. You will not be invoiced for these products until they have been despatched on your next available delivery.
    </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>
      If you have any queries about this order, please contact your local branch manager at :-
    </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/branchinfotable.html.php' ?>
<?php include '../components/smallheight.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
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
      Please note that goods will be supplied to you in accordance with our <?php include '../components/tandc.html.php' ?>, and with the supplier terms of business.
    </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/deliverytracker.html.php' ?>
<?php
$content = ob_get_clean();
include './base.html.php';
