<?php

/* MopaBootstrapBundle:Form:fields.html.twig */
class __TwigTemplate_c34aecc11dfc1cc9c1adfbe818794f28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'form_legend' => array($this, 'block_form_legend'),
            'form_label' => array($this, 'block_form_label'),
            'form_rows_visible' => array($this, 'block_form_rows_visible'),
            'form_row' => array($this, 'block_form_row'),
            'form_message' => array($this, 'block_form_message'),
            'form_help' => array($this, 'block_form_help'),
            'form_widget_add_btn' => array($this, 'block_form_widget_add_btn'),
            'form_widget_remove_btn' => array($this, 'block_form_widget_remove_btn'),
            'collection_button' => array($this, 'block_collection_button'),
            'label_asterisk' => array($this, 'block_label_asterisk'),
            'widget_addon' => array($this, 'block_widget_addon'),
            'form_errors' => array($this, 'block_form_errors'),
            'field_errors' => array($this, 'block_field_errors'),
            'error_type' => array($this, 'block_error_type'),
            'widget_control_group_start' => array($this, 'block_widget_control_group_start'),
            'widget_control_group_end' => array($this, 'block_widget_control_group_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["__internal_82f24bc1cf0ceda57fb3b5b8d60e405d1e12c146"] = $this->env->loadTemplate("MopaBootstrapBundle::flash.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 7
        ob_start();
        // line 8
        echo "    ";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "text")) : ("text"));
        // line 9
        echo "    ";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (isset($context["widget_addon"])) { $_widget_addon_ = $context["widget_addon"]; } else { $_widget_addon_ = null; }
        if ((($_type_ != "hidden") && (!(null === (($this->getAttribute($_widget_addon_, "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_widget_addon_, "type"), null)) : (null)))))) {
            // line 10
            echo "    <div class=\"input-";
            if (isset($context["widget_addon"])) { $_widget_addon_ = $context["widget_addon"]; } else { $_widget_addon_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_widget_addon_, "type"), "html", null, true);
            echo "\">
        ";
            // line 11
            if (isset($context["widget_addon"])) { $_widget_addon_ = $context["widget_addon"]; } else { $_widget_addon_ = null; }
            if (($this->getAttribute($_widget_addon_, "type") == "prepend")) {
                // line 12
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 14
            echo "    ";
        }
        // line 15
        echo "    ";
        if (isset($context["widget_remove_btn"])) { $_widget_remove_btn_ = $context["widget_remove_btn"]; } else { $_widget_remove_btn_ = null; }
        if ((!((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter($_widget_remove_btn_, null)) : (null)))) {
            // line 16
            echo "        ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => ((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class"), "")) : ("")) . " not-removable")));
            // line 17
            echo "    ";
        }
        // line 18
        echo "    <input type=\"";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        echo twig_escape_filter($this->env, $_type_, "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        if ((!twig_test_empty($_value_))) {
            echo "value=\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        // line 19
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (isset($context["widget_addon"])) { $_widget_addon_ = $context["widget_addon"]; } else { $_widget_addon_ = null; }
        if ((($_type_ != "hidden") && (!(null === (($this->getAttribute($_widget_addon_, "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_widget_addon_, "type"), null)) : (null)))))) {
            // line 20
            echo "        ";
            if (isset($context["widget_addon"])) { $_widget_addon_ = $context["widget_addon"]; } else { $_widget_addon_ = null; }
            if (($this->getAttribute($_widget_addon_, "type") == "append")) {
                // line 21
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 23
            echo "    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 28
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 29
        ob_start();
        // line 30
        echo "    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ((!$this->getAttribute($_form_, "hasParent", array(), "method"))) {
            // line 31
            echo "        ";
            if (isset($context["render_fieldset"])) { $_render_fieldset_ = $context["render_fieldset"]; } else { $_render_fieldset_ = null; }
            if ($_render_fieldset_) {
                echo "<fieldset>";
            }
            // line 32
            echo "        ";
            if (isset($context["show_legend"])) { $_show_legend_ = $context["show_legend"]; } else { $_show_legend_ = null; }
            if ($_show_legend_) {
                $this->displayBlock("form_legend", $context, $blocks);
            }
            // line 33
            echo "    ";
        }
        // line 34
        echo "    ";
        $this->displayBlock("form_rows_visible", $context, $blocks);
        echo "
    ";
        // line 35
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
    ";
        // line 36
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ((!$this->getAttribute($_form_, "hasParent", array(), "method"))) {
            // line 37
            echo "        ";
            if (isset($context["render_fieldset"])) { $_render_fieldset_ = $context["render_fieldset"]; } else { $_render_fieldset_ = null; }
            if ($_render_fieldset_) {
                echo "</fieldset>";
            }
            // line 38
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 42
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 43
        ob_start();
        // line 44
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 48
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 49
        ob_start();
        // line 50
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 51
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 52
            echo "        <label class=\"";
            if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
            if (isset($context["widget_type"])) { $_widget_type_ = $context["widget_type"]; } else { $_widget_type_ = null; }
            if (isset($context["inline"])) { $_inline_ = $context["inline"]; } else { $_inline_ = null; }
            echo twig_escape_filter($this->env, (((($_multiple_) ? ("checkbox") : ("radio")) . (($_widget_type_) ? ((" " . $_widget_type_)) : (""))) . (((array_key_exists("inline", $context) && $_inline_)) ? (" inline") : (""))), "html", null, true);
            echo "\">
            ";
            // line 53
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget', array("attr" => array("class" => (($this->getAttribute($_attr_, "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "widget_class"), "")) : ("")))));
            echo "
            ";
            // line 54
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($_child_, "vars"), "label"), array(), $_translation_domain_), "html", null, true);
            echo "
        </label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 57
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 61
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 62
        ob_start();
        // line 63
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (($this->getAttribute($_form_, "hasParent", array(), "method") && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute($_form_, "parent"), "vars"), "block_prefixes")))) {
            // line 64
            echo "    <label class=\"checkbox";
            if (isset($context["inline"])) { $_inline_ = $context["inline"]; } else { $_inline_ = null; }
            if ((array_key_exists("inline", $context) && $_inline_)) {
                echo " inline";
            }
            echo "\">
";
        }
        // line 66
        echo "        <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\"";
        }
        if (isset($context["checked"])) { $_checked_ = $context["checked"]; } else { $_checked_ = null; }
        if ($_checked_) {
            echo " checked=\"checked\"";
        }
        echo "> ";
        if (isset($context["help_inline"])) { $_help_inline_ = $context["help_inline"]; } else { $_help_inline_ = null; }
        if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
        echo $this->env->getExtension('translator')->trans($_help_inline_, array(), $_translation_domain_);
        echo "
";
        // line 67
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (($this->getAttribute($_form_, "hasParent", array(), "method") && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute($_form_, "parent"), "vars"), "block_prefixes")))) {
            // line 68
            echo "        ";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_), "html", null, true);
            echo "
        ";
            // line 69
            $context["help_inline"] = false;
            // line 70
            echo "    </label>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 75
    public function block_date_widget($context, array $blocks = array())
    {
        // line 76
        ob_start();
        // line 77
        if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
        if (($_widget_ == "single_text")) {
            // line 78
            echo "    ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
";
        } else {
            // line 80
            echo "        ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => (($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class"), "inline")) : ("inline"))));
            // line 81
            echo "            ";
            if (isset($context["date_pattern"])) { $_date_pattern_ = $context["date_pattern"]; } else { $_date_pattern_ = null; }
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            echo strtr($_date_pattern_, array("{{ year }}" =>             // line 82
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "year"), 'widget', array("attr" => array("class" => ((($this->getAttribute($_attr_, "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "widget_class"), "")) : ("")) . " input-small")))), "{{ month }}" =>             // line 83
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "month"), 'widget', array("attr" => array("class" => ((($this->getAttribute($_attr_, "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "widget_class"), "")) : ("")) . " input-mini")))), "{{ day }}" =>             // line 84
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "day"), 'widget', array("attr" => array("class" => ((($this->getAttribute($_attr_, "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "widget_class"), "")) : ("")) . " input-mini"))))));
            // line 85
            echo "
        ";
            // line 86
            $this->displayBlock("help", $context, $blocks);
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 91
    public function block_time_widget($context, array $blocks = array())
    {
        // line 92
        ob_start();
        // line 93
        echo "    ";
        if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
        if (($_widget_ == "single_text")) {
            // line 94
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 96
            echo "        ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => (($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class"), "")) : (""))));
            // line 97
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 98
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "hour"), 'widget', array("attr" => array("size" => "1", "class" => "input-mini")));
            echo ":";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "minute"), 'widget', array("attr" => array("size" => "1", "class" => "input-mini")));
            if (isset($context["with_seconds"])) { $_with_seconds_ = $context["with_seconds"]; } else { $_with_seconds_ = null; }
            if ($_with_seconds_) {
                echo ":";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "second"), 'widget', array("attr" => array("size" => "1", "class" => "input-mini")));
            }
            // line 99
            echo "        </div>
        ";
            // line 100
            $this->displayBlock("help", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 105
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 106
        ob_start();
        // line 107
        echo "    ";
        if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
        if (($_widget_ == "single_text")) {
            // line 108
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 110
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => (($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class"), "")) : (""))));
            // line 111
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 112
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "date"), 'errors');
            echo "
                ";
            // line 113
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "time"), 'errors');
            echo "
                ";
            // line 114
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "date"), 'widget', array("attr" => array("class" => (($this->getAttribute($_attr_, "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "widget_class"), "")) : ("")))));
            echo "
                ";
            // line 115
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "time"), 'widget', array("attr" => array("class" => (($this->getAttribute($_attr_, "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "widget_class"), "")) : ("")))));
            echo "
            </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 121
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 122
        ob_start();
        // line 123
        echo "    ";
        if (isset($context["widget_addon"])) { $_widget_addon_ = $context["widget_addon"]; } else { $_widget_addon_ = null; }
        $context["widget_addon"] = twig_array_merge($_widget_addon_, array("text" => (($this->getAttribute($_widget_addon_, "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_widget_addon_, "text"), "%")) : ("%"))));
        // line 124
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 128
    public function block_money_widget($context, array $blocks = array())
    {
        // line 129
        ob_start();
        // line 130
        echo "    ";
        if (isset($context["widget_addon"])) { $_widget_addon_ = $context["widget_addon"]; } else { $_widget_addon_ = null; }
        if (isset($context["money_pattern"])) { $_money_pattern_ = $context["money_pattern"]; } else { $_money_pattern_ = null; }
        $context["widget_addon"] = twig_array_merge($_widget_addon_, array("text" => strtr($_money_pattern_, array("{{ widget }}" => ""))));
        // line 131
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 137
    public function block_form_legend($context, array $blocks = array())
    {
        // line 138
        ob_start();
        // line 139
        echo "    ";
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        if (twig_test_empty($_label_)) {
            // line 140
            echo "        ";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            $context["label"] = $this->env->getExtension('form')->renderer->humanize($_name_);
            // line 141
            echo "    ";
        }
        // line 142
        echo "    <legend>";
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_), "html", null, true);
        echo "</legend>
    ";
        // line 143
        if (isset($context["widget_add_btn"])) { $_widget_add_btn_ = $context["widget_add_btn"]; } else { $_widget_add_btn_ = null; }
        if ($_widget_add_btn_) {
            // line 144
            echo "        ";
            $this->displayBlock("form_widget_add_btn", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 149
    public function block_form_label($context, array $blocks = array())
    {
        // line 150
        ob_start();
        // line 151
        echo "    ";
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        if (twig_test_empty($_label_)) {
            // line 152
            echo "        ";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            $context["label"] = $this->env->getExtension('form')->renderer->humanize($_name_);
            // line 153
            echo "    ";
        }
        // line 154
        echo "    ";
        if (isset($context["compound"])) { $_compound_ = $context["compound"]; } else { $_compound_ = null; }
        if ((!$_compound_)) {
            // line 155
            echo "        ";
            if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            $context["label_attr"] = twig_array_merge($_label_attr_, array("for" => $_id_));
            // line 156
            echo "    ";
        }
        // line 157
        echo "    ";
        if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
        if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
        $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => (((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class"), "")) : ("")) . " control-label") . (($_required_) ? (" required") : (" optional")))));
        // line 158
        echo "    <label";
        if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_label_attr_);
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
            echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
            echo "=\"";
            if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
            echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ">
    ";
        // line 159
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_), "html", null, true);
        echo "
    ";
        // line 160
        $this->displayBlock("label_asterisk", $context, $blocks);
        echo "
    ";
        // line 161
        if (isset($context["widget_add_btn"])) { $_widget_add_btn_ = $context["widget_add_btn"]; } else { $_widget_add_btn_ = null; }
        if ($_widget_add_btn_) {
            // line 162
            echo "        ";
            $this->displayBlock("form_widget_add_btn", $context, $blocks);
            echo "
    ";
        }
        // line 164
        echo "    ";
        if (isset($context["help_label"])) { $_help_label_ = $context["help_label"]; } else { $_help_label_ = null; }
        if ($_help_label_) {
            // line 165
            echo "        <p class=\"help-block\">";
            if (isset($context["help_label"])) { $_help_label_ = $context["help_label"]; } else { $_help_label_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_help_label_, array(), $_translation_domain_), "html", null, true);
            echo "</p>
    ";
        }
        // line 167
        echo "    </label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 173
    public function block_form_rows_visible($context, array $blocks = array())
    {
        // line 174
        ob_start();
        // line 175
        echo "    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors')) {
            // line 176
            echo "        <div class=\"symfony-form-errors\">
            ";
            // line 177
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            echo "
        </div>
    ";
        }
        // line 180
        echo "    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 181
            echo "        ";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($_child_, "vars"), "block_prefixes"))) {
                // line 182
                echo "            ";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["omit_collection_item"])) { $_omit_collection_item_ = $context["omit_collection_item"]; } else { $_omit_collection_item_ = null; }
                if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute($_form_, "vars"), "block_prefixes")) && (!$_omit_collection_item_))) {
                    // line 183
                    echo "            <div class=\"collection-item\">
            ";
                }
                // line 185
                echo "            ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'row');
                echo "
            ";
                // line 186
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["omit_collection_item"])) { $_omit_collection_item_ = $context["omit_collection_item"]; } else { $_omit_collection_item_ = null; }
                if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute($_form_, "vars"), "block_prefixes")) && (!$_omit_collection_item_))) {
                    // line 187
                    echo "            </div>
            ";
                }
                // line 189
                echo "        ";
            }
            // line 190
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 194
    public function block_form_row($context, array $blocks = array())
    {
        // line 195
        ob_start();
        // line 196
        echo "    ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        $context["attr"] = twig_array_merge($_attr_, array("class" => ((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class"), "")) : ("")) . (((twig_length_filter($this->env, $_errors_) > 0)) ? (" error") : ("")))));
        // line 197
        echo "    ";
        $this->displayBlock("widget_control_group_start", $context, $blocks);
        echo "
    ";
        // line 198
        if (isset($context["widget_prefix"])) { $_widget_prefix_ = $context["widget_prefix"]; } else { $_widget_prefix_ = null; }
        echo $_widget_prefix_;
        echo " ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget', $context);
        echo " ";
        if (isset($context["widget_suffix"])) { $_widget_suffix_ = $context["widget_suffix"]; } else { $_widget_suffix_ = null; }
        echo $_widget_suffix_;
        echo "
    ";
        // line 199
        if (array_key_exists("widget_remove_btn", $context)) {
            // line 200
            echo "        ";
            $this->displayBlock("form_widget_remove_btn", $context, $blocks);
            echo "
    ";
        }
        // line 202
        $this->displayBlock("form_message", $context, $blocks);
        echo "
    ";
        // line 203
        $this->displayBlock("widget_control_group_end", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 209
    public function block_form_message($context, array $blocks = array())
    {
        // line 210
        ob_start();
        // line 211
        echo "    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "
    ";
        // line 212
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 218
    public function block_form_help($context, array $blocks = array())
    {
        // line 219
        ob_start();
        // line 220
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (!twig_in_filter("checkbox", $this->getAttribute($this->getAttribute($_form_, "vars"), "block_prefixes"))) {
            // line 221
            echo "    ";
            if (isset($context["help_inline"])) { $_help_inline_ = $context["help_inline"]; } else { $_help_inline_ = null; }
            if ($_help_inline_) {
                echo "<p class=\"help-inline\">";
                if (isset($context["help_inline"])) { $_help_inline_ = $context["help_inline"]; } else { $_help_inline_ = null; }
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                echo $this->env->getExtension('translator')->trans($_help_inline_, array(), $_translation_domain_);
                echo "</p>";
            }
        }
        // line 223
        if (isset($context["help_block"])) { $_help_block_ = $context["help_block"]; } else { $_help_block_ = null; }
        if ($_help_block_) {
            echo "<p class=\"help-block\">";
            if (isset($context["help_block"])) { $_help_block_ = $context["help_block"]; } else { $_help_block_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo $this->env->getExtension('translator')->trans($_help_block_, array(), $_translation_domain_);
            echo "</p>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 227
    public function block_form_widget_add_btn($context, array $blocks = array())
    {
        // line 228
        ob_start();
        // line 229
        echo "    ";
        if (isset($context["widget_add_btn"])) { $_widget_add_btn_ = $context["widget_add_btn"]; } else { $_widget_add_btn_ = null; }
        if ($_widget_add_btn_) {
            // line 230
            echo "    ";
            $context["button_type"] = "add";
            // line 231
            echo "    ";
            if (isset($context["widget_add_btn"])) { $_widget_add_btn_ = $context["widget_add_btn"]; } else { $_widget_add_btn_ = null; }
            $context["button_values"] = $_widget_add_btn_;
            // line 232
            echo "    ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 237
    public function block_form_widget_remove_btn($context, array $blocks = array())
    {
        // line 238
        ob_start();
        // line 239
        echo "    ";
        if (isset($context["widget_remove_btn"])) { $_widget_remove_btn_ = $context["widget_remove_btn"]; } else { $_widget_remove_btn_ = null; }
        if ($_widget_remove_btn_) {
            // line 240
            echo "    ";
            $context["button_type"] = "remove";
            // line 241
            echo "    ";
            if (isset($context["widget_remove_btn"])) { $_widget_remove_btn_ = $context["widget_remove_btn"]; } else { $_widget_remove_btn_ = null; }
            $context["button_values"] = $_widget_remove_btn_;
            // line 242
            echo "    ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 247
    public function block_collection_button($context, array $blocks = array())
    {
        // line 248
        echo "<a ";
        if (isset($context["button_values"])) { $_button_values_ = $context["button_values"]; } else { $_button_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_button_values_, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
            echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
            echo "=\"";
            if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
            echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo " data-collection-";
        if (isset($context["button_type"])) { $_button_type_ = $context["button_type"]; } else { $_button_type_ = null; }
        echo twig_escape_filter($this->env, $_button_type_, "html", null, true);
        echo "-btn=\"#";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars"), "id", array(), "array"), "html", null, true);
        echo "_control_group\">
";
        // line 249
        if (isset($context["button_values"])) { $_button_values_ = $context["button_values"]; } else { $_button_values_ = null; }
        if ($this->getAttribute($_button_values_, "icon", array(), "any", true, true)) {
            // line 250
            echo "<i class=\"icon-";
            if (isset($context["button_values"])) { $_button_values_ = $context["button_values"]; } else { $_button_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_button_values_, "icon"), "html", null, true);
            echo " ";
            if (isset($context["button_values"])) { $_button_values_ = $context["button_values"]; } else { $_button_values_ = null; }
            if ($this->getAttribute($_button_values_, "icon_color", array(), "any", true, true)) {
                echo "icon-";
                if (isset($context["button_values"])) { $_button_values_ = $context["button_values"]; } else { $_button_values_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_button_values_, "icon_color"), "html", null, true);
            }
            echo "\"></i>
";
        }
        // line 252
        if (isset($context["button_values"])) { $_button_values_ = $context["button_values"]; } else { $_button_values_ = null; }
        if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_button_values_, "label"), array(), $_translation_domain_), "html", null, true);
        echo "
</a>

";
    }

    // line 257
    public function block_label_asterisk($context, array $blocks = array())
    {
        // line 258
        if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
        if ($_required_) {
            // line 259
            echo "    ";
            if (isset($context["render_required_asterisk"])) { $_render_required_asterisk_ = $context["render_required_asterisk"]; } else { $_render_required_asterisk_ = null; }
            if ($_render_required_asterisk_) {
                echo "<span>*</span>";
            }
        } else {
            // line 261
            echo "    ";
            if (isset($context["render_optional_text"])) { $_render_optional_text_ = $context["render_optional_text"]; } else { $_render_optional_text_ = null; }
            if ($_render_optional_text_) {
                echo "<span>";
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("(optional)", array(), $_translation_domain_), "html", null, true);
                echo "</span>";
            }
        }
    }

    // line 265
    public function block_widget_addon($context, array $blocks = array())
    {
        // line 266
        ob_start();
        // line 268
        $context["__internal_3a7afd21aaf678f2d4d5ccbb4d0e5b9fb96e51ed"] = $this->env->loadTemplate("MopaBootstrapBundle::icons.html.twig");
        // line 269
        echo "<span class=\"add-on\">";
        if (isset($context["widget_addon"])) { $_widget_addon_ = $context["widget_addon"]; } else { $_widget_addon_ = null; }
        echo (((($this->getAttribute($_widget_addon_, "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_widget_addon_, "text"), false)) : (false))) ? ($this->getAttribute($_widget_addon_, "text")) : ($context["__internal_3a7afd21aaf678f2d4d5ccbb4d0e5b9fb96e51ed"]->geticon($this->getAttribute($_widget_addon_, "icon"))));
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 275
    public function block_form_errors($context, array $blocks = array())
    {
        // line 276
        ob_start();
        // line 277
        if (isset($context["error_delay"])) { $_error_delay_ = $context["error_delay"]; } else { $_error_delay_ = null; }
        if ($_error_delay_) {
            // line 278
            echo "    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_form_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 279
                echo "        ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (($this->getAttribute($_loop_, "index") == 1)) {
                    // line 280
                    echo "            ";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
                    if ($this->getAttribute($_child_, "set", array(0 => "errors", 1 => $_errors_), "method")) {
                    }
                    // line 281
                    echo "        ";
                }
                // line 282
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } else {
            // line 284
            echo "    ";
            // line 285
            echo "    ";
            $context["__internal_fc054e683cc4bace2cda6625dadee2f43a0a565d"] = $this->env->loadTemplate("MopaBootstrapBundle::flash.html.twig");
            // line 286
            echo "    ";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_errors_);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "        ";
                if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                echo $context["__internal_fc054e683cc4bace2cda6625dadee2f43a0a565d"]->getflash("error", (((null === $this->getAttribute($_error_, "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute($_error_, "messageTemplate"), $this->getAttribute($_error_, "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute($_error_, "messageTemplate"), $this->getAttribute($_error_, "messagePluralization"), $this->getAttribute($_error_, "messageParameters"), "validators"))));
                // line 294
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 300
    public function block_field_errors($context, array $blocks = array())
    {
        // line 301
        ob_start();
        // line 302
        echo "    ";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 303
            echo "    <span class=\"help-";
            $this->displayBlock("error_type", $context, $blocks);
            echo "\">
            ";
            // line 304
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_errors_);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 305
                echo "                ";
                if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($_error_, "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute($_error_, "messageTemplate"), $this->getAttribute($_error_, "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute($_error_, "messageTemplate"), $this->getAttribute($_error_, "messagePluralization"), $this->getAttribute($_error_, "messageParameters"), "validators"))), "html", null, true);
                // line 309
                echo " <br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 311
            echo "    </span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 318
    public function block_error_type($context, array $blocks = array())
    {
        // line 319
        ob_start();
        // line 320
        if (isset($context["error_type"])) { $_error_type_ = $context["error_type"]; } else { $_error_type_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ($_error_type_) {
            // line 321
            echo "    ";
            if (isset($context["error_type"])) { $_error_type_ = $context["error_type"]; } else { $_error_type_ = null; }
            echo twig_escape_filter($this->env, $_error_type_, "html", null, true);
            echo "
";
        } elseif (($this->getAttribute($_form_, "hasParent", array(), "method") != 0)) {
            // line 323
            echo "    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context["form"] = $this->getAttribute($_form_, "parent");
            // line 324
            echo "    ";
            $this->displayBlock("error_type", $context, $blocks);
            echo "
";
        } elseif (($this->getAttribute($_form_, "hasParent", array(), "method") == 0)) {
            // line 326
            echo "    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_form_, "vars", array(), "any", false, true), "error_type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_form_, "vars", array(), "any", false, true), "error_type"), "inline")) : ("inline")), "html", null, true);
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 333
    public function block_widget_control_group_start($context, array $blocks = array())
    {
        // line 334
        ob_start();
        // line 335
        if (isset($context["widget_control_group"])) { $_widget_control_group_ = $context["widget_control_group"]; } else { $_widget_control_group_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ((((array_key_exists("widget_control_group", $context)) ? (_twig_default_filter($_widget_control_group_, false)) : (false)) || (!$this->getAttribute($_form_, "hasParent", array(), "method")))) {
            // line 336
            echo "    ";
            if (array_key_exists("prototype", $context)) {
                // line 337
                echo "        ";
                if (isset($context["prototype"])) { $_prototype_ = $context["prototype"]; } else { $_prototype_ = null; }
                $context["data_prototype"] = (("<div class=\"collection-item\">" . $this->env->getExtension('form')->renderer->searchAndRenderBlock($_prototype_, 'row')) . "</div>");
                // line 338
                echo "        ";
                if (isset($context["widget_control_group_attr"])) { $_widget_control_group_attr_ = $context["widget_control_group_attr"]; } else { $_widget_control_group_attr_ = null; }
                if (isset($context["data_prototype"])) { $_data_prototype_ = $context["data_prototype"]; } else { $_data_prototype_ = null; }
                $context["widget_control_group_attr"] = twig_array_merge($_widget_control_group_attr_, array("data-prototype" => $_data_prototype_));
                // line 339
                echo "    ";
            }
            // line 340
            echo "    ";
            if (isset($context["widget_control_group_attr"])) { $_widget_control_group_attr_ = $context["widget_control_group_attr"]; } else { $_widget_control_group_attr_ = null; }
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            $context["widget_control_group_attr"] = twig_array_merge($_widget_control_group_attr_, array("id" => ($_id_ . "_control_group"), "class" => ((($this->getAttribute($_widget_control_group_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_widget_control_group_attr_, "class"), "")) : ("")) . " control-group")));
            // line 341
            echo "    ";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_length_filter($this->env, $_errors_) > 0)) {
                // line 342
                echo "        ";
                if (isset($context["widget_control_group_attr"])) { $_widget_control_group_attr_ = $context["widget_control_group_attr"]; } else { $_widget_control_group_attr_ = null; }
                $context["widget_control_group_attr"] = twig_array_merge($_widget_control_group_attr_, array("class" => ((($this->getAttribute($_widget_control_group_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_widget_control_group_attr_, "class"), "")) : ("")) . " error")));
                // line 343
                echo "    ";
            }
            // line 344
            echo "    <div ";
            if (isset($context["widget_control_group_attr"])) { $_widget_control_group_attr_ = $context["widget_control_group_attr"]; } else { $_widget_control_group_attr_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_widget_control_group_attr_);
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "=\"";
                if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">
    ";
            // line 346
            echo "    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ((($this->getAttribute($_form_, "hasChildren", array(), "method") && $this->getAttribute($_form_, "hasParent", array(), "method")) && !twig_in_filter("field", $this->getAttribute($this->getAttribute($_form_, "vars"), "block_prefixes")))) {
                // line 348
                echo "        ";
                if (isset($context["show_child_legend"])) { $_show_child_legend_ = $context["show_child_legend"]; } else { $_show_child_legend_ = null; }
                if (isset($context["label_render"])) { $_label_render_ = $context["label_render"]; } else { $_label_render_ = null; }
                if ($_show_child_legend_) {
                    // line 349
                    echo "            ";
                    $this->displayBlock("form_legend", $context, $blocks);
                    echo "
        ";
                } elseif ($_label_render_) {
                    // line 351
                    echo "            ";
                    if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($_label_, null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 353
                echo "    ";
            } else {
                // line 354
                echo "        ";
                if (isset($context["label_render"])) { $_label_render_ = $context["label_render"]; } else { $_label_render_ = null; }
                if ($_label_render_) {
                    // line 355
                    echo "            ";
                    if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($_label_, null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 357
                echo "    ";
            }
            // line 358
            echo "    ";
            if (isset($context["widget_controls"])) { $_widget_controls_ = $context["widget_controls"]; } else { $_widget_controls_ = null; }
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ((((array_key_exists("widget_controls", $context)) ? (_twig_default_filter($_widget_controls_, false)) : (false)) || (!$this->getAttribute($_form_, "hasParent", array(), "method")))) {
                // line 359
                echo "        ";
                if (isset($context["widget_controls_attr"])) { $_widget_controls_attr_ = $context["widget_controls_attr"]; } else { $_widget_controls_attr_ = null; }
                $context["widget_controls_attr"] = twig_array_merge($_widget_controls_attr_, array("class" => ((($this->getAttribute($_widget_controls_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_widget_controls_attr_, "class"), "")) : ("")) . " controls")));
                // line 360
                echo "        <div ";
                if (isset($context["widget_controls_attr"])) { $_widget_controls_attr_ = $context["widget_controls_attr"]; } else { $_widget_controls_attr_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_widget_controls_attr_);
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                    echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                    echo "=\"";
                    if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                    echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo ">
    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 366
    public function block_widget_control_group_end($context, array $blocks = array())
    {
        // line 367
        ob_start();
        // line 368
        if (isset($context["widget_control_group"])) { $_widget_control_group_ = $context["widget_control_group"]; } else { $_widget_control_group_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ((((array_key_exists("widget_control_group", $context)) ? (_twig_default_filter($_widget_control_group_, false)) : (false)) || (!$this->getAttribute($_form_, "hasParent", array(), "method")))) {
            // line 369
            echo "    ";
            if (isset($context["widget_controls"])) { $_widget_controls_ = $context["widget_controls"]; } else { $_widget_controls_ = null; }
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ((((array_key_exists("widget_controls", $context)) ? (_twig_default_filter($_widget_controls_, false)) : (false)) || (!$this->getAttribute($_form_, "hasParent", array(), "method")))) {
                // line 370
                echo "        </div>
    ";
            }
            // line 372
            echo "    </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1199 => 372,  1195 => 370,  1190 => 369,  1186 => 368,  1184 => 367,  1181 => 366,  1158 => 360,  1154 => 359,  1149 => 358,  1146 => 357,  1138 => 355,  1134 => 354,  1131 => 353,  1123 => 351,  1117 => 349,  1112 => 348,  1108 => 346,  1089 => 344,  1086 => 343,  1082 => 342,  1078 => 341,  1073 => 340,  1070 => 339,  1065 => 338,  1061 => 337,  1058 => 336,  1054 => 335,  1052 => 334,  1049 => 333,  1039 => 326,  1033 => 324,  1029 => 323,  1022 => 321,  1018 => 320,  1016 => 319,  1013 => 318,  1006 => 311,  999 => 309,  995 => 305,  990 => 304,  985 => 303,  981 => 302,  979 => 301,  976 => 300,  965 => 294,  961 => 287,  955 => 286,  952 => 285,  950 => 284,  935 => 282,  932 => 281,  926 => 280,  922 => 279,  903 => 278,  900 => 277,  898 => 276,  895 => 275,  886 => 269,  884 => 268,  882 => 266,  879 => 265,  867 => 261,  860 => 259,  857 => 258,  854 => 257,  844 => 252,  830 => 250,  827 => 249,  802 => 248,  799 => 247,  790 => 242,  786 => 241,  783 => 240,  779 => 239,  777 => 238,  774 => 237,  765 => 232,  761 => 231,  758 => 230,  754 => 229,  752 => 228,  749 => 227,  737 => 223,  726 => 221,  723 => 220,  721 => 219,  718 => 218,  711 => 212,  705 => 211,  703 => 210,  700 => 209,  693 => 203,  689 => 202,  683 => 200,  681 => 199,  670 => 198,  665 => 197,  660 => 196,  658 => 195,  655 => 194,  646 => 190,  643 => 189,  639 => 187,  635 => 186,  629 => 185,  625 => 183,  620 => 182,  616 => 181,  610 => 180,  603 => 177,  600 => 176,  596 => 175,  594 => 174,  591 => 173,  585 => 167,  577 => 165,  573 => 164,  567 => 162,  564 => 161,  560 => 160,  554 => 159,  535 => 158,  530 => 157,  527 => 156,  522 => 155,  518 => 154,  515 => 153,  511 => 152,  507 => 151,  505 => 150,  502 => 149,  493 => 144,  490 => 143,  483 => 142,  480 => 141,  476 => 140,  472 => 139,  470 => 138,  467 => 137,  459 => 131,  454 => 130,  452 => 129,  449 => 128,  441 => 124,  437 => 123,  435 => 122,  432 => 121,  421 => 115,  415 => 114,  410 => 113,  405 => 112,  400 => 111,  396 => 110,  390 => 108,  386 => 107,  384 => 106,  381 => 105,  358 => 98,  353 => 97,  349 => 96,  343 => 94,  339 => 93,  337 => 92,  334 => 91,  326 => 86,  323 => 85,  321 => 84,  319 => 82,  314 => 81,  310 => 80,  304 => 78,  301 => 77,  299 => 76,  296 => 75,  289 => 70,  287 => 69,  280 => 68,  277 => 67,  246 => 63,  244 => 62,  235 => 57,  224 => 54,  205 => 51,  200 => 50,  185 => 43,  182 => 42,  176 => 38,  170 => 37,  167 => 36,  162 => 35,  154 => 33,  138 => 30,  133 => 28,  76 => 12,  316 => 4,  313 => 3,  308 => 2,  297 => 1,  283 => 83,  272 => 81,  258 => 66,  249 => 64,  245 => 73,  230 => 66,  225 => 65,  215 => 61,  212 => 60,  209 => 59,  204 => 57,  196 => 54,  193 => 53,  188 => 51,  94 => 34,  91 => 32,  118 => 13,  72 => 11,  58 => 8,  125 => 31,  18 => 2,  40 => 27,  53 => 6,  139 => 44,  124 => 37,  80 => 19,  75 => 7,  59 => 12,  110 => 28,  98 => 25,  42 => 7,  175 => 47,  158 => 10,  127 => 69,  117 => 61,  113 => 30,  84 => 16,  21 => 1,  453 => 145,  447 => 144,  442 => 141,  434 => 138,  430 => 136,  426 => 134,  416 => 132,  409 => 131,  406 => 130,  401 => 129,  395 => 127,  392 => 126,  387 => 125,  377 => 117,  373 => 100,  370 => 99,  364 => 113,  359 => 112,  354 => 109,  348 => 105,  345 => 104,  341 => 103,  338 => 102,  333 => 99,  327 => 95,  324 => 94,  320 => 83,  317 => 92,  312 => 89,  298 => 88,  294 => 86,  279 => 84,  269 => 82,  266 => 81,  260 => 79,  255 => 78,  247 => 75,  241 => 61,  237 => 71,  220 => 64,  186 => 61,  183 => 49,  159 => 58,  152 => 55,  144 => 37,  141 => 50,  132 => 71,  129 => 42,  120 => 21,  70 => 10,  74 => 17,  52 => 22,  49 => 5,  169 => 44,  161 => 40,  157 => 34,  150 => 5,  136 => 29,  121 => 42,  115 => 32,  109 => 22,  99 => 34,  96 => 18,  81 => 15,  73 => 11,  69 => 22,  62 => 9,  41 => 7,  248 => 96,  238 => 71,  234 => 68,  227 => 84,  223 => 70,  218 => 53,  216 => 79,  213 => 67,  210 => 52,  207 => 76,  198 => 49,  192 => 65,  177 => 59,  174 => 60,  171 => 14,  164 => 41,  160 => 54,  155 => 40,  153 => 6,  149 => 48,  146 => 47,  143 => 46,  137 => 34,  126 => 23,  107 => 31,  85 => 15,  82 => 14,  55 => 80,  36 => 6,  27 => 33,  123 => 24,  116 => 20,  108 => 20,  95 => 18,  90 => 18,  87 => 17,  83 => 23,  67 => 10,  45 => 43,  26 => 3,  112 => 19,  102 => 23,  78 => 14,  63 => 83,  61 => 17,  56 => 7,  44 => 12,  38 => 20,  32 => 11,  34 => 5,  48 => 2,  20 => 2,  22 => 29,  30 => 14,  25 => 8,  23 => 3,  17 => 1,  92 => 21,  86 => 25,  77 => 26,  46 => 20,  37 => 6,  33 => 15,  29 => 4,  24 => 3,  19 => 2,  201 => 56,  195 => 48,  187 => 44,  181 => 63,  178 => 48,  172 => 45,  168 => 13,  165 => 53,  156 => 48,  151 => 45,  148 => 32,  145 => 43,  142 => 31,  134 => 35,  131 => 34,  128 => 31,  122 => 34,  119 => 33,  111 => 30,  106 => 56,  103 => 26,  100 => 41,  97 => 53,  93 => 17,  89 => 16,  79 => 15,  68 => 20,  64 => 21,  60 => 82,  57 => 7,  54 => 12,  50 => 78,  47 => 9,  43 => 28,  39 => 2,  35 => 19,  31 => 5,  28 => 9,);
    }
}
