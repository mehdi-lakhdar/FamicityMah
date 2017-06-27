<?php

/* EspritFamycityBundle:Reclamation:CreationReclamation.html.twig */
class __TwigTemplate_940fbbad52436069ed193c8190fffd2caa9f96023e19870696ef578747daa459 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@EspritFamycity/secondlayout.html.twig", "EspritFamycityBundle:Reclamation:CreationReclamation.html.twig", 2);
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
        $__internal_14b01d7d717352a480a19724e4254512a4336f823f0a1032ebdd7ec757629f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b01d7d717352a480a19724e4254512a4336f823f0a1032ebdd7ec757629f63->enter($__internal_14b01d7d717352a480a19724e4254512a4336f823f0a1032ebdd7ec757629f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspritFamycityBundle:Reclamation:CreationReclamation.html.twig"));

        $__internal_0019e582a4f3b79b7b698ce798c3ab97fbd6dfa8358c5045c9d8a343204de3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0019e582a4f3b79b7b698ce798c3ab97fbd6dfa8358c5045c9d8a343204de3b3->enter($__internal_0019e582a4f3b79b7b698ce798c3ab97fbd6dfa8358c5045c9d8a343204de3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspritFamycityBundle:Reclamation:CreationReclamation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14b01d7d717352a480a19724e4254512a4336f823f0a1032ebdd7ec757629f63->leave($__internal_14b01d7d717352a480a19724e4254512a4336f823f0a1032ebdd7ec757629f63_prof);

        
        $__internal_0019e582a4f3b79b7b698ce798c3ab97fbd6dfa8358c5045c9d8a343204de3b3->leave($__internal_0019e582a4f3b79b7b698ce798c3ab97fbd6dfa8358c5045c9d8a343204de3b3_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_be1f2964a5b2ed36f6f23697e046e883c8d421833a0f411e1c23ecabfc05b854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be1f2964a5b2ed36f6f23697e046e883c8d421833a0f411e1c23ecabfc05b854->enter($__internal_be1f2964a5b2ed36f6f23697e046e883c8d421833a0f411e1c23ecabfc05b854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c9e2a89bd66ace1f22860a3cbd8df0fb45bf4cb474dbfe77fd645483b70144c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e2a89bd66ace1f22860a3cbd8df0fb45bf4cb474dbfe77fd645483b70144c9->enter($__internal_c9e2a89bd66ace1f22860a3cbd8df0fb45bf4cb474dbfe77fd645483b70144c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            Acceuil
            <small>example</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"#\">UI</a></li>
            <li class=\"active\">Timeline</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">

    <!-- row -->
    <div class=\"row\">
    <div class=\"col-md-12\">
    <!-- The time line -->
    <ul class=\"timeline\">
    <!-- timeline time label -->
    <li class=\"time-label\">
                  <span class=\"bg-red\">
                    10 Feb. 2014
                  </span>
    </li>
    <!-- /.timeline-label -->
    <!-- timeline item -->
    <li>
    <i class=\"fa fa-envelope bg-blue\"></i>

    <div class=\"timeline-item\">
        <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 12:05</span>

        <h3 class=\"timeline-header\"><a href=\"#\">Créer une publcation</a> sent you an email</h3>

        <div class=\"timeline-body\">
            ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["f2"]) ? $context["f2"] : $this->getContext($context, "f2")), 'form_start');
        echo "

            <table>

                <tr>
                    <td>Titre:</td>
                    <td>";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["f2"]) ? $context["f2"] : $this->getContext($context, "f2")), "titre", array()), 'widget');
        echo "</td>
                </tr>

                <tr>
                    <td>objet:</td>
                    <td>";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["f2"]) ? $context["f2"] : $this->getContext($context, "f2")), "objet", array()), 'widget');
        echo "</td>
                </tr>


                <tr>
                    <td >Description:</td>
                    <td>";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["f2"]) ? $context["f2"] : $this->getContext($context, "f2")), "description", array()), 'widget');
        echo "</td></tr>

                <tr>

                <tr>
                    <td >date:</td>
                    <td>";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["f2"]) ? $context["f2"] : $this->getContext($context, "f2")), "date", array()), 'widget');
        echo "</td></tr>

                <tr>

                    <td>";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["f2"]) ? $context["f2"] : $this->getContext($context, "f2")), "save", array()), 'widget');
        echo "</td>
                </tr>
            </table>


            ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["f2"]) ? $context["f2"] : $this->getContext($context, "f2")), 'form_end');
        echo "
        </div>

        <div class=\"box-body\">
                  <pre style=\"font-weight: 600;\">

                  </pre>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- /.col -->


    <div class=\"control-sidebar-bg\"></div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morris.js charts -->
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c9e2a89bd66ace1f22860a3cbd8df0fb45bf4cb474dbfe77fd645483b70144c9->leave($__internal_c9e2a89bd66ace1f22860a3cbd8df0fb45bf4cb474dbfe77fd645483b70144c9_prof);

        
        $__internal_be1f2964a5b2ed36f6f23697e046e883c8d421833a0f411e1c23ecabfc05b854->leave($__internal_be1f2964a5b2ed36f6f23697e046e883c8d421833a0f411e1c23ecabfc05b854_prof);

    }

    public function getTemplateName()
    {
        return "EspritFamycityBundle:Reclamation:CreationReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 132,  245 => 130,  240 => 128,  235 => 126,  230 => 124,  225 => 122,  220 => 120,  215 => 118,  211 => 117,  206 => 115,  201 => 113,  197 => 112,  192 => 110,  187 => 108,  183 => 107,  178 => 105,  169 => 99,  164 => 97,  142 => 78,  134 => 73,  127 => 69,  118 => 63,  109 => 57,  101 => 52,  92 => 46,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends '@EspritFamycity/secondlayout.html.twig' %}

{% block content %}

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            Acceuil
            <small>example</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"#\">UI</a></li>
            <li class=\"active\">Timeline</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">

    <!-- row -->
    <div class=\"row\">
    <div class=\"col-md-12\">
    <!-- The time line -->
    <ul class=\"timeline\">
    <!-- timeline time label -->
    <li class=\"time-label\">
                  <span class=\"bg-red\">
                    10 Feb. 2014
                  </span>
    </li>
    <!-- /.timeline-label -->
    <!-- timeline item -->
    <li>
    <i class=\"fa fa-envelope bg-blue\"></i>

    <div class=\"timeline-item\">
        <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 12:05</span>

        <h3 class=\"timeline-header\"><a href=\"#\">Créer une publcation</a> sent you an email</h3>

        <div class=\"timeline-body\">
            {{ form_start(f2) }}

            <table>

                <tr>
                    <td>Titre:</td>
                    <td>{{ form_widget(f2.titre) }}</td>
                </tr>

                <tr>
                    <td>objet:</td>
                    <td>{{ form_widget(f2.objet) }}</td>
                </tr>


                <tr>
                    <td >Description:</td>
                    <td>{{ form_widget(f2.description) }}</td></tr>

                <tr>

                <tr>
                    <td >date:</td>
                    <td>{{ form_widget(f2.date) }}</td></tr>

                <tr>

                    <td>{{ form_widget(f2.save) }}</td>
                </tr>
            </table>


            {{ form_end(f2) }}
        </div>

        <div class=\"box-body\">
                  <pre style=\"font-weight: 600;\">

                  </pre>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- /.col -->


    <div class=\"control-sidebar-bg\"></div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src=\"{{asset('Famicity/plugins/jQuery/jquery-2.2.3.min.js')}}\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"{{asset('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js')}}\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src=\"{{asset('Famicity/bootstrap/js/bootstrap.min.js')}}\"></script>
    <!-- Morris.js charts -->
    <script src=\"{{asset('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}\"></script>
    <script src=\"{{asset('Famicity/plugins/morris/morris.min.js')}}\"></script>
    <!-- Sparkline -->
    <script src=\"{{asset('Famicity/plugins/sparkline/jquery.sparkline.min.js')}}\"></script>
    <!-- jvectormap -->
    <script src=\"{{asset('Famicity/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}\"></script>
    <script src=\"{{asset('Famicity/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"{{asset('Famicity/plugins/knob/jquery.knob.js')}}\"></script>
    <!-- daterangepicker -->
    <script src=\"{{asset('Famicity/https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js')}}\"></script>
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
{% endblock %}", "EspritFamycityBundle:Reclamation:CreationReclamation.html.twig", "C:\\wamp64\\www\\FamicityMah\\src\\Esprit\\FamycityBundle/Resources/views/Reclamation/CreationReclamation.html.twig");
    }
}
