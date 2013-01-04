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
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, ((((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, false)) : (false))) ? (("badge-" . $_type_)) : ("")), "html", null, true);
            echo "\">";
            if (isset($context["use_raw"])) { $_use_raw_ = $context["use_raw"]; } else { $_use_raw_ = null; }
            if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
            echo twig_escape_filter($this->env, ((((array_key_exists("use_raw", $context)) ? (_twig_default_filter($_use_raw_, false)) : (false))) ? ($_text_) : ($_text_)), "html", null, true);
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
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            $context["tag"] = ((((array_key_exists("block", $context)) ? (_twig_default_filter($_block_, false)) : (false))) ? ("div") : ("span"));
            // line 7
            echo "<";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $_tag_, "html", null, true);
            echo " class=\"label ";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, ((((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, false)) : (false))) ? (("label-" . $_type_)) : ("")), "html", null, true);
            echo "\">";
            if (isset($context["use_raw"])) { $_use_raw_ = $context["use_raw"]; } else { $_use_raw_ = null; }
            if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
            echo twig_escape_filter($this->env, ((((array_key_exists("use_raw", $context)) ? (_twig_default_filter($_use_raw_, false)) : (false))) ? ($_text_) : ($_text_)), "html", null, true);
            echo "</";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $_tag_, "html", null, true);
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
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($_class_, "")) : ("")), "html", null, true);
            echo "\">
    <div class=\"bar\" style=\"width: ";
            // line 13
            if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter($_width_, 0)) : (0)), "html", null, true);
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
        return array (  118 => 13,  72 => 6,  58 => 5,  125 => 31,  18 => 2,  40 => 9,  53 => 15,  139 => 44,  124 => 37,  80 => 19,  75 => 7,  59 => 12,  110 => 28,  98 => 25,  42 => 7,  175 => 61,  158 => 10,  127 => 69,  117 => 61,  113 => 59,  84 => 16,  21 => 1,  453 => 145,  447 => 144,  442 => 141,  434 => 138,  430 => 136,  426 => 134,  416 => 132,  409 => 131,  406 => 130,  401 => 129,  395 => 127,  392 => 126,  387 => 125,  377 => 117,  373 => 115,  370 => 114,  364 => 113,  359 => 112,  354 => 109,  348 => 105,  345 => 104,  341 => 103,  338 => 102,  333 => 99,  327 => 95,  324 => 94,  320 => 93,  317 => 92,  312 => 89,  298 => 88,  294 => 86,  279 => 84,  269 => 82,  266 => 81,  260 => 79,  255 => 78,  247 => 75,  241 => 72,  237 => 71,  220 => 69,  186 => 61,  183 => 60,  159 => 58,  152 => 55,  144 => 51,  141 => 50,  132 => 71,  129 => 42,  120 => 37,  70 => 12,  74 => 17,  52 => 22,  49 => 11,  169 => 58,  161 => 11,  157 => 53,  150 => 5,  136 => 44,  121 => 42,  115 => 32,  109 => 22,  99 => 34,  96 => 33,  81 => 15,  73 => 20,  69 => 16,  62 => 20,  41 => 7,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 70,  218 => 80,  216 => 79,  213 => 67,  210 => 77,  207 => 76,  198 => 71,  192 => 65,  177 => 59,  174 => 60,  171 => 14,  164 => 55,  160 => 54,  155 => 40,  153 => 6,  149 => 48,  146 => 47,  143 => 46,  137 => 34,  126 => 43,  107 => 31,  85 => 28,  82 => 21,  55 => 9,  36 => 6,  27 => 33,  123 => 24,  116 => 36,  108 => 20,  95 => 18,  90 => 18,  87 => 17,  83 => 14,  67 => 11,  45 => 8,  26 => 1,  112 => 12,  102 => 19,  78 => 14,  63 => 23,  61 => 17,  56 => 10,  44 => 12,  38 => 15,  32 => 11,  34 => 1,  48 => 21,  20 => 9,  22 => 29,  30 => 34,  25 => 30,  23 => 3,  17 => 4,  92 => 22,  86 => 21,  77 => 26,  46 => 4,  37 => 2,  33 => 8,  29 => 3,  24 => 3,  19 => 1,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 62,  172 => 56,  168 => 13,  165 => 53,  156 => 48,  151 => 45,  148 => 38,  145 => 43,  142 => 42,  134 => 35,  131 => 34,  128 => 31,  122 => 30,  119 => 63,  111 => 30,  106 => 56,  103 => 26,  100 => 11,  97 => 53,  93 => 24,  89 => 16,  79 => 12,  68 => 20,  64 => 15,  60 => 11,  57 => 15,  54 => 12,  50 => 9,  47 => 9,  43 => 6,  39 => 2,  35 => 5,  31 => 2,  28 => 3,);
    }
}
