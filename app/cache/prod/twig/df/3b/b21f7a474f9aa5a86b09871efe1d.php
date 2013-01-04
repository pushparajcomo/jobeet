<?php

/* MopaBootstrapBundle::icons.html.twig */
class __TwigTemplate_df3bb21f7a474f9aa5a86b09871efe1d extends Twig_Template
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
    }

    // line 1
    public function geticon($name = null, $inverted = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $name,
            "inverted" => $inverted,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<i class=\"icon-";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            if (isset($context["inverted"])) { $_inverted_ = $context["inverted"]; } else { $_inverted_ = null; }
            if (((array_key_exists("inverted", $context)) ? (_twig_default_filter($_inverted_, false)) : (false))) {
                echo " icon-white";
            }
            echo "\"></i>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  53 => 15,  139 => 44,  124 => 37,  80 => 19,  75 => 18,  59 => 12,  110 => 28,  98 => 25,  42 => 7,  175 => 61,  158 => 10,  127 => 69,  117 => 61,  113 => 59,  84 => 48,  21 => 1,  453 => 145,  447 => 144,  442 => 141,  434 => 138,  430 => 136,  426 => 134,  416 => 132,  409 => 131,  406 => 130,  401 => 129,  395 => 127,  392 => 126,  387 => 125,  377 => 117,  373 => 115,  370 => 114,  364 => 113,  359 => 112,  354 => 109,  348 => 105,  345 => 104,  341 => 103,  338 => 102,  333 => 99,  327 => 95,  324 => 94,  320 => 93,  317 => 92,  312 => 89,  298 => 88,  294 => 86,  279 => 84,  269 => 82,  266 => 81,  260 => 79,  255 => 78,  247 => 75,  241 => 72,  237 => 71,  220 => 69,  186 => 61,  183 => 60,  159 => 58,  152 => 55,  144 => 51,  141 => 50,  132 => 71,  129 => 42,  120 => 37,  70 => 15,  74 => 17,  52 => 22,  49 => 11,  169 => 58,  161 => 11,  157 => 53,  150 => 5,  136 => 44,  121 => 42,  115 => 32,  109 => 32,  99 => 34,  96 => 33,  81 => 24,  73 => 20,  69 => 16,  62 => 20,  41 => 7,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 70,  218 => 80,  216 => 79,  213 => 67,  210 => 77,  207 => 76,  198 => 71,  192 => 65,  177 => 59,  174 => 60,  171 => 14,  164 => 55,  160 => 54,  155 => 40,  153 => 6,  149 => 48,  146 => 47,  143 => 46,  137 => 34,  126 => 43,  107 => 31,  85 => 28,  82 => 21,  55 => 9,  36 => 6,  27 => 4,  123 => 24,  116 => 36,  108 => 20,  95 => 18,  90 => 23,  87 => 22,  83 => 14,  67 => 21,  45 => 8,  26 => 4,  112 => 34,  102 => 19,  78 => 23,  63 => 23,  61 => 17,  56 => 11,  44 => 12,  38 => 15,  32 => 11,  34 => 6,  48 => 21,  20 => 2,  22 => 4,  30 => 5,  25 => 3,  23 => 3,  17 => 1,  92 => 22,  86 => 21,  77 => 26,  46 => 7,  37 => 8,  33 => 10,  29 => 3,  24 => 6,  19 => 1,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 62,  172 => 56,  168 => 13,  165 => 53,  156 => 48,  151 => 45,  148 => 38,  145 => 43,  142 => 42,  134 => 33,  131 => 40,  128 => 31,  122 => 32,  119 => 63,  111 => 30,  106 => 56,  103 => 26,  100 => 54,  97 => 53,  93 => 24,  89 => 16,  79 => 12,  68 => 20,  64 => 15,  60 => 11,  57 => 15,  54 => 12,  50 => 9,  47 => 9,  43 => 6,  39 => 9,  35 => 5,  31 => 2,  28 => 3,);
    }
}
