<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_09b21a7ac12a1a813de8c292f51f21c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  215 => 83,  212 => 82,  204 => 78,  201 => 77,  190 => 72,  180 => 69,  133 => 47,  126 => 45,  108 => 39,  67 => 20,  788 => 469,  785 => 468,  774 => 466,  770 => 465,  766 => 463,  753 => 462,  727 => 457,  724 => 456,  705 => 454,  688 => 453,  684 => 451,  680 => 450,  676 => 449,  672 => 448,  668 => 447,  664 => 446,  661 => 445,  659 => 444,  642 => 443,  631 => 442,  616 => 437,  611 => 435,  607 => 434,  604 => 433,  602 => 432,  588 => 431,  556 => 401,  538 => 398,  521 => 397,  518 => 396,  516 => 395,  511 => 393,  506 => 391,  179 => 87,  171 => 85,  164 => 82,  159 => 80,  154 => 77,  124 => 61,  88 => 41,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  331 => 156,  328 => 140,  325 => 139,  323 => 150,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  278 => 114,  273 => 111,  262 => 105,  256 => 103,  252 => 101,  250 => 105,  245 => 97,  232 => 89,  229 => 88,  226 => 89,  224 => 86,  219 => 83,  207 => 77,  205 => 95,  200 => 73,  191 => 68,  188 => 89,  186 => 66,  172 => 58,  167 => 56,  146 => 52,  105 => 27,  18 => 1,  54 => 15,  260 => 236,  258 => 235,  255 => 234,  238 => 93,  236 => 97,  60 => 27,  51 => 38,  111 => 40,  38 => 8,  138 => 49,  95 => 23,  84 => 28,  75 => 18,  47 => 13,  21 => 3,  299 => 125,  293 => 133,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  274 => 248,  271 => 110,  268 => 84,  266 => 107,  261 => 80,  247 => 79,  243 => 101,  228 => 75,  220 => 73,  218 => 72,  213 => 79,  209 => 81,  202 => 94,  196 => 74,  183 => 61,  181 => 63,  175 => 59,  158 => 57,  107 => 51,  101 => 25,  80 => 19,  63 => 22,  36 => 7,  156 => 56,  148 => 75,  142 => 73,  140 => 50,  127 => 45,  123 => 44,  115 => 44,  110 => 52,  85 => 40,  65 => 14,  59 => 12,  45 => 11,  223 => 88,  214 => 90,  210 => 78,  203 => 84,  199 => 83,  194 => 92,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 64,  157 => 61,  152 => 54,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 29,  112 => 43,  102 => 36,  98 => 35,  76 => 26,  73 => 23,  69 => 23,  32 => 5,  103 => 41,  91 => 31,  74 => 34,  70 => 22,  66 => 30,  56 => 25,  25 => 4,  89 => 28,  82 => 27,  42 => 10,  26 => 3,  22 => 3,  23 => 29,  17 => 1,  92 => 33,  86 => 20,  77 => 35,  57 => 21,  29 => 4,  24 => 3,  19 => 2,  68 => 15,  61 => 21,  44 => 12,  20 => 2,  161 => 81,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 71,  129 => 46,  121 => 35,  118 => 46,  113 => 28,  104 => 35,  99 => 45,  94 => 35,  81 => 27,  78 => 28,  72 => 25,  64 => 19,  53 => 24,  50 => 14,  48 => 22,  41 => 7,  39 => 19,  35 => 7,  33 => 5,  30 => 6,  27 => 6,  182 => 70,  176 => 86,  169 => 84,  163 => 60,  160 => 53,  155 => 56,  151 => 54,  149 => 53,  141 => 43,  136 => 47,  134 => 50,  131 => 31,  128 => 39,  120 => 37,  117 => 43,  114 => 41,  109 => 38,  106 => 37,  100 => 47,  96 => 34,  93 => 43,  90 => 21,  87 => 29,  83 => 29,  79 => 25,  71 => 33,  62 => 11,  58 => 16,  55 => 16,  52 => 13,  49 => 13,  46 => 11,  43 => 13,  40 => 8,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
