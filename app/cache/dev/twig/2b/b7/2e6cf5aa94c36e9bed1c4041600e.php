<?php

/* MopaBootstrapBundle::flash.html.twig */
class __TwigTemplate_2bb72e6cf5aa94c36e9bed1c4041600e extends Twig_Template
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
        // line 13
        echo "
";
        // line 32
        echo "
";
    }

    // line 1
    public function getflash($type = null, $message = null, $close = null, $use_raw = null, $class = null, $domain = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $type,
            "message" => $message,
            "close" => $close,
            "use_raw" => $use_raw,
            "class" => $class,
            "domain" => $domain,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"alert";
            echo twig_escape_filter($this->env, (($this->getContext($context, "type")) ? ((" alert-" . $this->getContext($context, "type"))) : ("")), "html", null, true);
            echo " fade in ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($this->getContext($context, "class"), "")) : ("")), "html", null, true);
            echo "\">
    ";
            // line 3
            if (((array_key_exists("close", $context)) ? (_twig_default_filter($this->getContext($context, "close"), false)) : (false))) {
                // line 4
                echo "        <a class=\"close\" data-dismiss=\"alert\" href=\"#\">×</a>
    ";
            }
            // line 6
            echo "    ";
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter($this->getContext($context, "use_raw"), false)) : (false))) {
                // line 7
                echo "        ";
                echo $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter($this->getContext($context, "domain"), "messages")) : ("messages")));
                echo "
    ";
            } else {
                // line 9
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter($this->getContext($context, "domain"), "messages")) : ("messages"))), "html", null, true);
                echo "
    ";
            }
            // line 11
            echo "    </div>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 14
    public function getadvanced_flash($type = null, $heading = null, $message = null, $close_tag = null, $use_raw = null, $class = null, $domain = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $type,
            "heading" => $heading,
            "message" => $message,
            "close_tag" => $close_tag,
            "use_raw" => $use_raw,
            "class" => $class,
            "domain" => $domain,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "    <div class=\"alert";
            echo twig_escape_filter($this->env, (($this->getContext($context, "type")) ? ((" alert-" . $this->getContext($context, "type"))) : ("")), "html", null, true);
            echo " alert-block fade in ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($this->getContext($context, "class"), "")) : ("")), "html", null, true);
            echo "\">
    ";
            // line 16
            if (((array_key_exists("close_tag", $context)) ? (_twig_default_filter($this->getContext($context, "close_tag"), false)) : (false))) {
                // line 17
                echo "        ";
                if (($this->getContext($context, "close_tag") == true)) {
                    // line 18
                    echo "            ";
                    $context["close_tag"] = "a";
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "        <";
                echo twig_escape_filter($this->env, $this->getContext($context, "close_tag"), "html", null, true);
                echo " class=\"close\" data-dismiss=\"alert\" ";
                if (($this->getContext($context, "close_tag") == "a")) {
                    echo "href=\"#\"";
                }
                echo ">×</";
                echo twig_escape_filter($this->env, $this->getContext($context, "close_tag"), "html", null, true);
                echo ">
    ";
            }
            // line 22
            echo "    ";
            if (((array_key_exists("heading", $context)) ? (_twig_default_filter($this->getContext($context, "heading"), false)) : (false))) {
                // line 23
                echo "    <h4 class=\"alert-heading\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "heading"), "html", null, true);
                echo "</h4>
    ";
            }
            // line 25
            echo "    ";
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter($this->getContext($context, "use_raw"), false)) : (false))) {
                // line 26
                echo "        ";
                echo $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter($this->getContext($context, "domain"), "messages")) : ("messages")));
                echo "
    ";
            } else {
                // line 28
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter($this->getContext($context, "domain"), "messages")) : ("messages"))), "html", null, true);
                echo "
    ";
            }
            // line 30
            echo "    </div>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 33
    public function getsession_flash($close = null, $use_raw = null, $class = null, $domain = null)
    {
        $context = $this->env->mergeGlobals(array(
            "close" => $close,
            "use_raw" => $use_raw,
            "class" => $class,
            "domain" => $domain,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "peekAll")) > 0)) {
                // line 35
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "all"));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 36
                    echo "            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 37
                        echo "                ";
                        if (($this->getContext($context, "type") == "fos_user_success")) {
                            // line 38
                            echo "                    ";
                            $context["type"] = "success";
                            // line 39
                            echo "                    ";
                            $context["domain"] = "FOSUserBundle";
                            // line 40
                            echo "                ";
                        }
                        // line 41
                        echo "                ";
                        echo $this->getAttribute($this, "flash", array(0 => $this->getContext($context, "type"), 1 => $this->getContext($context, "message"), 2 => $this->getContext($context, "close"), 3 => $this->getContext($context, "use_raw"), 4 => $this->getContext($context, "class"), 5 => $this->getContext($context, "domain")), "method");
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 43
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 44
                echo "    ";
            }
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 43,  197 => 39,  191 => 37,  110 => 18,  47 => 17,  1174 => 331,  1168 => 330,  1162 => 329,  1156 => 328,  1150 => 327,  1144 => 326,  1138 => 325,  1132 => 324,  1126 => 323,  1110 => 317,  1103 => 316,  1101 => 315,  1098 => 314,  1075 => 310,  1050 => 309,  1048 => 308,  1045 => 307,  1028 => 301,  1023 => 299,  1014 => 293,  1008 => 291,  1005 => 290,  1000 => 289,  998 => 288,  995 => 287,  988 => 282,  974 => 275,  971 => 274,  968 => 273,  955 => 267,  953 => 266,  950 => 265,  943 => 260,  940 => 259,  928 => 253,  924 => 252,  921 => 251,  919 => 250,  908 => 245,  906 => 241,  901 => 239,  880 => 233,  877 => 232,  874 => 231,  871 => 230,  862 => 227,  859 => 226,  840 => 216,  835 => 214,  832 => 213,  821 => 208,  819 => 207,  816 => 206,  808 => 202,  805 => 201,  803 => 200,  800 => 199,  792 => 195,  789 => 194,  787 => 193,  784 => 192,  776 => 188,  773 => 187,  771 => 186,  768 => 185,  760 => 181,  757 => 180,  755 => 179,  752 => 178,  744 => 174,  742 => 173,  739 => 172,  731 => 168,  728 => 167,  726 => 166,  723 => 165,  715 => 161,  712 => 160,  710 => 159,  708 => 158,  705 => 157,  698 => 152,  690 => 151,  663 => 139,  661 => 138,  660 => 137,  658 => 135,  647 => 132,  644 => 131,  642 => 130,  630 => 123,  626 => 122,  622 => 121,  618 => 120,  613 => 119,  604 => 116,  602 => 115,  599 => 114,  583 => 110,  581 => 109,  578 => 108,  562 => 104,  560 => 103,  557 => 102,  528 => 96,  521 => 93,  519 => 92,  514 => 91,  511 => 90,  493 => 89,  488 => 87,  479 => 82,  476 => 81,  473 => 80,  467 => 78,  460 => 76,  457 => 75,  454 => 74,  448 => 72,  446 => 71,  438 => 70,  436 => 69,  433 => 68,  427 => 64,  419 => 62,  410 => 60,  403 => 58,  400 => 57,  391 => 52,  367 => 43,  354 => 37,  345 => 34,  343 => 33,  340 => 32,  321 => 24,  319 => 23,  314 => 22,  288 => 14,  270 => 6,  258 => 331,  256 => 330,  254 => 329,  252 => 328,  250 => 327,  248 => 326,  242 => 323,  236 => 320,  234 => 314,  226 => 306,  224 => 299,  218 => 44,  216 => 287,  213 => 286,  198 => 259,  193 => 249,  188 => 239,  172 => 213,  162 => 199,  159 => 198,  132 => 157,  127 => 145,  122 => 129,  1033 => 302,  1029 => 370,  1026 => 300,  1024 => 368,  1022 => 367,  1019 => 366,  999 => 360,  996 => 359,  993 => 358,  990 => 357,  984 => 355,  981 => 280,  978 => 276,  972 => 351,  966 => 272,  963 => 271,  960 => 346,  944 => 344,  941 => 343,  938 => 342,  935 => 341,  932 => 254,  929 => 339,  926 => 338,  923 => 337,  920 => 336,  918 => 335,  916 => 249,  913 => 333,  904 => 240,  898 => 324,  895 => 323,  889 => 321,  887 => 320,  885 => 319,  882 => 318,  875 => 311,  868 => 229,  865 => 228,  861 => 304,  856 => 225,  853 => 224,  851 => 223,  848 => 222,  837 => 215,  834 => 287,  829 => 286,  826 => 285,  824 => 209,  809 => 282,  806 => 281,  802 => 280,  799 => 279,  781 => 278,  779 => 277,  777 => 276,  774 => 275,  766 => 269,  764 => 268,  762 => 266,  759 => 265,  749 => 261,  743 => 259,  741 => 258,  738 => 257,  730 => 252,  719 => 250,  717 => 249,  697 => 248,  694 => 247,  685 => 150,  682 => 241,  679 => 148,  676 => 147,  674 => 146,  671 => 145,  662 => 232,  659 => 136,  656 => 230,  653 => 134,  651 => 228,  648 => 227,  639 => 129,  631 => 221,  629 => 220,  627 => 219,  624 => 218,  617 => 212,  612 => 211,  610 => 210,  607 => 117,  600 => 203,  596 => 202,  590 => 200,  588 => 199,  580 => 198,  575 => 197,  572 => 196,  570 => 195,  567 => 194,  558 => 190,  555 => 189,  551 => 187,  549 => 186,  544 => 185,  540 => 98,  537 => 182,  534 => 181,  529 => 180,  523 => 177,  520 => 176,  517 => 175,  515 => 174,  512 => 173,  506 => 167,  500 => 165,  497 => 164,  491 => 88,  489 => 161,  485 => 160,  481 => 159,  465 => 77,  462 => 157,  459 => 156,  456 => 155,  453 => 154,  450 => 153,  447 => 152,  444 => 151,  442 => 150,  439 => 149,  430 => 144,  428 => 143,  423 => 142,  420 => 141,  417 => 140,  414 => 61,  412 => 138,  409 => 137,  401 => 131,  398 => 130,  396 => 129,  393 => 128,  385 => 50,  380 => 48,  377 => 47,  368 => 115,  364 => 114,  356 => 112,  351 => 36,  342 => 108,  339 => 107,  337 => 106,  326 => 100,  315 => 98,  310 => 97,  307 => 96,  301 => 94,  298 => 93,  296 => 92,  282 => 85,  279 => 83,  278 => 82,  276 => 8,  273 => 80,  267 => 5,  265 => 4,  263 => 76,  260 => 75,  253 => 70,  246 => 325,  244 => 324,  229 => 307,  217 => 62,  195 => 258,  186 => 36,  181 => 35,  179 => 49,  138 => 33,  80 => 18,  268 => 4,  251 => 69,  241 => 83,  231 => 313,  219 => 63,  208 => 270,  206 => 265,  204 => 71,  196 => 66,  190 => 248,  185 => 238,  183 => 59,  180 => 222,  175 => 54,  173 => 53,  165 => 48,  158 => 44,  135 => 37,  111 => 31,  67 => 13,  108 => 13,  18 => 2,  75 => 23,  54 => 6,  97 => 68,  88 => 20,  60 => 13,  63 => 9,  51 => 15,  171 => 61,  167 => 206,  164 => 33,  154 => 191,  146 => 28,  115 => 34,  95 => 53,  84 => 46,  38 => 20,  21 => 1,  405 => 59,  399 => 144,  394 => 141,  386 => 138,  382 => 49,  378 => 134,  369 => 132,  365 => 42,  362 => 41,  360 => 113,  355 => 127,  352 => 126,  348 => 35,  338 => 117,  334 => 105,  332 => 27,  327 => 26,  323 => 99,  318 => 109,  312 => 21,  309 => 20,  306 => 103,  304 => 102,  299 => 99,  293 => 16,  290 => 15,  287 => 93,  285 => 13,  280 => 84,  266 => 3,  262 => 3,  247 => 84,  239 => 322,  237 => 81,  232 => 79,  228 => 78,  221 => 298,  215 => 72,  211 => 271,  202 => 70,  200 => 40,  177 => 221,  174 => 219,  168 => 44,  166 => 43,  144 => 177,  140 => 26,  126 => 44,  123 => 29,  105 => 16,  36 => 16,  142 => 172,  139 => 171,  133 => 32,  124 => 144,  107 => 17,  101 => 30,  65 => 16,  59 => 2,  45 => 5,  223 => 96,  214 => 61,  210 => 74,  203 => 41,  199 => 54,  194 => 38,  192 => 79,  189 => 78,  187 => 61,  184 => 76,  178 => 34,  170 => 51,  157 => 192,  152 => 30,  145 => 55,  130 => 48,  125 => 30,  119 => 128,  116 => 20,  112 => 108,  102 => 87,  98 => 15,  76 => 17,  73 => 23,  69 => 11,  32 => 14,  103 => 12,  91 => 21,  74 => 31,  70 => 10,  66 => 16,  56 => 21,  25 => 1,  89 => 56,  82 => 41,  42 => 7,  26 => 10,  22 => 8,  23 => 3,  17 => 13,  92 => 57,  86 => 17,  77 => 32,  57 => 7,  29 => 12,  24 => 9,  19 => 2,  68 => 13,  61 => 9,  44 => 4,  20 => 32,  161 => 45,  153 => 58,  150 => 36,  147 => 178,  143 => 46,  137 => 25,  129 => 156,  121 => 41,  118 => 36,  113 => 19,  104 => 101,  99 => 86,  94 => 67,  81 => 14,  78 => 25,  72 => 20,  64 => 12,  53 => 20,  50 => 4,  48 => 3,  41 => 2,  39 => 4,  35 => 19,  33 => 15,  30 => 14,  27 => 33,  182 => 236,  176 => 48,  169 => 212,  163 => 42,  160 => 57,  155 => 60,  151 => 54,  149 => 184,  141 => 34,  136 => 51,  134 => 164,  131 => 23,  128 => 22,  120 => 28,  117 => 114,  114 => 113,  109 => 107,  106 => 28,  100 => 55,  96 => 31,  93 => 22,  90 => 25,  87 => 47,  83 => 16,  79 => 40,  71 => 12,  62 => 14,  58 => 22,  55 => 80,  52 => 8,  49 => 18,  46 => 8,  43 => 28,  40 => 27,  37 => 19,  34 => 13,  31 => 5,  28 => 9,);
    }
}
