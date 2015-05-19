<?php

/* EventBundle:Event:show.html.twig */
class __TwigTemplate_095a5cc242acfc0f83d4e7f6a858e45faf99e4980aa43c43d4b425d3bc1b4cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EventBundle::layout.html.twig", "EventBundle:Event:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
    <section class=\"event-show\">
        <header id=\"menu\">
            <a class=\"link\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("event");
        echo "\">&larr; back to the events list</a>
        </header>

        <article>
            <header class=\"map-container\">
                <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
        // line 12
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array())), "html", null, true);
        echo "&markers=color:red%7Ccolor:red%7C";
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array())), "html", null, true);
        echo "&zoom=14&size=300x300&maptype=roadmap&sensor=false\" />
            </header>
            <section>
                <h1>
                    ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "
                    
                    ";
        // line 18
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner", array()))) {
            // line 19
            echo "                         <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">edit</a>
                    ";
        }
        // line 21
        echo "                </h1>

                <dl>
                    <dt>where:</dt>
                    <dd>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array()), "html", null, true);
        echo "</dd>
                    
                    <dt>host:</dt>
                    <dd>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner", array()), "username", array()), "html", null, true);
        echo "</dd>

                    <dt>when:</dt>
                    <dd>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "time", array()), "g:ia / l M j, Y"), "html", null, true);
        echo "</dd>

                    <dt>what:</dt>
                    <dd>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "details", array()), "html", null, true);
        echo "</dd>

                   <dt>who:</dt>
                    <dd>
                        ";
        // line 38
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "attendees", array())), "html", null, true);
        echo " attending!

                        <ul class=\"users\">
                            ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "attendees", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["attendee"]) {
            // line 42
            echo "                                <li>";
            echo twig_escape_filter($this->env, $context["attendee"], "html", null, true);
            echo "</li>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "                                <li>We're cool! RSVP!</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attendee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        </ul>
                        ";
        // line 47
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hasAttendee", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method")) {
            // line 48
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_unattend", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" 
               class=\"btn btn-warning btn-xs js-attend-toggle\">
                Oh no! I can't go anymore!
            </a>
        ";
        } else {
            // line 53
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_attend", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" 
               class=\"btn btn-success btn-xs js-attend-toggle\">
                I totally want to go!
            </a>
        ";
        }
        // line 58
        echo "                    </dd>
                </dl>
            </section>
        </article>
    </section>
";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(document).ready(function() {
            \$('.js-attend-toggle').on('click', function(e) {
                // prevents the browser from \"following\" the link
                e.preventDefault();

                var \$anchor = \$(this);
                var url = \$(this).attr('href')+'.json';

                \$.post(url, null, function(data) {
                    if (data.attending) {
                        var message = 'See you there!';
                    } else {
                        var message = 'We\\'ll miss you!';
                    }

                    \$anchor.after('<span class=\"label label-default\">&#10004; '+message+'</span>');
                    \$anchor.hide();
                });
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "EventBundle:Event:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 66,  156 => 65,  147 => 58,  138 => 53,  129 => 48,  127 => 47,  124 => 46,  117 => 44,  109 => 42,  104 => 41,  98 => 38,  91 => 34,  85 => 31,  79 => 28,  73 => 25,  67 => 21,  61 => 19,  59 => 18,  54 => 16,  45 => 12,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
