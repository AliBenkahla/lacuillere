<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_562c20580bd46f4944b6838d09ddd60d251855890fc8f5068950c4d3451efbac extends Twig_Template
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
        $__internal_46bd59f4f1671a69f0a5f8649b1f9d77c2ee487325975570608dd6204bffdff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46bd59f4f1671a69f0a5f8649b1f9d77c2ee487325975570608dd6204bffdff7->enter($__internal_46bd59f4f1671a69f0a5f8649b1f9d77c2ee487325975570608dd6204bffdff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2d05477e65b70906e0ca74c98035fb93fd8f92ae1db1eb2b2ef61d9d747a0310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d05477e65b70906e0ca74c98035fb93fd8f92ae1db1eb2b2ef61d9d747a0310->enter($__internal_2d05477e65b70906e0ca74c98035fb93fd8f92ae1db1eb2b2ef61d9d747a0310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46bd59f4f1671a69f0a5f8649b1f9d77c2ee487325975570608dd6204bffdff7->leave($__internal_46bd59f4f1671a69f0a5f8649b1f9d77c2ee487325975570608dd6204bffdff7_prof);

        
        $__internal_2d05477e65b70906e0ca74c98035fb93fd8f92ae1db1eb2b2ef61d9d747a0310->leave($__internal_2d05477e65b70906e0ca74c98035fb93fd8f92ae1db1eb2b2ef61d9d747a0310_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_552d441ed0c02e1aaec9ae778fa51a251daba615263276018ff71d7c5d4f9337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552d441ed0c02e1aaec9ae778fa51a251daba615263276018ff71d7c5d4f9337->enter($__internal_552d441ed0c02e1aaec9ae778fa51a251daba615263276018ff71d7c5d4f9337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bd81e497485b0958142a4c71cbee9cc738f8f5800b3ad4d7f7c0738ebbd2dcb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd81e497485b0958142a4c71cbee9cc738f8f5800b3ad4d7f7c0738ebbd2dcb5->enter($__internal_bd81e497485b0958142a4c71cbee9cc738f8f5800b3ad4d7f7c0738ebbd2dcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bd81e497485b0958142a4c71cbee9cc738f8f5800b3ad4d7f7c0738ebbd2dcb5->leave($__internal_bd81e497485b0958142a4c71cbee9cc738f8f5800b3ad4d7f7c0738ebbd2dcb5_prof);

        
        $__internal_552d441ed0c02e1aaec9ae778fa51a251daba615263276018ff71d7c5d4f9337->leave($__internal_552d441ed0c02e1aaec9ae778fa51a251daba615263276018ff71d7c5d4f9337_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_568b2a97b873d9d866cdb18a8d0ff5c71b5c12fa69e078c86e9f07edf2276ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568b2a97b873d9d866cdb18a8d0ff5c71b5c12fa69e078c86e9f07edf2276ef5->enter($__internal_568b2a97b873d9d866cdb18a8d0ff5c71b5c12fa69e078c86e9f07edf2276ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5a73bff7266e617d46b8abfe952602398d1bbb168625315dcfdee8e77898a170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a73bff7266e617d46b8abfe952602398d1bbb168625315dcfdee8e77898a170->enter($__internal_5a73bff7266e617d46b8abfe952602398d1bbb168625315dcfdee8e77898a170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a73bff7266e617d46b8abfe952602398d1bbb168625315dcfdee8e77898a170->leave($__internal_5a73bff7266e617d46b8abfe952602398d1bbb168625315dcfdee8e77898a170_prof);

        
        $__internal_568b2a97b873d9d866cdb18a8d0ff5c71b5c12fa69e078c86e9f07edf2276ef5->leave($__internal_568b2a97b873d9d866cdb18a8d0ff5c71b5c12fa69e078c86e9f07edf2276ef5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_696f5572243fef978774fa4b5c7d06b1eb4b13eb8c016b0514bb11158552163c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_696f5572243fef978774fa4b5c7d06b1eb4b13eb8c016b0514bb11158552163c->enter($__internal_696f5572243fef978774fa4b5c7d06b1eb4b13eb8c016b0514bb11158552163c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f58ad6c91abf4b8503d5ab995aaf2a219bd7417661b604515bdabb79e99a907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f58ad6c91abf4b8503d5ab995aaf2a219bd7417661b604515bdabb79e99a907->enter($__internal_1f58ad6c91abf4b8503d5ab995aaf2a219bd7417661b604515bdabb79e99a907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f58ad6c91abf4b8503d5ab995aaf2a219bd7417661b604515bdabb79e99a907->leave($__internal_1f58ad6c91abf4b8503d5ab995aaf2a219bd7417661b604515bdabb79e99a907_prof);

        
        $__internal_696f5572243fef978774fa4b5c7d06b1eb4b13eb8c016b0514bb11158552163c->leave($__internal_696f5572243fef978774fa4b5c7d06b1eb4b13eb8c016b0514bb11158552163c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/lacuillere2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
