<?php

/* PushJobeetBundle:Job:new.html.twig */
class __TwigTemplate_511e30b55fc5c646429f7dd40d1e3800 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PushJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PushJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<h1>Job creation</h1>

<form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("push_job_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <p>
        <button type=\"submit\">Create</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("push_job"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "PushJobeetBundle:Job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  54 => 11,  97 => 25,  88 => 22,  60 => 17,  63 => 21,  51 => 15,  171 => 61,  167 => 14,  164 => 13,  154 => 10,  146 => 5,  115 => 63,  95 => 53,  84 => 48,  38 => 15,  21 => 1,  405 => 145,  399 => 144,  394 => 141,  386 => 138,  382 => 136,  378 => 134,  369 => 132,  365 => 131,  362 => 130,  360 => 129,  355 => 127,  352 => 126,  348 => 125,  338 => 117,  334 => 115,  332 => 114,  327 => 113,  323 => 112,  318 => 109,  312 => 105,  309 => 104,  306 => 103,  304 => 102,  299 => 99,  293 => 95,  290 => 94,  287 => 93,  285 => 92,  280 => 89,  266 => 88,  262 => 86,  247 => 84,  239 => 82,  237 => 81,  232 => 79,  228 => 78,  221 => 75,  215 => 72,  211 => 71,  202 => 70,  200 => 69,  177 => 66,  174 => 62,  168 => 61,  166 => 60,  144 => 40,  140 => 56,  126 => 44,  123 => 32,  105 => 32,  36 => 6,  142 => 53,  139 => 51,  133 => 47,  124 => 45,  107 => 41,  101 => 30,  65 => 15,  59 => 20,  45 => 9,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 67,  192 => 79,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 11,  152 => 59,  145 => 55,  130 => 48,  125 => 33,  119 => 40,  116 => 44,  112 => 42,  102 => 36,  98 => 54,  76 => 21,  73 => 23,  69 => 17,  32 => 11,  103 => 28,  91 => 28,  74 => 16,  70 => 14,  66 => 16,  56 => 22,  25 => 4,  89 => 50,  82 => 28,  42 => 8,  26 => 2,  22 => 3,  23 => 3,  17 => 1,  92 => 39,  86 => 24,  77 => 17,  57 => 12,  29 => 3,  24 => 6,  19 => 2,  68 => 20,  61 => 24,  44 => 7,  20 => 2,  161 => 59,  153 => 58,  150 => 49,  147 => 48,  143 => 46,  137 => 38,  129 => 51,  121 => 41,  118 => 40,  113 => 37,  104 => 36,  99 => 32,  94 => 26,  81 => 22,  78 => 24,  72 => 16,  64 => 15,  53 => 12,  50 => 15,  48 => 9,  41 => 7,  39 => 15,  35 => 5,  33 => 10,  30 => 4,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 60,  151 => 54,  149 => 6,  141 => 54,  136 => 51,  134 => 50,  131 => 43,  128 => 34,  120 => 31,  117 => 42,  114 => 35,  109 => 59,  106 => 37,  100 => 55,  96 => 31,  93 => 24,  90 => 25,  87 => 19,  83 => 23,  79 => 40,  71 => 18,  62 => 15,  58 => 23,  55 => 11,  52 => 22,  49 => 11,  46 => 8,  43 => 8,  40 => 7,  37 => 9,  34 => 6,  31 => 4,  28 => 3,);
    }
}
