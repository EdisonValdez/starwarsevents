<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_7086be09ebf0d0f03147cbebacbcabb3010b90b7e76c0cc9a91427aa554778c5 extends Twig_Template
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

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/user/css/login.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <section class=\"login\">
        <article>
            ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "                <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array())), "html", null, true);
            echo "</div>
            ";
        }
        // line 14
        echo "
            <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\"  value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" class=\"form-control\"  name=\"_password\" />

                ";
        // line 27
        echo "<hr />
                Remember Me: <input type=\"checkbox\" name=\"_remember_me\" /> 
                <button class=\"btn btn-primary pull-right\" type=\"submit\">login</button>
                <br><br><br>
                <a href=\"http://localhost:8000/register\" targetr=\"_blank\">Or Register Here</a>
            </form>
        </article>
    </section>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 27,  66 => 17,  61 => 15,  58 => 14,  52 => 12,  50 => 11,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,);
    }
}
