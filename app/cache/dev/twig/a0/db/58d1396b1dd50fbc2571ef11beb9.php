<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a0db58d1396b1dd50fbc2571ef11beb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/routing.png"), "html", null, true);
        echo "\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Router:panel", array("token" => $this->getContext($context, "token")), array());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  331 => 141,  328 => 140,  325 => 139,  323 => 138,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  278 => 114,  273 => 111,  262 => 105,  256 => 103,  252 => 101,  250 => 100,  245 => 97,  232 => 89,  229 => 88,  226 => 87,  224 => 86,  219 => 83,  207 => 77,  205 => 76,  200 => 73,  191 => 68,  188 => 67,  186 => 66,  172 => 58,  167 => 56,  146 => 46,  105 => 27,  18 => 1,  54 => 15,  260 => 236,  258 => 235,  255 => 234,  238 => 93,  236 => 218,  60 => 25,  51 => 38,  111 => 40,  38 => 8,  138 => 42,  95 => 23,  84 => 39,  75 => 18,  47 => 13,  21 => 3,  299 => 125,  293 => 121,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  274 => 248,  271 => 110,  268 => 84,  266 => 107,  261 => 80,  247 => 79,  243 => 96,  228 => 75,  220 => 73,  218 => 72,  213 => 79,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 63,  175 => 59,  158 => 57,  107 => 42,  101 => 25,  80 => 19,  63 => 22,  36 => 7,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 44,  110 => 42,  85 => 33,  65 => 14,  59 => 12,  45 => 8,  223 => 96,  214 => 90,  210 => 78,  203 => 84,  199 => 83,  194 => 69,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 48,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 29,  112 => 43,  102 => 37,  98 => 24,  76 => 26,  73 => 24,  69 => 23,  32 => 8,  103 => 41,  91 => 20,  74 => 17,  70 => 14,  66 => 21,  56 => 17,  25 => 4,  89 => 28,  82 => 27,  42 => 11,  26 => 3,  22 => 3,  23 => 29,  17 => 1,  92 => 33,  86 => 20,  77 => 18,  57 => 21,  29 => 4,  24 => 3,  19 => 2,  68 => 15,  61 => 21,  44 => 12,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 35,  118 => 46,  113 => 28,  104 => 35,  99 => 33,  94 => 35,  81 => 18,  78 => 28,  72 => 25,  64 => 15,  53 => 9,  50 => 14,  48 => 18,  41 => 7,  39 => 8,  35 => 7,  33 => 6,  30 => 4,  27 => 6,  182 => 70,  176 => 71,  169 => 57,  163 => 54,  160 => 53,  155 => 56,  151 => 54,  149 => 47,  141 => 43,  136 => 47,  134 => 50,  131 => 31,  128 => 39,  120 => 37,  117 => 36,  114 => 31,  109 => 38,  106 => 37,  100 => 47,  96 => 34,  93 => 34,  90 => 21,  87 => 30,  83 => 29,  79 => 25,  71 => 16,  62 => 11,  58 => 20,  55 => 20,  52 => 19,  49 => 37,  46 => 9,  43 => 13,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
