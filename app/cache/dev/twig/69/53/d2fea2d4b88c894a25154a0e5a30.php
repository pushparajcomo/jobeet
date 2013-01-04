<?php

/* MopaBootstrapBundle:Navbar:navbar.html.twig */
class __TwigTemplate_6953d2fea2d4b88c894a25154a0e5a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'form_widget' => array($this, 'block_form_widget'),
            'field_row' => array($this, 'block_field_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('navbar', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('form_widget', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('field_row', $context, $blocks);
    }

    // line 1
    public function block_navbar($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"navbar";
        echo ((($this->getAttribute($this->getContext($context, "navbar"), "hasOption", array(0 => "inverse"), "method") && $this->getAttribute($this->getContext($context, "navbar"), "getOption", array(0 => "inverse"), "method"))) ? (" navbar-inverse") : (""));
        echo ((($this->getAttribute($this->getContext($context, "navbar"), "hasOption", array(0 => "fixedTop"), "method") && $this->getAttribute($this->getContext($context, "navbar"), "getOption", array(0 => "fixedTop"), "method"))) ? (" navbar-fixed-top") : (""));
        echo "\">
    <div class=\"navbar-inner\">
        <div class=\"container";
        // line 4
        echo ((($this->getAttribute($this->getContext($context, "navbar"), "hasOption", array(0 => "isFluid"), "method") && $this->getAttribute($this->getContext($context, "navbar"), "getOption", array(0 => "isFluid"), "method"))) ? ("-fluid") : (""));
        echo "\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            ";
        // line 10
        if ($this->getAttribute($this->getContext($context, "navbar"), "hasOption", array(0 => "title"), "method")) {
            echo "<a class=\"brand\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "navbar"), "getOption", array(0 => "titleRoute"), "method")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "navbar"), "getOption", array(0 => "title"), "method"), "html", null, true);
            echo "</a>";
        }
        // line 11
        echo "            <div class=\"nav-collapse\">
                ";
        // line 12
        echo (($this->getAttribute($this->getContext($context, "navbar"), "hasMenu", array(0 => "leftmenu"), "method")) ? ($this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "navbar"), "getMenu", array(0 => "leftmenu"), "method"), array("currentClass" => "active", "ancestorClass" => "active", "allow_safe_labels" => "true"))) : (""));
        echo "
                ";
        // line 13
        if ($this->getAttribute($this->getContext($context, "navbar"), "hasFormView", array(0 => "searchform"), "method")) {
            // line 14
            $context["form_view"] = $this->getAttribute($this->getContext($context, "navbar"), "getFormView", array(0 => "searchform"), "method");
            // line 15
            $context["form_type"] = $this->getAttribute($this->getContext($context, "navbar"), "getFormType", array(0 => "searchform"), "method");
            // line 16
            $context["form_attrs"] = $this->getAttribute($this->getAttribute($this->getContext($context, "form_view"), "vars"), "attr");
            // line 17
            $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form_view"), array(0 => $this));
            // line 18
            echo "                    <form class=\"navbar-search pull-";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "form_attrs", true), "pull", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "form_attrs", true), "pull"), "left")) : ("left")), "html", null, true);
            echo "\" method=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "form_attrs", true), "method", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "form_attrs", true), "method"), "post")) : ("post")), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "navbar"), "getFormRoute", array(0 => "searchform"), "method")), "html", null, true);
            echo "\">
                    ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form_view"), 'widget');
            echo "
                    </form>
                ";
        }
        // line 22
        echo "                ";
        echo (($this->getAttribute($this->getContext($context, "navbar"), "hasMenu", array(0 => "rightmenu"), "method")) ? ($this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "navbar"), "getMenu", array(0 => "rightmenu"), "method"), array("currentClass" => "active", "ancestorClass" => "active", "allow_safe_labels" => "true"))) : (""));
        echo "
            </div>

        </div>
    </div>
</div>
";
    }

    // line 30
    public function block_form_widget($context, array $blocks = array())
    {
        // line 31
        $this->displayBlock("field_rows", $context, $blocks);
        echo "
";
    }

    // line 34
    public function block_field_row($context, array $blocks = array())
    {
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Navbar:navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 31,  18 => 2,  75 => 19,  54 => 11,  97 => 25,  88 => 22,  60 => 17,  63 => 21,  51 => 15,  171 => 61,  167 => 14,  164 => 13,  154 => 10,  146 => 5,  115 => 63,  95 => 53,  84 => 48,  38 => 15,  21 => 1,  405 => 145,  399 => 144,  394 => 141,  386 => 138,  382 => 136,  378 => 134,  369 => 132,  365 => 131,  362 => 130,  360 => 129,  355 => 127,  352 => 126,  348 => 125,  338 => 117,  334 => 115,  332 => 114,  327 => 113,  323 => 112,  318 => 109,  312 => 105,  309 => 104,  306 => 103,  304 => 102,  299 => 99,  293 => 95,  290 => 94,  287 => 93,  285 => 92,  280 => 89,  266 => 88,  262 => 86,  247 => 84,  239 => 82,  237 => 81,  232 => 79,  228 => 78,  221 => 75,  215 => 72,  211 => 71,  202 => 70,  200 => 69,  177 => 66,  174 => 62,  168 => 61,  166 => 60,  144 => 40,  140 => 56,  126 => 44,  123 => 32,  105 => 30,  36 => 6,  142 => 53,  139 => 51,  133 => 47,  124 => 45,  107 => 41,  101 => 30,  65 => 15,  59 => 20,  45 => 9,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 67,  192 => 79,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 11,  152 => 59,  145 => 55,  130 => 48,  125 => 33,  119 => 40,  116 => 44,  112 => 42,  102 => 36,  98 => 54,  76 => 17,  73 => 23,  69 => 17,  32 => 11,  103 => 28,  91 => 28,  74 => 16,  70 => 14,  66 => 16,  56 => 22,  25 => 30,  89 => 50,  82 => 28,  42 => 8,  26 => 4,  22 => 29,  23 => 3,  17 => 1,  92 => 39,  86 => 24,  77 => 17,  57 => 12,  29 => 4,  24 => 3,  19 => 1,  68 => 13,  61 => 11,  44 => 4,  20 => 1,  161 => 59,  153 => 58,  150 => 49,  147 => 48,  143 => 46,  137 => 38,  129 => 51,  121 => 41,  118 => 40,  113 => 37,  104 => 36,  99 => 32,  94 => 26,  81 => 22,  78 => 18,  72 => 15,  64 => 12,  53 => 10,  50 => 15,  48 => 9,  41 => 7,  39 => 15,  35 => 5,  33 => 10,  30 => 34,  27 => 33,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 60,  151 => 54,  149 => 6,  141 => 54,  136 => 51,  134 => 50,  131 => 43,  128 => 34,  120 => 31,  117 => 35,  114 => 34,  109 => 59,  106 => 37,  100 => 55,  96 => 31,  93 => 22,  90 => 25,  87 => 19,  83 => 23,  79 => 40,  71 => 18,  62 => 15,  58 => 23,  55 => 11,  52 => 22,  49 => 11,  46 => 8,  43 => 8,  40 => 9,  37 => 2,  34 => 1,  31 => 8,  28 => 3,);
    }
}
