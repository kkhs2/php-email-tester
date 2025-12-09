<?php 
  $type = $_SERVER['QUERY_STRING'] == 'type=venus' ? 'venus' : 'booker';
?>

<!--[if mso]>
                        <a
                          href="<?php if ($type == 'venus'): ?>https://www.venusplc.com/terms-of-business<?php else: ?>https://www.booker.co.uk/help/website-terms-of-use<?php endif ?>"
                          style="text-decoration: underline; color: #000; font-weight: bold;"
                          >terms & conditions</a
                        ><![endif]-->
<!--[if !mso><!-->
<a href="<?php if ($type == 'venus'): ?>https://www.venusplc.com/terms-of-business<?php else: ?>https://www.booker.co.uk/help/website-terms-of-use<?php endif ?>" style="
                          text-decoration: none;
                          border-bottom: 1px dotted #000;
                          color: #000;
                          font-weight: bold;
                        ">terms & conditions</a><!--<![endif]-->