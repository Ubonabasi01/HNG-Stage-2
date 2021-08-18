<?php
/* Smarty version 3.1.39, created on 2021-08-18 09:57:04
  from '/home/ola/websites/Stage2/templates/emails/contact.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611ccb60d01065_15476284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4eb932dfadba7140c0706cb9adbc5ee00ecc3a1c' => 
    array (
      0 => '/home/ola/websites/Stage2/templates/emails/contact.html',
      1 => 1629276282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611ccb60d01065_15476284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1098628288611ccb6055fbe4_38883170';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['template_subject']->value;?>
</title>
        <style>
            /* -------------------------------------
                GLOBAL RESETS
            ------------------------------------- */

            /*All the styling goes here*/

            img {
                border: none;
                -ms-interpolation-mode: bicubic;
                max-width: 100%;
            }

            body {
                background-color: #f6f6f6;
                font-family: sans-serif;
                -webkit-font-smoothing: antialiased;
                font-size: 14px;
                line-height: 1.4;
                margin: 0;
                padding: 0;
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }

            table {
                border-collapse: separate;
                mso-table-lspace: 0;
                mso-table-rspace: 0;
                width: 100%; }
            table td {
                font-family: sans-serif;
                font-size: 14px;
                vertical-align: top;
            }

            /* -------------------------------------
                BODY & CONTAINER
            ------------------------------------- */

            .body {
                background-color: #f6f6f6;
                width: 100%;
            }

            /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
            .container {
                display: block;
                margin: 0 auto !important;
                /* makes it centered */
                max-width: 580px;
                padding: 10px;
                width: 580px;
            }

            /* This should also be a block element, so that it will fill 100% of the .container */
            .content {
                box-sizing: border-box;
                display: block;
                margin: 0 auto;
                max-width: 580px;
                padding: 10px;
            }

            /* -------------------------------------
                HEADER, FOOTER, MAIN
            ------------------------------------- */
            .main {
                background: #ffffff;
                border-radius: 3px;
                width: 100%;
            }

            .wrapper {
                box-sizing: border-box;
                padding: 20px;
            }

            .footer td,
            .footer p,
            .footer span,
            .footer a {
                color: #999999;
                font-size: 12px;
                text-align: center;
            }

            /* -------------------------------------
                TYPOGRAPHY
            ------------------------------------- */
            h1,
            h2,
            h3,
            h4 {
                color: #000000;
                font-family: sans-serif;
                font-weight: 400;
                line-height: 1.4;
                margin: 0 0 30px;
            }

            h1 {
                font-size: 35px;
                font-weight: 300;
                text-align: center;
                text-transform: capitalize;
            }

            p,
            ul,
            ol {
                font-family: sans-serif;
                font-size: 14px;
                font-weight: normal;
                margin: 0 0 15px;
            }
            p li,
            ul li,
            ol li {
                list-style-position: inside;
                margin-left: 5px;
            }

            a {
                color: #3498db;
                text-decoration: underline;
            }

            /* -------------------------------------
                BUTTONS
            ------------------------------------- */
            .btn > tbody > tr > td {
                padding-bottom: 15px; }
            .btn table {
                width: auto;
            }
            .btn table td {
                background-color: #ffffff;
                border-radius: 5px;
                text-align: center;
            }
            .btn a {
                background-color: #ffffff;
                border: solid 1px #3498db;
                border-radius: 5px;
                box-sizing: border-box;
                color: #3498db;
                cursor: pointer;
                display: inline-block;
                font-size: 14px;
                font-weight: bold;
                margin: 0;
                padding: 12px 25px;
                text-decoration: none;
                text-transform: capitalize;
            }

            .btn-primary table td {
                background-color: #3498db;
            }

            .btn-primary a {
                background-color: #3498db;
                border-color: #3498db;
                color: #ffffff;
            }

            /* -------------------------------------
                OTHER STYLES THAT MIGHT BE USEFUL
            ------------------------------------- */


            .powered-by a {
                text-decoration: none;
            }

            hr {
                border: 0;
                border-bottom: 1px solid #f6f6f6;
                margin: 20px 0;
            }

            /* -------------------------------------
                RESPONSIVE AND MOBILE FRIENDLY STYLES
            ------------------------------------- */
            @media only screen and (max-width: 620px) {
                table[class=body] h1 {
                    font-size: 28px !important;
                    margin-bottom: 10px !important;
                }
                table[class=body] p,
                table[class=body] ul,
                table[class=body] ol,
                table[class=body] td,
                table[class=body] span,
                table[class=body] a {
                    font-size: 16px !important;
                }

                table[class=body] .content {
                    padding: 0 !important;
                }
                table[class=body] .container {
                    padding: 0 !important;
                    width: 100% !important;
                }
                table[class=body] .main {
                    border-left-width: 0 !important;
                    border-radius: 0 !important;
                    border-right-width: 0 !important;
                }
                table[class=body] .btn table {
                    width: 100% !important;
                }
                table[class=body] .btn a {
                    width: 100% !important;
                }
            }

            /* -------------------------------------
                PRESERVE THESE STYLES IN THE HEAD
            ------------------------------------- */
            @media all {
                .ExternalClass {
                    width: 100%;
                }
                .ExternalClass,
                .ExternalClass p,
                .ExternalClass span,
                .ExternalClass font,
                .ExternalClass td,
                .ExternalClass div {
                    line-height: 100%;
                }
                .apple-link a {
                    color: inherit !important;
                    font-family: inherit !important;
                    font-size: inherit !important;
                    font-weight: inherit !important;
                    line-height: inherit !important;
                    text-decoration: none !important;
                }
                #MessageViewBody a {
                    color: inherit;
                    text-decoration: none;
                    font-size: inherit;
                    font-family: inherit;
                    font-weight: inherit;
                    line-height: inherit;
                }
                .btn-primary table td:hover {
                    background-color: #34495e !important;
                }
                .btn-primary a:hover {
                    background-color: #34495e !important;
                    border-color: #34495e !important;
                }
            }

        </style>
    </head>
    <body class="" style="padding-top: 2rem">
        <table role="presentation" class="body">
            <tr>
                <td>&nbsp;</td>
                <td class="container">
                    <div class="content">

                        <!-- START CENTERED WHITE CONTAINER -->
                        <table role="presentation" class="main">

                            <!-- START MAIN CONTENT AREA -->
                            <tr>
                                <td class="wrapper">
                                    <table role="presentation">
                                        <tr>
                                            <td>
                                                <p>Hi Administrator,</p>
                                                <p>You have a new email message</p>
                                                <p>Sender Name: <?php echo $_smarty_tpl->tpl_vars['_POST']->value['name'];?>
</p>
                                                <p>Sender Email: <?php echo $_smarty_tpl->tpl_vars['_POST']->value['email'];?>
</p>
                                                <p>Message: <?php echo $_smarty_tpl->tpl_vars['_POST']->value['message'];?>
</p>

                                                <p>Copyright &copy; <?php echo date('Y');?>
.</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- END MAIN CONTENT AREA -->
                        </table>
                        <!-- END CENTERED WHITE CONTAINER -->

                    </div>
                </td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </body>
</html>







<?php }
}
