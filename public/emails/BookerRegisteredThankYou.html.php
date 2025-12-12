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
      Your customer number is <strong>{CUSTOMERNUMBER}</strong>,
    </p>
  </td>
</tr>

<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>
      You will need to create your password before you can login to <?php include '../components/mainlink.html.php' ?>, please follow the link below:
    </p>
  </td>
</tr>

<tr>
  <?php include '../components/tdstyle.html.php' ?>
  <p>
    <!--[if mso]><a
        href="{WEBSITE_LINK}"
        style="text-decoration: underline; color: #000; font-weight: 700">{WEBSITE_LINK}</a><![endif]--><!--[if !mso> <!--><a href="{WEBSITE_LINK}" style="
                          text-decoration: none;
                          border-bottom: 1px dotted #000;
                          font-weight: 700;
                          color: #000;
                        ">{WEBSITE_LINK}</a><!--<![endif]-->
    </p>
  </td>
</tr>

<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      If this does not work, please cut and paste the link above into the browser's address bar, and click enter.
    </p>
  </td>
</tr>

<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>
      Please find details of your account in the attached PDF file.
    </p>
  </td>
</tr>

<?php
$content = ob_get_clean();
include './base.html.php';