<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_974dcc8aad875c5f544543764c697b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("WebProfilerBundle:Profiler:header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    <div id=\"collector_content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array("token" => ""), array());
        // line 38
        echo "                    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig")->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        // line 12
        echo "                            ";
        if (($this->getContext($context, "about") == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 39,  260 => 236,  258 => 235,  255 => 234,  238 => 219,  236 => 218,  60 => 21,  51 => 38,  111 => 40,  38 => 11,  138 => 61,  95 => 45,  84 => 39,  75 => 18,  47 => 10,  21 => 3,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 248,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 42,  101 => 34,  80 => 37,  63 => 22,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 44,  110 => 42,  85 => 33,  65 => 12,  59 => 22,  45 => 15,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 29,  112 => 43,  102 => 37,  98 => 36,  76 => 24,  73 => 23,  69 => 19,  32 => 8,  103 => 41,  91 => 20,  74 => 22,  70 => 14,  66 => 21,  56 => 17,  25 => 4,  89 => 28,  82 => 23,  42 => 11,  26 => 6,  22 => 2,  23 => 29,  17 => 1,  92 => 33,  86 => 41,  77 => 26,  57 => 21,  29 => 3,  24 => 3,  19 => 2,  68 => 13,  61 => 19,  44 => 34,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 33,  118 => 46,  113 => 28,  104 => 35,  99 => 33,  94 => 35,  81 => 18,  78 => 28,  72 => 24,  64 => 15,  53 => 15,  50 => 10,  48 => 15,  41 => 7,  39 => 10,  35 => 6,  33 => 5,  30 => 4,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 40,  136 => 47,  134 => 50,  131 => 31,  128 => 30,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 47,  96 => 34,  93 => 30,  90 => 43,  87 => 31,  83 => 29,  79 => 25,  71 => 23,  62 => 11,  58 => 20,  55 => 19,  52 => 10,  49 => 37,  46 => 9,  43 => 13,  40 => 11,  37 => 10,  34 => 9,  31 => 10,  28 => 7,);
    }
}
