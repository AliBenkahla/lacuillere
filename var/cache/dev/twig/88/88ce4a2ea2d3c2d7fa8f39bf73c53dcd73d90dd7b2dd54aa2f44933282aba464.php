<?php

/* base.html.twig */
class __TwigTemplate_b085fb37116f92469025295702a5349002b0f9eb65403ecfeaee7c611fde7f92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_357a4cd2af588f5b65a33f0280219eea51fb63078c1670c005f5d1a1f3bf54d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357a4cd2af588f5b65a33f0280219eea51fb63078c1670c005f5d1a1f3bf54d3->enter($__internal_357a4cd2af588f5b65a33f0280219eea51fb63078c1670c005f5d1a1f3bf54d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2ce925130f5869e6a1034d2c969286b8907ec46103bd8dfc3fdee6373acde089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce925130f5869e6a1034d2c969286b8907ec46103bd8dfc3fdee6373acde089->enter($__internal_2ce925130f5869e6a1034d2c969286b8907ec46103bd8dfc3fdee6373acde089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fontawesome-all.min.css"), "html", null, true);
        echo "\" />
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body>


    ";
        // line 14
        $this->loadTemplate("inc/nav.html.twig", "base.html.twig", 14)->display($context);
        // line 15
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "    ";
        $this->loadTemplate("inc/footer.html.twig", "base.html.twig", 16)->display($context);
        // line 17
        echo "
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.3.1.min (7).js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slider.js"), "html", null, true);
        echo "\"></script>



    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "</body>
</html>";
        
        $__internal_357a4cd2af588f5b65a33f0280219eea51fb63078c1670c005f5d1a1f3bf54d3->leave($__internal_357a4cd2af588f5b65a33f0280219eea51fb63078c1670c005f5d1a1f3bf54d3_prof);

        
        $__internal_2ce925130f5869e6a1034d2c969286b8907ec46103bd8dfc3fdee6373acde089->leave($__internal_2ce925130f5869e6a1034d2c969286b8907ec46103bd8dfc3fdee6373acde089_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba16ba02e9cd09032e996ef7963fd17fdba85e1bb417cecdb9894fbd358bb292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba16ba02e9cd09032e996ef7963fd17fdba85e1bb417cecdb9894fbd358bb292->enter($__internal_ba16ba02e9cd09032e996ef7963fd17fdba85e1bb417cecdb9894fbd358bb292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e559d249015731ac84cec3febae7c383424e62dc371e00eb7fb292268b2c0c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e559d249015731ac84cec3febae7c383424e62dc371e00eb7fb292268b2c0c74->enter($__internal_e559d249015731ac84cec3febae7c383424e62dc371e00eb7fb292268b2c0c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e559d249015731ac84cec3febae7c383424e62dc371e00eb7fb292268b2c0c74->leave($__internal_e559d249015731ac84cec3febae7c383424e62dc371e00eb7fb292268b2c0c74_prof);

        
        $__internal_ba16ba02e9cd09032e996ef7963fd17fdba85e1bb417cecdb9894fbd358bb292->leave($__internal_ba16ba02e9cd09032e996ef7963fd17fdba85e1bb417cecdb9894fbd358bb292_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed93404a01625ecb87230b7d8f1a0cff417af7b3b78983efe9802fd36b3c2997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed93404a01625ecb87230b7d8f1a0cff417af7b3b78983efe9802fd36b3c2997->enter($__internal_ed93404a01625ecb87230b7d8f1a0cff417af7b3b78983efe9802fd36b3c2997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_233c5eae6bb1d6396dd1a0f1fce3e6c6a0d09386a3e2ae267b97061695f0906d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233c5eae6bb1d6396dd1a0f1fce3e6c6a0d09386a3e2ae267b97061695f0906d->enter($__internal_233c5eae6bb1d6396dd1a0f1fce3e6c6a0d09386a3e2ae267b97061695f0906d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_233c5eae6bb1d6396dd1a0f1fce3e6c6a0d09386a3e2ae267b97061695f0906d->leave($__internal_233c5eae6bb1d6396dd1a0f1fce3e6c6a0d09386a3e2ae267b97061695f0906d_prof);

        
        $__internal_ed93404a01625ecb87230b7d8f1a0cff417af7b3b78983efe9802fd36b3c2997->leave($__internal_ed93404a01625ecb87230b7d8f1a0cff417af7b3b78983efe9802fd36b3c2997_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_91fcbcfcea1d31b17a033a029cd3070dca6b9efe738cbe6be129af7fd7f54cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91fcbcfcea1d31b17a033a029cd3070dca6b9efe738cbe6be129af7fd7f54cad->enter($__internal_91fcbcfcea1d31b17a033a029cd3070dca6b9efe738cbe6be129af7fd7f54cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d29e56d1695aff7b5b94254d8618df78a37d9dd1ec51c557647235f4ff1ef049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29e56d1695aff7b5b94254d8618df78a37d9dd1ec51c557647235f4ff1ef049->enter($__internal_d29e56d1695aff7b5b94254d8618df78a37d9dd1ec51c557647235f4ff1ef049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d29e56d1695aff7b5b94254d8618df78a37d9dd1ec51c557647235f4ff1ef049->leave($__internal_d29e56d1695aff7b5b94254d8618df78a37d9dd1ec51c557647235f4ff1ef049_prof);

        
        $__internal_91fcbcfcea1d31b17a033a029cd3070dca6b9efe738cbe6be129af7fd7f54cad->leave($__internal_91fcbcfcea1d31b17a033a029cd3070dca6b9efe738cbe6be129af7fd7f54cad_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63408d64e576a3da34d5bcf4d71cedece80cf8dba861885add8ce1c90f71fd11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63408d64e576a3da34d5bcf4d71cedece80cf8dba861885add8ce1c90f71fd11->enter($__internal_63408d64e576a3da34d5bcf4d71cedece80cf8dba861885add8ce1c90f71fd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ef8cd9e660329a9228fb1716adfa76d5bb2988b988c76c4bd7e5762ef4c579e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8cd9e660329a9228fb1716adfa76d5bb2988b988c76c4bd7e5762ef4c579e0->enter($__internal_ef8cd9e660329a9228fb1716adfa76d5bb2988b988c76c4bd7e5762ef4c579e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ef8cd9e660329a9228fb1716adfa76d5bb2988b988c76c4bd7e5762ef4c579e0->leave($__internal_ef8cd9e660329a9228fb1716adfa76d5bb2988b988c76c4bd7e5762ef4c579e0_prof);

        
        $__internal_63408d64e576a3da34d5bcf4d71cedece80cf8dba861885add8ce1c90f71fd11->leave($__internal_63408d64e576a3da34d5bcf4d71cedece80cf8dba861885add8ce1c90f71fd11_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 25,  137 => 15,  120 => 9,  102 => 5,  91 => 26,  89 => 25,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  59 => 14,  53 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/reset.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/fontawesome-all.min.css') }}\" />
    {% block stylesheets %}{% endblock %}
</head>
<body>


    {% include 'inc/nav.html.twig' %}
    {% block body %}{% endblock %}
    {% include 'inc/footer.html.twig' %}

<script src=\"{{ asset('js/jquery-3.3.1.min (7).js') }}\"></script>
<script src=\"{{ asset('js/popper.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/slider.js') }}\"></script>



    {% block javascripts %}{% endblock %}{#cette ligne veut dire que je pourrai ajouter du js quand j'en aurai besoin#}
</body>
</html>", "base.html.twig", "/Applications/MAMP/htdocs/lacuillere2/app/Resources/views/base.html.twig");
    }
}
