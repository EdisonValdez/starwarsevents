<?php

/* ::base.html.twig */
class __TwigTemplate_c39bad16652b8813aa2dffca65a4e991b3e63d087a54e52ebc9370349036b311 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        if ($this->renderBlock("title", $context, $blocks)) {
            // line 7
            $this->displayBlock("title", $context, $blocks);
            echo "| Starwars Events";
        } else {
            // line 9
            echo "Events From another Galaxy!!";
        }
        // line 11
        echo "</title>
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "     <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://assets.roomorama-cache.com/favicon.ico"), "html", null, true);
        echo "\" />
 
    </head>
    <body>
    <div class=\"topbar\">
        <div class=\"header\">
            <a href=\"\"><div class=\"logo\"></div><div class=\"logo-small\"></div></a>
            <div class=\"search-input\"><input type=\"text\" id=\"search\" placeholder=\"\" ></div>
            <!--\t<a onclick=\"showNotification(\\'\\', \\'1\\')\"><div class=\"menu_btn\" id=\"notifications_btn\" title=\"\"><img src=\"assets/assets/images/notification.png\" id=\"notifications_img\" /></div></a>
            -->   <a href=\"index.php?do=quoteusa\" id=\"messages_url\"><div class=\"menu_btn\" title=\"Sending Messages\"><img src=\"../assets/assets/images/message.png\" /></div></a>
            <!--<a href=\"../account.php\"><div class=\"menu_btn\" title=\"Edit Account\"><img src=\"../assets/assets/images/timeline.png\" /></div></a>
         -->  <a href=\"index.php?do=users&amp;action=edit&amp;id=5\"><div class=\"menu_btn\" title=\"Account\"><img src=\"../assets/assets/images/icons/edit_h.png\"></div></a>
            <a href=\"logout.php\"><div class=\"menu_btn\" title=\"Sign Out\"><img src=\"../assets/assets/images/logout.png\"></div></a>

            <!--    <a href=\"../admin/index.php\"><div class=\"menu_btn\" title=\"Admin\"><img src=\"../assets/assets/images/icons/private_post_h.png\"></div></a>
        -->            <div class=\"notification-container\">
                <div class=\"notification-content\">

                    <div id=\"notifications-content\"></div>
                    <div class=\"notification-row\"><div class=\"notification-padding\"><a href=\"\"> </a></div></div>
                </div>
            </div>
        </div>
        <div class=\"search-container\"></div>
    </div>
<br><br>
    ";
        // line 53
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 54
            echo "        <div class=\"alert alert-success\">
            ";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 56
                echo "                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        </div>
    ";
        }
        // line 60
        echo "        
        ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </body>
</html>
";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" />
           ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "caad23a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_caad23a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/built/layout_event_1.css");
            // line 22
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    
        ";
            // asset "caad23a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_caad23a_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/built/layout_events_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    
        ";
            // asset "caad23a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_caad23a_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/built/layout_main_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    
        ";
        } else {
            // asset "caad23a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_caad23a") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/built/layout.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    
        ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "            
       ";
    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        // line 63
        echo "            <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>

        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 63,  158 => 62,  153 => 61,  148 => 25,  118 => 22,  114 => 14,  111 => 13,  108 => 12,  102 => 66,  99 => 62,  97 => 61,  94 => 60,  90 => 58,  81 => 56,  77 => 55,  74 => 54,  72 => 53,  42 => 27,  40 => 12,  37 => 11,  34 => 9,  30 => 7,  28 => 6,  22 => 1,);
    }
}
