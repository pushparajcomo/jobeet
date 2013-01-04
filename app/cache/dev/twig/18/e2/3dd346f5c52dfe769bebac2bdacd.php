<?php

/* MopaBootstrapBundle:Pagination:sliding.html.twig */
class __TwigTemplate_18e23dd346f5c52dfe769bebac2bdacd extends Twig_Template
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
        if (($this->getContext($context, "pageCount") > 1)) {
            // line 2
            echo "    <div class=\"pagination\">
        ";
            // line 3
            $context["item"] = "MopaBootstrapBundle:Pagination:sliding_item.html.twig";
            // line 4
            echo "
        <ul>
            ";
            // line 6
            $template = $this->env->resolveTemplate($this->getContext($context, "item"));
            $template->display(array_merge($context, array("name" => "first", "text" => "«", "page" => ((array_key_exists("first", $context)) ? ($this->getContext($context, "first")) : (null)), "clickable" => (array_key_exists("first", $context) && ($this->getContext($context, "current") != $this->getContext($context, "first"))))));
            // line 12
            echo "
            ";
            // line 13
            $template = $this->env->resolveTemplate($this->getContext($context, "item"));
            $template->display(array_merge($context, array("name" => "prev", "text" => ("‹ " . $this->env->getExtension('translator')->trans("Previous", array(), "pagination")), "page" => ((array_key_exists("previous", $context)) ? ($this->getContext($context, "previous")) : (null)), "clickable" => array_key_exists("previous", $context))));
            // line 19
            echo "
            ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagesInRange"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 21
                echo "                ";
                $template = $this->env->resolveTemplate($this->getContext($context, "item"));
                $template->display($context);
                // line 22
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 23
            echo "
            ";
            // line 25
            $template = $this->env->resolveTemplate($this->getContext($context, "item"));
            $template->display(array_merge($context, array("name" => "next", "text" => ($this->env->getExtension('translator')->trans("Next", array(), "pagination") . " ›"), "page" => ((array_key_exists("next", $context)) ? ($this->getContext($context, "next")) : (null)), "clickable" => array_key_exists("next", $context))));
            // line 32
            echo "
            ";
            // line 34
            $template = $this->env->resolveTemplate($this->getContext($context, "item"));
            $template->display(array_merge($context, array("name" => "last", "text" => "»", "page" => ((array_key_exists("last", $context)) ? ($this->getContext($context, "last")) : (null)), "clickable" => (array_key_exists("last", $context) && ($this->getContext($context, "current") != $this->getContext($context, "last"))))));
            // line 41
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 13,  18 => 2,  75 => 23,  54 => 11,  97 => 25,  88 => 22,  60 => 17,  63 => 21,  51 => 15,  171 => 61,  167 => 14,  164 => 13,  154 => 10,  146 => 5,  115 => 63,  95 => 53,  84 => 34,  38 => 15,  21 => 1,  405 => 145,  399 => 144,  394 => 141,  386 => 138,  382 => 136,  378 => 134,  369 => 132,  365 => 131,  362 => 130,  360 => 129,  355 => 127,  352 => 126,  348 => 125,  338 => 117,  334 => 115,  332 => 114,  327 => 113,  323 => 112,  318 => 109,  312 => 105,  309 => 104,  306 => 103,  304 => 102,  299 => 99,  293 => 95,  290 => 94,  287 => 93,  285 => 92,  280 => 89,  266 => 88,  262 => 86,  247 => 84,  239 => 82,  237 => 81,  232 => 79,  228 => 78,  221 => 75,  215 => 72,  211 => 71,  202 => 70,  200 => 69,  177 => 66,  174 => 62,  168 => 61,  166 => 60,  144 => 40,  140 => 56,  126 => 44,  123 => 32,  105 => 30,  36 => 6,  142 => 53,  139 => 51,  133 => 47,  124 => 45,  107 => 41,  101 => 30,  65 => 15,  59 => 20,  45 => 9,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 67,  192 => 79,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 11,  152 => 59,  145 => 55,  130 => 48,  125 => 33,  119 => 40,  116 => 44,  112 => 42,  102 => 36,  98 => 54,  76 => 17,  73 => 23,  69 => 6,  32 => 11,  103 => 12,  91 => 11,  74 => 16,  70 => 14,  66 => 16,  56 => 22,  25 => 30,  89 => 50,  82 => 28,  42 => 8,  26 => 1,  22 => 3,  23 => 3,  17 => 1,  92 => 39,  86 => 24,  77 => 17,  57 => 21,  29 => 4,  24 => 4,  19 => 2,  68 => 13,  61 => 22,  44 => 4,  20 => 9,  161 => 59,  153 => 58,  150 => 49,  147 => 48,  143 => 46,  137 => 38,  129 => 51,  121 => 41,  118 => 40,  113 => 37,  104 => 36,  99 => 32,  94 => 26,  81 => 32,  78 => 25,  72 => 15,  64 => 12,  53 => 10,  50 => 15,  48 => 9,  41 => 7,  39 => 2,  35 => 5,  33 => 10,  30 => 34,  27 => 33,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 60,  151 => 54,  149 => 6,  141 => 54,  136 => 51,  134 => 50,  131 => 43,  128 => 34,  120 => 31,  117 => 35,  114 => 34,  109 => 59,  106 => 37,  100 => 55,  96 => 31,  93 => 22,  90 => 25,  87 => 41,  83 => 23,  79 => 40,  71 => 7,  62 => 15,  58 => 23,  55 => 5,  52 => 22,  49 => 11,  46 => 8,  43 => 8,  40 => 20,  37 => 19,  34 => 13,  31 => 12,  28 => 6,);
    }
}
