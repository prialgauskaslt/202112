<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>BALSAVIMAS</title>
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
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%;
    }

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

    .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .footer {
        clear: both;
        margin-top: 10px;
        text-align: center;
        width: 100%;
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
        margin: 0;
        margin-bottom: 30px;
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
        margin: 0;
        margin-bottom: 15px;
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
    .btn {
        box-sizing: border-box;
        width: 100%;
    }

    .btn>tbody>tr>td {
        padding-bottom: 15px;
    }

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
    .last {
        margin-bottom: 0;
    }

    .first {
        margin-top: 0;
    }

    .align-center {
        text-align: center;
    }

    .align-right {
        text-align: right;
    }

    .align-left {
        text-align: left;
    }

    .clear {
        clear: both;
    }

    .mt0 {
        margin-top: 0;
    }

    .mb0 {
        margin-bottom: 0;
    }

    .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0;
    }

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
        table.body h1 {
            font-size: 28px !important;
            margin-bottom: 10px !important;
        }

        table.body p,
        table.body ul,
        table.body ol,
        table.body td,
        table.body span,
        table.body a {
            font-size: 16px !important;
        }

        table.body .wrapper,
        table.body .article {
            padding: 10px !important;
        }

        table.body .content {
            padding: 0 !important;
        }

        table.body .container {
            padding: 0 !important;
            width: 100% !important;
        }

        table.body .main {
            border-left-width: 0 !important;
            border-radius: 0 !important;
            border-right-width: 0 !important;
        }

        table.body .btn table {
            width: 100% !important;
        }

        table.body .btn a {
            width: 100% !important;
        }

        table.body .img-responsive {
            height: auto !important;
            max-width: 100% !important;
            width: auto !important;
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

<body class="">
    <span class="preheader">LIETUVOS RESPUBLIKOS VIDAUS REIKAL?? MINISTERIJOS DARBO TARYBOS RINKIMAI ??? BALSAVIMAS</span>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
        <tr>
            <td>&nbsp;</td>
            <td class="container">
                <div class="content">
                    <!-- START CENTERED WHITE CONTAINER -->
                    <table role="presentation" class="main">
                        <!-- START MAIN CONTENT AREA -->
                        <tr>
                            <td class="wrapper">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <p class="p1"><span class="s1"><em>Gerb. Kolegos,</em></span></p>
                                            <p class="p2"><span class="s1">&nbsp;</span></p>
                                            <p class="p3"><span class="s1">Kvie??iame balsuoti Lietuvos Respublikos vidaus reikal?? ministerijos darbo tarybos rinkimuose ir i&scaron;rinkti 5 (penkis) darbo tarybos narius.</span><span class="s1">&nbsp;</span></p>
                                            <p class="p3"><span class="s1">Balsavimo nuoroda skirta tik Jums. Balsavimo metu u??tikrinamas slaptas balsavimas.</span><span class="s1">&nbsp;</span></p>
                                            <p class="p3"><span class="s1">Pra??ome balsuoti paspaudus ??i?? nuorod??: <a href="{{ route('vote', ['hash' => $ballot->hash]) }}">{{ route('vote', ['hash' => $ballot->hash]) }}</a></span><span class="s1">&nbsp;</span></p>
                                            <p class="p3"><span class="s1"><strong>Balsavimo nuoroda bus aktyvi tik paskelbt?? balsavimo dien?? nuo 7.00 val. iki 17.00 val.</strong></span></p>
                                            <p class="p2"><span class="s2">Kandidat?? ?? Vidaus reikal?? ministerijos darbo taryb?? s??ra??as:</span><span class="s2">&nbsp;</span></p>
                                            <table class="t1" style="height: 769px;" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                    <tr style="height: 37px;">
                                                        <td class="td1" style="height: 37px; width: 68px;" valign="top">
                                                            <p class="p4"><span class="s1"><strong>Eil. Nr.</strong></span></p>
                                                        </td>
                                                        <td class="td2" style="height: 37px; width: 231px;" valign="top">
                                                            <p class="p4"><span class="s1"><strong>Kandidato vardas, pavard??</strong></span></p>
                                                        </td>
                                                        <td class="td3" style="height: 37px; width: 333px;" valign="top">
                                                            <p class="p4"><span class="s1"><strong>Pareigos</strong></span></p>
                                                        </td>
                                                    </tr>
                                                    <tr style="height: 64px;">
                                                        <td class="td4" style="height: 64px; width: 68px;" valign="top">
                                                            <p class="p4"><span class="s1">1.</span></p>
                                                        </td>
                                                        <td class="td5" style="height: 64px; width: 231px;" valign="top">
                                                            <p class="p5"><span class="s1">Mindaugas Bajar??nas</span></p>
                                                        </td>
                                                        <td class="td6" style="height: 64px; width: 333px;" valign="top">
                                                            <p class="p5"><span class="s1">VRM Strategin??s komunikacijos skyriaus ved??jas</span></p>
                                                        </td>
                                                    </tr>
                                                    <tr style="height: 64px;">
                                                        <td class="td7" style="height: 64px; width: 68px;" valign="top">
                                                            <p class="p4"><span class="s1">2.</span></p>
                                                        </td>
                                                        <td class="td8" style="height: 64px; width: 231px;" valign="top">
                                                            <p class="p5"><span class="s1">Karolis Gailius</span></p>
                                                        </td>
                                                        <td class="td9" style="height: 64px; width: 333px;" valign="top">
                                                            <p class="p5"><span class="s1">VRM Administravimo departamento Teis??s taikymo skyriaus patar??jas</span></p>
                                                        </td>
                                                    </tr>
                                                    <tr style="height: 46px;">
                                                        <td class="td4" style="height: 46px; width: 68px;" valign="top">
                                                            <p class="p4"><span class="s1">3.</span></p>
                                                        </td>
                                                        <td class="td5" style="height: 46px; width: 231px;" valign="top">
                                                            <p class="p5"><span class="s1">Indr?? Gasper??</span></p>
                                                        </td>
                                                        <td class="td6" style="height: 46px; width: 333px;" valign="top">
                                                            <p class="p5"><span class="s1">VRM Strategini?? sprendim?? paramos grup??s patar??ja</span></p>
                                                        </td>
                                                    </tr>
                                                    <tr style="height: 46px;">
                                                        <td class="td10" style="height: 46px; width: 68px;" valign="top">
                                                            <p class="p4"><span class="s1">4.</span></p>
                                                        </td>
                                                        <td class="td11" style="height: 46px; width: 231px;" valign="top">
                                                            <p class="p5"><span class="s1">Alvydas Genys</span></p>
                                                        </td>
                                                        <td class="td12" style="height: 46px; width: 333px;" valign="top">
                                                            <p class="p5"><span class="s1">VRM Administravimo departamento vyresnysis patar??jas</span></p>
                                                        </td>
                                                    </tr>
                                                    <tr style="height: 64px;">
                                                        <td class="td13" style="height: 64px; width: 68px;" valign="top">
                                                            <p class="p4"><span class="s1">5.</span></p>
                                                        </td>
                                                        <td class="td14" style="height: 64px; width: 231px;" valign="top">
                                                            <p class="p5"><span class="s1">Adrianas Me??kovskis</span></p>
                                                        </td>
                                                        <td class="td15" style="height: 64px; width: 333px;" valign="top">
                                                            <p class="p5"><span class="s1">VRM Valstyb??s tarnybos politikos grup??s vyresnysis patar??jas</span></p>
                                                        </td>
                                                    </tr>
                                                    <tr style="height: 82px;">
                                                        <td class="td16" style="height: 82px; width: 68px;" valign="top">
                                                            <p class="p4"><span class="s1">6.</span></p>
                                                        </td>
                                                        <td class="td17" style="height: 82px; width: 231px;" valign="top">
                                                            <p class="p5"><span class="s1">Edita Mickut??</span></p>
                                                        </td>
                                                        <td class="td18" style="height: 82px; width: 333px;" valign="top">
                                                            <p class="p5"><span class="s1">VRM Europos S??jungos investicij?? ir tarptautini?? program?? departamento Teritorinio bendradarbiavimo program?? skyriaus vyriausioji specialist??</span></p>
                                                        </td>
                                                    </tr>
                                                    <tr style="height: 82px;">
                                                        <td class="td19" style="height: 82px; width: 68px;" valign="top">
                                                            <p class="p4"><span class="s1">7.</span></p>
                                                        </td>
                                                        <td class="td20" style="height: 82px; width: 231px;" valign="top">
                                                            <p class="p5"><span class="s1">Sandra Peleckien??</span></p>
                                                        </td>
                                                        <td class="td21" style="height: 82px; width: 333px;" valign="top">
                                                            <p class="p5"><span class="s1">VRM Administravimo departamento Informacijos ir dokument?? valdymo skyriaus vadybos ir organizavimo analitik?? (ministr??s referent??)</span></p>
                                                        </td>
                                                    </tr>
                                                    <tr style="height: 64px;">
                                                        <td class="td22" style="height: 64px; width: 68px;" valign="top">
                                                            <p class="p4"><span class="s1">8.</span></p>
                                                        </td>
                                                        <td class="td23" style="height: 64px; width: 231px;" valign="top">
                                                            <p class="p5"><span class="s1">Adomas Puidokas</span></p>
                                                        </td>
                                                        <td class="td24" style="height: 64px; width: 333px;" valign="top">
                                                            <p class="p5"><span class="s1">VRM Vie??ojo administravimo ir vietos savivaldos politikos grup??s vyresnysis patar??jas</span></p>
                                                        </td>
                                                    </tr>
                                                    <tr style="height: 64px;">
                                                        <td class="td13" style="height: 64px; width: 68px;" valign="top">
                                                            <p class="p4"><span class="s1">9.</span></p>
                                                        </td>
                                                        <td class="td14" style="height: 64px; width: 231px;" valign="top">
                                                            <p class="p5"><span class="s1">Ar??nas Sodonis</span></p>
                                                        </td>
                                                        <td class="td15" style="height: 64px; width: 333px;" valign="top">
                                                            <p class="p5"><span class="s1">VRM Administravimo departamento Teis??s taikymo skyriaus patar??jas</span></p>
                                                        </td>
                                                    </tr>
                                                    <tr style="height: 64px;">
                                                        <td class="td7" style="height: 64px; width: 68px;" valign="top">
                                                            <p class="p4"><span class="s1">10.</span></p>
                                                        </td>
                                                        <td class="td8" style="height: 64px; width: 231px;" valign="top">
                                                            <p class="p5"><span class="s1">Sandra &Scaron;arkut??</span></p>
                                                        </td>
                                                        <td class="td9" style="height: 64px; width: 333px;" valign="top">
                                                            <p class="p5"><span class="s1">VRM Vie??ojo administravimo ir vietos savivaldos politikos grup??s patar??ja</span></p>
                                                        </td>
                                                    </tr>
                                                    <tr style="height: 46px;">
                                                        <td class="td4" style="height: 46px; width: 68px;" valign="top">
                                                            <p class="p4"><span class="s1">11.</span></p>
                                                        </td>
                                                        <td class="td5" style="height: 46px; width: 231px;" valign="top">
                                                            <p class="p5"><span class="s1">Vytautas ??emionis</span></p>
                                                        </td>
                                                        <td class="td6" style="height: 46px; width: 333px;" valign="top">
                                                            <p class="p5"><span class="s1">VRM Administravimo departamento patar??jas</span></p>
                                                        </td>
                                                    </tr>
                                                    <tr style="height: 46px;">
                                                        <td class="td10" style="height: 46px; width: 68px;" valign="top">
                                                            <p class="p4"><span class="s1">12.</span></p>
                                                        </td>
                                                        <td class="td11" style="height: 46px; width: 231px;" valign="top">
                                                            <p class="p5"><span class="s1">Dainius ??ilinskas</span></p>
                                                        </td>
                                                        <td class="td12" style="height: 46px; width: 333px;" valign="top">
                                                            <p class="p5"><span class="s1">VRM Strategini?? sprendim?? paramos grup??s vadovas</span></p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="p6">&nbsp;</p>
                                            <p class="p7"><span class="s1">Tai automatinis prane??imas, pra??ome ?? j?? neatsakyti.<br /></span></p>
                                            <p class="p7"><span class="s1">Kilus klausimams pra??ome kreiptis ?? Vidaus reikal?? ministerijos darbo tarybos rinkim?? komisijos pirminink?? Ing?? Prialgauskien?? tel. (8 5) 271 8233 arba el. pa??tu inga.prialgauskiene@vrm.lt</span></p>
                                            <p class="p8">&nbsp;</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!-- END MAIN CONTENT AREA -->
                    </table>
                    <!-- END CENTERED WHITE CONTAINER -->
                    <!-- START FOOTER -->
                    <div class="footer">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="content-block">
                                    <span class="apple-link">Vidaus reikal?? ministerijos darbo tarybos rinkim?? komisija</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="content-block powered-by">
                                    <a href="tel:+37052718233">+370 5 271 8233</a>.
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END FOOTER -->
                </div>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
</body>

</html>
