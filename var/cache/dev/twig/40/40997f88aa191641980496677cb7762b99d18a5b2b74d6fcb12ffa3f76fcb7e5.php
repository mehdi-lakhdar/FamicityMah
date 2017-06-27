<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_662e608748f0d5e18438c6c5b0a5601d287d535d883b9fcb0d57e25fc7caf313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcbe28b2cba93476d336f177f00d7779925380ad422ac91f05aa11e7c54a8250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcbe28b2cba93476d336f177f00d7779925380ad422ac91f05aa11e7c54a8250->enter($__internal_fcbe28b2cba93476d336f177f00d7779925380ad422ac91f05aa11e7c54a8250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9f8524020a12db6f81de2d1c43de5962b9c77415adf0304e054b5093928b84db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8524020a12db6f81de2d1c43de5962b9c77415adf0304e054b5093928b84db->enter($__internal_9f8524020a12db6f81de2d1c43de5962b9c77415adf0304e054b5093928b84db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcbe28b2cba93476d336f177f00d7779925380ad422ac91f05aa11e7c54a8250->leave($__internal_fcbe28b2cba93476d336f177f00d7779925380ad422ac91f05aa11e7c54a8250_prof);

        
        $__internal_9f8524020a12db6f81de2d1c43de5962b9c77415adf0304e054b5093928b84db->leave($__internal_9f8524020a12db6f81de2d1c43de5962b9c77415adf0304e054b5093928b84db_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_641ee1db2537f3cfed8287fa0451eae7513a846298f07c7fd6e9a106bf85692e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641ee1db2537f3cfed8287fa0451eae7513a846298f07c7fd6e9a106bf85692e->enter($__internal_641ee1db2537f3cfed8287fa0451eae7513a846298f07c7fd6e9a106bf85692e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bf5f4ff94b7b286198634d9d574e6ec882e4300873cbbb429001619a0a4e7d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5f4ff94b7b286198634d9d574e6ec882e4300873cbbb429001619a0a4e7d02->enter($__internal_bf5f4ff94b7b286198634d9d574e6ec882e4300873cbbb429001619a0a4e7d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_bf5f4ff94b7b286198634d9d574e6ec882e4300873cbbb429001619a0a4e7d02->leave($__internal_bf5f4ff94b7b286198634d9d574e6ec882e4300873cbbb429001619a0a4e7d02_prof);

        
        $__internal_641ee1db2537f3cfed8287fa0451eae7513a846298f07c7fd6e9a106bf85692e->leave($__internal_641ee1db2537f3cfed8287fa0451eae7513a846298f07c7fd6e9a106bf85692e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\FamicityMah\\FamicityMah\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
