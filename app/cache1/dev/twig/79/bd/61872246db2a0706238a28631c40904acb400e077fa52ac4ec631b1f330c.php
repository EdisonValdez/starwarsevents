<?php

/* ::form_theme.html.twig */
class __TwigTemplate_79bd61872246db2a0706238a28631c40904acb400e077fa52ac4ec631b1f330c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("form_div_layout.html.twig");
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form_label"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form_label" is not defined in trait "form_div_layout.html.twig".'));
        }

        $_trait_0_blocks["base_form_label"] = $_trait_0_blocks["form_label"]; unset($_trait_0_blocks["form_label"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'form_label' => array($this, 'block_form_label'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_errors', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('form_label', $context, $blocks);
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "    <div class=\"form-group ";
        echo (((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) ? ("has-error") : (""));
        echo "\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        ";
        // line 10
        if ((array_key_exists("help", $context) && (isset($context["help"]) ? $context["help"] : $this->getContext($context, "help")))) {
            // line 11
            echo "            <div class=\"help-block\">";
            echo twig_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : $this->getContext($context, "help")), "html", null, true);
            echo "</div>
        ";
        }
        // line 13
        echo "    </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_form_errors($context, array $blocks = array())
    {
        // line 18
        echo "
    ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 20
            echo "    <ul class=\"help-block\">
        ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 22
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </ul>
    ";
        }
    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 30
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 31
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
";
    }

    // line 34
    public function block_form_label($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock("base_form_label", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "::form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  164 => 37,  161 => 36,  158 => 35,  155 => 34,  140 => 31,  137 => 30,  134 => 29,  131 => 28,  125 => 24,  116 => 22,  112 => 21,  109 => 20,  107 => 19,  104 => 18,  101 => 17,  95 => 13,  89 => 11,  87 => 10,  82 => 8,  78 => 7,  74 => 6,  69 => 5,  66 => 4,  63 => 3,  59 => 34,  56 => 33,  54 => 28,  51 => 27,  49 => 17,  46 => 16,  44 => 3,  41 => 2,  14 => 1,);
    }
}
