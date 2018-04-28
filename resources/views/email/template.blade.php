<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .wrapper {
            font-family: Arial, sans-serif;
            line-height: 1.3em;
            color: #666666;
            font-size: 14px;
            background-color: #e8e8e8;
            width: 100%;
            -webkit-text-size-adjust: none !important;
            margin: 0;
            padding: 50px 0 50px 0;
        }

        .main-body {
            font-family: Arial, sans-serif;
            line-height: 1.3em;
            color: #666666;
            box-shadow: 0 3px 9px rgba(0, 0, 0, 0.03);
            border-radius: 5px !important;
            overflow: hidden;
            background-color: #ffffff;
            border: 1px solid #d1d1d1;
            width: 700px;
        }

        .template_header {
            font-family: Arial;
            line-height: 1.3em;
            background-color: #7e1005;
            color: #ecdbda;
            border-top-left-radius: 2px !important;
            border-top-right-radius: 2px!important;
            border-bottom: 1px solid #780f05;
            font-weight: bold;
            vertical-align: middle;
            text-align: center;
            padding: 16.666666666667px 23.076923076923px;
        }
        .body_content {
            font-family: Arial,sans-serif;
            line-height: 1.3em;
            color: #666666;
            background-color: #ffffff;
        }
        .body_content_inner {
            font-family: Arial;
            line-height: 1.3em;
            text-align: left;
            padding-left: 55px;
            padding-right: 55px;
            padding-top: 30px;
            padding-bottom: 30px;
        }
        .top_content_container{
            font-family: Arial, sans-serif;
            line-height: 1.3em;
            padding: 22px 0 22px 0;
        }
        .top_heading{
            font-family: Arial, sans-serif;
            font-size: 15px;
            text-align: left;
            font-weight: bold;
        }
        p{
            margin: .6em 0;
        }
        .top_paragraph{
            font-family: Arial, sans-serif;
            text-align: left;
            margin: 9px 0;
        }
        .top_content_container{
            font-family: Arial,sans-serif;
            line-height: 1.3em;
            padding: 22px 0 22px 0;
        }
        .header_content_h2_space_before{
            height: 3px; font-size: 0px;
            font-family: Arial, sans-serif;
            line-height: 1.3em;
        }
        .header_content_h2_border{
            font-family: Arial,sans-serif;
            line-height: 1.3em;
            font-size: 1px;
            border-top: 1px solid#c6c6c6;
        }
        .header_content_h2{
            padding-right: 6px;
            padding-left: 6px;
            font-family: Arial,sans-serif;
            line-height: 1.3em;
            font-size: 14px;
            font-weight: normal;
            font-style: none;
            color: #666666;
            text-decoration: none;
            text-transform: uppercase;
            margin: 0;
            padding: 0px 5px;
            white-space: nowrap;
        }
        .header_content_h2_border{
            font-family: Arial,sans-serif;
            line-height: 1.3em;
            font-size: 1px;
            border-top: 1px solid#c6c6c6;
        }
        .header_content_h2_space_after{
            height: 3px;
            font-family: Arial, sans-serif;
            line-height: 1.3em;
            font-size: 1px;
        }
        .order-table-heading{
            text-align: left;
            padding: 12px 0 6px;
            font-family: Arial, sans-serif;
            line-height: 1.3em;
        }
        .order_items_table{
            font-family: Arial, sans-serif;
            line-height: 1.3em;
            color: #666666;
            margin: 15px 0;
            overflow: hidden;
            width: 100%;
            background: none;
            border-bottom: 1px dotted #c9c9c9;
        }
       .order_items_table_th_style{
           font-family: Arial, sans-serif;
           text-align: left;
           text-transform: uppercase;
           font-size: 10px;
           font-weight: normal;
           padding: 9px 11.7px 8px 13.5px;
           margin: 0;
           line-height: .8em;
           background-color: none;
           border-top: 1px dotted #c9c9c9;
           padding-left: 0px;
        }
        .order_items_table_td_style{
            font-family: Arial, sans-serif;
            line-height: 1.3em;
            text-align: left;
            vertical-align: middle;
            word-wrap: break-word;
            font-size: 14px;
            padding: 9px 11.7px 8px 13.5px;
            border-top: 1px dotted #c9c9c9;
            padding-top: 17.1px;
            padding-bottom: 17.1px;
            padding-left: 0px;
        }
        .order_items_table_totals_style{
            background-color: none;
            font-family: Arial, sans-serif;
            text-align: left;
            text-transform: uppercase;
            font-size: 14px;
            line-height: 1em;
            padding: 9px 11.7px 8px 13.5px;
            border-top: 1px dotted #c9c9c9;
            padding-left: 0px;
        }
    </style>
</head>
<body>
<div class="email-template-preview pe-in-admin-page ">
    <div class="main-content">


        <!-- ----------  Email Template ---------- -->


        <title>Cheque Teatro</title>



        <table class="wrapper" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
            <tbody>
            <tr>
                <td align="center" valign="top" >


                    <table class="main-body" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                        <tr>
                            <td align="center" valign="top">

                                <!-- Header -->
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                    <tr>
                                        <td class="template_header">
                                            <a href="http://chequeteatro.com.br">
                                                <img src="http://chequeteatro.com.br/wp-content/uploads/2016/04/logo-email-1.png"></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- End Header -->
                            </td>
                        </tr>
                        <tr >
                            <td>

                                <!-- Body -->
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_body" >
                                    <tbody>
                                    <tr>
                                        <td valign="top" class="body_content">

                                            <!-- Content -->
                                            <table border="0" cellspacing="0" width="100%">
                                                <tbody>
                                                <tr>
                                                    <td valign="top" class="body_content_inner">

                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                            <tbody>
                                                            <tr>
                                                                <td valign="top" class="top_content_container">

                                                                    <div class="top_heading">
                                                                        <p>Voucher Solicitado.</p>
                                                                        {{--{{$nome}}--}}

                                                                        {{--{{$endereco_teatro}}--}}
                                                                    </div>
                                                                    {{--Nome: Klezer Aragon Ramos--}}
                                                                    <div class="top_paragraph">
                                                                        <p>
                                                                            <span class="ec_shortcode ec_firstname">
                                                                                {{--{{$user_nicename}}--}}
                                                                            </span>
                                                                            {{--<span class="ec_shortcode ec_lastname">Horvat</span>--}}
                                                                            {{--{{$user_email}}--}}
                                                                        </p>
                                                                        <span style="font-weight: bold;">
                                                                            CÓDIGO DO VOUCHER:
                                                                           <span style="font-weight: bold;color: #2ca02c">{{$codigo}}</span>
                                                                        </span>
                                                                    </div>

                                                                {{--</td>--}}
                                                            </tr>
                                                            </tbody>
                                                        </table><br>
                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                            <tbody>
                                                            <tr>
                                                                <td class="top_content_container">


                                                                    <table class="special-title-holder" width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>

                                                                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td class="header_content_h2_space_before">

                                                                                        </td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>

                                                                                <!-- Heading with lines on either side -->

                                                                                <table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-family: Arial,sans-serif; line-height: 1.3em; color: #666666;">
                                                                                    <tbody>
                                                                                    <tr style="font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                                        <td width="50%" style="font-family: Arial, sans-serif; line-height: 1.3em; font-size: 1px;">
                                                                                            <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" style="font-family: Arial, sans-serif; line-height: 1.3em; color: #666666;">
                                                                                                <tbody><tr height="50%" style="height: 50%; font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                                                    <td style="font-family: Arial, sans-serif; line-height: 1.3em; font-size: 1px;">&nbsp;</td>
                                                                                                </tr>
                                                                                                <tr height="50%" style="height: 50%; font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                                                    <td class="header_content_h2_border" style="font-family: Arial,sans-serif; line-height: 1.3em; font-size: 1px; border-top: 1px solid #c6c6c6;"></td>
                                                                                                </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                        <td width="1%" style="padding-right: 6px; padding-left: 6px; font-family: Arial,sans-serif; line-height: 1.3em; font-size: 14px; font-weight: normal; font-style: none; color: #666666; text-decoration: none; text-transform: uppercase; margin: 0; padding: 0px 5px; white-space: nowrap;" class="header_content_h2">
                                                                                            DETALHES DO VOUCHER
                                                                                        </td>
                                                                                        <td width="50%" style="font-family: Arial, sans-serif; line-height: 1.3em; font-size: 1px;">
                                                                                            <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" style="font-family: Arial, sans-serif; line-height: 1.3em; color: #666666;">
                                                                                                <tbody><tr height="50%" style="height: 50%; font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                                                    <td style="font-family: Arial, sans-serif; line-height: 1.3em; font-size: 1px;">&nbsp;</td>
                                                                                                </tr>
                                                                                                <tr height="50%" style="height: 50%; font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                                                    <td class="header_content_h2_border" style="font-family: Arial,sans-serif; line-height: 1.3em; font-size: 1px; border-top: 1px solid #c6c6c6;"></td>
                                                                                                </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td class="header_content_h2_space_after">

                                                                                        </td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="order-table-heading">
                                                                                   <span style="font-weight: bold;">
                                                                                    NOME BENEFICIO:
                                                                                   </span>

                                                                                {{$nome}}

                                                                            </td>

                                                                            <td >
                                                                                         {{--<span class="highlight">--}}
                                                                                          {{--Order Date:--}}
                                                                                         {{--</span>--}}
                                                                                {{--<time datetime="2016-11-07T14:35:00-02:00">--}}
                                                                                    {{--7 de novembro de2016--}}
                                                                                {{--</time>--}}
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table cellspacing="0" cellpadding="0" class="order_items_table" border="0">
                                                                        <thead>
                                                                        {{--<tr>--}}
                                                                            {{--<th scope="col" class="order_items_table_th_style" >Product</th>--}}
                                                                            {{--<th scope="col" class="order_items_table_th_style" >Quantity</th>--}}
                                                                            {{--<th scope="col" class="order_items_table_th_style" >Price</th>--}}
                                                                        {{--</tr>--}}
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="order_item">
                                                                                <td scope="row" colspan="0" class="order_items_table_totals_style ">
                                                                                   <span style="font-weight: bold;">
                                                                                    DIA E HORÁRIO:
                                                                                   </span>
                                                                                </td>
                                                                                <td class="order_items_table_td_style"></td>
                                                                                <td class="order_items_table_td_style" style="text-align: right; font-family: Arial, sans-serif; line-height: 1em; background-color: none; text-transform: uppercase; font-size: 14px; padding: 9px 11.7px 8px 13.5px; border-top: 1px dotted #c9c9c9; padding-right: 0px;">
                                                                                    <span>
                                                                                        <span>{{$dias}}</span>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr class="order_items_table_total_row order_items_table_total_row_subtotal" >
                                                                                <th scope="row" colspan="2" class="order_items_table_totals_style " style="">
                                                                                    VALIDADE:
                                                                                </th>
                                                                                <td class="order_items_table_td_style" style="text-align: right; font-family: Arial, sans-serif; line-height: 1em; background-color: none; text-transform: uppercase; font-size: 14px; padding: 9px 11.7px 8px 13.5px; border-top: 1px dotted #c9c9c9; padding-right: 0px;">
                                                                                    <span>
                                                                                        <span>
                                                                                            <span style="font-weight: bold;">
                                                                                                De
                                                                                            </span>
                                                                                            {{$data_validade_de}}
                                                                                            <span style="font-weight: bold;">
                                                                                                até
                                                                                            </span>
                                                                                            {{$date_validade_ate}}
                                                                                        </span>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="order_items_table_total_row order_items_table_total_row_metodo-de-pagamento" style="font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                                <th scope="row" colspan="2" class="order_items_table_totals_style">
                                                                                    LOCAL:
                                                                                </th>
                                                                                <td class="order_items_table_td_style" style="text-align: right; font-family: Arial, sans-serif; line-height: 1em; background-color: none; text-transform: uppercase; font-size: 14px; padding: 9px 11.7px 8px 13.5px; border-top: 1px dotted #c9c9c9; padding-right: 0px;">
                                                                                    {{$teatro}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="order_items_table_total_row order_items_table_total_row_metodo-de-pagamento" style="font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                                <th scope="row" colspan="2" class="order_items_table_totals_style">
                                                                                    CLASSIFICAÇÃO:
                                                                                </th>
                                                                                <td class="order_items_table_td_style" style="text-align: right; font-family: Arial, sans-serif; line-height: 1em; background-color: none; text-transform: uppercase; font-size: 14px; padding: 9px 11.7px 8px 13.5px; border-top: 1px dotted #c9c9c9; padding-right: 0px;">
                                                                                    {{$classificacao}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="order_items_table_total_row order_items_table_total_row_total" style="font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                                <th scope="row" colspan="2" class="order_items_table_totals_style">
                                                                                    ENDEREÇO:
                                                                                </th>
                                                                                <td class="order_items_table_td_style" style="text-align: right; font-family: Arial, sans-serif; line-height: 1em; background-color: none; text-transform: uppercase; font-size: 14px; padding: 9px 11.7px 8px 13.5px; border-top: 1px dotted #c9c9c9; padding-right: 0px;">
                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                        <span class="woocommerce-Price-currencySymbol"></span>{{$endereco_teatro}}</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="order_items_table_total_row order_items_table_total_row_metodo-de-pagamento" style="font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                                <th scope="row" colspan="2" class="order_items_table_totals_style">
                                                                                    TELEFONE:
                                                                                </th>
                                                                                <td class="order_items_table_td_style" style="text-align: right; font-family: Arial, sans-serif; line-height: 1em; background-color: none; text-transform: uppercase; font-size: 14px; padding: 9px 11.7px 8px 13.5px; border-top: 1px dotted #c9c9c9; padding-right: 0px;">
                                                                                    {{$telefone_teatro}}
                                                                                </td>
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                 </td>
                                                              </tr>
                                                            </tbody>
                                                        </table>
                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                            <tbody>
                                                            <tr>
                                                                <td class="top_content_container" style="font-family: Arial,sans-serif; line-height: 1.3em; padding: 22px 0 22px 0;">

                                                                    <table class="special-title-holder" width="100%" border="0" cellpadding="0" cellspacing="0" style="font-family: Arial, sans-serif; line-height: 1.3em; color: #666666;">
                                                                        <tbody>
                                                                        <tr style="font-family: Arial,sans-serif; line-height: 1.3em;">
                                                                            <td style="font-family: Arial, sans-serif; line-height: 1.3em; font-size: 1px;">

                                                                                <table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-family: Arial, sans-serif; line-height: 1.3em; color: #666666;">
                                                                                    <tbody>
                                                                                    <tr style="font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                                        <td class="header_content_h2_space_before" style="font-size: 0px; font-family: Arial, sans-serif; line-height: 1.3em; height: 6px;"></td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                                <!-- Heading with lines on either side -->
                                                                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-family: Arial,sans-serif; line-height: 1.3em; color: #666666;">
                                                                                    <tbody>
                                                                                    <tr style="font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                                        <td width="50%" style="font-family: Arial, sans-serif; line-height: 1.3em; font-size: 1px;">
                                                                                            <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" style="font-family: Arial, sans-serif; line-height: 1.3em; color: #666666;">
                                                                                                <tbody><tr height="50%" style="height: 50%; font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                                                    <td style="font-family: Arial, sans-serif; line-height: 1.3em; font-size: 1px;">&nbsp;</td>
                                                                                                </tr>
                                                                                                <tr height="50%" style="height: 50%; font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                                                    <td class="header_content_h2_border" style="font-family: Arial,sans-serif; line-height: 1.3em; font-size: 1px; border-top: 1px solid #c6c6c6;"></td>
                                                                                                </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                        <td width="1%" style="padding-right: 6px; padding-left: 6px; font-family: Arial,sans-serif; line-height: 1.3em; font-size: 14px; font-weight: normal; font-style: none; color: #666666; text-decoration: none; text-transform: uppercase; margin: 0; padding: 0px 5px; white-space: nowrap;" class="header_content_h2">
                                                                                            DETALHES DO CLIENTE
                                                                                        </td>
                                                                                        <td width="50%" style="font-family: Arial, sans-serif; line-height: 1.3em; font-size: 1px;">
                                                                                            <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" style="font-family: Arial, sans-serif; line-height: 1.3em; color: #666666;">
                                                                                                <tbody><tr height="50%" style="height: 50%; font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                                                    <td style="font-family: Arial, sans-serif; line-height: 1.3em; font-size: 1px;">&nbsp;</td>
                                                                                                </tr>
                                                                                                <tr height="50%" style="height: 50%; font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                                                    <td class="header_content_h2_border" style="font-family: Arial,sans-serif; line-height: 1.3em; font-size: 1px; border-top: 1px solid #c6c6c6;"></td>
                                                                                                </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                                <table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-family: Arial, sans-serif; line-height: 1.3em; color: #666666;"><tbody><tr style="font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                                        <td class="header_content_h2_space_after" style="font-family: Arial,sans-serif; line-height: 1.3em; font-size: 1px; height: 18px;"></td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p style="margin: .6em 0;"><strong>E-MAIL:</strong>
                                                                        <span class="text">{{$user_email}}</span>
                                                                    </p>
                                                                    <p style="margin: .6em 0;"><strong>TEL:</strong> <span class="text">{{$telefone_user}}</span></p>
                                                                    <p style="margin: .6em 0;"><strong>CPF:</strong> <span class="text">{{$num_cpf}}</span></p>

                                                                </td>

                                                            </tr>

                                                            </tbody>
                                                        </table>
                                                        <hr>
                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family: Arial, sans-serif; line-height: 1.3em; color: #666666;">
                                                            <tbody>
                                                            <tr style="font-family: Arial, sans-serif; line-height: 1.3em;">
                                                                <td width="50%" valign="top" class="order_items_table_column_pading_first" style="font-family: Arial, sans-serif; line-height: 1.3em; padding-left: 0px; padding-right: 27.5px;">
                                                                    <p style="margin: .6em 0;"><strong>Regras:</strong></p>
                                                                    <p style="margin: .6em 0;">
                                                                        O portador do Cheque Teatro tem entrada gratuita no teatro ao levar um ou mais acompanhantes, que ganham 50% de desconto.
                                                                    </p>
                                                                    <p style="margin: .6em 0;">
                                                                        Troque este Voucher pelo seu ingresso na bilheteria do Teatro.
                                                                        Este Voucher é único e só poderá ser utilizado uma vez.
                                                                        Sujeito à lotação máxima do Teatro.
                                                                        Troque o seu Voucher com antecedência na bilheteria do teatro.
                                                                        Válido somente para a peça descrita acima.
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!-- End Content -->
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- End Body -->
                            </td>
                        </tr>
                        <tr style="font-family: Arial, sans-serif; line-height: 1.3em;">
                            <td align="center" valign="top" style="font-family: Arial, sans-serif; line-height: 1.3em;">

                                <!-- Footer -->
                                <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family: Arial, sans-serif; line-height: 1.3em; color: #666666;"><tbody><tr style="font-family: Arial, sans-serif; line-height: 1.3em;">
                                        <td width="100%" align="center" class="footer_container" style="font-family: Arial,sans-serif; line-height: 1.3em; font-size: 12px; text-align: center; padding: 12px 27.5px 16px; border-top: 1px solid #ededed; color: #4b4b4b; background-color: #fafafa;">

                                            <table align="center" cellpadding="0" cellspacing="0" border="0" width="auto" style="font-family: Arial, sans-serif; line-height: 1.3em; color: #666666;">
                                                <tbody>
                                                <tr style="font-family: Arial,sans-serif; line-height: 1.3em;">
                                                    <td align="center" class="footer_container_inner bottom-nav" style="font-family: Arial,sans-serif; line-height: 1.3em; font-size: 12px; color: #4b4b4b;">

                                                        <p style="margin: .6em 0;">© {{date('Y')}} Cheque Teatro</p>


                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- End Footer -->
                            </td>
                        </tr>
                        </tbody></table>
                </td>
            </tr></tbody></table>



        <!-- ----------  / Email Template ---------- -->


    </div>
</div>
</div>
</body>
</html>
