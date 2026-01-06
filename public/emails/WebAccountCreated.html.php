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
    Thank you for registering with Booker.co.uk.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Please find below confirmation of your User ID and customer number. Please check your customer number carefully, if you believe you have registered the wrong account please contact us by clicking <!--[if mso]> <a style="text-decoration: underline; color: #000; font-weight: 700" href="https://www.booker.co.uk/help/incorrectAccountRegistration.aspx">here</a>
<![endif]--><!--[if !mso> <!--> <a style="text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;" href="https://www.booker.co.uk/help/incorrectAccountRegistration.aspx">here</a><!--<![endif]-->.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Your User ID is: <strong>{EMAILADDRESS}</strong>.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Your Customer Number: <strong>{CUSTOMERNUMBER}</strong>.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Please remember these details as you will need these to login to your account in future.  To start shopping with us click <!--[if mso]> <a style="text-decoration: underline; color: #000; font-weight: 700" href="https://www.booker.co.uk">here</a>
<![endif]--><!--[if !mso> <!--> <a style="text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;" href="https://www.booker.co.uk">here</a><!--<![endif]--> to enter the site.
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    Should you require further assistance please contact us on 0345 602 3108.  Our opening times are as follows;
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    7am to 7pm, 7 days a week. 
  </p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    You can also contact us by email at {CONTACTEMAIL}.
  </p>
  </td>
</tr>
<?php
$content = ob_get_clean();
include './base.html.php';
