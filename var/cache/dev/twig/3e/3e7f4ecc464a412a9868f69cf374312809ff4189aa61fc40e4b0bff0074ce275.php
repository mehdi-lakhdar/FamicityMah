<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_c33fcbcaa85fe5f6282e2d7d67f11a0976b073c11fef9aca6c8a9eee7c130fe7 extends Twig_Template
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
        $__internal_1513d7e5994ce573f50a8b6968a91939ab2421113d380396b2eb16f972b640c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1513d7e5994ce573f50a8b6968a91939ab2421113d380396b2eb16f972b640c6->enter($__internal_1513d7e5994ce573f50a8b6968a91939ab2421113d380396b2eb16f972b640c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_25fc0dfa74d0c0ed8538dce687139fac89ba97f7c0030a2856f797df0e18493f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25fc0dfa74d0c0ed8538dce687139fac89ba97f7c0030a2856f797df0e18493f->enter($__internal_25fc0dfa74d0c0ed8538dce687139fac89ba97f7c0030a2856f797df0e18493f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo twig_include($this->env, $context, "@EspritFamycity/Registration/register_content.html.twig");
        
        $__internal_1513d7e5994ce573f50a8b6968a91939ab2421113d380396b2eb16f972b640c6->leave($__internal_1513d7e5994ce573f50a8b6968a91939ab2421113d380396b2eb16f972b640c6_prof);

        
        $__internal_25fc0dfa74d0c0ed8538dce687139fac89ba97f7c0030a2856f797df0e18493f->leave($__internal_25fc0dfa74d0c0ed8538dce687139fac89ba97f7c0030a2856f797df0e18493f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ include('@EspritFamycity/Registration/register_content.html.twig') }}", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\FamicityMah\\src\\Esprit\\FamycityBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
