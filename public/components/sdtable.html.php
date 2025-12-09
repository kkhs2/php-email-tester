<tr>
  <td style="padding: 24px 18px 12px 18px">
    <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#faf9f5" style="
                      background-color: #f5f4f0;
                      border-radius: 12px;
                      font-family: <?php if ($type == 'venus'): ?> Inter <?php else: ?> Open Sans <?php endif ?>, Arial, sans-serif;
                      margin: 0 0 0 0;
                      font-size: 14px;
                      color: #000000;
                    ">
      <tbody>
        <tr>
          <td align="center" style="padding: 16px 16px 8px 16px">
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="570" style="width: 100%; max-width: 570px">
              <tbody>
                <tr>
                  <td style="font-size: 0">
                    <!--[if mso]>
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="570">
                                                        <tr>
                                                            <td width="190" valign="top">
                                                        <![endif]-->

                    <div style="
                                  display: inline-block;
                                  vertical-align: top;
                                  width: 100%;
                                  max-width: 190px;
                                  font-size: 14px;
                                ">
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td style="
                                        padding: 8px 8px 0px 3px;
                                        font-family: Arial, sans-serif;
                                        font-size: 14px;
                                        line-height: 20px;
                                      ">
                              <strong>Order Date / Time</strong><br>
                              <div style="line-height: 4px; font-size: 4px">
                                &nbsp;
                              </div>
                              {ORDERDATETIME}
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <!--[if mso]>
                                                            </td><td width="190" valign="top">
                                                        <![endif]-->

                    <div style="
                                  display: inline-block;
                                  vertical-align: top;
                                  width: 100%;
                                  max-width: 190px;
                                  font-size: 14px;
                                ">
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td style="
                                        padding: 8px;
                                        font-family: Arial, sans-serif;
                                        font-size: 14px;
                                        line-height: 20px;
                                      ">
                              <strong>Order Number</strong><br>
                              <div style="line-height: 4px; font-size: 4px">
                                &nbsp;
                              </div>
                              {ORDERNUMBER}
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <!--[if mso]>
                                                            </td><td width="190" valign="top">
                                                        <![endif]-->

                    <div style="
                                  display: inline-block;
                                  vertical-align: top;
                                  width: 100%;
                                  max-width: 190px;
                                  font-size: 14px;
                                ">
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td style="
                                        padding: 8px;
                                        font-family: Arial, sans-serif;
                                        font-size: 14px;
                                        line-height: 20px;
                                      ">
                              <strong>Customer Name</strong><br>
                              <div style="line-height: 4px; font-size: 4px">
                                &nbsp;
                              </div>
                              {CUSTOMERNAME}
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <!--[if mso]>
                                                            </td>
                                                        </tr>
                                                        </table>
                                                        <![endif]-->
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td style="padding: 0 16px 16px 16px">
            <table cellpadding="0" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td style="
                                padding: 0 8px 8px 8px;
                                font-family: Arial, sans-serif;
                                font-size: 14px;
                                line-height: 20px;
                              ">
                    <strong>Customer Address</strong><br>
                    <div style="line-height: 4px; font-size: 4px">
                      &nbsp;
                    </div>
                    {CUSTOMER NAME}<br><br>{ADDRESS1}<br>{ADDRESS2}<br>{POSTCODE}<br>{CONTACTNUMBER}
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <!-- Start of product card -->
        <tr>
          <td style="padding: 0 16px">
            <table cellpadding="0" cellspacing="0" width="100%" style="
                            font-family: <?php if ($type == 'venus'): ?> Inter <?php else: ?> Open Sans <?php endif ?>, Arial, sans-serif;
                            margin: 0;
                            background-color: #ffffff;
                            border-radius: 12px;
                            margin-bottom: 12px;
                            color: #000000;
                            font-size: 14px;
                            line-height: 21px;
                          ">
              <tbody>
                <tr>
                  <td style="padding: 16px">
                    <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 14px; line-height: 21px">
                      <tbody>
                        <tr>
                          <td colspan="4" style="padding-bottom: 12px">
                            {PRODUCT DESCRIPTION}
                          </td>
                        </tr>
                        <tr>
                          <td colspan="4">
                            <hr style="
                                        border: none;
                                        border-top: 1px dotted #000000;
                                        margin: 0;
                                      ">
                          </td>
                        </tr>
                        <tr>
                          <td height="12"></td>
                        </tr>
                        <tr style="font-weight: bold">
                          <td><strong>Code</strong></td>
                          <td><strong>Pack Size</strong></td>
                          <td><strong>Price</strong></td>
                          <td><strong>Quantity</strong></td>
                        </tr>
                        <tr>
                          <td>{CODE}</td>
                          <td>{PACK SIZE}</td>
                          <td>{PRICE}</td>
                          <td>{QUANTITY}</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <!-- End of product card -->
        <tr>
          <td height="4"></td>
        </tr>
      </tbody>
    </table>
  </td>
</tr>