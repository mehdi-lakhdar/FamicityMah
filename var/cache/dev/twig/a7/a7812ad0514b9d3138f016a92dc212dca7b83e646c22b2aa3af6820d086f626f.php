<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_80e5cd6125914324373c3cb69110bab6b8e479e36ede7ed72c0f0a688f5fd565 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_084c2e5269abb9a78f914993590b170403e7595bd7e73a48cdf97ea7c7131ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084c2e5269abb9a78f914993590b170403e7595bd7e73a48cdf97ea7c7131ab6->enter($__internal_084c2e5269abb9a78f914993590b170403e7595bd7e73a48cdf97ea7c7131ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a6812c527462d083b2d263665195b4f7c1e0a59a8a4837eb8e177efe9aaa61a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6812c527462d083b2d263665195b4f7c1e0a59a8a4837eb8e177efe9aaa61a8->enter($__internal_a6812c527462d083b2d263665195b4f7c1e0a59a8a4837eb8e177efe9aaa61a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_084c2e5269abb9a78f914993590b170403e7595bd7e73a48cdf97ea7c7131ab6->leave($__internal_084c2e5269abb9a78f914993590b170403e7595bd7e73a48cdf97ea7c7131ab6_prof);

        
        $__internal_a6812c527462d083b2d263665195b4f7c1e0a59a8a4837eb8e177efe9aaa61a8->leave($__internal_a6812c527462d083b2d263665195b4f7c1e0a59a8a4837eb8e177efe9aaa61a8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e11f38f2070e5ada5c04c2bd6c073b8c67fa90d9596284988ad2cbfba4785cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e11f38f2070e5ada5c04c2bd6c073b8c67fa90d9596284988ad2cbfba4785cd->enter($__internal_3e11f38f2070e5ada5c04c2bd6c073b8c67fa90d9596284988ad2cbfba4785cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d5a13e86e7b839c81cb5249a3ec8c700da59d498c5e585819f2f044e01c85e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5a13e86e7b839c81cb5249a3ec8c700da59d498c5e585819f2f044e01c85e7->enter($__internal_9d5a13e86e7b839c81cb5249a3ec8c700da59d498c5e585819f2f044e01c85e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9d5a13e86e7b839c81cb5249a3ec8c700da59d498c5e585819f2f044e01c85e7->leave($__internal_9d5a13e86e7b839c81cb5249a3ec8c700da59d498c5e585819f2f044e01c85e7_prof);

        
        $__internal_3e11f38f2070e5ada5c04c2bd6c073b8c67fa90d9596284988ad2cbfba4785cd->leave($__internal_3e11f38f2070e5ada5c04c2bd6c073b8c67fa90d9596284988ad2cbfba4785cd_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee0f3d97518bc913c7f70ed7a788724cf2d4694c61b876c8d358f62ca56cd7be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0f3d97518bc913c7f70ed7a788724cf2d4694c61b876c8d358f62ca56cd7be->enter($__internal_ee0f3d97518bc913c7f70ed7a788724cf2d4694c61b876c8d358f62ca56cd7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4e61c72ce2abfa64c39b77a85e7d6f6f3c9bc1f670850b032380d11fa2bf46c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e61c72ce2abfa64c39b77a85e7d6f6f3c9bc1f670850b032380d11fa2bf46c2->enter($__internal_4e61c72ce2abfa64c39b77a85e7d6f6f3c9bc1f670850b032380d11fa2bf46c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4e61c72ce2abfa64c39b77a85e7d6f6f3c9bc1f670850b032380d11fa2bf46c2->leave($__internal_4e61c72ce2abfa64c39b77a85e7d6f6f3c9bc1f670850b032380d11fa2bf46c2_prof);

        
        $__internal_ee0f3d97518bc913c7f70ed7a788724cf2d4694c61b876c8d358f62ca56cd7be->leave($__internal_ee0f3d97518bc913c7f70ed7a788724cf2d4694c61b876c8d358f62ca56cd7be_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_25dd532bab4bb9094ef81787d893766dc17464de89613a47900be63eb50fd4e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25dd532bab4bb9094ef81787d893766dc17464de89613a47900be63eb50fd4e5->enter($__internal_25dd532bab4bb9094ef81787d893766dc17464de89613a47900be63eb50fd4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5dd8ca086fcb47817848514066338dc7d2c5f59216be56205d2cd68c5f34bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5dd8ca086fcb47817848514066338dc7d2c5f59216be56205d2cd68c5f34bc4->enter($__internal_f5dd8ca086fcb47817848514066338dc7d2c5f59216be56205d2cd68c5f34bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f5dd8ca086fcb47817848514066338dc7d2c5f59216be56205d2cd68c5f34bc4->leave($__internal_f5dd8ca086fcb47817848514066338dc7d2c5f59216be56205d2cd68c5f34bc4_prof);

        
        $__internal_25dd532bab4bb9094ef81787d893766dc17464de89613a47900be63eb50fd4e5->leave($__internal_25dd532bab4bb9094ef81787d893766dc17464de89613a47900be63eb50fd4e5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\FamicityMah\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
