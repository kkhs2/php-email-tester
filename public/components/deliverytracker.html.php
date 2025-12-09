<?php 
  $type = $_SERVER['QUERY_STRING'] == 'type=venus' ? 'venus' : 'booker';

?>
<tr>
  <td style="padding: 0 18px">
    <table
      cellpadding="0"
      cellspacing="0"
      width="100%"
      bgcolor="<?php if ($type == 'venus'): ?>#901438 <?php else: ?> #ff480c <?php endif ?>"
      style="
        background-color: <?php if ($type == 'venus'): ?>#901438 <?php else: ?> #ff480c <?php endif ?>;
        border-radius: 12px;
        font-family: <?php if ($type == 'venus'): ?> Open Sans <?php else: ?> Inter <?php endif ?>, Arial, sans-serif;
        margin: 0;
        color: #ffffff;
      "
    >
      <tbody>
        <tr>
          <td align="left" valign="top" style="padding: 16px 0 16px 24px">
            <p
              style="
                font-family: <?php if ($type == 'venus'): ?> Open Sans <?php else: ?> Inter <?php endif ?>, Arial, sans-serif;
                margin: 0;
                padding: 0;
                font-size: 14px;
                line-height: 22px;
              "
            >
              <strong
                style="
                  font-weight: 700;
                  font-size: 18px;
                  line-height: 21.6px;
                  display: inline-block;
                  margin-bottom: 8px;
                "
                >Track your delivery</strong
              >
              <br />
              <span
                style="
                  margin: 0 0 24px 0;
                  font-size: 14px;
                  font-weight: 500;
                  line-height: 14px;
                  display: inline-block;
                  color: #ffffff;
                "
                >Use this code or link to track your delivery.</span
              >
            </p>
            <!--CTA-->
            <!-- left icon -->
           <!--[if !mso><!-->  
            <a
              class="cta"
              style="
                background-color: <?php if ($type == 'venus'): ?> #E94FA2 <?php else: ?> #1fceb5 <?php endif ?>;
                font-size: 14px;
                font-family: <?php if ($type == 'venus'): ?> Open Sans <?php else: ?> Inter <?php endif ?>, Arial, sans-serif;
                font-weight: 500;
                text-decoration: none;
                padding: 10.5px 18px 10.5px 16px;
                color: <?php if ($type == 'venus'): ?> #ffffff <?php else: ?> #000000 <?php endif ?>;
                display: inline-block;
                mso-padding-alt: 0;
                border-radius: 120px;
                line-height: 1;
              "
              href="{hashed customer number and tracktag URL}"
            >
              
              <span style="mso-text-raise: 15pt">
                <span class="gmail-screen">
                  <img
                    height="12"
                    width="12"
                    alt=""
                    style="
                      display: inline-block;
                      vertical-align: middle;
                      margin-right: 8px;
                    "
                    src="https://www.booker.co.uk/content/emails/icon/email-left.png"
                  />
                  <span class="gmail-difference" style="vertical-align: middle"
                    >Your unique link</span
                  >
                </span>
              </span><!--<![endif]-->
              <!--[if mso]>
                  <a
              class="cta"
              style="
                font-size: 14px;
                font-family: <?php if ($type == 'venus'): ?> Open Sans <?php else: ?> Inter <?php endif ?>, Arial, sans-serif;
                font-weight: 500;
                text-decoration: none;
                padding: 10.5px 18px 10.5px 16px;
                color: <?php if ($type == 'venus'): ?> #ffffff <?php else: ?> #000000 <?php endif ?>;
                display: inline-block;
                mso-padding-alt: 0;
                border-radius: 120px;
                line-height: 1;
              "
              href="{hashed customer number and tracktag URL}"
            >
              <br />
              <span style="mso-text-raise: 15pt;margin-top:18px;font-weight:bold;text-decoration:underline;">
                <span class="gmail-screen">
                  <span class="gmail-difference" style="vertical-align: middle"
                    >Your unique link</span
                  >
                </span>
              </span>
              <![endif]-->
            </a>
            <!-- right icon -->
          </td>
          <td align="right" valign="top" style="padding: 16px 16px">
            <img
              src="https://www.booker.co.uk/content/emails/icon/email-qrcode.png"
              alt="bookmark"
              width="107"
              height="108"
              style="display: block"
            />
          </td>
        </tr>
      </tbody>
    </table>
  </td>
</tr>
<?php include "../components/smallheight.html.php" ?>
<tr>
  <?php include '../components/tdstyle.html.php' ?>

    <p>Scan this code, unique to your account, to see real-time
      delivery statuses and estimated delivery times without the
      need to log into <?php if ($type == 'venus'): ?> venusltd.co.uk<?php else: ?> booker.co.uk<?php endif ?>.</p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>You can also download a poster which includes this code
      by logging into venusltd.co.uk and visiting the My Account
      page.</p>
  </td>
</tr>
<tr>
  <?php include '../components/tdstyle.html.php' ?>
    <p>This poster could be displayed in your store, giving
      colleagues easy access to the Delivery Tracker.</p>
  </td>
</tr>
