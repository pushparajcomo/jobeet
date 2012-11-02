<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_28a7e04c1b556ce9a235facf9262841f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, $this->getContext($context, "majors"))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "majors")), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "majors"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, $this->getContext($context, "minors"))) {
            // line 18
            echo "        <h1>Some Recommandations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, $this->getContext($context, "majors"))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "minors"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, $this->getContext($context, "majors")))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1174 => 331,  1168 => 330,  1162 => 329,  1156 => 328,  1150 => 327,  1144 => 326,  1138 => 325,  1132 => 324,  1126 => 323,  1110 => 317,  1103 => 316,  1101 => 315,  1098 => 314,  1075 => 310,  1050 => 309,  1048 => 308,  1045 => 307,  1033 => 302,  1028 => 301,  1026 => 300,  1023 => 299,  1014 => 293,  1008 => 291,  1005 => 290,  1000 => 289,  998 => 288,  995 => 287,  988 => 282,  981 => 280,  978 => 276,  974 => 275,  971 => 274,  968 => 273,  966 => 272,  963 => 271,  955 => 267,  953 => 266,  950 => 265,  943 => 260,  940 => 259,  932 => 254,  928 => 253,  924 => 252,  921 => 251,  919 => 250,  916 => 249,  908 => 245,  906 => 241,  904 => 240,  901 => 239,  880 => 233,  877 => 232,  874 => 231,  871 => 230,  868 => 229,  865 => 228,  862 => 227,  859 => 226,  856 => 225,  853 => 224,  851 => 223,  848 => 222,  840 => 216,  837 => 215,  835 => 214,  832 => 213,  824 => 209,  821 => 208,  819 => 207,  816 => 206,  808 => 202,  805 => 201,  803 => 200,  800 => 199,  792 => 195,  789 => 194,  787 => 193,  784 => 192,  776 => 188,  773 => 187,  771 => 186,  768 => 185,  760 => 181,  757 => 180,  755 => 179,  752 => 178,  744 => 174,  742 => 173,  739 => 172,  731 => 168,  728 => 167,  726 => 166,  723 => 165,  715 => 161,  712 => 160,  710 => 159,  708 => 158,  698 => 152,  690 => 151,  685 => 150,  679 => 148,  674 => 146,  671 => 145,  663 => 139,  660 => 137,  658 => 135,  653 => 134,  647 => 132,  644 => 131,  639 => 129,  630 => 123,  626 => 122,  622 => 121,  618 => 120,  613 => 119,  599 => 114,  583 => 110,  581 => 109,  578 => 108,  562 => 104,  560 => 103,  557 => 102,  540 => 98,  528 => 96,  519 => 92,  514 => 91,  493 => 89,  491 => 88,  488 => 87,  479 => 82,  476 => 81,  473 => 80,  467 => 78,  465 => 77,  460 => 76,  457 => 75,  454 => 74,  448 => 72,  446 => 71,  438 => 70,  436 => 69,  433 => 68,  427 => 64,  419 => 62,  414 => 61,  410 => 60,  405 => 59,  403 => 58,  400 => 57,  391 => 52,  385 => 50,  382 => 49,  380 => 48,  367 => 43,  365 => 42,  362 => 41,  351 => 36,  348 => 35,  343 => 33,  332 => 27,  327 => 26,  319 => 23,  288 => 14,  276 => 8,  270 => 6,  267 => 5,  265 => 4,  254 => 329,  248 => 326,  246 => 325,  244 => 324,  242 => 323,  239 => 322,  234 => 314,  231 => 313,  221 => 298,  216 => 287,  211 => 271,  208 => 270,  206 => 265,  198 => 259,  195 => 258,  193 => 249,  185 => 238,  177 => 221,  144 => 177,  139 => 171,  122 => 129,  97 => 68,  165 => 64,  162 => 199,  132 => 157,  174 => 219,  168 => 60,  354 => 37,  345 => 34,  341 => 159,  338 => 158,  333 => 157,  321 => 24,  314 => 22,  307 => 141,  300 => 137,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  215 => 83,  212 => 82,  204 => 78,  201 => 77,  190 => 248,  180 => 222,  133 => 47,  126 => 45,  108 => 38,  67 => 18,  788 => 469,  785 => 468,  774 => 466,  770 => 465,  766 => 463,  753 => 462,  727 => 457,  724 => 456,  705 => 157,  688 => 453,  684 => 451,  680 => 450,  676 => 147,  672 => 448,  668 => 447,  664 => 446,  661 => 138,  659 => 136,  642 => 130,  631 => 442,  616 => 437,  611 => 435,  607 => 117,  604 => 116,  602 => 115,  588 => 431,  556 => 401,  538 => 398,  521 => 93,  518 => 396,  516 => 395,  511 => 90,  506 => 391,  179 => 87,  171 => 85,  164 => 205,  159 => 198,  154 => 191,  124 => 144,  88 => 27,  386 => 160,  383 => 159,  377 => 47,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 32,  337 => 145,  331 => 156,  328 => 140,  325 => 139,  323 => 150,  318 => 135,  312 => 21,  309 => 20,  306 => 129,  304 => 128,  278 => 114,  273 => 111,  262 => 3,  256 => 330,  252 => 328,  250 => 327,  245 => 97,  232 => 89,  229 => 307,  226 => 306,  224 => 299,  219 => 83,  207 => 73,  205 => 95,  200 => 262,  191 => 68,  188 => 239,  186 => 69,  172 => 213,  167 => 206,  146 => 58,  105 => 37,  18 => 1,  54 => 12,  260 => 236,  258 => 331,  255 => 234,  238 => 93,  236 => 320,  60 => 16,  51 => 38,  111 => 40,  38 => 8,  138 => 49,  95 => 23,  84 => 46,  75 => 21,  47 => 12,  21 => 3,  299 => 125,  293 => 16,  290 => 15,  287 => 119,  285 => 13,  280 => 115,  274 => 248,  271 => 110,  268 => 84,  266 => 107,  261 => 80,  247 => 79,  243 => 101,  228 => 75,  220 => 73,  218 => 296,  213 => 286,  209 => 81,  202 => 71,  196 => 69,  183 => 68,  181 => 63,  175 => 59,  158 => 59,  107 => 102,  101 => 25,  80 => 26,  63 => 17,  36 => 7,  156 => 56,  148 => 75,  142 => 172,  140 => 50,  127 => 145,  123 => 44,  115 => 44,  110 => 39,  85 => 26,  65 => 18,  59 => 2,  45 => 9,  223 => 88,  214 => 90,  210 => 78,  203 => 264,  199 => 83,  194 => 92,  192 => 62,  189 => 70,  187 => 77,  184 => 76,  178 => 72,  170 => 64,  157 => 192,  152 => 185,  145 => 58,  130 => 47,  125 => 52,  119 => 128,  116 => 29,  112 => 108,  102 => 87,  98 => 35,  76 => 24,  73 => 23,  69 => 19,  32 => 5,  103 => 41,  91 => 28,  74 => 31,  70 => 21,  66 => 20,  56 => 14,  25 => 5,  89 => 56,  82 => 25,  42 => 8,  26 => 3,  22 => 3,  23 => 29,  17 => 1,  92 => 57,  86 => 30,  77 => 23,  57 => 13,  29 => 4,  24 => 3,  19 => 1,  68 => 20,  61 => 16,  44 => 10,  20 => 2,  161 => 81,  153 => 50,  150 => 49,  147 => 178,  143 => 57,  137 => 165,  129 => 156,  121 => 35,  118 => 50,  113 => 40,  104 => 101,  99 => 33,  94 => 67,  81 => 24,  78 => 32,  72 => 22,  64 => 12,  53 => 13,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 7,  33 => 4,  30 => 5,  27 => 4,  182 => 236,  176 => 62,  169 => 212,  163 => 60,  160 => 53,  155 => 56,  151 => 62,  149 => 184,  141 => 56,  136 => 55,  134 => 164,  131 => 31,  128 => 53,  120 => 51,  117 => 114,  114 => 113,  109 => 107,  106 => 33,  100 => 30,  96 => 29,  93 => 36,  90 => 31,  87 => 47,  83 => 29,  79 => 24,  71 => 20,  62 => 3,  58 => 15,  55 => 14,  52 => 13,  49 => 11,  46 => 11,  43 => 11,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
