<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_ffb194e52646853ec8b729ef6c36975b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute($this->getContext($context, "collector"), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 64,  162 => 63,  132 => 54,  174 => 61,  168 => 60,  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  215 => 83,  212 => 82,  204 => 78,  201 => 77,  190 => 72,  180 => 64,  133 => 47,  126 => 45,  108 => 42,  67 => 20,  788 => 469,  785 => 468,  774 => 466,  770 => 465,  766 => 463,  753 => 462,  727 => 457,  724 => 456,  705 => 454,  688 => 453,  684 => 451,  680 => 450,  676 => 449,  672 => 448,  668 => 447,  664 => 446,  661 => 445,  659 => 444,  642 => 443,  631 => 442,  616 => 437,  611 => 435,  607 => 434,  604 => 433,  602 => 432,  588 => 431,  556 => 401,  538 => 398,  521 => 397,  518 => 396,  516 => 395,  511 => 393,  506 => 391,  179 => 87,  171 => 85,  164 => 82,  159 => 80,  154 => 77,  124 => 61,  88 => 28,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  331 => 156,  328 => 140,  325 => 139,  323 => 150,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  278 => 114,  273 => 111,  262 => 105,  256 => 103,  252 => 101,  250 => 105,  245 => 97,  232 => 89,  229 => 88,  226 => 89,  224 => 86,  219 => 83,  207 => 73,  205 => 95,  200 => 73,  191 => 68,  188 => 89,  186 => 69,  172 => 67,  167 => 56,  146 => 58,  105 => 27,  18 => 1,  54 => 13,  260 => 236,  258 => 235,  255 => 234,  238 => 93,  236 => 97,  60 => 16,  51 => 38,  111 => 40,  38 => 8,  138 => 49,  95 => 23,  84 => 29,  75 => 24,  47 => 13,  21 => 3,  299 => 125,  293 => 133,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  274 => 248,  271 => 110,  268 => 84,  266 => 107,  261 => 80,  247 => 79,  243 => 101,  228 => 75,  220 => 73,  218 => 72,  213 => 79,  209 => 81,  202 => 71,  196 => 69,  183 => 68,  181 => 63,  175 => 59,  158 => 59,  107 => 51,  101 => 25,  80 => 19,  63 => 22,  36 => 5,  156 => 56,  148 => 75,  142 => 73,  140 => 50,  127 => 45,  123 => 44,  115 => 44,  110 => 52,  85 => 34,  65 => 23,  59 => 12,  45 => 9,  223 => 88,  214 => 90,  210 => 78,  203 => 71,  199 => 83,  194 => 92,  192 => 62,  189 => 70,  187 => 77,  184 => 76,  178 => 72,  170 => 64,  157 => 61,  152 => 54,  145 => 58,  130 => 47,  125 => 52,  119 => 45,  116 => 29,  112 => 43,  102 => 39,  98 => 35,  76 => 26,  73 => 23,  69 => 21,  32 => 5,  103 => 41,  91 => 31,  74 => 34,  70 => 22,  66 => 20,  56 => 14,  25 => 3,  89 => 35,  82 => 33,  42 => 8,  26 => 3,  22 => 3,  23 => 29,  17 => 1,  92 => 33,  86 => 20,  77 => 23,  57 => 21,  29 => 4,  24 => 3,  19 => 2,  68 => 24,  61 => 16,  44 => 12,  20 => 2,  161 => 81,  153 => 50,  150 => 49,  147 => 51,  143 => 57,  137 => 71,  129 => 46,  121 => 35,  118 => 50,  113 => 44,  104 => 35,  99 => 45,  94 => 35,  81 => 28,  78 => 32,  72 => 21,  64 => 19,  53 => 24,  50 => 14,  48 => 10,  41 => 7,  39 => 19,  35 => 7,  33 => 6,  30 => 5,  27 => 6,  182 => 70,  176 => 62,  169 => 66,  163 => 60,  160 => 53,  155 => 56,  151 => 62,  149 => 53,  141 => 56,  136 => 55,  134 => 50,  131 => 31,  128 => 53,  120 => 51,  117 => 45,  114 => 41,  109 => 38,  106 => 41,  100 => 34,  96 => 32,  93 => 36,  90 => 21,  87 => 29,  83 => 29,  79 => 24,  71 => 33,  62 => 11,  58 => 15,  55 => 16,  52 => 12,  49 => 13,  46 => 11,  43 => 13,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
