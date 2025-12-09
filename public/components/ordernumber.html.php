<?php 
  $type = $_SERVER['QUERY_STRING'] == 'type=venus' ? 'venus' : 'booker';

?>
<tr>
  <td style="padding: 0 18px">
    <table
      cellpadding="0"
      cellspacing="0"
      width="100%"
      bgcolor="<?php if ($type == 'venus'): ?>#901438<?php else: ?> #ff480c<?php endif ?>"
      style="background-color:
        <?php if ($type == 'venus'): ?>#901438 <?php else: ?> #ff480c <?php endif ?>;
        border-radius: 20px;
        font-family: <?php if ($type == 'venus'): ?> Open Sans <?php else: ?> Inter <?php endif ?>, Arial, sans-serif;
        margin: 0;
        color: #ffffff;
      "
    >
      <tr>
        <td align="left" valign="top" style="padding: 5px 0 5px 12px">
          <p>
        <!--[if mso]>
          <span
              style="
                border-radius: 40px;
                padding: 8px 20px;
                font-size: 12px;
                display: inline-block;
                margin-bottom: 8px;
                font-weight: bold;
              "
              >YOUR ORDER NUMBER IS:</span
            >
          <![endif]-->
          <!--[if !mso><!-->
            <span
              style="
                background-color: <?php if ($type == 'venus'): ?> #E94FA2 <?php else: ?> #d30 <?php endif ?>;
                border-radius: 40px;
                padding: 8px 20px;
                font-size: 12px;
                display: inline-block;
                margin-bottom: 8px;
                font-weight: bold;
              "
              >YOUR ORDER NUMBER IS:</span
            >
          <!--<![endif]-->
            <br />
            <span
              style="
                margin: 0;
                font-size: 40px;
                font-weight: 500;
                line-height: 1;
                color: #ffffff;
                padding-left: 8px;
              "
              >{TRACKINGNUMBER}</span
            >
          </p>
        </td>
        <td align="right" valign="top" style="padding: 0 12px 0 0">
          <img
            src="https://www.booker.co.uk/content/emails/icon/decoration.png"
            alt="bookmark"
            width="34"
            height="50"
            style="display: block; padding-right: 10px"
          />
        </td>
      </tr>
    </table>
  </td>
</tr>
