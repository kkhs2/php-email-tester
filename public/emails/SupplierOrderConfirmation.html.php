<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p style="padding: 12px 0; margin: 0">
      Dear <strong>{SUPPLIERNAME}</strong>,
    </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>
      Customer number <strong>{CUSTOMERNUMBER}</strong> has requested a delivery from you through <?php include '../components/mainlink.html.php' ?>.
    </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>
      Please find customer and order details in the attachment below :-
    </p>
  </td>
</tr>
<?php include '../components/sdtable.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>
      Should you require further assistance, please contact us on <?php if ($type == 'venus'): ?>{venus contact number}<?php else: ?>0345 850 5051<?php endif ?>.
    </p>
  </td>
</tr>

<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>
      You can also contact us by email at <!--[if mso]>
                        <a
                          href="mailto:<?php if ($type == 'venus'): ?>[venus contact email]<?php else: ?>centralbilling@booker.co.uk<?php endif ?>"
                          style="text-decoration: underline; color: #000"
                          ><?php if ($type == 'venus'): ?>[venus contact email]<?php else: ?>centralbilling@booker.co.uk<?php endif ?></a
                        ><![endif]--><!--[if !mso> <!-->
					  <a href="mailto:<?php if ($type == 'venus'): ?>[venus contact email]<?php else: ?>centralbilling@booker.co.uk<?php endif ?>" style="
                          text-decoration: none;
                          border-bottom: 1px dotted #000;
                          color: #000;
                        "><?php if ($type == 'venus'): ?>[venus contact email]<?php else: ?>centralbilling@booker.co.uk<?php endif ?></a><!--<![endif]-->.
    </p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
