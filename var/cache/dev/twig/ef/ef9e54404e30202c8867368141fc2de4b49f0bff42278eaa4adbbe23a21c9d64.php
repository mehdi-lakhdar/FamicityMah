<?php

/* EspritFamycityBundle:Stat:Stat.html.twig */
class __TwigTemplate_b803e95ec9c912146d150e88a7a8e9c40163ad21b29dbe458d08b6f8c92f0fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EspritFamycity/secondlayout.html.twig", "EspritFamycityBundle:Stat:Stat.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@EspritFamycity/secondlayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f980e44e59a023c38ceafe278b0421012de9db8f166a096e14b12380afb54a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f980e44e59a023c38ceafe278b0421012de9db8f166a096e14b12380afb54a8b->enter($__internal_f980e44e59a023c38ceafe278b0421012de9db8f166a096e14b12380afb54a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspritFamycityBundle:Stat:Stat.html.twig"));

        $__internal_7739d189f7ad29e9e831a8d7227776c68a6eff5cd825c959afe853b1d5bf6365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7739d189f7ad29e9e831a8d7227776c68a6eff5cd825c959afe853b1d5bf6365->enter($__internal_7739d189f7ad29e9e831a8d7227776c68a6eff5cd825c959afe853b1d5bf6365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspritFamycityBundle:Stat:Stat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f980e44e59a023c38ceafe278b0421012de9db8f166a096e14b12380afb54a8b->leave($__internal_f980e44e59a023c38ceafe278b0421012de9db8f166a096e14b12380afb54a8b_prof);

        
        $__internal_7739d189f7ad29e9e831a8d7227776c68a6eff5cd825c959afe853b1d5bf6365->leave($__internal_7739d189f7ad29e9e831a8d7227776c68a6eff5cd825c959afe853b1d5bf6365_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6397efdd0ef057884ab6f728b0855f7ad155065619e56128468e607d6b6df62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6397efdd0ef057884ab6f728b0855f7ad155065619e56128468e607d6b6df62d->enter($__internal_6397efdd0ef057884ab6f728b0855f7ad155065619e56128468e607d6b6df62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5988ec9710c375f0b30a9d86f669b1bf07fe672c92b0c79579dcb6fdd7f0cd50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5988ec9710c375f0b30a9d86f669b1bf07fe672c92b0c79579dcb6fdd7f0cd50->enter($__internal_5988ec9710c375f0b30a9d86f669b1bf07fe672c92b0c79579dcb6fdd7f0cd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            Statistique

        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_famycity_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i> Statistique</a></li>
            <li class=\"active\">Reclamation</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">










    <!-- jQuery 2.2.3 -->
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morris.js charts -->
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/js/demo.js"), "html", null, true);
        echo "\"></script>




    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://code.jquery.com/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://code.highcharts.com/4.0.1/highcharts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://code.highcharts.com/4.0.1/modules/exporting.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\"> ";
        // line 76
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo " </script>
    <div id=\"container\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>";
        // line 78
        echo "
";
        
        $__internal_5988ec9710c375f0b30a9d86f669b1bf07fe672c92b0c79579dcb6fdd7f0cd50->leave($__internal_5988ec9710c375f0b30a9d86f669b1bf07fe672c92b0c79579dcb6fdd7f0cd50_prof);

        
        $__internal_6397efdd0ef057884ab6f728b0855f7ad155065619e56128468e607d6b6df62d->leave($__internal_6397efdd0ef057884ab6f728b0855f7ad155065619e56128468e607d6b6df62d_prof);

    }

    public function getTemplateName()
    {
        return "EspritFamycityBundle:Stat:Stat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 78,  189 => 76,  184 => 74,  180 => 73,  176 => 72,  168 => 67,  163 => 65,  158 => 63,  153 => 61,  148 => 59,  143 => 57,  138 => 55,  133 => 53,  129 => 52,  124 => 50,  119 => 48,  115 => 47,  110 => 45,  105 => 43,  101 => 42,  96 => 40,  87 => 34,  82 => 32,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@EspritFamycity/secondlayout.html.twig' %}

{% block content %}

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            Statistique

        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"{{path(\"esprit_famycity_homepage\") }}\"><i class=\"fa fa-dashboard\"></i> Statistique</a></li>
            <li class=\"active\">Reclamation</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">










    <!-- jQuery 2.2.3 -->
    <script src=\"{{asset('Famicity/plugins/jQuery/jquery-2.2.3.min.js')}}\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"{{asset('http://code.jquery.com/ui/1.11.4/jquery-ui.min.js')}}\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src=\"{{asset('Famicity/bootstrap/js/bootstrap.min.js')}}\"></script>
    <!-- Morris.js charts -->
    <script src=\"{{asset('http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}\"></script>
    <script src=\"{{asset('Famicity/plugins/morris/morris.min.js')}}\"></script>
    <!-- Sparkline -->
    <script src=\"{{asset('Famicity/plugins/sparkline/jquery.sparkline.min.js')}}\"></script>
    <!-- jvectormap -->
    <script src=\"{{asset('Famicity/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}\"></script>
    <script src=\"{{asset('Famicity/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"{{asset('Famicity/plugins/knob/jquery.knob.js')}}\"></script>
    <!-- daterangepicker -->
    <script src=\"{{asset('http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js')}}\"></script>
    <script src=\"{{asset('Famicity/plugins/daterangepicker/daterangepicker.js')}}\"></script>
    <!-- datepicker -->
    <script src=\"{{asset('Famicity/plugins/datepicker/bootstrap-datepicker.js')}}\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"{{asset('Famicity/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}\"></script>
    <!-- Slimscroll -->
    <script src=\"{{asset('Famicity/plugins/slimScroll/jquery.slimscroll.min.js')}}\"></script>
    <!-- FastClick -->
    <script src=\"{{asset('Famicity/plugins/fastclick/fastclick.js')}}\"></script>
    <!-- AdminLTE App -->
    <script src=\"{{asset('Famicity/dist/js/app.min.js')}}\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"{{asset('Famicity/dist/js/pages/dashboard.js')}}\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"{{asset('Famicity/dist/js/demo.js')}}\"></script>




    <script src=\"{{asset('http://code.jquery.com/jquery-3.2.1.min.js')}}\" ></script>
    <script src=\"{{asset('http://code.highcharts.com/4.0.1/highcharts.js')}}\"></script>
    <script src=\"{{asset('http://code.highcharts.com/4.0.1/modules/exporting.js')}}\"></script>

    <script type=\"text/javascript\"> {{ chart(chart) }} </script>
    <div id=\"container\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>{# empty Twig template #}

{% endblock %}", "EspritFamycityBundle:Stat:Stat.html.twig", "C:\\wamp64\\www\\FamicityMah\\src\\Esprit\\FamycityBundle/Resources/views/Stat/Stat.html.twig");
    }
}
