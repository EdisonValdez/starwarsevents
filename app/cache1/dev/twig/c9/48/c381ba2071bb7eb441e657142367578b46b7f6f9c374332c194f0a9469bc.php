<?php

/* DCSFormSelectCityFormFieldBundle:Form:select_city.html.twig */
class __TwigTemplate_c948c381ba2071bb7eb441e657142367578b46b7f6f9c374332c194f0a9469bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'select_city_widget' => array($this, 'block_select_city_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('select_city_widget', $context, $blocks);
    }

    public function block_select_city_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <script type=\"text/javascript\">
        window.onload = function () {
            if (window.select_region_base_url === null) {
                window.select_region_base_url = '";
        // line 7
        echo $this->env->getExtension('routing')->getPath("dcs_select_city_form_field_api_regions", array("countryId" => "countryId"));
        echo "';
            }
            if (window.select_city_base_url === null) {
                window.select_city_base_url = '";
        // line 10
        echo $this->env->getExtension('routing')->getPath("dcs_select_city_form_field_api_cities", array("regionId" => "regionId"));
        echo "';
            }
            var callbackCountry = typeof ";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . "_") . (isset($context["callback_country"]) ? $context["callback_country"] : $this->getContext($context, "callback_country"))), "html", null, true);
        echo " != 'undefined' ? ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . "_") . (isset($context["callback_country"]) ? $context["callback_country"] : $this->getContext($context, "callback_country"))), "html", null, true);
        echo " : null;
            var callbackRegion = typeof ";
        // line 13
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . "_") . (isset($context["callback_region"]) ? $context["callback_region"] : $this->getContext($context, "callback_region"))), "html", null, true);
        echo " != 'undefined' ? ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . "_") . (isset($context["callback_region"]) ? $context["callback_region"] : $this->getContext($context, "callback_region"))), "html", null, true);
        echo " : null;
            window.select_city_instance.push(new window.select_city('";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), "vars", array()), "id", array()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region", array()), "vars", array()), "id", array()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), "vars", array()), "id", array()), "html", null, true);
        echo "', callbackCountry, callbackRegion));
        }
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "DCSFormSelectCityFormFieldBundle:Form:select_city.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  53 => 13,  47 => 12,  42 => 10,  36 => 7,  28 => 3,  26 => 2,  20 => 1,);
    }
}
