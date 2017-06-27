<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_27b9b8a83fbef4a342e79f2d3e8ae030d20e080f919435c2609d64ef6eeac02a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6813f144cfca30bb5a6e6d3d49e5cc8195f7ddd81769080dc81f9beb28a78513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6813f144cfca30bb5a6e6d3d49e5cc8195f7ddd81769080dc81f9beb28a78513->enter($__internal_6813f144cfca30bb5a6e6d3d49e5cc8195f7ddd81769080dc81f9beb28a78513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_3013faed23462144585572ab2b7f3889d34e472006dd014ead85b1b0691f1219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3013faed23462144585572ab2b7f3889d34e472006dd014ead85b1b0691f1219->enter($__internal_3013faed23462144585572ab2b7f3889d34e472006dd014ead85b1b0691f1219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6813f144cfca30bb5a6e6d3d49e5cc8195f7ddd81769080dc81f9beb28a78513->leave($__internal_6813f144cfca30bb5a6e6d3d49e5cc8195f7ddd81769080dc81f9beb28a78513_prof);

        
        $__internal_3013faed23462144585572ab2b7f3889d34e472006dd014ead85b1b0691f1219->leave($__internal_3013faed23462144585572ab2b7f3889d34e472006dd014ead85b1b0691f1219_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c0e440f3d07d544ff6fd3641a7dc3ff2004a42d989b8b6635f03180996279c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0e440f3d07d544ff6fd3641a7dc3ff2004a42d989b8b6635f03180996279c7->enter($__internal_7c0e440f3d07d544ff6fd3641a7dc3ff2004a42d989b8b6635f03180996279c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1e00c5cc6e05177571e983f20db30196753889731e36b78a806c2cc87828a5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e00c5cc6e05177571e983f20db30196753889731e36b78a806c2cc87828a5b4->enter($__internal_1e00c5cc6e05177571e983f20db30196753889731e36b78a806c2cc87828a5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_1e00c5cc6e05177571e983f20db30196753889731e36b78a806c2cc87828a5b4->leave($__internal_1e00c5cc6e05177571e983f20db30196753889731e36b78a806c2cc87828a5b4_prof);

        
        $__internal_7c0e440f3d07d544ff6fd3641a7dc3ff2004a42d989b8b6635f03180996279c7->leave($__internal_7c0e440f3d07d544ff6fd3641a7dc3ff2004a42d989b8b6635f03180996279c7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\FamicityMah\\src\\Esprit\\FamycityBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
