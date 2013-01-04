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
        if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
        echo ((($this->getAttribute($_navbar_, "hasOption", array(0 => "inverse"), "method") && $this->getAttribute($_navbar_, "getOption", array(0 => "inverse"), "method"))) ? (" navbar-inverse") : (""));
        if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
        echo ((($this->getAttribute($_navbar_, "hasOption", array(0 => "fixedTop"), "method") && $this->getAttribute($_navbar_, "getOption", array(0 => "fixedTop"), "method"))) ? (" navbar-fixed-top") : (""));
        echo "\">
    <div class=\"navbar-inner\">
        <div class=\"container";
        // line 4
        if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
        echo ((($this->getAttribute($_navbar_, "hasOption", array(0 => "isFluid"), "method") && $this->getAttribute($_navbar_, "getOption", array(0 => "isFluid"), "method"))) ? ("-fluid") : (""));
        echo "\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            ";
        // line 10
        if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
        if ($this->getAttribute($_navbar_, "hasOption", array(0 => "title"), "method")) {
            echo "<a class=\"brand\" href=\"";
            if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($_navbar_, "getOption", array(0 => "titleRoute"), "method")), "html", null, true);
            echo "\">";
            if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_navbar_, "getOption", array(0 => "title"), "method"), "html", null, true);
            echo "</a>";
        }
        // line 11
        echo "            <div class=\"nav-collapse\">
                ";
        // line 12
        if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
        echo (($this->getAttribute($_navbar_, "hasMenu", array(0 => "leftmenu"), "method")) ? ($this->env->getExtension('knp_menu')->render($this->getAttribute($_navbar_, "getMenu", array(0 => "leftmenu"), "method"), array("currentClass" => "active", "ancestorClass" => "active", "allow_safe_labels" => "true"))) : (""));
        echo "
                ";
        // line 13
        if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
        if ($this->getAttribute($_navbar_, "hasFormView", array(0 => "searchform"), "method")) {
            // line 14
            if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
            $context["form_view"] = $this->getAttribute($_navbar_, "getFormView", array(0 => "searchform"), "method");
            // line 15
            if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
            $context["form_type"] = $this->getAttribute($_navbar_, "getFormType", array(0 => "searchform"), "method");
            // line 16
            if (isset($context["form_view"])) { $_form_view_ = $context["form_view"]; } else { $_form_view_ = null; }
            $context["form_attrs"] = $this->getAttribute($this->getAttribute($_form_view_, "vars"), "attr");
            // line 17
            if (isset($context["form_view"])) { $_form_view_ = $context["form_view"]; } else { $_form_view_ = null; }
            $this->env->getExtension('form')->renderer->setTheme($_form_view_, array(0 => $this));
            // line 18
            echo "                    <form class=\"navbar-search pull-";
            if (isset($context["form_attrs"])) { $_form_attrs_ = $context["form_attrs"]; } else { $_form_attrs_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_form_attrs_, "pull", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_form_attrs_, "pull"), "left")) : ("left")), "html", null, true);
            echo "\" method=\"";
            if (isset($context["form_attrs"])) { $_form_attrs_ = $context["form_attrs"]; } else { $_form_attrs_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_form_attrs_, "method", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_form_attrs_, "method"), "post")) : ("post")), "html", null, true);
            echo "\" action=\"";
            if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($_navbar_, "getFormRoute", array(0 => "searchform"), "method")), "html", null, true);
            echo "\">
                    ";
            // line 19
            if (isset($context["form_view"])) { $_form_view_ = $context["form_view"]; } else { $_form_view_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_view_, 'widget');
            echo "
                    </form>
                ";
        }
        // line 22
        echo "                ";
        if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
        echo (($this->getAttribute($_navbar_, "hasMenu", array(0 => "rightmenu"), "method")) ? ($this->env->getExtension('knp_menu')->render($this->getAttribute($_navbar_, "getMenu", array(0 => "rightmenu"), "method"), array("currentClass" => "active", "ancestorClass" => "active", "allow_safe_labels" => "true"))) : (""));
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
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Navbar:navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 31,  18 => 2,  40 => 9,  53 => 15,  139 => 44,  124 => 37,  80 => 19,  75 => 13,  59 => 12,  110 => 28,  98 => 25,  42 => 7,  175 => 61,  158 => 10,  127 => 69,  117 => 61,  113 => 59,  84 => 16,  21 => 1,  453 => 145,  447 => 144,  442 => 141,  434 => 138,  430 => 136,  426 => 134,  416 => 132,  409 => 131,  406 => 130,  401 => 129,  395 => 127,  392 => 126,  387 => 125,  377 => 117,  373 => 115,  370 => 114,  364 => 113,  359 => 112,  354 => 109,  348 => 105,  345 => 104,  341 => 103,  338 => 102,  333 => 99,  327 => 95,  324 => 94,  320 => 93,  317 => 92,  312 => 89,  298 => 88,  294 => 86,  279 => 84,  269 => 82,  266 => 81,  260 => 79,  255 => 78,  247 => 75,  241 => 72,  237 => 71,  220 => 69,  186 => 61,  183 => 60,  159 => 58,  152 => 55,  144 => 51,  141 => 50,  132 => 71,  129 => 42,  120 => 37,  70 => 12,  74 => 17,  52 => 22,  49 => 11,  169 => 58,  161 => 11,  157 => 53,  150 => 5,  136 => 44,  121 => 42,  115 => 32,  109 => 22,  99 => 34,  96 => 33,  81 => 15,  73 => 20,  69 => 16,  62 => 20,  41 => 7,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 70,  218 => 80,  216 => 79,  213 => 67,  210 => 77,  207 => 76,  198 => 71,  192 => 65,  177 => 59,  174 => 60,  171 => 14,  164 => 55,  160 => 54,  155 => 40,  153 => 6,  149 => 48,  146 => 47,  143 => 46,  137 => 34,  126 => 43,  107 => 31,  85 => 28,  82 => 21,  55 => 9,  36 => 6,  27 => 33,  123 => 24,  116 => 36,  108 => 20,  95 => 18,  90 => 18,  87 => 17,  83 => 14,  67 => 11,  45 => 8,  26 => 4,  112 => 34,  102 => 19,  78 => 14,  63 => 23,  61 => 17,  56 => 10,  44 => 12,  38 => 15,  32 => 11,  34 => 1,  48 => 21,  20 => 1,  22 => 29,  30 => 34,  25 => 30,  23 => 3,  17 => 1,  92 => 22,  86 => 21,  77 => 26,  46 => 4,  37 => 2,  33 => 8,  29 => 3,  24 => 3,  19 => 1,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 62,  172 => 56,  168 => 13,  165 => 53,  156 => 48,  151 => 45,  148 => 38,  145 => 43,  142 => 42,  134 => 35,  131 => 34,  128 => 31,  122 => 30,  119 => 63,  111 => 30,  106 => 56,  103 => 26,  100 => 54,  97 => 53,  93 => 24,  89 => 16,  79 => 12,  68 => 20,  64 => 15,  60 => 11,  57 => 15,  54 => 12,  50 => 9,  47 => 9,  43 => 6,  39 => 9,  35 => 5,  31 => 2,  28 => 3,);
    }
}
