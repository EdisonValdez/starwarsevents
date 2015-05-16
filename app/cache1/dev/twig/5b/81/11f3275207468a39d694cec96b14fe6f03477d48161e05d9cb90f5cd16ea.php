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
                    <H2> <i>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</i>, Suppliers are waiting your request!</H2>
                </div>
                <br>
                <br>

     <div class=\"row\">
        <div class=\"col-md-12\">
          <div id=\"fullform\">

         <form action=\"\" method=\"POST\">
          <div class=\"col-md-6\">
             <div class=\"form-group\">
             ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
             </div>
             ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row', array("label" => "Product"));
        // line 24
        echo "
             <div class=\"form-group\">
             ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'row', array("label" => "Category"));
        // line 28
        echo "
             </div>
             <div class=\"form-group\">
                  ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity", array()), 'row', array("label" => "Quantity"));
        // line 33
        echo "
             </div>

          </div>

             <div class=\"col-md-6\">
                 <div class=\"form-group\">
                 ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                 </div>
                 <div class=\"form-group\">
                 ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'row', array("label" => "Country"));
        // line 45
        echo "
                 </div>
                 <div class=\"form-group\">
                 ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'row', array("label" => "City"));
        // line 50
        echo "
                 </div>
                 <div class=\"form-group\">
                 ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qty_type", array()), 'row', array("label" => "Quantity Type"));
        // line 55
        echo "
                 </div>
            </div>


                 <div class=\"col-md-6\">
                     <div class=\"form-group\">
                         ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row', array("label" => "Attach a Picture or File"));
        // line 64
        echo "
                     </div>
                 </div>
                 <div class=\"col-md-6\">
                     <div class=\"form-group\">
                     ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'row', array("label" => "Detailed Description"));
        // line 71
        echo "
                     </div>
                     <div class=\"form-group\">
                     ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                     </div>
                 </div>

   <input type=\"submit\"  class=\"login-button pull-right\" value=\"GET QUOTATIONS NOW!\" />
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
        return array (  128 => 74,  123 => 71,  121 => 69,  114 => 64,  112 => 62,  103 => 55,  101 => 53,  96 => 50,  94 => 48,  89 => 45,  87 => 43,  81 => 40,  72 => 33,  70 => 31,  65 => 28,  63 => 26,  59 => 24,  57 => 22,  52 => 20,  37 => 8,  31 => 4,  28 => 3,);
    }
}
