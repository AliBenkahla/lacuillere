<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2c7ede94a30933206e5f6590331f623db362f4fdf3801e4fa2579f277e9bcd88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2f50337afc612c7c7d03c33227a84aab422eba6f071d430280cd91d2748bb4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f50337afc612c7c7d03c33227a84aab422eba6f071d430280cd91d2748bb4a->enter($__internal_f2f50337afc612c7c7d03c33227a84aab422eba6f071d430280cd91d2748bb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5f7add78a3c7ee8af47a795f9c7c770ba86373f20130356377b59244d44856f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7add78a3c7ee8af47a795f9c7c770ba86373f20130356377b59244d44856f5->enter($__internal_5f7add78a3c7ee8af47a795f9c7c770ba86373f20130356377b59244d44856f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2f50337afc612c7c7d03c33227a84aab422eba6f071d430280cd91d2748bb4a->leave($__internal_f2f50337afc612c7c7d03c33227a84aab422eba6f071d430280cd91d2748bb4a_prof);

        
        $__internal_5f7add78a3c7ee8af47a795f9c7c770ba86373f20130356377b59244d44856f5->leave($__internal_5f7add78a3c7ee8af47a795f9c7c770ba86373f20130356377b59244d44856f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6beaec00fe4965c10c46956e093753118cb845d29146f41b9a1e68dc62badd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6beaec00fe4965c10c46956e093753118cb845d29146f41b9a1e68dc62badd6->enter($__internal_c6beaec00fe4965c10c46956e093753118cb845d29146f41b9a1e68dc62badd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b34a1a417aa02052610e69f43e95a45923e203baa3144b0c1695841b4e6cbfd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34a1a417aa02052610e69f43e95a45923e203baa3144b0c1695841b4e6cbfd2->enter($__internal_b34a1a417aa02052610e69f43e95a45923e203baa3144b0c1695841b4e6cbfd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b34a1a417aa02052610e69f43e95a45923e203baa3144b0c1695841b4e6cbfd2->leave($__internal_b34a1a417aa02052610e69f43e95a45923e203baa3144b0c1695841b4e6cbfd2_prof);

        
        $__internal_c6beaec00fe4965c10c46956e093753118cb845d29146f41b9a1e68dc62badd6->leave($__internal_c6beaec00fe4965c10c46956e093753118cb845d29146f41b9a1e68dc62badd6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f55f98d1fc1e0ce179bc1b40c2bf289fc7785e0c81331e2f1b55f46a6ed11a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f55f98d1fc1e0ce179bc1b40c2bf289fc7785e0c81331e2f1b55f46a6ed11a7->enter($__internal_8f55f98d1fc1e0ce179bc1b40c2bf289fc7785e0c81331e2f1b55f46a6ed11a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_73b03017a02429354cd3c094fd9a78dc09021608aad2072cf3d5dfb141220737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b03017a02429354cd3c094fd9a78dc09021608aad2072cf3d5dfb141220737->enter($__internal_73b03017a02429354cd3c094fd9a78dc09021608aad2072cf3d5dfb141220737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_73b03017a02429354cd3c094fd9a78dc09021608aad2072cf3d5dfb141220737->leave($__internal_73b03017a02429354cd3c094fd9a78dc09021608aad2072cf3d5dfb141220737_prof);

        
        $__internal_8f55f98d1fc1e0ce179bc1b40c2bf289fc7785e0c81331e2f1b55f46a6ed11a7->leave($__internal_8f55f98d1fc1e0ce179bc1b40c2bf289fc7785e0c81331e2f1b55f46a6ed11a7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5c37e3314663a4b354016dd0fb1e5fcb9b7a6e4846b71e5466c2835605dc4f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c37e3314663a4b354016dd0fb1e5fcb9b7a6e4846b71e5466c2835605dc4f0->enter($__internal_c5c37e3314663a4b354016dd0fb1e5fcb9b7a6e4846b71e5466c2835605dc4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac942456b999b8c772a1fb4533d7e104db5daea0e12d3913dc3ec1c13ffc7df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac942456b999b8c772a1fb4533d7e104db5daea0e12d3913dc3ec1c13ffc7df2->enter($__internal_ac942456b999b8c772a1fb4533d7e104db5daea0e12d3913dc3ec1c13ffc7df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ac942456b999b8c772a1fb4533d7e104db5daea0e12d3913dc3ec1c13ffc7df2->leave($__internal_ac942456b999b8c772a1fb4533d7e104db5daea0e12d3913dc3ec1c13ffc7df2_prof);

        
        $__internal_c5c37e3314663a4b354016dd0fb1e5fcb9b7a6e4846b71e5466c2835605dc4f0->leave($__internal_c5c37e3314663a4b354016dd0fb1e5fcb9b7a6e4846b71e5466c2835605dc4f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/lacuillere2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
