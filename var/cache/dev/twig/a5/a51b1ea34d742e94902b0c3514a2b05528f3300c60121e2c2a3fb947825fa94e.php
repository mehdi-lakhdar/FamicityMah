<?php

/* @EspritFamycity/Default/home.html.twig */
class __TwigTemplate_f37c435c567fa1e70d6a57d98f937a84fe8490a008a829b43c23273a3cc5599a extends Twig_Template
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
        $__internal_6a4a95c6aada60e8a54a85d27fb4fa5fbc3979619ff3e59e41152b7719ad00b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4a95c6aada60e8a54a85d27fb4fa5fbc3979619ff3e59e41152b7719ad00b6->enter($__internal_6a4a95c6aada60e8a54a85d27fb4fa5fbc3979619ff3e59e41152b7719ad00b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EspritFamycity/Default/home.html.twig"));

        $__internal_8b968007903d305e4fb27e1d034d2d03880d1a3a66d90bb34c1bfcbb494b36f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b968007903d305e4fb27e1d034d2d03880d1a3a66d90bb34c1bfcbb494b36f3->enter($__internal_8b968007903d305e4fb27e1d034d2d03880d1a3a66d90bb34c1bfcbb494b36f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EspritFamycity/Default/home.html.twig"));

        // line 8
        echo "
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Social Pro</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/build/less/skins/_all-skins.less"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/build/less/dropdown.less"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/morris/morris.css"), "html", null, true);
        echo "\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"index2.html\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>Social</b>Prohhhhhhhhhhhhhhhhhhhhhhhh</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\">
            <!-- Sidebar toggle button-->
            <a href=\"#\"  class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>

            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class=\"dropdown messages-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"label label-success\">4</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li><!-- start message -->
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                AdminLTE Design Team TEST
                                                <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Developers
                                                <small><i class=\"fa fa-clock-o\"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Sales Department
                                                <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"Famicity/dist/img/user4-128x128.jpg\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Reviewers
                                                <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class=\"dropdown notifications-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"label label-warning\">10</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the
                                            page and may cause design problems
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-red\"></i> 5 new members joined
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-user text-red\"></i> You changed your username
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class=\"dropdown tasks-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-flag-o\"></i>
                            <span class=\"label label-danger\">9</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Design some buttons
                                                <small class=\"pull-right\">20%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Create a nice theme
                                                <small class=\"pull-right\">40%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Some task I need to do
                                                <small class=\"pull-right\">60%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Make beautiful transitions
                                                <small class=\"pull-right\">80%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class=\"footer\">
                                <a href=\"#\">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">Alexander Pierce</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\">
                                <img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class=\"user-body\">
                                <div class=\"row\">
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Followers</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Sales</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <!-- Sidebar user panel -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
                    <img src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                </div>
                <div class=\"pull-left info\">
                    <p>Alexander Pierce</p>
                    <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class=\"sidebar-menu\">
                <li class=\"header\">MAIN NAVIGATION</li>

                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-pie-chart\"></i>
                        <span>Demande services</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"pages/charts/chartjs.html\"><i class=\"fa fa-circle-o\"></i> Ressource Humain</a></li>
                        <li><a href=\"pages/charts/morris.html\"><i class=\"fa fa-circle-o\"></i> Comptable</a></li>
                        <li><a href=\"pages/charts/flot.html\"><i class=\"fa fa-circle-o\"></i> Audit</a></li>
                        <li><a href=\"pages/charts/flot.html\"><i class=\"fa fa-circle-o\"></i> Diretion  général</a></li>
                        <li><a href=\"pages/charts/flot.html\"><i class=\"fa fa-circle-o\"></i> IT</a></li>
                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-laptop\"></i>
                        <span>Gestion des utilisateurs</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"pages/tables/simple.html\"><i class=\"fa fa-circle-o\"></i> Liste des utilisateurs</a></li>

                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-edit\"></i> <span>Forms</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"pages/forms/general.html\"><i class=\"fa fa-circle-o\"></i> General Elements</a></li>
                        <li><a href=\"pages/forms/advanced.html\"><i class=\"fa fa-circle-o\"></i> Advanced Elements</a></li>
                        <li><a href=\"pages/forms/editors.html\"><i class=\"fa fa-circle-o\"></i> Editors</a></li>
                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-table\"></i> <span>Tables</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"pages/tables/simple.html\"><i class=\"fa fa-circle-o\"></i> Simple tables</a></li>
                        <li><a href=\"pages/tables/data.html\"><i class=\"fa fa-circle-o\"></i> Data tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"pages/calendar.html\">
                        <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                        <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-red\">3</small>
              <small class=\"label pull-right bg-blue\">17</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href=\"pages/mailbox/mailbox.html\">
                        <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                        <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-yellow\">12</small>
              <small class=\"label pull-right bg-green\">16</small>
              <small class=\"label pull-right bg-red\">5</small>
            </span>
                    </a>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-pie-chart\"></i>
                        <span>Reclamation</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
        // line 423
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Reclamation");
        echo "\"><i class=\"fa fa-circle-o\"></i> Creer Reclamation</a></li>
                        <li><a href=\"";
        // line 424
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Reclamation2");
        echo "\"><i class=\"fa fa-circle-o\"></i> Mes Reclamation</a></li>

                    </ul>
                </li>


                <li class=\"header\">LABELS</li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> <span>Important</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i> <span>Warning</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o text-aqua\"></i> <span>Information</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

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

                                <h3 class=\"timeline-header\"><a href=\"#\">Support Team</a> sent you an email</h3>

                                <div class=\"timeline-body\">
                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                    quora plaxo ideeli hulu weebly balihoo...
                                </div>
                                <div class=\"timeline-footer\">
                                    <a class=\"btn btn-primary btn-xs\">Read more</a>
                                    <a class=\"btn btn-danger btn-xs\">Delete</a>
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <li>
                            <i class=\"fa fa-user bg-aqua\"></i>

                            <div class=\"timeline-item\">
                                <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 5 mins ago</span>

                                <h3 class=\"timeline-header no-border\"><a href=\"#\">Sarah Young</a> accepted your friend request</h3>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <li>
                            <i class=\"fa fa-comments bg-yellow\"></i>

                            <div class=\"timeline-item\">
                                <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 27 mins ago</span>

                                <h3 class=\"timeline-header\"><a href=\"#\">Jay White</a> commented on your post</h3>

                                <div class=\"timeline-body\">
                                    Take me to your leader!
                                    Switzerland is small and neutral!
                                    We are more like Germany, ambitious and misunderstood!
                                </div>
                                <div class=\"timeline-footer\">
                                    <a class=\"btn btn-warning btn-flat btn-xs\">View comment</a>
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline time label -->
                        <li class=\"time-label\">
                  <span class=\"bg-green\">
                    3 Jan. 2014
                  </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                            <i class=\"fa fa-camera bg-purple\"></i>

                            <div class=\"timeline-item\">
                                <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 2 days ago</span>

                                <h3 class=\"timeline-header\"><a href=\"#\">Mina Lee</a> uploaded new photos</h3>

                                <div class=\"timeline-body\">
                                    <img src=\"http://placehold.it/150x100\" alt=\"...\" class=\"margin\">
                                    <img src=\"http://placehold.it/150x100\" alt=\"...\" class=\"margin\">
                                    <img src=\"http://placehold.it/150x100\" alt=\"...\" class=\"margin\">
                                    <img src=\"http://placehold.it/150x100\" alt=\"...\" class=\"margin\">
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <li>
                            <i class=\"fa fa-video-camera bg-maroon\"></i>

                            <div class=\"timeline-item\">
                                <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 5 days ago</span>

                                <h3 class=\"timeline-header\"><a href=\"#\">Mr. Doe</a> shared a video</h3>

                                <div class=\"timeline-body\">
                                    <div class=\"embed-responsive embed-responsive-16by9\">
                                        <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/tMWkeBIohBs\" frameborder=\"0\" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class=\"timeline-footer\">
                                    <a href=\"#\" class=\"btn btn-xs bg-maroon\">See comments</a>
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <li>
                            <i class=\"fa fa-clock-o bg-gray\"></i>
                        </li>
                    </ul>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class=\"row\" style=\"margin-top: 10px;\">
                <div class=\"col-md-12\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\"><i class=\"fa fa-code\"></i> Timeline Markup</h3>
                        </div>
                        <div class=\"box-body\">
                  <pre style=\"font-weight: 600;\">

                  </pre>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Morris.js charts -->
<script src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
<!-- Sparkline -->
<script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
<!-- jvectormap -->
<script src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery Knob Chart -->
<script src=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
<!-- daterangepicker -->
<script src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!-- datepicker -->
<script src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
<!-- Slimscroll -->
<script src=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Famicity/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_6a4a95c6aada60e8a54a85d27fb4fa5fbc3979619ff3e59e41152b7719ad00b6->leave($__internal_6a4a95c6aada60e8a54a85d27fb4fa5fbc3979619ff3e59e41152b7719ad00b6_prof);

        
        $__internal_8b968007903d305e4fb27e1d034d2d03880d1a3a66d90bb34c1bfcbb494b36f3->leave($__internal_8b968007903d305e4fb27e1d034d2d03880d1a3a66d90bb34c1bfcbb494b36f3_prof);

    }

    public function getTemplateName()
    {
        return "@EspritFamycity/Default/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  778 => 642,  773 => 640,  768 => 638,  763 => 636,  758 => 634,  753 => 632,  748 => 630,  743 => 628,  739 => 627,  734 => 625,  729 => 623,  725 => 622,  720 => 620,  715 => 618,  711 => 617,  706 => 615,  697 => 609,  692 => 607,  506 => 424,  502 => 423,  395 => 319,  344 => 271,  335 => 265,  187 => 120,  172 => 108,  157 => 96,  141 => 83,  95 => 40,  90 => 38,  85 => 36,  80 => 34,  75 => 32,  70 => 30,  65 => 28,  59 => 25,  54 => 23,  49 => 21,  44 => 19,  40 => 18,  36 => 17,  25 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

{% trans_default_domain 'FOSUserBundle' %}

{{ include('@EspritFamycity/Profile/show_content.html.twig') }}

#}

<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Social Pro</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" href=\"{{asset('Famicity/bootstrap/css/bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('Famicity/build/less/skins/_all-skins.less')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('Famicity/build/less/dropdown.less')}}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('Famicity/font-awesome/css/font-awesome.css') }}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"{{asset('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css')}}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{asset('Famicity/dist/css/AdminLTE.min.css')}}\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"{{asset('Famicity/dist/css/skins/_all-skins.min.css')}}\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{asset('Famicity/plugins/iCheck/flat/blue.css')}}\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"{{asset('Famicity/plugins/morris/morris.css')}}\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"{{asset('Famicity/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"{{asset('Famicity/plugins/datepicker/datepicker3.css')}}\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"{{asset('Famicity/plugins/daterangepicker/daterangepicker.css')}}\">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"{{asset('Famicity/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"index2.html\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>Social</b>Prohhhhhhhhhhhhhhhhhhhhhhhh</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\">
            <!-- Sidebar toggle button-->
            <a href=\"#\"  class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>

            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class=\"dropdown messages-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"label label-success\">4</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li><!-- start message -->
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"{{asset('Famicity/dist/img/user2-160x160.jpg')}}\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"{{asset('Famicity/dist/img/user3-128x128.jpg')}}\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                AdminLTE Design Team TEST
                                                <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"{{asset('Famicity/dist/img/user4-128x128.jpg')}}\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Developers
                                                <small><i class=\"fa fa-clock-o\"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"{{asset('Famicity/dist/img/user3-128x128.jpg')}}\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Sales Department
                                                <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"Famicity/dist/img/user4-128x128.jpg\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Reviewers
                                                <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class=\"dropdown notifications-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"label label-warning\">10</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the
                                            page and may cause design problems
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-red\"></i> 5 new members joined
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-user text-red\"></i> You changed your username
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class=\"dropdown tasks-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-flag-o\"></i>
                            <span class=\"label label-danger\">9</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Design some buttons
                                                <small class=\"pull-right\">20%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Create a nice theme
                                                <small class=\"pull-right\">40%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Some task I need to do
                                                <small class=\"pull-right\">60%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Make beautiful transitions
                                                <small class=\"pull-right\">80%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class=\"footer\">
                                <a href=\"#\">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"{{asset('Famicity/dist/img/user2-160x160.jpg')}}\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">Alexander Pierce</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\">
                                <img src=\"{{asset('Famicity/dist/img/user2-160x160.jpg')}}\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class=\"user-body\">
                                <div class=\"row\">
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Followers</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Sales</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <!-- Sidebar user panel -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
                    <img src=\"{{asset('Famicity/dist/img/user2-160x160.jpg')}}\" class=\"img-circle\" alt=\"User Image\">
                </div>
                <div class=\"pull-left info\">
                    <p>Alexander Pierce</p>
                    <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class=\"sidebar-menu\">
                <li class=\"header\">MAIN NAVIGATION</li>

                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-pie-chart\"></i>
                        <span>Demande services</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"pages/charts/chartjs.html\"><i class=\"fa fa-circle-o\"></i> Ressource Humain</a></li>
                        <li><a href=\"pages/charts/morris.html\"><i class=\"fa fa-circle-o\"></i> Comptable</a></li>
                        <li><a href=\"pages/charts/flot.html\"><i class=\"fa fa-circle-o\"></i> Audit</a></li>
                        <li><a href=\"pages/charts/flot.html\"><i class=\"fa fa-circle-o\"></i> Diretion  général</a></li>
                        <li><a href=\"pages/charts/flot.html\"><i class=\"fa fa-circle-o\"></i> IT</a></li>
                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-laptop\"></i>
                        <span>Gestion des utilisateurs</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"pages/tables/simple.html\"><i class=\"fa fa-circle-o\"></i> Liste des utilisateurs</a></li>

                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-edit\"></i> <span>Forms</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"pages/forms/general.html\"><i class=\"fa fa-circle-o\"></i> General Elements</a></li>
                        <li><a href=\"pages/forms/advanced.html\"><i class=\"fa fa-circle-o\"></i> Advanced Elements</a></li>
                        <li><a href=\"pages/forms/editors.html\"><i class=\"fa fa-circle-o\"></i> Editors</a></li>
                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-table\"></i> <span>Tables</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"pages/tables/simple.html\"><i class=\"fa fa-circle-o\"></i> Simple tables</a></li>
                        <li><a href=\"pages/tables/data.html\"><i class=\"fa fa-circle-o\"></i> Data tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"pages/calendar.html\">
                        <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                        <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-red\">3</small>
              <small class=\"label pull-right bg-blue\">17</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href=\"pages/mailbox/mailbox.html\">
                        <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                        <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-yellow\">12</small>
              <small class=\"label pull-right bg-green\">16</small>
              <small class=\"label pull-right bg-red\">5</small>
            </span>
                    </a>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-pie-chart\"></i>
                        <span>Reclamation</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"{{path(\"Reclamation\") }}\"><i class=\"fa fa-circle-o\"></i> Creer Reclamation</a></li>
                        <li><a href=\"{{path(\"Reclamation2\") }}\"><i class=\"fa fa-circle-o\"></i> Mes Reclamation</a></li>

                    </ul>
                </li>


                <li class=\"header\">LABELS</li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> <span>Important</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i> <span>Warning</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o text-aqua\"></i> <span>Information</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

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

                                <h3 class=\"timeline-header\"><a href=\"#\">Support Team</a> sent you an email</h3>

                                <div class=\"timeline-body\">
                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                    quora plaxo ideeli hulu weebly balihoo...
                                </div>
                                <div class=\"timeline-footer\">
                                    <a class=\"btn btn-primary btn-xs\">Read more</a>
                                    <a class=\"btn btn-danger btn-xs\">Delete</a>
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <li>
                            <i class=\"fa fa-user bg-aqua\"></i>

                            <div class=\"timeline-item\">
                                <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 5 mins ago</span>

                                <h3 class=\"timeline-header no-border\"><a href=\"#\">Sarah Young</a> accepted your friend request</h3>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <li>
                            <i class=\"fa fa-comments bg-yellow\"></i>

                            <div class=\"timeline-item\">
                                <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 27 mins ago</span>

                                <h3 class=\"timeline-header\"><a href=\"#\">Jay White</a> commented on your post</h3>

                                <div class=\"timeline-body\">
                                    Take me to your leader!
                                    Switzerland is small and neutral!
                                    We are more like Germany, ambitious and misunderstood!
                                </div>
                                <div class=\"timeline-footer\">
                                    <a class=\"btn btn-warning btn-flat btn-xs\">View comment</a>
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline time label -->
                        <li class=\"time-label\">
                  <span class=\"bg-green\">
                    3 Jan. 2014
                  </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                            <i class=\"fa fa-camera bg-purple\"></i>

                            <div class=\"timeline-item\">
                                <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 2 days ago</span>

                                <h3 class=\"timeline-header\"><a href=\"#\">Mina Lee</a> uploaded new photos</h3>

                                <div class=\"timeline-body\">
                                    <img src=\"http://placehold.it/150x100\" alt=\"...\" class=\"margin\">
                                    <img src=\"http://placehold.it/150x100\" alt=\"...\" class=\"margin\">
                                    <img src=\"http://placehold.it/150x100\" alt=\"...\" class=\"margin\">
                                    <img src=\"http://placehold.it/150x100\" alt=\"...\" class=\"margin\">
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <li>
                            <i class=\"fa fa-video-camera bg-maroon\"></i>

                            <div class=\"timeline-item\">
                                <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 5 days ago</span>

                                <h3 class=\"timeline-header\"><a href=\"#\">Mr. Doe</a> shared a video</h3>

                                <div class=\"timeline-body\">
                                    <div class=\"embed-responsive embed-responsive-16by9\">
                                        <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/tMWkeBIohBs\" frameborder=\"0\" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class=\"timeline-footer\">
                                    <a href=\"#\" class=\"btn btn-xs bg-maroon\">See comments</a>
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <li>
                            <i class=\"fa fa-clock-o bg-gray\"></i>
                        </li>
                    </ul>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class=\"row\" style=\"margin-top: 10px;\">
                <div class=\"col-md-12\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\"><i class=\"fa fa-code\"></i> Timeline Markup</h3>
                        </div>
                        <div class=\"box-body\">
                  <pre style=\"font-weight: 600;\">

                  </pre>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>
</div>
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
</body>
</html>
", "@EspritFamycity/Default/home.html.twig", "C:\\wamp64\\www\\FamicityMah\\FamicityMah\\src\\Esprit\\FamycityBundle\\Resources\\views\\Default\\home.html.twig");
    }
}
