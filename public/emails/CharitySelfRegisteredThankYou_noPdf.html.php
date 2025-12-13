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
    Thank you for registering with Booker.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Your customer number is <strong>{CUSTOMERNUMBER}</strong>.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    When you visit your chosen Booker branch, please bring a copy of a letter of authorisation from the charity on headed notepaper, and either a utility bill, business invoice or bank statement that shows your charity's address, along with your customer number shown above.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>Please login to <!--[if mso]><a style="text-decoration: underline; color: #000; font-weight: 700" href="https://www.booker.co.uk">Booker.co.uk</a><![endif]--><!--[if !mso> <!--><a style="
                          text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;
                        " href="https://www.booker.co.uk">Booker.co.uk</a><!--<![endif]--> with your login details.</p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
