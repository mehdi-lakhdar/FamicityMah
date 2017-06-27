<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_10c5f7f4a9e1ddb2c7763696223cfab76a98e2151f752e9a0fa5fc8766bde830 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cdc842068977dfdc79d0e8a8964f5f20857b025f31899d41218b6d2fba84bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cdc842068977dfdc79d0e8a8964f5f20857b025f31899d41218b6d2fba84bc4->enter($__internal_3cdc842068977dfdc79d0e8a8964f5f20857b025f31899d41218b6d2fba84bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_75f55c84bc66e82273f8909b5997c4685a84fadce2e6277385ee248b8c86ead8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f55c84bc66e82273f8909b5997c4685a84fadce2e6277385ee248b8c86ead8->enter($__internal_75f55c84bc66e82273f8909b5997c4685a84fadce2e6277385ee248b8c86ead8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cdc842068977dfdc79d0e8a8964f5f20857b025f31899d41218b6d2fba84bc4->leave($__internal_3cdc842068977dfdc79d0e8a8964f5f20857b025f31899d41218b6d2fba84bc4_prof);

        
        $__internal_75f55c84bc66e82273f8909b5997c4685a84fadce2e6277385ee248b8c86ead8->leave($__internal_75f55c84bc66e82273f8909b5997c4685a84fadce2e6277385ee248b8c86ead8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e5bbccd205a6fe76139e3cfb3610febe0f9781b3750d613865ae39aef4ac351a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5bbccd205a6fe76139e3cfb3610febe0f9781b3750d613865ae39aef4ac351a->enter($__internal_e5bbccd205a6fe76139e3cfb3610febe0f9781b3750d613865ae39aef4ac351a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d58683daf1a83adc73592dd19a1f76107155b56a8942f88f84061b1769d10810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58683daf1a83adc73592dd19a1f76107155b56a8942f88f84061b1769d10810->enter($__internal_d58683daf1a83adc73592dd19a1f76107155b56a8942f88f84061b1769d10810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d58683daf1a83adc73592dd19a1f76107155b56a8942f88f84061b1769d10810->leave($__internal_d58683daf1a83adc73592dd19a1f76107155b56a8942f88f84061b1769d10810_prof);

        
        $__internal_e5bbccd205a6fe76139e3cfb3610febe0f9781b3750d613865ae39aef4ac351a->leave($__internal_e5bbccd205a6fe76139e3cfb3610febe0f9781b3750d613865ae39aef4ac351a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c775dd554a08a7445971d5d542e2cd11709c8a6bbdf8f689df2586b0c063b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c775dd554a08a7445971d5d542e2cd11709c8a6bbdf8f689df2586b0c063b17->enter($__internal_1c775dd554a08a7445971d5d542e2cd11709c8a6bbdf8f689df2586b0c063b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d080f068a8d3cfe157becc0b89b4ea19b298febd289bccccc341f2df2f3662e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d080f068a8d3cfe157becc0b89b4ea19b298febd289bccccc341f2df2f3662e1->enter($__internal_d080f068a8d3cfe157becc0b89b4ea19b298febd289bccccc341f2df2f3662e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d080f068a8d3cfe157becc0b89b4ea19b298febd289bccccc341f2df2f3662e1->leave($__internal_d080f068a8d3cfe157becc0b89b4ea19b298febd289bccccc341f2df2f3662e1_prof);

        
        $__internal_1c775dd554a08a7445971d5d542e2cd11709c8a6bbdf8f689df2586b0c063b17->leave($__internal_1c775dd554a08a7445971d5d542e2cd11709c8a6bbdf8f689df2586b0c063b17_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1eb39a0d047cd3992a1a97861727c04ea602a374923eae743b6744429d556eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb39a0d047cd3992a1a97861727c04ea602a374923eae743b6744429d556eb6->enter($__internal_1eb39a0d047cd3992a1a97861727c04ea602a374923eae743b6744429d556eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_98095f3e4f70e74e8ac83c61d2be63e254beb26e99eb23cc422bf36cd2bef895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98095f3e4f70e74e8ac83c61d2be63e254beb26e99eb23cc422bf36cd2bef895->enter($__internal_98095f3e4f70e74e8ac83c61d2be63e254beb26e99eb23cc422bf36cd2bef895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_98095f3e4f70e74e8ac83c61d2be63e254beb26e99eb23cc422bf36cd2bef895->leave($__internal_98095f3e4f70e74e8ac83c61d2be63e254beb26e99eb23cc422bf36cd2bef895_prof);

        
        $__internal_1eb39a0d047cd3992a1a97861727c04ea602a374923eae743b6744429d556eb6->leave($__internal_1eb39a0d047cd3992a1a97861727c04ea602a374923eae743b6744429d556eb6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\FamicityMah\\FamicityMah\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
