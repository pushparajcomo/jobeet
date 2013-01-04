<?php

/* MopaBootstrapBundle:Form:formflow_stepList.html.twig */
class __TwigTemplate_9e50184ea133827c264f4fc75c42a34d extends Twig_Template
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
        if (isset($context["flow"])) { $_flow_ = $context["flow"]; } else { $_flow_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_flow_, "getStepDescriptions", array(), "method")) == $this->getAttribute($_flow_, "getMaxSteps", array(), "method"))) {
            // line 2
            echo "    <ul class=\"breadcrumb\">
        ";
            // line 3
            if (isset($context["flow"])) { $_flow_ = $context["flow"]; } else { $_flow_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_flow_, "getStepDescriptions", array(), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["stepDescription"]) {
                // line 4
                echo "            <li";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (isset($context["flow"])) { $_flow_ = $context["flow"]; } else { $_flow_ = null; }
                if (($this->getAttribute($_loop_, "index") == $this->getAttribute($_flow_, "getCurrentStep", array(), "method"))) {
                    echo " class=\"active\"";
                }
                echo ">";
                // line 5
                if (isset($context["flow"])) { $_flow_ = $context["flow"]; } else { $_flow_ = null; }
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (($this->getAttribute($_flow_, "isAllowDynamicStepNavigation", array(), "method") && (($this->getAttribute($_loop_, "index") == 1) || $this->getAttribute($_flow_, "isStepDone", array(0 => ($this->getAttribute($_loop_, "index") - 1)), "method")))) {
                    // line 6
                    echo "<a href=\"";
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    if (isset($context["flow"])) { $_flow_ = $context["flow"]; } else { $_flow_ = null; }
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "attributes"), "get", array(0 => "_route"), "method"), twig_array_merge($this->env->getExtension('craue_formflow')->addDynamicStepNavigationParameter($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "all"), $_flow_, $this->getAttribute($_loop_, "index")), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "attributes"), "all"))), "html", null, true);
                    // line 7
                    echo "\">";
                    // line 8
                    if (isset($context["stepDescription"])) { $_stepDescription_ = $context["stepDescription"]; } else { $_stepDescription_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_stepDescription_), "html", null, true);
                    // line 9
                    echo "</a>";
                } else {
                    // line 11
                    if (isset($context["stepDescription"])) { $_stepDescription_ = $context["stepDescription"]; } else { $_stepDescription_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_stepDescription_), "html", null, true);
                }
                // line 13
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (isset($context["flow"])) { $_flow_ = $context["flow"]; } else { $_flow_ = null; }
                if (($this->getAttribute($_loop_, "index") != $this->getAttribute($_flow_, "getMaxSteps", array(), "method"))) {
                    // line 14
                    echo "                <span class=\"divider\">/</span>";
                }
                // line 16
                echo "</li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stepDescription'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 18
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Form:formflow_stepList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  1281 => 331,  1275 => 330,  1269 => 329,  1263 => 328,  1257 => 327,  1251 => 326,  1245 => 325,  1239 => 324,  1233 => 323,  1214 => 317,  1205 => 316,  1203 => 315,  1200 => 314,  1170 => 310,  1136 => 309,  1118 => 302,  1110 => 300,  1107 => 299,  1098 => 293,  1091 => 291,  1087 => 290,  1081 => 289,  1079 => 288,  1076 => 287,  1069 => 282,  1062 => 280,  1053 => 275,  1050 => 274,  1046 => 273,  1044 => 272,  1041 => 271,  1032 => 267,  1030 => 266,  1027 => 265,  1019 => 260,  1007 => 254,  1002 => 253,  997 => 252,  994 => 251,  992 => 250,  989 => 249,  977 => 240,  974 => 239,  948 => 233,  945 => 232,  941 => 231,  937 => 230,  934 => 229,  930 => 228,  923 => 226,  918 => 225,  914 => 224,  912 => 223,  909 => 222,  901 => 216,  897 => 215,  892 => 213,  880 => 208,  878 => 207,  875 => 206,  863 => 201,  861 => 200,  858 => 199,  850 => 195,  846 => 194,  841 => 192,  833 => 188,  829 => 187,  824 => 185,  816 => 181,  812 => 180,  810 => 179,  807 => 178,  798 => 174,  796 => 173,  793 => 172,  785 => 168,  781 => 167,  776 => 165,  768 => 161,  764 => 160,  762 => 159,  760 => 158,  757 => 157,  750 => 152,  738 => 151,  733 => 150,  727 => 148,  710 => 139,  708 => 138,  707 => 137,  706 => 136,  698 => 134,  692 => 132,  688 => 131,  686 => 130,  673 => 123,  668 => 122,  663 => 121,  653 => 119,  647 => 117,  641 => 115,  638 => 114,  618 => 109,  615 => 108,  597 => 104,  595 => 103,  592 => 102,  575 => 98,  558 => 96,  551 => 93,  548 => 92,  541 => 91,  537 => 90,  516 => 88,  513 => 87,  504 => 82,  500 => 81,  497 => 80,  486 => 77,  481 => 76,  477 => 75,  473 => 74,  465 => 72,  462 => 71,  451 => 69,  448 => 68,  433 => 62,  427 => 61,  422 => 60,  417 => 59,  412 => 57,  403 => 52,  397 => 50,  393 => 49,  391 => 48,  388 => 47,  375 => 42,  372 => 41,  361 => 36,  356 => 35,  351 => 33,  295 => 16,  291 => 15,  286 => 13,  271 => 6,  267 => 5,  265 => 4,  262 => 3,  256 => 330,  254 => 329,  252 => 328,  250 => 327,  242 => 323,  239 => 322,  236 => 320,  231 => 313,  229 => 307,  226 => 306,  221 => 298,  211 => 271,  208 => 270,  206 => 265,  203 => 264,  190 => 248,  180 => 222,  147 => 178,  114 => 113,  104 => 101,  1199 => 372,  1195 => 370,  1190 => 369,  1186 => 368,  1184 => 367,  1181 => 366,  1158 => 360,  1154 => 359,  1149 => 358,  1146 => 357,  1138 => 355,  1134 => 308,  1131 => 307,  1123 => 351,  1117 => 349,  1112 => 301,  1108 => 346,  1089 => 344,  1086 => 343,  1082 => 342,  1078 => 341,  1073 => 340,  1070 => 339,  1065 => 338,  1061 => 337,  1058 => 276,  1054 => 335,  1052 => 334,  1049 => 333,  1039 => 326,  1033 => 324,  1029 => 323,  1022 => 321,  1018 => 320,  1016 => 259,  1013 => 318,  1006 => 311,  999 => 309,  995 => 305,  990 => 304,  985 => 303,  981 => 245,  979 => 241,  976 => 300,  965 => 294,  961 => 287,  955 => 286,  952 => 285,  950 => 284,  935 => 282,  932 => 281,  926 => 227,  922 => 279,  903 => 278,  900 => 277,  898 => 276,  895 => 214,  886 => 269,  884 => 209,  882 => 266,  879 => 265,  867 => 202,  860 => 259,  857 => 258,  854 => 257,  844 => 193,  830 => 250,  827 => 186,  802 => 248,  799 => 247,  790 => 242,  786 => 241,  783 => 240,  779 => 166,  777 => 238,  774 => 237,  765 => 232,  761 => 231,  758 => 230,  754 => 229,  752 => 228,  749 => 227,  737 => 223,  726 => 221,  723 => 147,  721 => 146,  718 => 145,  711 => 212,  705 => 211,  703 => 135,  700 => 209,  693 => 203,  689 => 202,  683 => 129,  681 => 199,  670 => 198,  665 => 197,  660 => 196,  658 => 120,  655 => 194,  646 => 190,  643 => 116,  639 => 187,  635 => 186,  629 => 185,  625 => 183,  620 => 110,  616 => 181,  610 => 180,  603 => 177,  600 => 176,  596 => 175,  594 => 174,  591 => 173,  585 => 167,  577 => 165,  573 => 164,  567 => 162,  564 => 161,  560 => 160,  554 => 159,  535 => 158,  530 => 157,  527 => 156,  522 => 155,  518 => 89,  515 => 153,  511 => 152,  507 => 151,  505 => 150,  502 => 149,  493 => 144,  490 => 78,  483 => 142,  480 => 141,  476 => 140,  472 => 139,  470 => 138,  467 => 137,  459 => 131,  454 => 130,  452 => 129,  449 => 128,  441 => 124,  437 => 123,  435 => 122,  432 => 121,  421 => 115,  415 => 58,  410 => 113,  405 => 112,  400 => 111,  396 => 110,  390 => 108,  386 => 107,  384 => 106,  381 => 105,  358 => 98,  353 => 34,  349 => 96,  343 => 94,  339 => 27,  337 => 92,  334 => 26,  326 => 86,  323 => 85,  321 => 84,  319 => 22,  314 => 20,  310 => 80,  304 => 78,  301 => 77,  299 => 76,  296 => 75,  289 => 14,  287 => 69,  280 => 68,  277 => 8,  246 => 325,  244 => 324,  235 => 57,  224 => 299,  205 => 51,  200 => 262,  185 => 238,  182 => 236,  176 => 38,  170 => 37,  167 => 206,  162 => 199,  154 => 191,  138 => 30,  133 => 28,  76 => 12,  316 => 4,  313 => 3,  308 => 2,  297 => 1,  283 => 83,  272 => 81,  258 => 331,  249 => 64,  245 => 73,  230 => 66,  225 => 65,  215 => 61,  212 => 60,  209 => 59,  204 => 57,  196 => 54,  193 => 249,  188 => 239,  94 => 67,  91 => 32,  118 => 13,  72 => 20,  58 => 8,  125 => 31,  18 => 2,  40 => 27,  53 => 6,  139 => 171,  124 => 144,  80 => 19,  75 => 14,  59 => 7,  110 => 28,  98 => 25,  42 => 7,  175 => 47,  158 => 10,  127 => 145,  117 => 114,  113 => 30,  84 => 46,  21 => 1,  453 => 70,  447 => 144,  442 => 64,  434 => 138,  430 => 136,  426 => 134,  416 => 132,  409 => 131,  406 => 130,  401 => 129,  395 => 127,  392 => 126,  387 => 125,  377 => 43,  373 => 100,  370 => 99,  364 => 37,  359 => 112,  354 => 109,  348 => 32,  345 => 104,  341 => 103,  338 => 102,  333 => 99,  327 => 24,  324 => 23,  320 => 83,  317 => 21,  312 => 89,  298 => 88,  294 => 86,  279 => 84,  269 => 82,  266 => 81,  260 => 79,  255 => 78,  247 => 75,  241 => 61,  237 => 71,  220 => 64,  186 => 61,  183 => 49,  159 => 198,  152 => 185,  144 => 177,  141 => 50,  132 => 157,  129 => 156,  120 => 21,  70 => 10,  74 => 31,  52 => 22,  49 => 5,  169 => 212,  161 => 40,  157 => 192,  150 => 5,  136 => 29,  121 => 42,  115 => 32,  109 => 107,  99 => 86,  96 => 18,  81 => 15,  73 => 11,  69 => 19,  62 => 3,  41 => 4,  248 => 326,  238 => 71,  234 => 314,  227 => 84,  223 => 70,  218 => 296,  216 => 287,  213 => 286,  210 => 52,  207 => 76,  198 => 259,  192 => 65,  177 => 221,  174 => 219,  171 => 14,  164 => 205,  160 => 54,  155 => 40,  153 => 6,  149 => 184,  146 => 47,  143 => 46,  137 => 165,  126 => 23,  107 => 102,  85 => 15,  82 => 41,  55 => 80,  36 => 6,  27 => 33,  123 => 24,  116 => 20,  108 => 20,  95 => 18,  90 => 18,  87 => 47,  83 => 23,  67 => 11,  45 => 43,  26 => 3,  112 => 108,  102 => 87,  78 => 16,  63 => 83,  61 => 8,  56 => 7,  44 => 12,  38 => 20,  32 => 11,  34 => 5,  48 => 2,  20 => 2,  22 => 29,  30 => 14,  25 => 8,  23 => 3,  17 => 1,  92 => 57,  86 => 25,  77 => 32,  46 => 20,  37 => 6,  33 => 15,  29 => 4,  24 => 3,  19 => 2,  201 => 56,  195 => 258,  187 => 44,  181 => 63,  178 => 48,  172 => 213,  168 => 13,  165 => 53,  156 => 48,  151 => 45,  148 => 32,  145 => 43,  142 => 172,  134 => 164,  131 => 34,  128 => 31,  122 => 129,  119 => 128,  111 => 30,  106 => 56,  103 => 26,  100 => 41,  97 => 68,  93 => 18,  89 => 56,  79 => 40,  68 => 20,  64 => 9,  60 => 82,  57 => 7,  54 => 12,  50 => 78,  47 => 9,  43 => 28,  39 => 2,  35 => 19,  31 => 5,  28 => 9,);
    }
}
