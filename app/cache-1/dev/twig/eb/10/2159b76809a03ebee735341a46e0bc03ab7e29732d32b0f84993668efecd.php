<?php

/* EventBundle:Event:index.html.twig */
class __TwigTemplate_eb102159b76809a03ebee735341a46e0bc03ab7e29732d32b0f84993668efecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EventBundle::layout.html.twig");

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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <article>
                <header class=\"map-container\">
                    <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
            // line 21
            echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["entity"], "location", array())), "html", null, true);
            echo "&markers=color:red%7Ccolor:red%7C";
            echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["entity"], "location", array())), "html", null, true);
            echo "&zoom=14&size=150x150&maptype=roadmap&sensor=false\" />
                </header>
                <section>
                    <h3>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("slug" => $this->getAttribute($context["entity"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</a>
                    </h3>

                    <dl>
                        <dt>where:</dt>
                        <dd>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo "</dd>

                        <dt>when:</dt>
                        <dd>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "time", array()), "g:ia / l M j, Y"), "html", null, true);
            echo "</dd>

                        <dt>who:</dt>
                        <dd>";
            // line 36
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["entity"], "attendees", array())), "html", null, true);
            echo " attending!</dd>
                    </dl>
                </section>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </section>
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
        return array (  113 => 41,  102 => 36,  96 => 33,  90 => 30,  80 => 25,  71 => 21,  67 => 19,  63 => 18,  58 => 15,  51 => 12,  43 => 10,  41 => 9,  36 => 7,  31 => 4,  28 => 3,);
    }
}
