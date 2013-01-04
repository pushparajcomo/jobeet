<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b088b85b5b893b57ec6166efeb461753 extends Twig_Template
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
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        echo twig_jsonencode_filter($this->getAttribute($_exception_, "toarray"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 20,  102 => 19,  78 => 15,  63 => 14,  61 => 13,  56 => 12,  44 => 9,  38 => 7,  32 => 5,  34 => 6,  48 => 7,  20 => 2,  22 => 4,  30 => 4,  25 => 3,  23 => 5,  17 => 1,  92 => 39,  86 => 6,  77 => 39,  46 => 14,  37 => 7,  33 => 7,  29 => 6,  24 => 4,  19 => 1,  201 => 70,  195 => 66,  187 => 62,  181 => 58,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 36,  128 => 35,  122 => 32,  119 => 31,  111 => 30,  106 => 29,  103 => 28,  100 => 27,  97 => 26,  93 => 24,  89 => 16,  79 => 40,  68 => 15,  64 => 13,  60 => 12,  57 => 22,  54 => 10,  50 => 11,  47 => 10,  43 => 7,  39 => 6,  35 => 4,  31 => 9,  28 => 3,);
    }
}
