<?php

/* MopaBootstrapBundle::macros.html.twig */
class __TwigTemplate_e1b714a2ea62d2b3111a4542498df2fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 9
        echo "

";
    }

    // line 1
    public function getbadge($text = null, $type = null, $use_raw = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $text,
            "type" => $type,
            "use_raw" => $use_raw,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<span class=\"badge ";
            echo twig_escape_filter($this->env, ((((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), false)) : (false))) ? (("badge-" . $this->getContext($context, "type"))) : ("")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((array_key_exists("use_raw", $context)) ? (_twig_default_filter($this->getContext($context, "use_raw"), false)) : (false))) ? ($this->getContext($context, "text")) : ($this->getContext($context, "text"))), "html", null, true);
            echo "</span>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 5
    public function getlabel($text = null, $type = null, $use_raw = null, $block = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $text,
            "type" => $type,
            "use_raw" => $use_raw,
            "block" => $block,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            $context["tag"] = ((((array_key_exists("block", $context)) ? (_twig_default_filter($this->getContext($context, "block"), false)) : (false))) ? ("div") : ("span"));
            // line 7
            echo "<";
            echo twig_escape_filter($this->env, $this->getContext($context, "tag"), "html", null, true);
            echo " class=\"label ";
            echo twig_escape_filter($this->env, ((((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), false)) : (false))) ? (("label-" . $this->getContext($context, "type"))) : ("")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((array_key_exists("use_raw", $context)) ? (_twig_default_filter($this->getContext($context, "use_raw"), false)) : (false))) ? ($this->getContext($context, "text")) : ($this->getContext($context, "text"))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, $this->getContext($context, "tag"), "html", null, true);
            echo ">
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 11
    public function getprogressBar($class = null, $width = null)
    {
        $context = $this->env->mergeGlobals(array(
            "class" => $class,
            "width" => $width,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            echo "<div class=\"progress ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($this->getContext($context, "class"), "")) : ("")), "html", null, true);
            echo "\">
    <div class=\"bar\" style=\"width: ";
            // line 13
            echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter($this->getContext($context, "width"), 0)) : (0)), "html", null, true);
            echo "%;\"></div>
</div>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 13,  18 => 2,  75 => 19,  54 => 11,  97 => 25,  88 => 22,  60 => 17,  63 => 21,  51 => 15,  171 => 61,  167 => 14,  164 => 13,  154 => 10,  146 => 5,  115 => 63,  95 => 53,  84 => 48,  38 => 15,  21 => 1,  405 => 145,  399 => 144,  394 => 141,  386 => 138,  382 => 136,  378 => 134,  369 => 132,  365 => 131,  362 => 130,  360 => 129,  355 => 127,  352 => 126,  348 => 125,  338 => 117,  334 => 115,  332 => 114,  327 => 113,  323 => 112,  318 => 109,  312 => 105,  309 => 104,  306 => 103,  304 => 102,  299 => 99,  293 => 95,  290 => 94,  287 => 93,  285 => 92,  280 => 89,  266 => 88,  262 => 86,  247 => 84,  239 => 82,  237 => 81,  232 => 79,  228 => 78,  221 => 75,  215 => 72,  211 => 71,  202 => 70,  200 => 69,  177 => 66,  174 => 62,  168 => 61,  166 => 60,  144 => 40,  140 => 56,  126 => 44,  123 => 32,  105 => 30,  36 => 6,  142 => 53,  139 => 51,  133 => 47,  124 => 45,  107 => 41,  101 => 30,  65 => 15,  59 => 20,  45 => 9,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 67,  192 => 79,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 11,  152 => 59,  145 => 55,  130 => 48,  125 => 33,  119 => 40,  116 => 44,  112 => 42,  102 => 36,  98 => 54,  76 => 17,  73 => 23,  69 => 6,  32 => 11,  103 => 12,  91 => 11,  74 => 16,  70 => 14,  66 => 16,  56 => 22,  25 => 30,  89 => 50,  82 => 28,  42 => 8,  26 => 1,  22 => 29,  23 => 3,  17 => 4,  92 => 39,  86 => 24,  77 => 17,  57 => 12,  29 => 4,  24 => 3,  19 => 1,  68 => 13,  61 => 11,  44 => 4,  20 => 9,  161 => 59,  153 => 58,  150 => 49,  147 => 48,  143 => 46,  137 => 38,  129 => 51,  121 => 41,  118 => 40,  113 => 37,  104 => 36,  99 => 32,  94 => 26,  81 => 22,  78 => 18,  72 => 15,  64 => 12,  53 => 10,  50 => 15,  48 => 9,  41 => 7,  39 => 2,  35 => 5,  33 => 10,  30 => 34,  27 => 33,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 60,  151 => 54,  149 => 6,  141 => 54,  136 => 51,  134 => 50,  131 => 43,  128 => 34,  120 => 31,  117 => 35,  114 => 34,  109 => 59,  106 => 37,  100 => 55,  96 => 31,  93 => 22,  90 => 25,  87 => 19,  83 => 23,  79 => 40,  71 => 7,  62 => 15,  58 => 23,  55 => 5,  52 => 22,  49 => 11,  46 => 8,  43 => 8,  40 => 9,  37 => 2,  34 => 1,  31 => 8,  28 => 3,);
    }
}
