<tr>
  <td style="padding: 0 18px">

    <table cellpadding="0" cellspacing="0" width="100%" 
      style="
        font-family: <?php if ($type == 'venus'): ?> Inter <?php else: ?> Open Sans <?php endif ?>, Arial, sans-serif;
        margin: 0;
        font-size: 18px;
        color: #000000;
        border-collapse: separate !important;
        border: 1.5px solid #000000;
        border-radius: 20px;
      ">
      <tr>
        <td>
          <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
              <td align="left" style="padding: 18px 0 18px 18px; font-size: 18px">
                <strong style="font-weight: 500">
                  <b>The estimated value of your order is:</b>
                </strong>
              </td>
              <td align="right" style="padding: 18px 18px 18px 0; font-size: 16px">
                &pound;{PRICE_BS_STRING_EX_VAT} (ex VAT)
              </td>
            </tr>

            <tr>
              <td colspan="2">
                <hr style="
                  border: none;
                  border-top: 1px dotted #000000;
                  margin: 0;
                " />
              </td>
            </tr>

            <tr>
              <td align="left" style="padding: 18px 0 18px 18px; font-size: 18px">
                <strong style="font-weight: 500">
                  <b>The estimated value of your order is:</b>
                </strong>
              </td>
              <td align="right" style="padding: 18px 18px 18px 0; font-size: 16px">
                &pound;{PRICE_BS_STRING_INC_VAT} (inc VAT)
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>

  </td>
</tr>
