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
        echo "
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 3
            echo "    <article>
        <header class=\"map-container\">
            <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
            // line 5
            echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["event"], "location", array())), "html", null, true);
            echo "&markers=color:red%7Ccolor:red%7C";
            echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["event"], "location", array())), "html", null, true);
            echo "&zoom=14&size=150x150&maptype=roadmap&sensor=false\" />
        </header>
        <section>
            <h3>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("slug" => $this->getAttribute($context["event"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</a>
            </h3>

            <dl>
                <dt>where:</dt>
                <dd>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "location", array()), "html", null, true);
            echo "</dd>

                <dt>when:</dt>
                <dd>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "time", array()), "g:ia / l M j, Y"), "html", null, true);
            echo "</dd>

                <dt>who:</dt>
                <dd>Todo # of people</dd>

                <dt>posted:</dt>
                <dd>";
            // line 23
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
        return array (  64 => 23,  55 => 17,  49 => 14,  39 => 9,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
