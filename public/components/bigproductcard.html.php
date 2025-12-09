<tr>
  <td style="padding: 12px 18px">
    <table
      cellpadding="0"
      cellspacing="0"
      width="100%"
      bgcolor="#faf9f5"
      style="
        background-color: #f5f4f0;
        border-radius: 20px;
        font-family: <?php if ($type == 'venus'): ?> Inter <?php else: ?> Open Sans <?php endif ?>, Arial, sans-serif;
        margin: 0;
        font-size: 14px;
        color: #000000;
      ">
      <tr>
        <td style="padding: 16px 16px">
          <table
            role="presentation"
            border="0"
            cellpadding="0"
            cellspacing="0"
            width="100%">
            <tr>
              <td align="center">
                <table
                  role="presentation"
                  border="0"
                  cellpadding="0"
                  cellspacing="0"
                  width="570"
                  style="width: 100%; max-width: 570px">
                  <tr>
                    <td style="font-size: 0; padding: 0">
                      <!--[if mso]>
                                                                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="570">
                                                                <tr>
                                                                    <td width="285" valign="top">
                                                                <![endif]-->

                      <div
                        style="
                          display: inline-block;
                          vertical-align: top;
                          width: 100%;
                          max-width: 285px;
                          font-size: 14px;
                        ">
                        <table
                          role="presentation"
                          border="0"
                          cellpadding="0"
                          cellspacing="0"
                          width="100%">
                          <tr>
                            <td
                              style="
                                padding: 8px;
                                font-family: <?php if ($type == 'venus'): ?> Inter <?php else: ?> Open Sans <?php endif ?>, Arial, sans-serif;
                                font-size: 14px;
                                line-height: 20px;
                              ">
                              <strong>Supplied By</strong><br />
                              <div style="line-height: 4px; font-size: 4px">
                                &nbsp;
                              </div>
                              { SUPPLIER }
                            </td>
                          </tr>
                          <tr>
                            <td
                              style="
                                padding: 8px;
                                font-family: <?php if ($type == 'venus'): ?> Inter <?php else: ?> Open Sans <?php endif ?>, Arial, sans-serif;
                                font-size: 14px;
                                line-height: 20px;
                              ">
                              <strong>Phone Number</strong><br />
                              <div style="line-height: 4px; font-size: 4px">
                                &nbsp;
                              </div>
                              { phone number }
                            </td>
                          </tr>
                        </table>
                      </div>

                      <!--[if mso]>
                                                                    </td><td width="285" valign="top">
                                                                <![endif]-->

                      <div
                        style="
                          display: inline-block;
                          vertical-align: top;
                          width: 100%;
                          max-width: 285px;
                          font-size: 14px;
                        ">
                        <table
                          role="presentation"
                          border="0"
                          cellpadding="0"
                          cellspacing="0"
                          width="100%">
                          <tr>
                            <td
                              style="
                                padding: 8px;
                                font-family: <?php if ($type == 'venus'): ?> Inter <?php else: ?> Open Sans <?php endif ?>, Arial, sans-serif;
                                font-size: 14px;
                                line-height: 20px;
                              ">
                              <strong>Contact Email Address</strong><br />
                              <div style="line-height: 4px; font-size: 4px">
                                &nbsp;
                              </div>
                              { contact email address }
                            </td>
                          </tr>
                          <tr>
                            <td
                              style="
                                padding: 8px;
                                font-family: <?php if ($type == 'venus'): ?> Inter <?php else: ?> Open Sans <?php endif ?>, Arial, sans-serif;
                                font-size: 14px;
                                line-height: 20px;
                              ">
                              <strong>Price on Order or Delivery</strong><br />
                              <div style="line-height: 4px; font-size: 4px">
                                &nbsp;
                              </div>
                              { Order or Delivery }
                            </td>
                          </tr>
                        </table>
                      </div>

                      <!--[if mso]>
                                                                    </td>
                                                                </tr>
                                                                </table>
                                                                <![endif]-->
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <!-- Start of product card loop -->
      <tr>
        <td style="padding: 0 16px">
          <table
            cellpadding="0"
            cellspacing="0"
            width="100%"
            style="
              font-family: <?php if ($type == 'venus'): ?> Inter <?php else: ?> Open Sans <?php endif ?>, Arial, sans-serif;
              margin: 0;
              background-color: #ffffff;
              border-radius: 12px;
              margin-bottom: 12px;
              color: #000000;
              font-size: 14px;
              line-height: 21px;
            ">
            <tr>
              <td style="padding: 16px">
                <table
                  cellpadding="0"
                  cellspacing="0"
                  width="100%"
                  style="font-size: 14px; line-height: 21px">
                  <tr>
                    <td colspan="4" style="padding-bottom: 12px">
                      {Product Description}
                    </td>
                  </tr>
                  <tr>
                    <td colspan="4">
                      <hr
                        style="
                          border: none;
                          border-top: 1px dotted #000000;
                          margin: 0;
                        " />
                    </td>
                  </tr>
                  <tr>
                    <td height="12"></td>
                  </tr>
                  <tr style="font-weight: bold">
                    <td><strong>Code</strong></td>
                    <td><strong>Pack Size</strong></td>
                    <td><strong>Price</strong></td>
                    <td><strong>Qty</strong></td>
                  </tr>
                  <tr>
                    <td>{ product code }</td>
                    <td>{ pack size }</td>
                    <td>{ price }</td>
                    <td>{ quantity }</td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <!-- End of product card loop -->
      <tr>
        <td height="4"></td>
      </tr>
      <!-- End of product card -->
      <!--[if mso]>
            <tr>
              <td height="12" bgcolor="#f5f4f0"></td>
            </tr>
      <![endif]-->
    </table>
  </td>
</tr>