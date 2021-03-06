<?php

/* ::base.html.twig */
class __TwigTemplate_bd3e7b14b4411c3318cda5c89b2e994c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 159,  333 => 157,  300 => 137,  286 => 129,  272 => 121,  257 => 109,  209 => 81,  201 => 77,  156 => 56,  788 => 469,  785 => 468,  770 => 465,  753 => 462,  727 => 457,  724 => 456,  688 => 453,  684 => 451,  680 => 450,  672 => 448,  668 => 447,  664 => 446,  616 => 437,  611 => 435,  556 => 401,  538 => 398,  518 => 396,  516 => 395,  148 => 75,  383 => 159,  375 => 157,  358 => 152,  350 => 149,  331 => 156,  328 => 140,  325 => 139,  271 => 110,  245 => 97,  243 => 101,  207 => 73,  205 => 95,  274 => 248,  255 => 234,  238 => 93,  85 => 26,  12 => 1,  212 => 82,  197 => 39,  191 => 68,  110 => 39,  47 => 12,  1174 => 331,  1168 => 330,  1162 => 329,  1156 => 328,  1150 => 327,  1144 => 326,  1138 => 325,  1132 => 324,  1126 => 323,  1110 => 317,  1103 => 316,  1101 => 315,  1098 => 314,  1075 => 310,  1050 => 309,  1048 => 308,  1045 => 307,  1028 => 301,  1023 => 299,  1014 => 293,  1008 => 291,  1005 => 290,  1000 => 289,  998 => 288,  995 => 287,  988 => 282,  974 => 275,  971 => 274,  968 => 273,  955 => 267,  953 => 266,  950 => 265,  943 => 260,  940 => 259,  928 => 253,  924 => 252,  921 => 251,  919 => 250,  908 => 245,  906 => 241,  901 => 239,  880 => 233,  877 => 232,  874 => 231,  871 => 230,  862 => 227,  859 => 226,  840 => 216,  835 => 214,  832 => 213,  821 => 208,  819 => 207,  816 => 206,  808 => 202,  805 => 201,  803 => 200,  800 => 199,  792 => 195,  789 => 194,  787 => 193,  784 => 192,  776 => 188,  773 => 187,  771 => 186,  768 => 185,  760 => 181,  757 => 180,  755 => 179,  752 => 178,  744 => 174,  742 => 173,  739 => 172,  731 => 168,  728 => 167,  726 => 166,  723 => 165,  715 => 161,  712 => 160,  710 => 159,  708 => 158,  705 => 454,  698 => 152,  690 => 151,  663 => 139,  661 => 445,  660 => 137,  658 => 135,  647 => 132,  644 => 131,  642 => 443,  630 => 123,  626 => 122,  622 => 121,  618 => 120,  613 => 119,  604 => 433,  602 => 432,  599 => 114,  583 => 110,  581 => 109,  578 => 108,  562 => 104,  560 => 103,  557 => 102,  528 => 96,  521 => 397,  519 => 92,  514 => 91,  511 => 393,  493 => 89,  488 => 87,  479 => 82,  476 => 81,  473 => 80,  467 => 78,  460 => 76,  457 => 75,  454 => 74,  448 => 72,  446 => 71,  438 => 70,  436 => 69,  433 => 68,  427 => 64,  419 => 62,  410 => 60,  403 => 58,  400 => 57,  391 => 52,  367 => 43,  354 => 163,  345 => 160,  343 => 33,  340 => 146,  321 => 149,  319 => 23,  314 => 145,  288 => 14,  270 => 6,  258 => 235,  256 => 103,  254 => 329,  252 => 101,  250 => 105,  248 => 326,  242 => 323,  236 => 97,  234 => 314,  226 => 89,  224 => 86,  218 => 44,  216 => 287,  213 => 79,  198 => 259,  193 => 249,  188 => 89,  172 => 67,  162 => 63,  159 => 80,  132 => 54,  127 => 145,  122 => 129,  1033 => 302,  1029 => 370,  1026 => 300,  1024 => 368,  1022 => 367,  1019 => 366,  999 => 360,  996 => 359,  993 => 358,  990 => 357,  984 => 355,  981 => 280,  978 => 276,  972 => 351,  966 => 272,  963 => 271,  960 => 346,  944 => 344,  941 => 343,  938 => 342,  935 => 341,  932 => 254,  929 => 339,  926 => 338,  923 => 337,  920 => 336,  918 => 335,  916 => 249,  913 => 333,  904 => 240,  898 => 324,  895 => 323,  889 => 321,  887 => 320,  885 => 319,  882 => 318,  875 => 311,  868 => 229,  865 => 228,  861 => 304,  856 => 225,  853 => 224,  851 => 223,  848 => 222,  837 => 215,  834 => 287,  829 => 286,  826 => 285,  824 => 209,  809 => 282,  806 => 281,  802 => 280,  799 => 279,  781 => 278,  779 => 277,  777 => 276,  774 => 466,  766 => 463,  764 => 268,  762 => 266,  759 => 265,  749 => 261,  743 => 259,  741 => 258,  738 => 257,  730 => 252,  719 => 250,  717 => 249,  697 => 248,  694 => 247,  685 => 150,  682 => 241,  679 => 148,  676 => 449,  674 => 146,  671 => 145,  662 => 232,  659 => 444,  656 => 230,  653 => 134,  651 => 228,  648 => 227,  639 => 129,  631 => 442,  629 => 220,  627 => 219,  624 => 218,  617 => 212,  612 => 211,  610 => 210,  607 => 434,  600 => 203,  596 => 202,  590 => 200,  588 => 431,  580 => 198,  575 => 197,  572 => 196,  570 => 195,  567 => 194,  558 => 190,  555 => 189,  551 => 187,  549 => 186,  544 => 185,  540 => 98,  537 => 182,  534 => 181,  529 => 180,  523 => 177,  520 => 176,  517 => 175,  515 => 174,  512 => 173,  506 => 391,  500 => 165,  497 => 164,  491 => 88,  489 => 161,  485 => 160,  481 => 159,  465 => 77,  462 => 157,  459 => 156,  456 => 155,  453 => 154,  450 => 153,  447 => 152,  444 => 151,  442 => 150,  439 => 149,  430 => 144,  428 => 143,  423 => 142,  420 => 141,  417 => 140,  414 => 61,  412 => 138,  409 => 137,  401 => 131,  398 => 130,  396 => 129,  393 => 128,  385 => 50,  380 => 48,  377 => 158,  368 => 156,  364 => 155,  356 => 112,  351 => 36,  342 => 147,  339 => 107,  337 => 145,  326 => 100,  315 => 98,  310 => 97,  307 => 141,  301 => 94,  298 => 93,  296 => 92,  282 => 85,  279 => 125,  278 => 114,  276 => 8,  273 => 111,  267 => 5,  265 => 4,  263 => 76,  260 => 236,  253 => 70,  246 => 325,  244 => 324,  229 => 88,  217 => 62,  195 => 258,  186 => 69,  181 => 63,  179 => 87,  138 => 49,  80 => 26,  268 => 4,  251 => 69,  241 => 83,  231 => 313,  219 => 83,  208 => 270,  206 => 265,  204 => 78,  196 => 69,  190 => 72,  185 => 238,  183 => 68,  180 => 64,  175 => 59,  173 => 53,  165 => 64,  158 => 59,  135 => 37,  111 => 40,  67 => 11,  108 => 38,  18 => 1,  75 => 21,  54 => 12,  97 => 68,  88 => 27,  60 => 16,  63 => 17,  51 => 5,  171 => 85,  167 => 56,  164 => 82,  154 => 77,  146 => 58,  115 => 44,  95 => 23,  84 => 29,  38 => 8,  21 => 1,  405 => 59,  399 => 144,  394 => 141,  386 => 160,  382 => 49,  378 => 134,  369 => 132,  365 => 42,  362 => 41,  360 => 153,  355 => 151,  352 => 150,  348 => 35,  338 => 158,  334 => 105,  332 => 27,  327 => 26,  323 => 150,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  299 => 125,  293 => 133,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  266 => 107,  262 => 105,  247 => 84,  239 => 322,  237 => 81,  232 => 89,  228 => 78,  221 => 298,  215 => 83,  211 => 271,  202 => 71,  200 => 73,  177 => 221,  174 => 61,  168 => 60,  166 => 43,  144 => 177,  140 => 26,  126 => 45,  123 => 44,  105 => 37,  36 => 7,  142 => 73,  139 => 171,  133 => 47,  124 => 61,  107 => 51,  101 => 25,  65 => 18,  59 => 12,  45 => 12,  223 => 88,  214 => 61,  210 => 78,  203 => 71,  199 => 54,  194 => 92,  192 => 79,  189 => 70,  187 => 61,  184 => 76,  178 => 34,  170 => 64,  157 => 192,  152 => 54,  145 => 58,  130 => 47,  125 => 52,  119 => 45,  116 => 29,  112 => 39,  102 => 31,  98 => 35,  76 => 24,  73 => 23,  69 => 21,  32 => 5,  103 => 41,  91 => 28,  74 => 34,  70 => 21,  66 => 20,  56 => 14,  25 => 5,  89 => 35,  82 => 25,  42 => 11,  26 => 3,  22 => 3,  23 => 29,  17 => 1,  92 => 33,  86 => 30,  77 => 23,  57 => 6,  29 => 4,  24 => 3,  19 => 1,  68 => 20,  61 => 16,  44 => 10,  20 => 2,  161 => 81,  153 => 58,  150 => 36,  147 => 178,  143 => 57,  137 => 71,  129 => 46,  121 => 35,  118 => 50,  113 => 40,  104 => 101,  99 => 33,  94 => 35,  81 => 24,  78 => 32,  72 => 22,  64 => 19,  53 => 13,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 7,  33 => 7,  30 => 5,  27 => 5,  182 => 70,  176 => 62,  169 => 66,  163 => 60,  160 => 53,  155 => 60,  151 => 62,  149 => 53,  141 => 56,  136 => 55,  134 => 164,  131 => 31,  128 => 53,  120 => 51,  117 => 45,  114 => 41,  109 => 107,  106 => 33,  100 => 30,  96 => 29,  93 => 36,  90 => 31,  87 => 29,  83 => 29,  79 => 24,  71 => 20,  62 => 10,  58 => 15,  55 => 14,  52 => 13,  49 => 11,  46 => 11,  43 => 11,  40 => 10,  37 => 6,  34 => 5,  31 => 6,  28 => 3,);
    }
}
