<?php

/* PushJobeetBundle:Job:edit.html.twig */
class __TwigTemplate_19b88ae982cb953fbdf5ace13309f851 extends Twig_Template
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
<h1>Job edit</h1>

<form action=\"";
        // line 6
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("push_job_update", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_edit_form_, 'enctype');
        echo ">
    ";
        // line 7
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_edit_form_, 'widget');
        echo "
    <p>
        <button type=\"submit\">Edit</button>
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
    <li>
        <form action=\"";
        // line 20
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("push_job_delete", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 21
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_delete_form_, 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "PushJobeetBundle:Job:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  175 => 61,  158 => 10,  127 => 69,  117 => 61,  113 => 59,  84 => 48,  21 => 1,  453 => 145,  447 => 144,  442 => 141,  434 => 138,  430 => 136,  426 => 134,  416 => 132,  409 => 131,  406 => 130,  401 => 129,  395 => 127,  392 => 126,  387 => 125,  377 => 117,  373 => 115,  370 => 114,  364 => 113,  359 => 112,  354 => 109,  348 => 105,  345 => 104,  341 => 103,  338 => 102,  333 => 99,  327 => 95,  324 => 94,  320 => 93,  317 => 92,  312 => 89,  298 => 88,  294 => 86,  279 => 84,  269 => 82,  266 => 81,  260 => 79,  255 => 78,  247 => 75,  241 => 72,  237 => 71,  220 => 69,  186 => 61,  183 => 60,  159 => 58,  152 => 55,  144 => 51,  141 => 50,  132 => 71,  129 => 42,  120 => 37,  70 => 15,  74 => 17,  52 => 22,  49 => 8,  169 => 58,  161 => 11,  157 => 53,  150 => 5,  136 => 44,  121 => 42,  115 => 36,  109 => 32,  99 => 34,  96 => 33,  81 => 24,  73 => 20,  69 => 19,  62 => 20,  41 => 7,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 70,  218 => 80,  216 => 79,  213 => 67,  210 => 77,  207 => 76,  198 => 71,  192 => 65,  177 => 59,  174 => 60,  171 => 14,  164 => 55,  160 => 54,  155 => 56,  153 => 6,  149 => 48,  146 => 47,  143 => 46,  137 => 45,  126 => 43,  107 => 31,  85 => 28,  82 => 21,  55 => 9,  36 => 6,  27 => 5,  123 => 24,  116 => 36,  108 => 20,  95 => 18,  90 => 50,  87 => 49,  83 => 14,  67 => 21,  45 => 6,  26 => 2,  112 => 34,  102 => 19,  78 => 23,  63 => 23,  61 => 13,  56 => 10,  44 => 12,  38 => 15,  32 => 11,  34 => 6,  48 => 21,  20 => 2,  22 => 4,  30 => 4,  25 => 3,  23 => 3,  17 => 1,  92 => 39,  86 => 6,  77 => 26,  46 => 7,  37 => 7,  33 => 10,  29 => 3,  24 => 6,  19 => 1,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 62,  172 => 56,  168 => 13,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 44,  128 => 35,  122 => 32,  119 => 63,  111 => 21,  106 => 56,  103 => 55,  100 => 54,  97 => 53,  93 => 24,  89 => 16,  79 => 12,  68 => 15,  64 => 13,  60 => 11,  57 => 15,  54 => 15,  50 => 10,  47 => 9,  43 => 6,  39 => 9,  35 => 13,  31 => 4,  28 => 3,);
    }
}
