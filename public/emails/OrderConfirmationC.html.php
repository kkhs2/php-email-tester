Order Confirmation {TRACKINGNUMBER}/Customer Number {CUSTOMERNUMBER}
<?php include '../components/type.html.php' ?>
<?php include '../components/dearcustomer.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      Thank you for placing an order <?php if ($type == 'venus'): ?> with Venus<?php else: ?> with Booker<?php endif ?>.
    </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      Please note that acceptance of your order will take place upon despatch of the products you have ordered. At that point the purchase contract will be made and we will supply the goods to you in accordance with our Website <?php include '../components/tandc.html.php' ?>.
    </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      This e-mail is confirmation of the receipt of your order received <strong>{ORDERDATE}</strong> at <strong>{ORDERTIME}</strong>.
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
      Please note that the shown estimated values are based on guide prices only. Your final invoice will be the cost of the products you have ordered at the time of picking and processing your order. Please refer to the <?php include '../components/tandc.html.php' ?> on the website for more information.
    </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      Your order also contains the following Online Exclusive products that are not currently available in branch.
    </p>
  </td>
</tr>
<?php include '../components/productcard.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      They will be delivered into <strong>{BRANCHNAME}</strong> branch within <strong>{BRANCHMESSAGE}</strong>, and reserved for you. We will contact you as soon as they are available for collection. You will not be invoiced for these goods until you come in to pick them up.
    </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      Standard delivery charges may be applicable for this order. Where appropriate these will be added at the time of invoice.
    </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      <b><u>Enquiries</u></b>
    </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      If you have any enquires about this order then please contact your local branch manager at : -
    </p>
  </td>
</tr>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/branchinfotable.html.php' ?>
<?php include '../components/smallheight.html.php' ?>
<?php include '../components/smallheight.html.php' ?>
<?php
$content = ob_get_clean();
include './base.html.php';
