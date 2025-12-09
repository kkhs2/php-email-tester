<?php include '../components/type.html.php' ?>
<tr>
  <td
    style="
      padding: 0 24px;
      font-family: <?php if ($type == 'venus'): ?> Inter<?php else: ?>Open Sans<?php endif ?>, Arial, sans-serif;
      margin: 0;
      font-size: 16px;
      line-height: 22.4px;
    "
  >
    <p style="padding: 12px 0; margin: 0">
      Dear <strong>{SUPPLIERNAME}</strong>,
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
      Customer number {CUSTOMERNUMBER} has requested a delivery from you through <?php include '../components/mainlink.html.php' ?>.
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
      Please find customer and order details in the attachment below :-
    </p>
  </td>
</tr>
<?php include '../components/sdtable.html.php' ?>
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
      Should you require further assistance, please contact us on 0345 850 5051.
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
