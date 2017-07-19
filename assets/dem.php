<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- If you delete this tag, the sky will fall on your head -->
<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Bottega Verde - DEM</title>
    
    <style type="text/css">
        /* ------------------------------------- 
                GLOBAL 
        ------------------------------------- */
        * { 
            margin:0;
            padding:0;
        }
        * { font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; }

        img { 
            max-width: 100%; 
        }
        .collapse {
            margin:0;
            padding:0;
        }
        body {
            -webkit-font-smoothing:antialiased; 
            -webkit-text-size-adjust:none; 
            width: 100%!important; 
            height: 100%;
            color: #999999;
            font-size: 20px;
        }


        /* ------------------------------------- 
                ELEMENTS 
        ------------------------------------- */
        a { color: #2BA6CB;}

        .btn {
            text-decoration:none;
            color: #FFF;
            background-color: #666;
            padding:10px 16px;
            font-weight:bold;
            margin-right:10px;
            text-align:center;
            cursor:pointer;
            display: inline-block;
        }

        p.callout {
            padding:15px;
            background-color:#ECF8FF;
            margin-bottom: 15px;
        }
        .callout a {
            font-weight:bold;
            color: #2BA6CB;
        }

        table.split {
        /*  padding:15px; */
            
        }

        .sidebar .soc-btn { 
            display:block;
            width:100%;
        }

        /* ------------------------------------- 
                HEADER 
        ------------------------------------- */
        table.head-wrap { width: 100%;}

        .header.container table td.logo { padding: 15px; }
        .header.container table td.label { padding: 15px; padding-left:0px;}


        /* ------------------------------------- 
                BODY 
        ------------------------------------- */
        table.body-wrap { width: 100%;}


        /* ------------------------------------- 
                FOOTER 
        ------------------------------------- */
        table.footer-wrap { width: 100%;    clear:both!important;
        }
        .footer-wrap .container td.content  p { border-top: 1px solid rgb(215,215,215); padding-top:15px;}
        .footer-wrap .container td.content p {
            font-size:10px;
            font-weight: bold;
            
        }


        /* ------------------------------------- 
                TYPOGRAPHY 
        ------------------------------------- */
        h1,h2,h3,h4,h5,h6 {
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; line-height: 1.1; margin-bottom:15px; color:#000;
        }
        h1 small, h2 small, h3 small, h4 small, h5 small, h6 small { font-size: 60%; color: #6f6f6f; line-height: 0; text-transform: none; }

        h1 { font-weight:200; font-size: 44px;}
        h2 { font-weight:200; font-size: 37px;}
        h3 { font-weight:500; font-size: 27px;}
        h4 { font-weight:500; font-size: 23px;}
        h5 { font-weight:900; font-size: 17px;}
        h6 { font-weight:900; font-size: 14px; text-transform: uppercase; color:#444;}

        .collapse { margin:0!important;}

        p, ul { 
            margin-bottom: 10px; 
            font-weight: normal; 
            font-size:14px; 
            line-height:1.6;
        }
        p.lead { font-size:17px; }
        p.last { margin-bottom:0px;}

        ul li {
            margin-left:5px;
            list-style-position: inside;
        }

        /* ------------------------------------- 
                SIDEBAR 
        ------------------------------------- */
        ul.sidebar {
            background:#ebebeb;
            display:block;
            list-style-type: none;
        }
        ul.sidebar li { display: block; margin:0;}
        ul.sidebar li a {
            text-decoration:none;
            color: #666;
            padding:10px 16px;
        /*  font-weight:bold; */
            margin-right:10px;
        /*  text-align:center; */
            cursor:pointer;
            border-bottom: 1px solid #777777;
            border-top: 1px solid #FFFFFF;
            display:block;
            margin:0;
        }
        ul.sidebar li a.last { border-bottom-width:0px;}
        ul.sidebar li a h1,ul.sidebar li a h2,ul.sidebar li a h3,ul.sidebar li a h4,ul.sidebar li a h5,ul.sidebar li a h6,ul.sidebar li a p { margin-bottom:0!important;}



        /* --------------------------------------------------- 
                RESPONSIVENESS
                Nuke it from orbit. It's the only way to be sure. 
        ------------------------------------------------------ */

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display:block!important;
            max-width:1200px!important;
            margin:0 auto!important; /* makes it centered */
            clear:both!important;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            padding:15px;
            max-width:1200px;
            margin:0 auto;
            display:block; 
        }

        /* Let's make sure tables in the content area are 100% wide */
        .content table { width: 100%; }


        /* Odds and ends */
        .column {
            width: 300px;
            float:left;
        }
        .column tr td { padding: 15px; }
        .column-wrap { 
            padding:0!important; 
            margin:0 auto; 
            max-width:600px!important;
        }
        .column table { width:100%;}
        .split .column {
            width: 50%;
            min-width: 300px;
            float:left;
        }
        .fourth .column {
            width: 25%;
            min-width: 140px;
            float:left;
        }

        /* Be sure to place a .clear element after each set of columns, just to be safe */
        .clear { display: block; clear: both; }


        /* ------------------------------------------- 
                PHONE
                For clients that support media queries.
                Nothing fancy. 
        -------------------------------------------- */
        @media only screen and (max-width: 600px) {
            
            a[class="btn"] { display:block!important; margin-bottom:10px!important; background-image:none!important; margin-right:0!important;}

            div[class="column"] { width: auto!important; float:none!important;}
            
            table.split div[class="column"] {
                width:auto!important;
            }
            .split .column {
                width: 100%;
            }
            .fourth .column {
                width: 50%;
            }

        }
    </style>

</head>
 
<body bgcolor="#f8f6f4">

<!-- HEADER -->
<table class="head-wrap">
    <tr>
        <td></td>
        <td class="header container">
            
                <div class="content">
                    <table>
                    <tr>
                        <td align="center"><a href="#" style="color:#3a8a3a;font-size:18px;">Scegli il regalo perfetto!</a></td>
                    </tr>
                </table>
                </div>
                
        </td>
        <td class="header container">
            
                <div class="content">
                    <table>
                    <tr>
                        <td align="left" style="color:#2c2d2d;font-size:18px;">Offerta valida fino al 14/02/2016</td>
                        <td align="center"></td>
                        <td align="right"><a href="#" style="color:#2c2d2d;font-size:18px;">Visualizza questa email nel tuo browser</a></td>
                    </tr>
                </table>
                </div>
                
        </td>
        <td></td>
    </tr>
</table><!-- /HEADER -->


<!-- BODY -->
<table class="body-wrap">
    <tr>
        <td class="header container" bgcolor="#FFFFFF">
            
                <div class="content">
                    <table>
                    <tr>
                        <td align="left" width="210"></td>
                        <td align="center" width="320">
                            <a href="#"><img src="images/demAssets/logo.png"></a>
                        </td>
                        <td align="right" width="210">
                            <img src="images/demAssets/logistic.png">
                        </td>
                    </tr>
                </table>
                </div>
                
        </td>
        <td class="container" bgcolor="#3a8a3a" height="2"></td>
        <td class="container" bgcolor="#FFFFFF">

            <div class="content" style="padding:0;">
            <table>
                <tr>
                    <td>
                        
                        <a href="#">
                            <img src="images/demAssets/main.png" />
                        </a>

                        <table class="split" width="100%">
                            <tr>
                                <td>
                                    <table align="left" class="column">
                                        <tr>
                                            <td>                
                                                <a href="#">
                                                    <img src="images/demAssets/small-1.png" />
                                                </a>
                                            </td>
                                        </tr>
                                    </table><!-- /column 1 -->  

                                    <!--- column 2 -->
                                    <table align="left" class="column">
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="images/demAssets/small-2.png" />
                                                </a>
                                            </td>
                                        </tr>
                                    </table><!-- /column 2 -->

                                    <span class="clear"></span> 

                                </td>
                            </tr>
                        </table>

                        <a href="#">
                            <img src="images/demAssets/video.png" />
                        </a>

                        <table class="split" width="100%">
                            <tr>
                                <td>
                                    <table align="left" class="column">
                                        <tr>
                                            <td>                
                                                <a href="#">
                                                    <img src="images/demAssets/small-1.png" />
                                                </a>
                                            </td>
                                        </tr>
                                    </table><!-- /column 1 -->  

                                    <!--- column 2 -->
                                    <table align="left" class="column">
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="images/demAssets/small-2.png" />
                                                </a>
                                            </td>
                                        </tr>
                                    </table><!-- /column 2 -->

                                    <span class="clear"></span> 

                                </td>
                            </tr>
                        </table>

                        <a href="#">
                            <img src="images/demAssets/big.png" />
                        </a>
                    
                    </td>
                </tr>
            </table>
            </div>
                                    
        </td>
        <td></td>
    </tr>
</table><!-- /BODY -->

<span style="display:block;width:100%;height:1px;max-width:1200px;margin:0 auto;background-color:#cccccc;"></span>

<!-- FOOTER -->
<table class="footer-wrap">
    <tr>
        <td></td>
        <td class="container">
            
                <!-- content -->
                <div class="content">
                    <table class="fourth" width="100%">
                        <tr>
                            <td>
                                <table align="left" class="column">
                                    <tr>
                                        <td>                
                                            <a href="#">
                                                <img src="images/demAssets/footer-1.png" />
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                                <table align="left" class="column">
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <img src="images/demAssets/footer-2.png" />
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                                <table align="left" class="column">
                                    <tr>
                                        <td>                
                                            <a href="#">
                                                <img src="images/demAssets/footer-3.png" />
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                                <table align="left" class="column">
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <img src="images/demAssets/footer-4.png" />
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                                <span class="clear"></span> 
                            </td>
                        </tr>
                    </table>
                </div>
                
        </td>
        <td></td>
    </tr>
</table><!-- /FOOTER -->

<span style="display:block;width:100%;height:1px;max-width:1200px;margin:0 auto;background-color:#cccccc;"></span>

<table class="footer-wrap">
    <tr>
        <td></td>
        <td class="container">
            <p>
                seguici su:
                <br/>
                <br/>
                <a href="#" style="text-decoration:none;margin-right:20px">
                    <img src="images/demAssets/social-fb.png">
                </a>
                <a href="#" style="text-decoration:none;margin-right:20px">
                    <img src="images/demAssets/social-tw.png">
                </a>
                <a href="#" style="text-decoration:none;margin-right:20px">
                    <img src="images/demAssets/social-yt.png">
                </a>
                <a href="#" style="text-decoration:none;margin-right:20px">
                    <img src="images/demAssets/social-inst.png">
                </a>
            </p>
            <p>
                Non rispondere direttamente a questa mail, ma <a href="#" style="color:inherit;">contattaci qui</a>
                Da qui puoi <a href="#" style="color:inherit;">modificare</a> le tue impostazioni e-mail, <a href="#" style="color:inherit;">sospendere</a> la ricezione, oppure essere <a href="#" style="color:inherit;">cancellato</a>
                <br/>
                WBES16C-C-52750
                <br/>
                <b>© Bottega Verde - Podere S. Luigi - Palazzo Massaini 53026 Pienza (Siena)</b>
            </p>
        </td>
        <td></td>
    </tr>
</table>

</body>
</html>