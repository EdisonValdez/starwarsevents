<?php

/* UserBundle:Register:register.html.twig */
class __TwigTemplate_40e4eac02e792fd7834d3637e357d54727d5c08a2083818eeb5693e6f4f418a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/user/css/login.css"), "html", null, true);
        echo "\" />
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<section class=\"login\">
    <article>
        <h1>Register</h1>
        
        <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("user_register");
        echo "\" method=\"POST\" novalidate='novaidate'>
      
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
          
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("label" => "Password"));
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("label" => "Repeat Password"));
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            <hr>
            
            <input type=\"submit\" class=\"btn btn-primary pull-right\" />
        </form>

    </article>
</section>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Register:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  58 => 17,  53 => 15,  47 => 11,  44 => 10,  38 => 7,  32 => 5,  29 => 4,);
    }
}
