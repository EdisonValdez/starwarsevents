<?php

/* ::base.html.twig */
class __TwigTemplate_69a847b8bf16774a130198c1e74155a9fcbd74c7c90e25bc4d18073b11a381f3 extends Twig_Template
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
        // line 23
        echo "      <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://assets.roomorama-cache.com/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
         ";
        // line 26
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 27
            echo "        <div class=\"alert alert-success\">
            ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 29
                echo "                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        </div>
    ";
        }
        // line 33
        echo "        
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    </body>
</html>
";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "     <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" />
            ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8e49901_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8e49901_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8e49901_event_1.css");
            // line 20
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "8e49901_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8e49901_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8e49901_events_2.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "8e49901_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8e49901_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8e49901_main_3.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
        } else {
            // asset "8e49901"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8e49901") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8e49901.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
        }
        unset($context["asset_url"]);
        // line 21
        echo "            
        ";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
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
        return array (  134 => 36,  131 => 35,  126 => 34,  121 => 21,  95 => 20,  91 => 14,  88 => 13,  85 => 12,  79 => 38,  76 => 35,  74 => 34,  71 => 33,  67 => 31,  58 => 29,  54 => 28,  51 => 27,  49 => 26,  42 => 23,  40 => 12,  37 => 11,  34 => 9,  30 => 7,  28 => 6,  22 => 1,);
    }
}
