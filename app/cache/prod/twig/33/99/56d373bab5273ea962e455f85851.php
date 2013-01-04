<?php

/* MopaBootstrapBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_339956d373bab5273ea962e455f85851 extends Twig_Template
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
        // line 1
        $context["link"] = "";
        // line 2
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_options_);
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            // line 3
            echo "    ";
            if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            $context["link"] = (((($_link_ . " ") . $_attr_) . "=") . $_value_);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 5
        echo "
<a ";
        // line 6
        if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
        echo twig_escape_filter($this->env, $_link_, "html", null, true);
        echo ">";
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 34,  91 => 32,  118 => 13,  72 => 6,  58 => 5,  125 => 31,  18 => 2,  40 => 9,  53 => 15,  139 => 44,  124 => 37,  80 => 19,  75 => 7,  59 => 12,  110 => 28,  98 => 25,  42 => 7,  175 => 61,  158 => 10,  127 => 69,  117 => 61,  113 => 59,  84 => 16,  21 => 1,  453 => 145,  447 => 144,  442 => 141,  434 => 138,  430 => 136,  426 => 134,  416 => 132,  409 => 131,  406 => 130,  401 => 129,  395 => 127,  392 => 126,  387 => 125,  377 => 117,  373 => 115,  370 => 114,  364 => 113,  359 => 112,  354 => 109,  348 => 105,  345 => 104,  341 => 103,  338 => 102,  333 => 99,  327 => 95,  324 => 94,  320 => 93,  317 => 92,  312 => 89,  298 => 88,  294 => 86,  279 => 84,  269 => 82,  266 => 81,  260 => 79,  255 => 78,  247 => 75,  241 => 72,  237 => 71,  220 => 69,  186 => 61,  183 => 60,  159 => 58,  152 => 55,  144 => 51,  141 => 50,  132 => 71,  129 => 42,  120 => 37,  70 => 12,  74 => 17,  52 => 22,  49 => 5,  169 => 58,  161 => 11,  157 => 53,  150 => 5,  136 => 44,  121 => 42,  115 => 32,  109 => 22,  99 => 34,  96 => 33,  81 => 15,  73 => 20,  69 => 22,  62 => 20,  41 => 7,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 70,  218 => 80,  216 => 79,  213 => 67,  210 => 77,  207 => 76,  198 => 71,  192 => 65,  177 => 59,  174 => 60,  171 => 14,  164 => 55,  160 => 54,  155 => 40,  153 => 6,  149 => 48,  146 => 47,  143 => 46,  137 => 34,  126 => 43,  107 => 31,  85 => 28,  82 => 21,  55 => 9,  36 => 6,  27 => 33,  123 => 24,  116 => 36,  108 => 20,  95 => 18,  90 => 18,  87 => 17,  83 => 23,  67 => 11,  45 => 8,  26 => 1,  112 => 12,  102 => 19,  78 => 14,  63 => 23,  61 => 17,  56 => 10,  44 => 12,  38 => 13,  32 => 11,  34 => 5,  48 => 21,  20 => 2,  22 => 29,  30 => 2,  25 => 4,  23 => 3,  17 => 1,  92 => 22,  86 => 25,  77 => 26,  46 => 20,  37 => 6,  33 => 8,  29 => 6,  24 => 3,  19 => 2,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 62,  172 => 56,  168 => 13,  165 => 53,  156 => 48,  151 => 45,  148 => 38,  145 => 43,  142 => 42,  134 => 35,  131 => 34,  128 => 31,  122 => 30,  119 => 63,  111 => 30,  106 => 56,  103 => 26,  100 => 41,  97 => 53,  93 => 24,  89 => 16,  79 => 12,  68 => 20,  64 => 21,  60 => 11,  57 => 7,  54 => 12,  50 => 9,  47 => 9,  43 => 19,  39 => 2,  35 => 3,  31 => 2,  28 => 3,);
    }
}
