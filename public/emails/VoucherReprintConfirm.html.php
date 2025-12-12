<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Dear <strong>{CUSTOMERNAME}</strong>,
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Thank you for applying to reprint your voucher; the voucher has been re-enabled for your account.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    To print the voucher, please follow the link below:
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    <!--[if mso]>
<a style="text-decoration: underline; color: #000; font-weight: 700" href="{VOUCHERLINK}">{VOUCHERLINK}</a>
<![endif]--><!--[if !mso> <!--><a style="text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;" href="{VOUCHERLINK}">{VOUCHERLINK}</a><!--<![endif]-->
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Please login to <!--[if mso]>
<a style="text-decoration: underline; color: #000; font-weight: 700" href="https://www.booker.co.uk">booker.co.uk</a>
<![endif]--><!--[if !mso> <!--><a style="text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;" href="https://www.booker.co.uk">booker.co.uk</a><!--<![endif]--> with your login details.
  </p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
