<?php
  $type = $_SERVER['QUERY_STRING'] == 'type=venus' ? 'venus' : 'booker';
?>

<!--[if mso]><a
                          href="<?php if ($type == 'venus'): ?>https://www.venusltd.co.uk<?php else: ?>https://www.booker.co.uk<?php endif ?>"
                          style="text-decoration: underline; color: #000; font-weight: 700"
                          ><?php if ($type == 'venus'): ?> venusltd.co.uk<?php else: ?> booker.co.uk<?php endif ?></a
                        ><![endif]--><!--[if !mso> <!--><a href="<?php if ($type == 'venus'): ?>https://www.venusltd.co.uk<?php else: ?>https://www.booker.co.uk<?php endif ?>" style="
                          text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;
                        "><?php if ($type == 'venus'): ?> venusltd.co.uk<?php else: ?> booker.co.uk<?php endif ?></a><!--<![endif]-->