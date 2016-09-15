<?php

/* __string_template__e0b2fd8fa02e6d92ae8417c05ecedfdecac7eeb496a34eaa3467cea67891d8c0 */
class __TwigTemplate_83058b94c9076d06026d91f49cd5dba1a71bbf1bfc34f29c32744b5763039cda extends Twig_Template
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
        // line 22
        echo "<div class=\"drawer_block pc header_bottom_area\">
    <div id=\"search\" class=\"search\">
        <form method=\"get\" id=\"searchform\" action=\"";
        // line 24
        echo $this->env->getExtension('eccube')->getPath("product_list");
        echo "\">
            <div class=\"search_inner\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category_id", array()), 'widget');
        echo "
                <div class=\"input_search clearfix\">
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget', array("attr" => array("placeholder" => "キーワードを入力")));
        echo "
                    <button type=\"submit\" class=\"bt_search\"><svg class=\"cb cb-search\"><use xlink:href=\"#cb-search\" /></svg></button>
                </div>
            </div>
            <div class=\"extra-form\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 34
            echo "                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 35
                echo "                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                        ";
                // line 36
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                        ";
                // line 37
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                    ";
            }
            // line 39
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__e0b2fd8fa02e6d92ae8417c05ecedfdecac7eeb496a34eaa3467cea67891d8c0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 40,  62 => 39,  57 => 37,  53 => 36,  48 => 35,  45 => 34,  41 => 33,  33 => 28,  28 => 26,  23 => 24,  19 => 22,);
    }
}
/* {#*/
/* This file is part of EC-CUBE*/
/* */
/* Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.*/
/* */
/* http://www.lockon.co.jp/*/
/* */
/* This program is free software; you can redistribute it and/or*/
/* modify it under the terms of the GNU General Public License*/
/* as published by the Free Software Foundation; either version 2*/
/* of the License, or (at your option) any later version.*/
/* */
/* This program is distributed in the hope that it will be useful,*/
/* but WITHOUT ANY WARRANTY; without even the implied warranty of*/
/* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the*/
/* GNU General Public License for more details.*/
/* */
/* You should have received a copy of the GNU General Public License*/
/* along with this program; if not, write to the Free Software*/
/* Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.*/
/* #}*/
/* <div class="drawer_block pc header_bottom_area">*/
/*     <div id="search" class="search">*/
/*         <form method="get" id="searchform" action="{{ path('product_list') }}">*/
/*             <div class="search_inner">*/
/*                 {{ form_widget(form.category_id) }}*/
/*                 <div class="input_search clearfix">*/
/*                     {{ form_widget(form.name, {'attr': { 'placeholder' : "キーワードを入力" }} ) }}*/
/*                     <button type="submit" class="bt_search"><svg class="cb cb-search"><use xlink:href="#cb-search" /></svg></button>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="extra-form">*/
/*                 {% for f in form.getIterator %}*/
/*                     {% if f.vars.name matches '[^plg*]' %}*/
/*                         {{ form_label(f) }}*/
/*                         {{ form_widget(f) }}*/
/*                         {{ form_errors(f) }}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
