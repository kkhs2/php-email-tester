<?php include '../components/type.html.php' ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Dear <strong>{FIRSTNAME}</strong>,
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    The following barcodes were not recognised as valid Booker barcodes:-
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    {INVALID_BARCODES}
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Should you require any further assistance please contact us on 0345 602 3108 (7am to 7pm, 7 days a week) or e-mail <!--[if mso]>
<a style="text-decoration: underline; color: #000; font-weight: 700" href="mailto:customercare@booker.co.uk">customercare@booker.co.uk</a>
<![endif]--><!--[if !mso> <!--><a style="text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;" href="mailto:customercare@booker.co.uk">customercare@booker.co.uk</a><!--<![endif]-->.
  </p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
