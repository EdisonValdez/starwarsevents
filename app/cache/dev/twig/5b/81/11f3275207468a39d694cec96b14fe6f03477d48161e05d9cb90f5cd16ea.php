<?php

/* EmailBundle:Email:formEmail.html.twig */
class __TwigTemplate_5b8111f3275207468a39d694cec96b14fe6f03477d48161e05d9cb90f5cd16ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EmailBundle::layout.html.twig", "EmailBundle:Email:formEmail.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EmailBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 7
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 8
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                ";
                // line 9
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <div class=\"container\">
        <div class=\"site-index\">
            <div class=\"body-content\">
                <div align=\"center\"><h1>QUOTE NOW WHATEVER YOU NEED</h1>
                    <H2> <i>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</i>, Suppliers are waiting your request!</H2>
                </div>
                <br>
                <br>

     <div class=\"row\" style=\"background: #fff; padding:20px; \">
        <div class=\"col-md-12\">
          <div id=\"fullform\">

         <form role=\"form\" action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("email_formEmail");
        echo "\" enctype=\"multipart/form-data\" method=\"POST\">
             ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"#{\$fa-css-prefix}-angle-down\"> ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</div>
             ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row', array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())));
        echo "
             ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row', array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())));
        echo "
             ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("value" => "evaldez@bullatickets.com"));
        echo "
             ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailTo", array()), 'row', array("value" => "iancasillasbuffon@gmail.com"));
        echo "
             ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tracking", array()), 'row', array("value" => twig_random($this->env)));
        echo "
             ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quotationSender", array()), 'row', array("value" => "evaldez@bullatickets.com"));
        echo "
             <div class=\"col-md-6\">
             <div class=\"form-group\">
                   ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'row');
        echo "


             </div>
             <div class=\"form-group\">
                  ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "product", array()), 'row');
        echo "
             </div>

                 <div class=\"form-group\">
                     ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity", array()), 'row');
        echo "

                 </div>
            </div>

             <div class=\"col-md-6\">
                 <div class=\"form-group\">
                       ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'row');
        echo "
                 </div>

                 <div class=\"form-group\">
                       ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row', array("attr" => array("class" => "form-control")));
        // line 59
        echo "
                 </div>

                 <div class=\"form-group\">
                     ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qtyType", array()), 'row', array("attr" => array("class" => "form-control")));
        // line 65
        echo "
                 </div>
            </div>

           <div class=\"col-md-12\">

                   <div class=\"col-md-8\">
                           ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'row', array("attr" => array("class" => "form-control")));
        // line 74
        echo "
                   </div>
                       <div class=\"col-md-4\">

                           ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'row', array("attr" => array("class" => "select2-drop-mask")));
        // line 80
        echo "
                           ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "captcha", array()), 'row', array("attr" => array("class" => "form-control")));
        // line 85
        echo "
                       </div>


                       <div class=\"col-md-12\">

                            <input type=\"submit\" style=\"color: #FFF;background-color: #337AB7;play: inline-block;padding: 8px 12px;margin-bottom: 0px;font-size: 14px; font-weight: 400; line-height: 1.42857; text-align: center; white-space: nowrap; vertical-align: middle; cursor: pointer; -moz-user-select: none; background-image: none;border: 12px solid transparent; border-radius: 8px;\" class=\"btn btn-primary btn-lg btn-block\" value=\"GET QUOTATIONS NOW!\" />                  </div>

                            </div>

                       ";
        // line 95
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

          </form>
     </div>
 </div>
          </div>
                </div>
            </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EmailBundle:Email:formEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 95,  185 => 85,  183 => 81,  180 => 80,  178 => 78,  172 => 74,  170 => 72,  161 => 65,  159 => 63,  153 => 59,  151 => 57,  144 => 53,  134 => 46,  127 => 42,  119 => 37,  113 => 34,  109 => 33,  105 => 32,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  69 => 17,  63 => 13,  57 => 12,  48 => 9,  43 => 8,  38 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }
}
