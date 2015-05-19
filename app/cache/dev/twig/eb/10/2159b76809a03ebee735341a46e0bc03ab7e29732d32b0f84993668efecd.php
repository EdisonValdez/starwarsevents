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
        // line 7
        echo $this->env->getExtension('routing')->getPath("event_new");
        echo "\">Create new event</a>
            
            ";
        // line 9
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 10
            echo "              <a class=\"link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" >Logout ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 12
            echo "              <a class=\"link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("login_form");
            echo "\" >Login</a>
             
            ";
        }
        // line 15
        echo "            
        </header>

  ";
        // line 18
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
        return array (  63 => 18,  58 => 15,  51 => 12,  43 => 10,  41 => 9,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
