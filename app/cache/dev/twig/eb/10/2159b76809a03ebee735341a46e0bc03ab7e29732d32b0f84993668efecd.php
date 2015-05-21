<?php

/* EventBundle:Event:index.html.twig */
class __TwigTemplate_eb102159b76809a03ebee735341a46e0bc03ab7e29732d32b0f84993668efecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EventBundle::layout.html.twig", "EventBundle:Event:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EventBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <section class=\"events\">
        <header id=\"menu\">

            <a class=\"button\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("event_new");
        echo "\"><button class=\"register-button\">Add Company</button> </a>

            
            ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "              <a class=\"link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" >Logout ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 14
            echo "              <a class=\"link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("login_form");
            echo "\" >Login</a>
             
            ";
        }
        // line 17
        echo "            
        </header>

  ";
        // line 20
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EventBundle:Event:_upcomingEvents"));
        echo "
    </section>
";
    }

    public function getTemplateName()
    {
        return "EventBundle:Event:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  60 => 17,  53 => 14,  45 => 12,  43 => 11,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
