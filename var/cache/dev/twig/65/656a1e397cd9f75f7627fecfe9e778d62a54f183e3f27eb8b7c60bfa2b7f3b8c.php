<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_452b7c406332b787fbef6d98204bd5708a3a99863c01bb4a2aa39ad68cd8191f extends Twig_Template
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
        $__internal_27d6dce4822b48b25026e1e63172c505401a7f129a89f1cb656472fb87090658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d6dce4822b48b25026e1e63172c505401a7f129a89f1cb656472fb87090658->enter($__internal_27d6dce4822b48b25026e1e63172c505401a7f129a89f1cb656472fb87090658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d2a83c59b19a8b667ab0eec023a1540600494228724b2e281c6cb2545bcaf398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a83c59b19a8b667ab0eec023a1540600494228724b2e281c6cb2545bcaf398->enter($__internal_d2a83c59b19a8b667ab0eec023a1540600494228724b2e281c6cb2545bcaf398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27d6dce4822b48b25026e1e63172c505401a7f129a89f1cb656472fb87090658->leave($__internal_27d6dce4822b48b25026e1e63172c505401a7f129a89f1cb656472fb87090658_prof);

        
        $__internal_d2a83c59b19a8b667ab0eec023a1540600494228724b2e281c6cb2545bcaf398->leave($__internal_d2a83c59b19a8b667ab0eec023a1540600494228724b2e281c6cb2545bcaf398_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_92cbcffb7587ec8e38b83c1d5392cabc780096cd3014d4b9b2beb16e2d5b7fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92cbcffb7587ec8e38b83c1d5392cabc780096cd3014d4b9b2beb16e2d5b7fcf->enter($__internal_92cbcffb7587ec8e38b83c1d5392cabc780096cd3014d4b9b2beb16e2d5b7fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cc9b83df240a97ed5817729aee4aa85487d48cd436754435c3ce43e9b57f147e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9b83df240a97ed5817729aee4aa85487d48cd436754435c3ce43e9b57f147e->enter($__internal_cc9b83df240a97ed5817729aee4aa85487d48cd436754435c3ce43e9b57f147e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cc9b83df240a97ed5817729aee4aa85487d48cd436754435c3ce43e9b57f147e->leave($__internal_cc9b83df240a97ed5817729aee4aa85487d48cd436754435c3ce43e9b57f147e_prof);

        
        $__internal_92cbcffb7587ec8e38b83c1d5392cabc780096cd3014d4b9b2beb16e2d5b7fcf->leave($__internal_92cbcffb7587ec8e38b83c1d5392cabc780096cd3014d4b9b2beb16e2d5b7fcf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92152587bfdb9b7abd9b96952bf41dcabd19eb8b085420b61bb2789d011174e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92152587bfdb9b7abd9b96952bf41dcabd19eb8b085420b61bb2789d011174e8->enter($__internal_92152587bfdb9b7abd9b96952bf41dcabd19eb8b085420b61bb2789d011174e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4aa32f97bb1f016ec4ab7339d7583bbd3a756d6d098b5e89a932c2d5fbf6c65c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa32f97bb1f016ec4ab7339d7583bbd3a756d6d098b5e89a932c2d5fbf6c65c->enter($__internal_4aa32f97bb1f016ec4ab7339d7583bbd3a756d6d098b5e89a932c2d5fbf6c65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4aa32f97bb1f016ec4ab7339d7583bbd3a756d6d098b5e89a932c2d5fbf6c65c->leave($__internal_4aa32f97bb1f016ec4ab7339d7583bbd3a756d6d098b5e89a932c2d5fbf6c65c_prof);

        
        $__internal_92152587bfdb9b7abd9b96952bf41dcabd19eb8b085420b61bb2789d011174e8->leave($__internal_92152587bfdb9b7abd9b96952bf41dcabd19eb8b085420b61bb2789d011174e8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ef47fa19297cf553922280068f3eaffe4c2a6ead033d4af55e75350859788a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef47fa19297cf553922280068f3eaffe4c2a6ead033d4af55e75350859788a0->enter($__internal_0ef47fa19297cf553922280068f3eaffe4c2a6ead033d4af55e75350859788a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8568f1ea3a292154b44a0d54221d80c1b49c2b121b2cdebd239a322764280814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8568f1ea3a292154b44a0d54221d80c1b49c2b121b2cdebd239a322764280814->enter($__internal_8568f1ea3a292154b44a0d54221d80c1b49c2b121b2cdebd239a322764280814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8568f1ea3a292154b44a0d54221d80c1b49c2b121b2cdebd239a322764280814->leave($__internal_8568f1ea3a292154b44a0d54221d80c1b49c2b121b2cdebd239a322764280814_prof);

        
        $__internal_0ef47fa19297cf553922280068f3eaffe4c2a6ead033d4af55e75350859788a0->leave($__internal_0ef47fa19297cf553922280068f3eaffe4c2a6ead033d4af55e75350859788a0_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/lacuillere2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
