<?php

/* EmailBundle:Email:formEmail.html.twig */
class __TwigTemplate_5b8111f3275207468a39d694cec96b14fe6f03477d48161e05d9cb90f5cd16ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EmailBundle::layout.html.twig");

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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 6
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 7
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                ";
                // line 8
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <div class=\"container\">
        <div class=\"site-index\">
            <div class=\"body-content\">
                <div align=\"center\"><h1>QUOTE NOW WHATEVER YOU NEED</h1>
                    <H2> <i>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</i>, Suppliers are waiting your request!</H2>
                </div>
                <br>
                <br>

     <div class=\"row\" style=\"background: #fff; padding:20px; \">
        <div class=\"col-md-12\">
          <div id=\"fullform\">

         <form role=\"form\" action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("email_formEmail");
        echo "\" enctype=\"multipart/form-data\" method=\"POST\">
             ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"#{\$fa-css-prefix}-angle-down\"> ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</div>
             ";
        // line 29
        echo "             ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row', array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())));
        echo "
             ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("value" => "evaldez@bullatickets.com"));
        echo "
             ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailTo", array()), 'row', array("value" => "iancasillasbuffon@gmail.com"));
        echo "
             ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tracking", array()), 'row', array("value" => twig_random($this->env)));
        echo "
             ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quotationSender", array()), 'row', array("value" => "evaldez@bullatickets.com"));
        echo "
             <div class=\"col-md-6\">
             <div class=\"form-group\">
                   ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'row');
        echo "


             </div>
             <div class=\"form-group\">
                  ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "product", array()), 'row');
        echo "
             </div>

                 <div class=\"form-group\">
                     ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity", array()), 'row');
        echo "

                 </div>
            </div>

             <div class=\"col-md-6\">
                 <div class=\"form-group\">
                       ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'row');
        echo "
                 </div>

                 <div class=\"form-group\">
                       ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "
                 </div>

                 <div class=\"form-group\">

                     ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qtyType", array()), 'row', array("attr" => array("class" => "form-control")));
        // line 63
        echo "

                 </div>
            </div>

           <div class=\"col-md-12\">

                   <div class=\"col-md-8\">
                           ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'row', array("attr" => array("class" => "form-control")));
        // line 73
        echo "
                   </div>
                       <div class=\"col-md-4\">
                           ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "captcha", array()), 'row', array("attr" => array("class" => "form-control")));
        // line 78
        echo "
                       </div>


                       <div class=\"col-md-12\">

                            <input type=\"submit\" style=\"color: #FFF;background-color: #337AB7;play: inline-block;padding: 8px 12px;margin-bottom: 0px;font-size: 14px; font-weight: 400; line-height: 1.42857; text-align: center; white-space: nowrap; vertical-align: middle; cursor: pointer; -moz-user-select: none; background-image: none;border: 12px solid transparent; border-radius: 8px;\" class=\"btn btn-primary btn-lg btn-block\" value=\"GET QUOTATIONS NOW!\" />                  </div>

                            </div>

                       ";
        // line 88
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
        return array (  189 => 88,  177 => 78,  175 => 76,  170 => 73,  168 => 71,  158 => 63,  156 => 61,  148 => 56,  141 => 52,  131 => 45,  124 => 41,  116 => 36,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  93 => 29,  89 => 27,  85 => 26,  81 => 25,  69 => 16,  63 => 12,  57 => 11,  48 => 8,  43 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
