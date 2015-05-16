<?php

/* EventBundle:Event:_upcomingEvents.html.twig */
class __TwigTemplate_4b9d78e1448746732e9c32cb077d201ec9f73c11c0a1b3616fc9f2f18efa66bb extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 2
            echo "    <article>
        <header class=\"map-container\">
            <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
            // line 4
            echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["event"], "location", array())), "html", null, true);
            echo "&markers=color:red%7Ccolor:red%7C";
            echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["event"], "location", array())), "html", null, true);
            echo "&zoom=14&size=150x150&maptype=roadmap&sensor=false\" />
        </header>
        <section>
            <h3>
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("slug" => $this->getAttribute($context["event"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</a>
            </h3>

            <dl>
                <dt>where:</dt>
                <dd>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "location", array()), "html", null, true);
            echo "</dd>

                <dt>when:</dt>
                <dd>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "time", array()), "g:ia / l M j, Y"), "html", null, true);
            echo "</dd>

                <dt>who:</dt>
                <dd>Todo # of people</dd>
                
                <dt>posted:</dt>
                <dd>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('event')->calculateAgo($this->getAttribute($context["event"], "createdAt", array())), "html", null, true);
            echo "</dd>
            </dl>
        </section>
    </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "EventBundle:Event:_upcomingEvents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 22,  52 => 16,  46 => 13,  36 => 8,  27 => 4,  23 => 2,  19 => 1,);
    }
}
