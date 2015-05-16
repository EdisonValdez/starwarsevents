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
        echo "    <div class=\"container\">
        <div class=\"site-index\">
            <div class=\"body-content\">

                <div align=\"center\"><h1>QUOTE NOW WHATEVER YOU NEED</h1>
                    <H2>Suppliers are waiting your request!</H2>
                </div><br><br>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div id=\"fullform\">

         <form action=\"\" method=\"POST\">
             <div class=\"col-md-6\">
                 <div class=\"form-group\">
             ";
        // line 19
        echo "             ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                 </div>
             ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
                 <div class=\"form-group\">
             ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'row');
        echo "
                </div>
                 <div class=\"form-group\">
             ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subcategory", array()), 'row');
        echo "
                 </div>
             </div>

             <div class=\"col-md-6\">
                 ";
        // line 32
        echo "
                 ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                 <div class=\"form-group\">
                 ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'row');
        echo "
                 </div>
                 <div class=\"form-group\">
                 ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'row');
        echo "
                 </div>
                 <div class=\"form-group\">
                 ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity", array()), 'row');
        echo "
                 </div>
                 <div class=\"form-group\">
                 ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qty_type", array()), 'row');
        echo "
                 </div>


             </div>

             <div class=\"row\">
                 <div class=\"col-md-12\">
                     <div class=\"form-group\">
                     ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'row');
        echo "

                     </div>
                     <div class=\"form-group\">
                     ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                         </div>
                 </div>
             </div>
   <input type=\"submit\"  class=\"btn-bg pull-right\" value=\"GET QUOTATIONS NOW!\" />

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
        return array (  117 => 57,  110 => 53,  98 => 44,  92 => 41,  86 => 38,  80 => 35,  75 => 33,  72 => 32,  64 => 26,  58 => 23,  53 => 21,  47 => 19,  31 => 4,  28 => 3,);
    }
}
