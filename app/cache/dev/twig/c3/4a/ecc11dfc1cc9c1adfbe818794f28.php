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
        $context["__internal_fbe9c9bd0e21568a6f8ee2c1be8591c120ee2835"] = $this->env->loadTemplate("MopaBootstrapBundle::flash.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 7
        ob_start();
        // line 8
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 9
        echo "    ";
        if ((($this->getContext($context, "type") != "hidden") && (!(null === (($this->getAttribute($this->getContext($context, "widget_addon", true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "widget_addon", true), "type"), null)) : (null)))))) {
            // line 10
            echo "    <div class=\"input-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "widget_addon"), "type"), "html", null, true);
            echo "\">
        ";
            // line 11
            if (($this->getAttribute($this->getContext($context, "widget_addon"), "type") == "prepend")) {
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
        if ((!((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter($this->getContext($context, "widget_remove_btn"), null)) : (null)))) {
            // line 16
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " not-removable")));
            // line 17
            echo "    ";
        }
        // line 18
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty($this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        // line 19
        if ((($this->getContext($context, "type") != "hidden") && (!(null === (($this->getAttribute($this->getContext($context, "widget_addon", true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "widget_addon", true), "type"), null)) : (null)))))) {
            // line 20
            echo "        ";
            if (($this->getAttribute($this->getContext($context, "widget_addon"), "type") == "append")) {
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
        if ((!$this->getAttribute($this->getContext($context, "form"), "hasParent", array(), "method"))) {
            // line 31
            echo "        ";
            if ($this->getContext($context, "render_fieldset")) {
                echo "<fieldset>";
            }
            // line 32
            echo "        ";
            if ($this->getContext($context, "show_legend")) {
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
    ";
        // line 36
        if ((!$this->getAttribute($this->getContext($context, "form"), "hasParent", array(), "method"))) {
            // line 37
            echo "        ";
            if ($this->getContext($context, "render_fieldset")) {
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 52
            echo "        <label class=\"";
            echo twig_escape_filter($this->env, (((($this->getContext($context, "multiple")) ? ("checkbox") : ("radio")) . (($this->getContext($context, "widget_type")) ? ((" " . $this->getContext($context, "widget_type"))) : (""))) . (((array_key_exists("inline", $context) && $this->getContext($context, "inline"))) ? (" inline") : (""))), "html", null, true);
            echo "\">
            ";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget', array("attr" => array("class" => (($this->getAttribute($this->getContext($context, "attr", true), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "widget_class"), "")) : ("")))));
            echo "
            ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getContext($context, "child"), "vars"), "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
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
        if (($this->getAttribute($this->getContext($context, "form"), "hasParent", array(), "method") && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "parent"), "vars"), "block_prefixes")))) {
            // line 64
            echo "    <label class=\"checkbox";
            if ((array_key_exists("inline", $context) && $this->getContext($context, "inline"))) {
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
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
        }
        if ($this->getContext($context, "checked")) {
            echo " checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('translator')->trans($this->getContext($context, "help_inline"), array(), $this->getContext($context, "translation_domain"));
        echo "
";
        // line 67
        if (($this->getAttribute($this->getContext($context, "form"), "hasParent", array(), "method") && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "parent"), "vars"), "block_prefixes")))) {
            // line 68
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
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
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 78
            echo "    ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
";
        } else {
            // line 80
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => (($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "inline")) : ("inline"))));
            // line 81
            echo "            ";
            echo strtr($this->getContext($context, "date_pattern"), array("{{ year }}" =>             // line 82
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "year"), 'widget', array("attr" => array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "widget_class"), "")) : ("")) . " input-small")))), "{{ month }}" =>             // line 83
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "month"), 'widget', array("attr" => array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "widget_class"), "")) : ("")) . " input-mini")))), "{{ day }}" =>             // line 84
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "day"), 'widget', array("attr" => array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "widget_class"), "")) : ("")) . " input-mini"))))));
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
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 94
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 96
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => (($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : (""))));
            // line 97
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 98
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "hour"), 'widget', array("attr" => array("size" => "1", "class" => "input-mini")));
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "minute"), 'widget', array("attr" => array("size" => "1", "class" => "input-mini")));
            if ($this->getContext($context, "with_seconds")) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "second"), 'widget', array("attr" => array("size" => "1", "class" => "input-mini")));
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
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 108
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 110
            echo "            ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => (($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : (""))));
            // line 111
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 112
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'errors');
            echo "
                ";
            // line 113
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "time"), 'errors');
            echo "
                ";
            // line 114
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'widget', array("attr" => array("class" => (($this->getAttribute($this->getContext($context, "attr", true), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "widget_class"), "")) : ("")))));
            echo "
                ";
            // line 115
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "time"), 'widget', array("attr" => array("class" => (($this->getAttribute($this->getContext($context, "attr", true), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "widget_class"), "")) : ("")))));
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
        $context["widget_addon"] = twig_array_merge($this->getContext($context, "widget_addon"), array("text" => (($this->getAttribute($this->getContext($context, "widget_addon", true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "widget_addon", true), "text"), "%")) : ("%"))));
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
        $context["widget_addon"] = twig_array_merge($this->getContext($context, "widget_addon"), array("text" => strtr($this->getContext($context, "money_pattern"), array("{{ widget }}" => ""))));
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
        if (twig_test_empty($this->getContext($context, "label"))) {
            // line 140
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize($this->getContext($context, "name"));
            // line 141
            echo "    ";
        }
        // line 142
        echo "    <legend>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
        echo "</legend>
    ";
        // line 143
        if ($this->getContext($context, "widget_add_btn")) {
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
        if (twig_test_empty($this->getContext($context, "label"))) {
            // line 152
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize($this->getContext($context, "name"));
            // line 153
            echo "    ";
        }
        // line 154
        echo "    ";
        if ((!$this->getContext($context, "compound"))) {
            // line 155
            echo "        ";
            $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("for" => $this->getContext($context, "id")));
            // line 156
            echo "    ";
        }
        // line 157
        echo "    ";
        $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => (((($this->getAttribute($this->getContext($context, "label_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "label_attr", true), "class"), "")) : ("")) . " control-label") . (($this->getContext($context, "required")) ? (" required") : (" optional")))));
        // line 158
        echo "    <label";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "label_attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ">
    ";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
        echo "
    ";
        // line 160
        $this->displayBlock("label_asterisk", $context, $blocks);
        echo "
    ";
        // line 161
        if ($this->getContext($context, "widget_add_btn")) {
            // line 162
            echo "        ";
            $this->displayBlock("form_widget_add_btn", $context, $blocks);
            echo "
    ";
        }
        // line 164
        echo "    ";
        if ($this->getContext($context, "help_label")) {
            // line 165
            echo "        <p class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "help_label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
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
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors')) {
            // line 176
            echo "        <div class=\"symfony-form-errors\">
            ";
            // line 177
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
        </div>
    ";
        }
        // line 180
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 181
            echo "        ";
            if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($this->getContext($context, "child"), "vars"), "block_prefixes"))) {
                // line 182
                echo "            ";
                if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "block_prefixes")) && (!$this->getContext($context, "omit_collection_item")))) {
                    // line 183
                    echo "            <div class=\"collection-item\">
            ";
                }
                // line 185
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'row');
                echo "
            ";
                // line 186
                if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "block_prefixes")) && (!$this->getContext($context, "omit_collection_item")))) {
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
        $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . (((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) ? (" error") : ("")))));
        // line 197
        echo "    ";
        $this->displayBlock("widget_control_group_start", $context, $blocks);
        echo "
    ";
        // line 198
        echo $this->getContext($context, "widget_prefix");
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget', $context);
        echo " ";
        echo $this->getContext($context, "widget_suffix");
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
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
        if (!twig_in_filter("checkbox", $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "block_prefixes"))) {
            // line 221
            echo "    ";
            if ($this->getContext($context, "help_inline")) {
                echo "<p class=\"help-inline\">";
                echo $this->env->getExtension('translator')->trans($this->getContext($context, "help_inline"), array(), $this->getContext($context, "translation_domain"));
                echo "</p>";
            }
        }
        // line 223
        if ($this->getContext($context, "help_block")) {
            echo "<p class=\"help-block\">";
            echo $this->env->getExtension('translator')->trans($this->getContext($context, "help_block"), array(), $this->getContext($context, "translation_domain"));
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
        if ($this->getContext($context, "widget_add_btn")) {
            // line 230
            echo "    ";
            $context["button_type"] = "add";
            // line 231
            echo "    ";
            $context["button_values"] = $this->getContext($context, "widget_add_btn");
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
        if ($this->getContext($context, "widget_remove_btn")) {
            // line 240
            echo "    ";
            $context["button_type"] = "remove";
            // line 241
            echo "    ";
            $context["button_values"] = $this->getContext($context, "widget_remove_btn");
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "button_values"), "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo " data-collection-";
        echo twig_escape_filter($this->env, $this->getContext($context, "button_type"), "html", null, true);
        echo "-btn=\"#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "id", array(), "array"), "html", null, true);
        echo "_control_group\">
";
        // line 249
        if ($this->getAttribute($this->getContext($context, "button_values", true), "icon", array(), "any", true, true)) {
            // line 250
            echo "<i class=\"icon-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "button_values"), "icon"), "html", null, true);
            echo " ";
            if ($this->getAttribute($this->getContext($context, "button_values", true), "icon_color", array(), "any", true, true)) {
                echo "icon-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "button_values"), "icon_color"), "html", null, true);
            }
            echo "\"></i>
";
        }
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "button_values"), "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
        echo "
</a>

";
    }

    // line 257
    public function block_label_asterisk($context, array $blocks = array())
    {
        // line 258
        if ($this->getContext($context, "required")) {
            // line 259
            echo "    ";
            if ($this->getContext($context, "render_required_asterisk")) {
                echo "<span>*</span>";
            }
        } else {
            // line 261
            echo "    ";
            if ($this->getContext($context, "render_optional_text")) {
                echo "<span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("(optional)", array(), $this->getContext($context, "translation_domain")), "html", null, true);
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
        $context["__internal_2c68fc17e2dfd53c15bcbb79a49051657ea325c4"] = $this->env->loadTemplate("MopaBootstrapBundle::icons.html.twig");
        // line 269
        echo "<span class=\"add-on\">";
        echo (((($this->getAttribute($this->getContext($context, "widget_addon", true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "widget_addon", true), "text"), false)) : (false))) ? ($this->getAttribute($this->getContext($context, "widget_addon"), "text")) : ($context["__internal_2c68fc17e2dfd53c15bcbb79a49051657ea325c4"]->geticon($this->getAttribute($this->getContext($context, "widget_addon"), "icon"))));
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
        if ($this->getContext($context, "error_delay")) {
            // line 278
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
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
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 280
                    echo "            ";
                    if ($this->getAttribute($this->getContext($context, "child"), "set", array(0 => "errors", 1 => $this->getContext($context, "errors")), "method")) {
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
            $context["__internal_b099e1cbedf5d3bd6bf1dd6bd90588b0350aace0"] = $this->env->loadTemplate("MopaBootstrapBundle::flash.html.twig");
            // line 286
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "        ";
                echo $context["__internal_b099e1cbedf5d3bd6bf1dd6bd90588b0350aace0"]->getflash("error", (((null === $this->getAttribute($this->getContext($context, "error"), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messagePluralization"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"))));
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
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 303
            echo "    <span class=\"help-";
            $this->displayBlock("error_type", $context, $blocks);
            echo "\">
            ";
            // line 304
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 305
                echo "                ";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($this->getContext($context, "error"), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messagePluralization"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"))), "html", null, true);
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
        if ($this->getContext($context, "error_type")) {
            // line 321
            echo "    ";
            echo twig_escape_filter($this->env, $this->getContext($context, "error_type"), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute($this->getContext($context, "form"), "hasParent", array(), "method") != 0)) {
            // line 323
            echo "    ";
            $context["form"] = $this->getAttribute($this->getContext($context, "form"), "parent");
            // line 324
            echo "    ";
            $this->displayBlock("error_type", $context, $blocks);
            echo "
";
        } elseif (($this->getAttribute($this->getContext($context, "form"), "hasParent", array(), "method") == 0)) {
            // line 326
            echo "    ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getContext($context, "form", true), "vars", array(), "any", false, true), "error_type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "form", true), "vars", array(), "any", false, true), "error_type"), "inline")) : ("inline")), "html", null, true);
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
        if ((((array_key_exists("widget_control_group", $context)) ? (_twig_default_filter($this->getContext($context, "widget_control_group"), false)) : (false)) || (!$this->getAttribute($this->getContext($context, "form"), "hasParent", array(), "method")))) {
            // line 336
            echo "    ";
            if (array_key_exists("prototype", $context)) {
                // line 337
                echo "        ";
                $context["data_prototype"] = (("<div class=\"collection-item\">" . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "prototype"), 'row')) . "</div>");
                // line 338
                echo "        ";
                $context["widget_control_group_attr"] = twig_array_merge($this->getContext($context, "widget_control_group_attr"), array("data-prototype" => $this->getContext($context, "data_prototype")));
                // line 339
                echo "    ";
            }
            // line 340
            echo "    ";
            $context["widget_control_group_attr"] = twig_array_merge($this->getContext($context, "widget_control_group_attr"), array("id" => ($this->getContext($context, "id") . "_control_group"), "class" => ((($this->getAttribute($this->getContext($context, "widget_control_group_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "widget_control_group_attr", true), "class"), "")) : ("")) . " control-group")));
            // line 341
            echo "    ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                // line 342
                echo "        ";
                $context["widget_control_group_attr"] = twig_array_merge($this->getContext($context, "widget_control_group_attr"), array("class" => ((($this->getAttribute($this->getContext($context, "widget_control_group_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "widget_control_group_attr", true), "class"), "")) : ("")) . " error")));
                // line 343
                echo "    ";
            }
            // line 344
            echo "    <div ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "widget_control_group_attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">
    ";
            // line 346
            echo "    ";
            if ((($this->getAttribute($this->getContext($context, "form"), "hasChildren", array(), "method") && $this->getAttribute($this->getContext($context, "form"), "hasParent", array(), "method")) && !twig_in_filter("field", $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "block_prefixes")))) {
                // line 348
                echo "        ";
                if ($this->getContext($context, "show_child_legend")) {
                    // line 349
                    echo "            ";
                    $this->displayBlock("form_legend", $context, $blocks);
                    echo "
        ";
                } elseif ($this->getContext($context, "label_render")) {
                    // line 351
                    echo "            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 353
                echo "    ";
            } else {
                // line 354
                echo "        ";
                if ($this->getContext($context, "label_render")) {
                    // line 355
                    echo "            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 357
                echo "    ";
            }
            // line 358
            echo "    ";
            if ((((array_key_exists("widget_controls", $context)) ? (_twig_default_filter($this->getContext($context, "widget_controls"), false)) : (false)) || (!$this->getAttribute($this->getContext($context, "form"), "hasParent", array(), "method")))) {
                // line 359
                echo "        ";
                $context["widget_controls_attr"] = twig_array_merge($this->getContext($context, "widget_controls_attr"), array("class" => ((($this->getAttribute($this->getContext($context, "widget_controls_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "widget_controls_attr", true), "class"), "")) : ("")) . " controls")));
                // line 360
                echo "        <div ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "widget_controls_attr"));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
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
        if ((((array_key_exists("widget_control_group", $context)) ? (_twig_default_filter($this->getContext($context, "widget_control_group"), false)) : (false)) || (!$this->getAttribute($this->getContext($context, "form"), "hasParent", array(), "method")))) {
            // line 369
            echo "    ";
            if ((((array_key_exists("widget_controls", $context)) ? (_twig_default_filter($this->getContext($context, "widget_controls"), false)) : (false)) || (!$this->getAttribute($this->getContext($context, "form"), "hasParent", array(), "method")))) {
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
        return array (  1033 => 372,  1029 => 370,  1026 => 369,  1024 => 368,  1022 => 367,  1019 => 366,  999 => 360,  996 => 359,  993 => 358,  990 => 357,  984 => 355,  981 => 354,  978 => 353,  972 => 351,  966 => 349,  963 => 348,  960 => 346,  944 => 344,  941 => 343,  938 => 342,  935 => 341,  932 => 340,  929 => 339,  926 => 338,  923 => 337,  920 => 336,  918 => 335,  916 => 334,  913 => 333,  904 => 326,  898 => 324,  895 => 323,  889 => 321,  887 => 320,  885 => 319,  882 => 318,  875 => 311,  868 => 309,  865 => 305,  861 => 304,  856 => 303,  853 => 302,  851 => 301,  848 => 300,  837 => 294,  834 => 287,  829 => 286,  826 => 285,  824 => 284,  809 => 282,  806 => 281,  802 => 280,  799 => 279,  781 => 278,  779 => 277,  777 => 276,  774 => 275,  766 => 269,  764 => 268,  762 => 266,  759 => 265,  749 => 261,  743 => 259,  741 => 258,  738 => 257,  730 => 252,  719 => 250,  717 => 249,  697 => 248,  694 => 247,  685 => 242,  682 => 241,  679 => 240,  676 => 239,  674 => 238,  671 => 237,  662 => 232,  659 => 231,  656 => 230,  653 => 229,  651 => 228,  648 => 227,  639 => 223,  631 => 221,  629 => 220,  627 => 219,  624 => 218,  617 => 212,  612 => 211,  610 => 210,  607 => 209,  600 => 203,  596 => 202,  590 => 200,  588 => 199,  580 => 198,  575 => 197,  572 => 196,  570 => 195,  567 => 194,  558 => 190,  555 => 189,  551 => 187,  549 => 186,  544 => 185,  540 => 183,  537 => 182,  534 => 181,  529 => 180,  523 => 177,  520 => 176,  517 => 175,  515 => 174,  512 => 173,  506 => 167,  500 => 165,  497 => 164,  491 => 162,  489 => 161,  485 => 160,  481 => 159,  465 => 158,  462 => 157,  459 => 156,  456 => 155,  453 => 154,  450 => 153,  447 => 152,  444 => 151,  442 => 150,  439 => 149,  430 => 144,  428 => 143,  423 => 142,  420 => 141,  417 => 140,  414 => 139,  412 => 138,  409 => 137,  401 => 131,  398 => 130,  396 => 129,  393 => 128,  385 => 124,  380 => 122,  377 => 121,  368 => 115,  364 => 114,  356 => 112,  351 => 111,  342 => 108,  339 => 107,  337 => 106,  326 => 100,  315 => 98,  310 => 97,  307 => 96,  301 => 94,  298 => 93,  296 => 92,  282 => 85,  279 => 83,  278 => 82,  276 => 81,  273 => 80,  267 => 78,  265 => 77,  263 => 76,  260 => 75,  253 => 70,  246 => 68,  244 => 67,  229 => 66,  217 => 62,  195 => 53,  186 => 51,  181 => 50,  179 => 49,  138 => 33,  80 => 15,  268 => 4,  251 => 69,  241 => 83,  231 => 81,  219 => 63,  208 => 57,  206 => 72,  204 => 71,  196 => 66,  190 => 52,  185 => 60,  183 => 59,  180 => 57,  175 => 54,  173 => 53,  165 => 48,  158 => 44,  135 => 37,  111 => 31,  67 => 9,  108 => 13,  18 => 2,  75 => 23,  54 => 11,  97 => 25,  88 => 20,  60 => 82,  63 => 83,  51 => 15,  171 => 61,  167 => 49,  164 => 13,  154 => 41,  146 => 35,  115 => 34,  95 => 53,  84 => 17,  38 => 20,  21 => 1,  405 => 145,  399 => 144,  394 => 141,  386 => 138,  382 => 123,  378 => 134,  369 => 132,  365 => 131,  362 => 130,  360 => 113,  355 => 127,  352 => 126,  348 => 110,  338 => 117,  334 => 105,  332 => 114,  327 => 113,  323 => 99,  318 => 109,  312 => 105,  309 => 104,  306 => 103,  304 => 102,  299 => 99,  293 => 91,  290 => 94,  287 => 93,  285 => 86,  280 => 84,  266 => 3,  262 => 2,  247 => 84,  239 => 82,  237 => 81,  232 => 79,  228 => 78,  221 => 64,  215 => 72,  211 => 71,  202 => 70,  200 => 68,  177 => 66,  174 => 62,  168 => 44,  166 => 43,  144 => 40,  140 => 56,  126 => 44,  123 => 29,  105 => 30,  36 => 5,  142 => 53,  139 => 51,  133 => 32,  124 => 45,  107 => 21,  101 => 30,  65 => 15,  59 => 20,  45 => 43,  223 => 96,  214 => 61,  210 => 74,  203 => 84,  199 => 54,  194 => 65,  192 => 79,  189 => 78,  187 => 61,  184 => 76,  178 => 56,  170 => 51,  157 => 38,  152 => 37,  145 => 55,  130 => 48,  125 => 30,  119 => 40,  116 => 44,  112 => 42,  102 => 19,  98 => 23,  76 => 17,  73 => 23,  69 => 11,  32 => 11,  103 => 12,  91 => 21,  74 => 16,  70 => 10,  66 => 16,  56 => 7,  25 => 8,  89 => 18,  82 => 16,  42 => 7,  26 => 3,  22 => 3,  23 => 3,  17 => 1,  92 => 39,  86 => 17,  77 => 14,  57 => 21,  29 => 4,  24 => 4,  19 => 2,  68 => 13,  61 => 9,  44 => 4,  20 => 9,  161 => 45,  153 => 58,  150 => 36,  147 => 48,  143 => 46,  137 => 38,  129 => 51,  121 => 41,  118 => 36,  113 => 23,  104 => 20,  99 => 32,  94 => 26,  81 => 32,  78 => 25,  72 => 11,  64 => 10,  53 => 6,  50 => 78,  48 => 2,  41 => 7,  39 => 2,  35 => 19,  33 => 15,  30 => 14,  27 => 33,  182 => 70,  176 => 48,  169 => 62,  163 => 42,  160 => 57,  155 => 60,  151 => 54,  149 => 6,  141 => 34,  136 => 51,  134 => 50,  131 => 43,  128 => 31,  120 => 28,  117 => 35,  114 => 34,  109 => 30,  106 => 28,  100 => 55,  96 => 31,  93 => 22,  90 => 25,  87 => 41,  83 => 16,  79 => 15,  71 => 12,  62 => 15,  58 => 8,  55 => 80,  52 => 22,  49 => 11,  46 => 8,  43 => 28,  40 => 27,  37 => 19,  34 => 13,  31 => 5,  28 => 9,);
    }
}
