<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ef0827e168cd0e3bb2619b33e682acd6c8ef8d0e1a5e5d1ca6c0023f7c929a93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d2cfc9d2f2736c5b6333f61dc61f5ab9acaf7dc0f433884211a65ef3531520f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2cfc9d2f2736c5b6333f61dc61f5ab9acaf7dc0f433884211a65ef3531520f7->enter($__internal_d2cfc9d2f2736c5b6333f61dc61f5ab9acaf7dc0f433884211a65ef3531520f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b683d88c3abeab1a0bc0647fa3f46f2612a0467ea96193f4e33a7ebb18528afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b683d88c3abeab1a0bc0647fa3f46f2612a0467ea96193f4e33a7ebb18528afb->enter($__internal_b683d88c3abeab1a0bc0647fa3f46f2612a0467ea96193f4e33a7ebb18528afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2cfc9d2f2736c5b6333f61dc61f5ab9acaf7dc0f433884211a65ef3531520f7->leave($__internal_d2cfc9d2f2736c5b6333f61dc61f5ab9acaf7dc0f433884211a65ef3531520f7_prof);

        
        $__internal_b683d88c3abeab1a0bc0647fa3f46f2612a0467ea96193f4e33a7ebb18528afb->leave($__internal_b683d88c3abeab1a0bc0647fa3f46f2612a0467ea96193f4e33a7ebb18528afb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_530664e68cec62cd048bf7c144bbdef9cbe23ed7f7d32dfc459c02e40d53ff33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530664e68cec62cd048bf7c144bbdef9cbe23ed7f7d32dfc459c02e40d53ff33->enter($__internal_530664e68cec62cd048bf7c144bbdef9cbe23ed7f7d32dfc459c02e40d53ff33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ebadd686952e1a271ad1d93e94343b43ad9072a14545820e59e346ed75b825c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebadd686952e1a271ad1d93e94343b43ad9072a14545820e59e346ed75b825c7->enter($__internal_ebadd686952e1a271ad1d93e94343b43ad9072a14545820e59e346ed75b825c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ebadd686952e1a271ad1d93e94343b43ad9072a14545820e59e346ed75b825c7->leave($__internal_ebadd686952e1a271ad1d93e94343b43ad9072a14545820e59e346ed75b825c7_prof);

        
        $__internal_530664e68cec62cd048bf7c144bbdef9cbe23ed7f7d32dfc459c02e40d53ff33->leave($__internal_530664e68cec62cd048bf7c144bbdef9cbe23ed7f7d32dfc459c02e40d53ff33_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6e391c9486a0be461e12eb66b5cfe8c674af5bb00a2ff180072dd26a37a7852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e391c9486a0be461e12eb66b5cfe8c674af5bb00a2ff180072dd26a37a7852->enter($__internal_b6e391c9486a0be461e12eb66b5cfe8c674af5bb00a2ff180072dd26a37a7852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4be85c14113453a6b82e6a8cbb9f0bbc0d32381cc8974dfee11151b7a1eae7de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be85c14113453a6b82e6a8cbb9f0bbc0d32381cc8974dfee11151b7a1eae7de->enter($__internal_4be85c14113453a6b82e6a8cbb9f0bbc0d32381cc8974dfee11151b7a1eae7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4be85c14113453a6b82e6a8cbb9f0bbc0d32381cc8974dfee11151b7a1eae7de->leave($__internal_4be85c14113453a6b82e6a8cbb9f0bbc0d32381cc8974dfee11151b7a1eae7de_prof);

        
        $__internal_b6e391c9486a0be461e12eb66b5cfe8c674af5bb00a2ff180072dd26a37a7852->leave($__internal_b6e391c9486a0be461e12eb66b5cfe8c674af5bb00a2ff180072dd26a37a7852_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27e2f1040c6cfaf220111a9b83aba46daf78ea26ee6862461e2ccadb494e0398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e2f1040c6cfaf220111a9b83aba46daf78ea26ee6862461e2ccadb494e0398->enter($__internal_27e2f1040c6cfaf220111a9b83aba46daf78ea26ee6862461e2ccadb494e0398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fad1befca2f80de1f4c6fec05c74826c16d60ef28229f76161d7fe730c7e3a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad1befca2f80de1f4c6fec05c74826c16d60ef28229f76161d7fe730c7e3a63->enter($__internal_fad1befca2f80de1f4c6fec05c74826c16d60ef28229f76161d7fe730c7e3a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fad1befca2f80de1f4c6fec05c74826c16d60ef28229f76161d7fe730c7e3a63->leave($__internal_fad1befca2f80de1f4c6fec05c74826c16d60ef28229f76161d7fe730c7e3a63_prof);

        
        $__internal_27e2f1040c6cfaf220111a9b83aba46daf78ea26ee6862461e2ccadb494e0398->leave($__internal_27e2f1040c6cfaf220111a9b83aba46daf78ea26ee6862461e2ccadb494e0398_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\FamicityMah\\FamicityMah\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
