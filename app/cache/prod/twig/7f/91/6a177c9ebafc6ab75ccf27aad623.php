<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7f916a177c9ebafc6ab75ccf27aad623 extends Twig_Template
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
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo " ";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo "\".

Please e-mail us at [email] and let us know what you were doing when this
error occurred. We will fix it as soon as possible. Sorry for any
inconvenience caused.
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 4,  30 => 3,  25 => 2,  23 => 5,  17 => 1,  92 => 39,  86 => 6,  77 => 39,  46 => 14,  37 => 8,  33 => 7,  29 => 6,  24 => 4,  19 => 1,  201 => 70,  195 => 66,  187 => 62,  181 => 58,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 36,  128 => 35,  122 => 32,  119 => 31,  111 => 30,  106 => 29,  103 => 28,  100 => 27,  97 => 26,  93 => 24,  89 => 22,  79 => 40,  68 => 15,  64 => 13,  60 => 12,  57 => 22,  54 => 10,  50 => 6,  47 => 5,  43 => 7,  39 => 6,  35 => 4,  31 => 9,  28 => 3,);
    }
}
