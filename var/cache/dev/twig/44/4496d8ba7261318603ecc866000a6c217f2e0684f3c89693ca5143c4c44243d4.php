<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_33f3dd678ccb812365dbf19c9917a77f5b9239e1754554972b102e04062abe30 extends Twig_Template
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
        $__internal_33fbaeebef24aebf14d8aee786d41aebd12d078613b882b945402ff42f72c484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33fbaeebef24aebf14d8aee786d41aebd12d078613b882b945402ff42f72c484->enter($__internal_33fbaeebef24aebf14d8aee786d41aebd12d078613b882b945402ff42f72c484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b9e5fbe24f4d5374491178df062a60c9dc4d07c47a1c67d1a580503e9e2a1baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e5fbe24f4d5374491178df062a60c9dc4d07c47a1c67d1a580503e9e2a1baf->enter($__internal_b9e5fbe24f4d5374491178df062a60c9dc4d07c47a1c67d1a580503e9e2a1baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_33fbaeebef24aebf14d8aee786d41aebd12d078613b882b945402ff42f72c484->leave($__internal_33fbaeebef24aebf14d8aee786d41aebd12d078613b882b945402ff42f72c484_prof);

        
        $__internal_b9e5fbe24f4d5374491178df062a60c9dc4d07c47a1c67d1a580503e9e2a1baf->leave($__internal_b9e5fbe24f4d5374491178df062a60c9dc4d07c47a1c67d1a580503e9e2a1baf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_41805f709706151f557d199cd65391318343dca1fd4780dd15b87aeb22a2452d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41805f709706151f557d199cd65391318343dca1fd4780dd15b87aeb22a2452d->enter($__internal_41805f709706151f557d199cd65391318343dca1fd4780dd15b87aeb22a2452d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7fd7b8ab047901652a6d9ec094f4326d9b3ac05ff4da64ef36b1ce5f386d97f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd7b8ab047901652a6d9ec094f4326d9b3ac05ff4da64ef36b1ce5f386d97f6->enter($__internal_7fd7b8ab047901652a6d9ec094f4326d9b3ac05ff4da64ef36b1ce5f386d97f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7fd7b8ab047901652a6d9ec094f4326d9b3ac05ff4da64ef36b1ce5f386d97f6->leave($__internal_7fd7b8ab047901652a6d9ec094f4326d9b3ac05ff4da64ef36b1ce5f386d97f6_prof);

        
        $__internal_41805f709706151f557d199cd65391318343dca1fd4780dd15b87aeb22a2452d->leave($__internal_41805f709706151f557d199cd65391318343dca1fd4780dd15b87aeb22a2452d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_551afc4649bfb8893226bda3123533a6fae7ffade86c4b649afeeb47e5cd0b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_551afc4649bfb8893226bda3123533a6fae7ffade86c4b649afeeb47e5cd0b8e->enter($__internal_551afc4649bfb8893226bda3123533a6fae7ffade86c4b649afeeb47e5cd0b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98230eaf6216dc8add343becb62ee6ce965b82cc552e433fe0cd3ef68eb3c56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98230eaf6216dc8add343becb62ee6ce965b82cc552e433fe0cd3ef68eb3c56a->enter($__internal_98230eaf6216dc8add343becb62ee6ce965b82cc552e433fe0cd3ef68eb3c56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_98230eaf6216dc8add343becb62ee6ce965b82cc552e433fe0cd3ef68eb3c56a->leave($__internal_98230eaf6216dc8add343becb62ee6ce965b82cc552e433fe0cd3ef68eb3c56a_prof);

        
        $__internal_551afc4649bfb8893226bda3123533a6fae7ffade86c4b649afeeb47e5cd0b8e->leave($__internal_551afc4649bfb8893226bda3123533a6fae7ffade86c4b649afeeb47e5cd0b8e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_30d9ba7e579e770b100b57ae6fef9745064db589131dc092034987680be90f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d9ba7e579e770b100b57ae6fef9745064db589131dc092034987680be90f85->enter($__internal_30d9ba7e579e770b100b57ae6fef9745064db589131dc092034987680be90f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cac5e0f9724d24a3259b58d19e3740058cc98ce717beebfbbc05b305f20ef121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac5e0f9724d24a3259b58d19e3740058cc98ce717beebfbbc05b305f20ef121->enter($__internal_cac5e0f9724d24a3259b58d19e3740058cc98ce717beebfbbc05b305f20ef121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cac5e0f9724d24a3259b58d19e3740058cc98ce717beebfbbc05b305f20ef121->leave($__internal_cac5e0f9724d24a3259b58d19e3740058cc98ce717beebfbbc05b305f20ef121_prof);

        
        $__internal_30d9ba7e579e770b100b57ae6fef9745064db589131dc092034987680be90f85->leave($__internal_30d9ba7e579e770b100b57ae6fef9745064db589131dc092034987680be90f85_prof);

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
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/lacuillere2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
