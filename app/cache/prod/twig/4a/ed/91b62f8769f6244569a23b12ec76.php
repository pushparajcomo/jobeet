<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4aed91b62f8769f6244569a23b12ec76 extends Twig_Template
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
        echo "/*
";
        // line 2
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $this->env->loadTemplate("TwigBundle:Exception:exception.txt.twig")->display(array_merge($context, array("exception" => $_exception_)));
        // line 3
        echo "*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  36 => 5,  27 => 3,  123 => 24,  116 => 22,  108 => 20,  95 => 18,  90 => 17,  87 => 16,  83 => 14,  67 => 9,  45 => 6,  26 => 4,  112 => 20,  102 => 19,  78 => 15,  63 => 14,  61 => 13,  56 => 12,  44 => 7,  38 => 7,  32 => 5,  34 => 6,  48 => 7,  20 => 2,  22 => 4,  30 => 4,  25 => 3,  23 => 3,  17 => 1,  92 => 39,  86 => 6,  77 => 39,  46 => 14,  37 => 7,  33 => 7,  29 => 6,  24 => 4,  19 => 1,  201 => 70,  195 => 66,  187 => 62,  181 => 58,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 36,  128 => 35,  122 => 32,  119 => 31,  111 => 21,  106 => 29,  103 => 19,  100 => 27,  97 => 26,  93 => 24,  89 => 16,  79 => 12,  68 => 15,  64 => 13,  60 => 12,  57 => 8,  54 => 10,  50 => 11,  47 => 8,  43 => 6,  39 => 8,  35 => 5,  31 => 4,  28 => 4,);
    }
}
