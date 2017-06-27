<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_2c34c82d4b663e85ea20603574030e7eb50358d525f48b91a4bd71140a2b68a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0222ff5498746bc56ce57851537fee409f7d90fa50de916579c1b2dc3eee9557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0222ff5498746bc56ce57851537fee409f7d90fa50de916579c1b2dc3eee9557->enter($__internal_0222ff5498746bc56ce57851537fee409f7d90fa50de916579c1b2dc3eee9557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_67d70787dc9f3042a7dbcfca96053cdec523f22ec7e0be2bc63ce5c408c0340b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d70787dc9f3042a7dbcfca96053cdec523f22ec7e0be2bc63ce5c408c0340b->enter($__internal_67d70787dc9f3042a7dbcfca96053cdec523f22ec7e0be2bc63ce5c408c0340b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Famicity Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/iCheck/square/blue.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"hold-transition login-page\">
<div class=\"login-box\">
    <div class=\"login-logo\">
        <a href=\"\"><b>Fami</b>city</a>
    </div>
    <!-- /.login-logo -->
    <div class=\"login-box-body\">
        <p class=\"login-box-msg\">Accèder à votre session
            <base href=\"\"></p>
        ";
        // line 36
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 69
        echo "    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.3.7 -->
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- iCheck -->
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(function () {
        \$('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
    console.log(\"test\")
</script>
</body>
</html>
";
        
        $__internal_0222ff5498746bc56ce57851537fee409f7d90fa50de916579c1b2dc3eee9557->leave($__internal_0222ff5498746bc56ce57851537fee409f7d90fa50de916579c1b2dc3eee9557_prof);

        
        $__internal_67d70787dc9f3042a7dbcfca96053cdec523f22ec7e0be2bc63ce5c408c0340b->leave($__internal_67d70787dc9f3042a7dbcfca96053cdec523f22ec7e0be2bc63ce5c408c0340b_prof);

    }

    // line 36
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee992addaba84e62eff654c1fafc4ae2318bf09f4dd5fc35c5d3ba7e61a04d27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee992addaba84e62eff654c1fafc4ae2318bf09f4dd5fc35c5d3ba7e61a04d27->enter($__internal_ee992addaba84e62eff654c1fafc4ae2318bf09f4dd5fc35c5d3ba7e61a04d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bbef7425ac441e67fe2cdc16d0d52b796d8560fe455265e9b4ec5a07010f17c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbef7425ac441e67fe2cdc16d0d52b796d8560fe455265e9b4ec5a07010f17c4->enter($__internal_bbef7425ac441e67fe2cdc16d0d52b796d8560fe455265e9b4ec5a07010f17c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 37
        echo "
            <form>

                <div class=\"form-group has-feedback\">
                    <input type=\"mail\" class=\"form-control\" placeholder=\"Mail\">
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>

                <div class=\"form-group has-feedback\">
                    <input type=\"pwd\" class=\"form-control\" placeholder=\"Mot de passe\">
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox icheck\">
                            <label>
                                <input type=\"checkbox\">Enregistrer le mot de passe
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Connexion</button>
                    </div>

                    <!-- /.col -->
                </div>


            </form>
        ";
        
        $__internal_bbef7425ac441e67fe2cdc16d0d52b796d8560fe455265e9b4ec5a07010f17c4->leave($__internal_bbef7425ac441e67fe2cdc16d0d52b796d8560fe455265e9b4ec5a07010f17c4_prof);

        
        $__internal_ee992addaba84e62eff654c1fafc4ae2318bf09f4dd5fc35c5d3ba7e61a04d27->leave($__internal_ee992addaba84e62eff654c1fafc4ae2318bf09f4dd5fc35c5d3ba7e61a04d27_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 37,  119 => 36,  95 => 79,  90 => 77,  85 => 75,  77 => 69,  75 => 36,  54 => 18,  49 => 16,  42 => 12,  37 => 10,  26 => 1,);
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
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Famicity Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" href=\"{{asset('Famicity/bootstrap/css/bootstrap.min.css')}}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('Famicity/font-awesome/css/font-awesome.css') }}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{asset('Famicity/dist/css/AdminLTE.min.css')}}\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{asset('Famicity/plugins/iCheck/square/blue.css')}}\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"hold-transition login-page\">
<div class=\"login-box\">
    <div class=\"login-logo\">
        <a href=\"\"><b>Fami</b>city</a>
    </div>
    <!-- /.login-logo -->
    <div class=\"login-box-body\">
        <p class=\"login-box-msg\">Accèder à votre session
            <base href=\"\"></p>
        {% block fos_user_content %}

            <form>

                <div class=\"form-group has-feedback\">
                    <input type=\"mail\" class=\"form-control\" placeholder=\"Mail\">
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>

                <div class=\"form-group has-feedback\">
                    <input type=\"pwd\" class=\"form-control\" placeholder=\"Mot de passe\">
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox icheck\">
                            <label>
                                <input type=\"checkbox\">Enregistrer le mot de passe
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Connexion</button>
                    </div>

                    <!-- /.col -->
                </div>


            </form>
        {% endblock %}
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src=\"{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}\"></script>
<!-- Bootstrap 3.3.7 -->
<script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
<!-- iCheck -->
<script src=\"{{ asset('plugins/iCheck/icheck.min.js')}}\"></script>
<script>
    \$(function () {
        \$('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
    console.log(\"test\")
</script>
</body>
</html>
", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\FamicityMah\\src\\Esprit\\FamycityBundle\\Resources\\views\\layout.html.twig");
    }
}
