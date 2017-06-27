<?php

/* @EspritFamycity/Registration/register_content.html.twig */
class __TwigTemplate_28a78b196e15f4a65f370e76310646c18db61c3169004975a99c462008ebe3e3 extends Twig_Template
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
        $__internal_994ceffae1726965b64ae4570201779e1f3598dab69578236e64437a98ea2239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994ceffae1726965b64ae4570201779e1f3598dab69578236e64437a98ea2239->enter($__internal_994ceffae1726965b64ae4570201779e1f3598dab69578236e64437a98ea2239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EspritFamycity/Registration/register_content.html.twig"));

        $__internal_d993305f13934cc24679461709a216ce1fb4fee35047f166febc5ca99837b092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d993305f13934cc24679461709a216ce1fb4fee35047f166febc5ca99837b092->enter($__internal_d993305f13934cc24679461709a216ce1fb4fee35047f166febc5ca99837b092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EspritFamycity/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_994ceffae1726965b64ae4570201779e1f3598dab69578236e64437a98ea2239->leave($__internal_994ceffae1726965b64ae4570201779e1f3598dab69578236e64437a98ea2239_prof);

        
        $__internal_d993305f13934cc24679461709a216ce1fb4fee35047f166febc5ca99837b092->leave($__internal_d993305f13934cc24679461709a216ce1fb4fee35047f166febc5ca99837b092_prof);

    }

    public function getTemplateName()
    {
        return "@EspritFamycity/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@EspritFamycity/Registration/register_content.html.twig", "C:\\wamp64\\www\\FamicityMah\\src\\Esprit\\FamycityBundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
