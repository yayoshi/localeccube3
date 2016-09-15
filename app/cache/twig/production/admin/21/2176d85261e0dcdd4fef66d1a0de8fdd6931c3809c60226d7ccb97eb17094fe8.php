<?php

/* __string_template__8bba79f251a9b47d3ce2468d36830e66689e1f704f658057537980a04f227ba8 */
class __TwigTemplate_48442a43ea40719ede506ae1b8d581fe40d7f0f15305a43c1a922f09ad8607e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__8bba79f251a9b47d3ce2468d36830e66689e1f704f658057537980a04f227ba8", 23);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        $context["menus"] = array(0 => "setting", 1 => "system", 2 => "masterdata");
        // line 23
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = array())
    {
        echo "システム設定";
    }

    // line 28
    public function block_sub_title($context, array $blocks = array())
    {
        echo "マスターデータ管理";
    }

    // line 30
    public function block_main($context, array $blocks = array())
    {
        // line 31
        echo "<form id=\"form1\" name=\"form1\" method=\"post\" action=\"";
        echo $this->env->getExtension('eccube')->getUrl("admin_setting_system_masterdata");
        echo "\">
    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
    <div class=\"row\">
        <div id=\"master_edit\" class=\"col-md-12\">
            <div id=\"master_edit_box\" class=\"box\">
                <div id=\"master_edit_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">マスターデータ管理</h3>
                </div><!-- /.box-header -->
                <div id=\"master_edit_box__body\" class=\"box-body\">
                    <div id=\"master_edit_box__body_inner\" class=\"form-inline form-group\">
                        <div id=\"master_edit_box__masterdata\" class=\"form-group\">
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "masterdata", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "masterdata", array()), 'errors');
        echo "
                        </div>
                        <div id=\"master_edit_box__confirm_button\" class=\"form-group\">
                            <button class=\"btn btn-primary btn-block\" onclick=\"document.form1.submit();\">選択</button>
                        </div>
                    </div>
                    <div class=\"extra-form clearfix\">
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 51
            echo "                            ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 52
                echo "                                <div class=\"form-group\">
                                    ";
                // line 53
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                                    ";
                // line 54
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                    ";
                // line 55
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                </div>
                            ";
            }
            // line 58
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</form>

";
        // line 66
        if ( !twig_test_empty($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "data", array()))) {
            // line 67
            echo "<form id=\"form2\" name=\"form2\" method=\"post\" action=\"";
            echo $this->env->getExtension('eccube')->getUrl("admin_setting_system_masterdata_edit");
            echo "\">
    ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "masterdata_name", array()), 'widget');
            echo "
    ";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "_token", array()), 'widget');
            echo "
    <div class=\"row\" id=\"aside_wrap\">
        <div id=\"result_list_box\" class=\"col-md-9\">
            <div id=\"result_list_box__body\" class=\"box\">
                <div id=\"result_list_box__header\" class=\"box-header\">
                    <div class=\"read\">
                        マスターデータの値を設定できます。<br />
                        重複したIDを登録することはできません。<br />
                        空のIDを登録すると、値は削除されます。<br />
                        設定値によってはサイトが機能しなくなる場合もありますので、十分ご注意下さい。
                    </div>
                </div>

                <div id=\"result_list__body_inner\" class=\"table-responsive\">
                    <table id=\"result_list__list\" class=\"table table-bordered table-striped\">
                        <tr id=\"result_list__list_header\">
                            <th id=\"result_list__header_id\">ID</th>
                            <th id=\"result_list__header_name\">Name</th>
                            ";
            // line 88
            echo "                        </tr>
                        ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 90
                echo "                        <tr id=\"result_list__item--";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "vars", array()), "name", array()), "html", null, true);
                echo "\">
                            <td id=\"result_list__id--";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "vars", array()), "name", array()), "html", null, true);
                echo "\">
                                ";
                // line 92
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["data"], "id", array()), 'widget');
                echo "
                            </td>
                            <td id=\"result_list__name--";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "vars", array()), "name", array()), "html", null, true);
                echo "\">
                                ";
                // line 95
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["data"], "name", array()), 'widget');
                echo "
                            </td>
                            ";
                // line 102
                echo "                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                    </table>
                </div>
            </div><!-- /.box-body -->
        </div>

        <div id=\"common_box\" class=\"col-md-3\">
            <div class=\"col_inner\" id=\"aside_column\">
                <div id=\"common_button_box\" class=\"box no-header\">
                    <div id=\"common_button_box__body\" class=\"box-body\">
                        <div id=\"common_button_box__insert_button\"  class=\"row text-center\">
                            <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                <button class=\"btn btn-primary btn-block btn-lg\" onclick=\"document.form2.submit();\">登録</button>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div><!-- /.col --> 
    </div>
</form>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__8bba79f251a9b47d3ce2468d36830e66689e1f704f658057537980a04f227ba8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 104,  181 => 102,  176 => 95,  172 => 94,  167 => 92,  163 => 91,  158 => 90,  154 => 89,  151 => 88,  130 => 69,  126 => 68,  121 => 67,  119 => 66,  110 => 59,  104 => 58,  98 => 55,  94 => 54,  90 => 53,  87 => 52,  84 => 51,  80 => 50,  70 => 43,  66 => 42,  53 => 32,  48 => 31,  45 => 30,  39 => 28,  33 => 27,  29 => 23,  27 => 25,  11 => 23,);
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
/* */
/* {% extends 'default_frame.twig' %}*/
/* */
/* {% set menus = ['setting', 'system', 'masterdata'] %}*/
/* */
/* {% block title %}システム設定{% endblock %}*/
/* {% block sub_title %}マスターデータ管理{% endblock %}*/
/* */
/* {% block main %}*/
/* <form id="form1" name="form1" method="post" action="{{ url('admin_setting_system_masterdata') }}">*/
/*     {{ form_widget(form._token) }}*/
/*     <div class="row">*/
/*         <div id="master_edit" class="col-md-12">*/
/*             <div id="master_edit_box" class="box">*/
/*                 <div id="master_edit_box__header" class="box-header">*/
/*                     <h3 class="box-title">マスターデータ管理</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div id="master_edit_box__body" class="box-body">*/
/*                     <div id="master_edit_box__body_inner" class="form-inline form-group">*/
/*                         <div id="master_edit_box__masterdata" class="form-group">*/
/*                             {{ form_widget(form.masterdata, {'attr': {'class': 'form-control'}}) }}*/
/*                             {{ form_errors(form.masterdata) }}*/
/*                         </div>*/
/*                         <div id="master_edit_box__confirm_button" class="form-group">*/
/*                             <button class="btn btn-primary btn-block" onclick="document.form1.submit();">選択</button>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="extra-form clearfix">*/
/*                         {% for f in form.getIterator %}*/
/*                             {% if f.vars.name matches '[^plg*]' %}*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(f) }}*/
/*                                     {{ form_widget(f) }}*/
/*                                     {{ form_errors(f) }}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /.box -->*/
/*         </div>*/
/*     </div>*/
/* </form>*/
/* */
/* {% if form2.data is not empty %}*/
/* <form id="form2" name="form2" method="post" action="{{ url('admin_setting_system_masterdata_edit') }}">*/
/*     {{ form_widget(form2.masterdata_name) }}*/
/*     {{ form_widget(form2._token) }}*/
/*     <div class="row" id="aside_wrap">*/
/*         <div id="result_list_box" class="col-md-9">*/
/*             <div id="result_list_box__body" class="box">*/
/*                 <div id="result_list_box__header" class="box-header">*/
/*                     <div class="read">*/
/*                         マスターデータの値を設定できます。<br />*/
/*                         重複したIDを登録することはできません。<br />*/
/*                         空のIDを登録すると、値は削除されます。<br />*/
/*                         設定値によってはサイトが機能しなくなる場合もありますので、十分ご注意下さい。*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div id="result_list__body_inner" class="table-responsive">*/
/*                     <table id="result_list__list" class="table table-bordered table-striped">*/
/*                         <tr id="result_list__list_header">*/
/*                             <th id="result_list__header_id">ID</th>*/
/*                             <th id="result_list__header_name">Name</th>*/
/*                             {#<th>Rank</th>#}*/
/*                         </tr>*/
/*                         {% for data in form2.data %}*/
/*                         <tr id="result_list__item--{{ data.vars.name }}">*/
/*                             <td id="result_list__id--{{ data.vars.name }}">*/
/*                                 {{form_widget(data.id)}}*/
/*                             </td>*/
/*                             <td id="result_list__name--{{ data.vars.name }}">*/
/*                                 {{form_widget(data.name)}}*/
/*                             </td>*/
/*                             {#*/
/*                             <td id="result_list__rank">*/
/*                                 {{form_widget(data.rank)}}*/
/*                             </td>*/
/*                             #}*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                     </table>*/
/*                 </div>*/
/*             </div><!-- /.box-body -->*/
/*         </div>*/
/* */
/*         <div id="common_box" class="col-md-3">*/
/*             <div class="col_inner" id="aside_column">*/
/*                 <div id="common_button_box" class="box no-header">*/
/*                     <div id="common_button_box__body" class="box-body">*/
/*                         <div id="common_button_box__insert_button"  class="row text-center">*/
/*                             <div class="col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">*/
/*                                 <button class="btn btn-primary btn-block btn-lg" onclick="document.form2.submit();">登録</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/*             </div>*/
/*         </div><!-- /.col --> */
/*     </div>*/
/* </form>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
