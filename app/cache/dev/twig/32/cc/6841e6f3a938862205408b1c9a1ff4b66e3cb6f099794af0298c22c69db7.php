<?php

/* EmailBundle:Email:sendMail.html.twig */
class __TwigTemplate_32cc6841e6f3a938862205408b1c9a1ff4b66e3cb6f099794af0298c22c69db7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
    <html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
    <!-- If you delete this tag, the sky will fall on your head -->
    <meta name=\"viewport\" content=\"width=device-width\" />

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <title>QUOTTY</title>

    <style>
    /* -------------------------------------
            GLOBAL
    ------------------------------------- */
    * {
        margin:0;
        padding:0;
    }
    * { font-family: \"Helvetica Neue\", \"Helvetica\", Helvetica, Arial, sans-serif; }

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

    table.social {
        /* \tpadding:15px; */
        background-color: #ebebeb;

    }
    .social .soc-btn {
        padding: 3px 7px;
        font-size:12px;
        margin-bottom:10px;
        text-decoration:none;
        color: #FFF;font-weight:bold;
        display:block;
        text-align:center;
    }
    a.fb { background-color: #3B5998!important; }
    a.tw { background-color: #1daced!important; }
    a.gp { background-color: #DB4A39!important; }
    a.ms { background-color: #000!important; }

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
    table.footer-wrap { width: 100%;\tclear:both!important;
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
        font-family: \"HelveticaNeue-Light\", \"Helvetica Neue Light\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif; line-height: 1.1; margin-bottom:15px; color:#000;
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
        /* \tfont-weight:bold; */
        margin-right:10px;
        /* \ttext-align:center; */
        cursor:pointer;
        border-bottom: 1px solid #777777;
        border-top: 1px solid #FFFFFF;
        display:block;
        margin:0;
    }
    ul.sidebar li a.last { border-bottom-width:0px;}
    ul.sidebar li a h1,ul.sidebar li a h2,ul.sidebar li a h3,ul.sidebar li a h4,ul.sidebar li a h5,ul.sidebar li a h6,ul.sidebar li a p { margin-bottom:0!important;}



    /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
    .container {
        display:block!important;
        max-width:600px!important;
        margin:0 auto!important; /* makes it centered */
        clear:both!important;
    }

    /* This should also be a block element, so that it will fill 100% of the .container */
    .content {
        padding:15px;
        max-width:600px;
        margin:0 auto;
        display:block;
    }


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
    .social .column {
        width: 280px;
        min-width: 279px;
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

        a[class=\"btn\"] { display:block!important; margin-bottom:10px!important; background-image:none!important; margin-right:0!important;}

        div[class=\"column\"] { width: auto!important; float:none!important;}

        table.social div[class=\"column\"] {
            width:auto!important;
        }

    }
    </style>

    </head>

    <body bgcolor=\"#FFFFFF\">

    <!-- HEADER -->
    <table class=\"head-wrap\" bgcolor=\"#0072C6\">
        <tr>
            <td></td>
            <td class=\"header container\">

                <div class=\"content\">
                    <table bgcolor=\"#0072C6\">
                        <tr>
                            <td><img src=\"http://bullatickets.com/quotty/assets/assets/images/logo_small.png\" /></td>
                            <td align=\"right\"><h6 class=\"collapse\" style=\"color:#fff;\">Please Send me a Quotation Now!</h6></td>
                        </tr>
                    </table>
                </div>

            </td>
            <td></td>
        </tr>
    </table><!-- /HEADER -->


    <!-- BODY -->
    <table class=\"body-wrap\">
        <tr>
            <td></td>
            <td class=\"container\" bgcolor=\"#FFFFFF\">

                <div class=\"content\">
                    <table>
                        <tr>
                            <td>

                                <h3>Hello!</h3>

                                <center><h3>QUOTATION REQUEST for <i>' . \$Sic_Description .'  </i></H3></center>
                                <br>
                                <p class=\"lead\">One of our member need a quotation of a product or a service:</p>
                                Our Member <h3>'. \"";
        // line 273
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "\".'</h3> Is requesting a quotation from suppliers near :<b>'";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "city", array()), "html", null, true);
        echo "'</b>
                                <br />

                                <table width=\"90%\"  class=\"column\" style=\"color:#000; text-align:center;\" align=\"center\">
                                    <tr><td colspan=\"3\"><h4>SUBJECT: '";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "product", array()), "html", null, true);
        echo "' - QUOTATION NO: Quotty";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tracking", array()), "html", null, true);
        echo "</h4></td></tr>

                                    <tr style=\"background:#ccc;\"><td><strong>QUANTITY</strong></td><td><strong>PRODUCT OR SERVICE</strong></td>
                                        <td><strong>DETAILED DESCRIPTION</strong></td></tr>
                                    <tr><td><b>'";
        // line 281
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "quantity", array()), "html", null, true);
        echo "'  '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "qtyType", array()), "html", null, true);
        echo "'</b></td>
                                        <td> <b>'";
        // line 282
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "message", array()), "html", null, true);
        echo "'</b></td><td>'. \$body .'</td></tr>



                                </table>


                                <br>
                                <p>Quotty Helps thousand of people to get their quotation in just one single Email!</p>

                                <a class=\"btn\">Reply this Quotation!</a>

                                <br/>
                                <br/>
                                <!-- Callout Panel -->
                                <p class=\"callout\">
                                    QUOTTY is an application who helps business and person from all over the country doing Business as easiest as never before!. <a href=\"http://bullatickets.com/quotty/\">Go Quotty! &raquo;</a>
                                </p><!-- /Callout Panel -->
                                <!-- social & contact -->
                                <table class=\"social\" width=\"100%\">
                                    <tr>
                                        <td>

                                            <!--- column 1 -->
                                            <table align=\"left\" class=\"column\">
                                                <tr>
                                                    <td>

                                                        <h5 class=\"\">Connect with Us:</h5>
                                                        <p class=\"\"><a href=\"#\" class=\"soc-btn fb\">Facebook</a> <a href=\"#\" class=\"soc-btn tw\">Twitter</a> <a href=\"#\" class=\"soc-btn gp\">Google+</a></p>


                                                    </td>
                                                </tr>
                                            </table><!-- /column 1 -->

                                            <!--- column 2 -->
                                            <table align=\"left\" class=\"column\">
                                                <tr>
                                                    <td>

                                                        <h5 class=\"\">Contact Info:</h5>
                                                        <p>Phone: <strong>408.341.0600</strong><br/>
                                                            Email: <strong><a href=\"emailto:hey@quotty.com\">hey@quotty.com</a></strong></p>

                                                    </td>
                                                </tr>
                                            </table><!-- /column 2 -->

                                            <span class=\"clear\"></span>

                                        </td>
                                    </tr>
                                </table><!-- /social & contact -->


                            </td>
                        </tr>
                    </table>
                </div>

            </td>
            <td></td>
        </tr>
    </table><!-- /BODY -->

    <!-- FOOTER -->
    <table class=\"footer-wrap\">
        <tr>
            <td></td>
            <td class=\"container\">

                <!-- content -->
                <div class=\"content\">
                    <table>
                        <tr>
                            <td align=\"center\">
                                <p>
                                    <a href=\"#\">Terms</a> |
                                    <a href=\"#\">Privacy</a> |
                                    <a href=\"#\"><unsubscribe>Unsubscribe</unsubscribe></a>
                                </p>
                            </td>
                        </tr>
                    </table>
                </div><!-- /content -->

            </td>
            <td></td>
        </tr>
    </table><!-- /FOOTER -->

    </body>
    </html>

";
    }

    public function getTemplateName()
    {
        return "EmailBundle:Email:sendMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 282,  311 => 281,  302 => 277,  293 => 273,  19 => 1,);
    }
}
