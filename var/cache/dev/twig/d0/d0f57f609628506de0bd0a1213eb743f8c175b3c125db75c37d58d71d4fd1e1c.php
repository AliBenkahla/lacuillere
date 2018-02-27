<?php

/* searchbyregion/index.html.twig */
class __TwigTemplate_315775fa77f7a073963d707ba627eecd7e18f3ba62a3fffd016adb7732b8ed9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "searchbyregion/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca9cf567e8c4d6e062270ff9200bc45224660a694207365467863377e7d5142c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9cf567e8c4d6e062270ff9200bc45224660a694207365467863377e7d5142c->enter($__internal_ca9cf567e8c4d6e062270ff9200bc45224660a694207365467863377e7d5142c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "searchbyregion/index.html.twig"));

        $__internal_29ff639ae4d51e038489fe770205eeabc87ad6e7cb109bfb2c09c023c446565e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ff639ae4d51e038489fe770205eeabc87ad6e7cb109bfb2c09c023c446565e->enter($__internal_29ff639ae4d51e038489fe770205eeabc87ad6e7cb109bfb2c09c023c446565e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "searchbyregion/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca9cf567e8c4d6e062270ff9200bc45224660a694207365467863377e7d5142c->leave($__internal_ca9cf567e8c4d6e062270ff9200bc45224660a694207365467863377e7d5142c_prof);

        
        $__internal_29ff639ae4d51e038489fe770205eeabc87ad6e7cb109bfb2c09c023c446565e->leave($__internal_29ff639ae4d51e038489fe770205eeabc87ad6e7cb109bfb2c09c023c446565e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59a59d95e05e506a3c8cfbcb414f5f2f3cad16f88301b442b3120d0171ce14e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a59d95e05e506a3c8cfbcb414f5f2f3cad16f88301b442b3120d0171ce14e9->enter($__internal_59a59d95e05e506a3c8cfbcb414f5f2f3cad16f88301b442b3120d0171ce14e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aaf614ed73812ff9089a4854408040d9044ea238909c7ee4dcf6303a383b7de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf614ed73812ff9089a4854408040d9044ea238909c7ee4dcf6303a383b7de2->enter($__internal_aaf614ed73812ff9089a4854408040d9044ea238909c7ee4dcf6303a383b7de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<main class=\"searchbyregion container\">

    <aside>

            ";
        // line 10
        if (((isset($context["searchkey"]) ? $context["searchkey"] : $this->getContext($context, "searchkey")) == "Paris")) {
            // line 11
            echo "                <p>Restaurants situé à ";
            echo twig_escape_filter($this->env, (isset($context["searchkey"]) ? $context["searchkey"] : $this->getContext($context, "searchkey")), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 13
            echo "                <p>Restaurants dans le ";
            echo twig_escape_filter($this->env, (isset($context["searchkey"]) ? $context["searchkey"] : $this->getContext($context, "searchkey")), "html", null, true);
            echo "</p>
            ";
        }
        // line 15
        echo "

        <form method=\"post\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("searchbyfilter.index");
        echo "\"><!--method=\"post\" permet d'effacer les demandes dans l'url-->
            <fieldset>
                <legend>Affiner la recherche</legend>
                <select name=\"filter-price-note\">
                    <option>Tri par:</option>
                    <option>Prix</option>
                    <option>Note</option>
                </select>
            </fieldset>

            <fieldset>

                <div class=\"typenourriture\">
                    <label>Français</label>
                    <input name=\"fr\" value=\"Français\" type=\"checkbox\">
                </div>

                <div class=\"typenourriture\">
                    <label>Italien</label>
                    <input name=\"it\" value=\"Italien\" type=\"checkbox\">
                </div>

                <div class=\"typenourriture\">
                    <label>Burger US</label>
                    <input name=\"brgUS\" value=\"Burger US\" type=\"checkbox\">
                </div>

                <div class=\"typenourriture\">
                    <label>Burger Chic</label>
                    <input name=\"brgChic\" value=\"Burger chic\" type=\"checkbox\">
                </div>

                <div class=\"typenourriture\">
                    <label>Indien</label>
                    <input name=\"Ind\" value=\"Indien\" type=\"checkbox\">
                </div>

            </fieldset>
            <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary\"><!--bouton envoyer-->
        </form>
    </aside>

    <section>
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchresults"]) ? $context["searchresults"] : $this->getContext($context, "searchresults")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 61
            echo "            <div>
                <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/restaurant/" . $this->getAttribute($context["result"], "photo", array()))), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"\">
                <p><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("search.index", array("slugRestaurant" => $this->getAttribute($context["result"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "name", array()), "html", null, true);
            echo "</a></p>
                <p>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "mainFood", array()), "html", null, true);
            echo "</p>
                <p class=\"note\">Note moyenne : ";
            // line 65
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["result"], "avgRate", array()), 1), "html", null, true);
            echo " /5</p>

                <p>Prix moyen : ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "averagePrice", array()), "html", null, true);
            echo "</p>

            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </section>


</main>

";
        
        $__internal_aaf614ed73812ff9089a4854408040d9044ea238909c7ee4dcf6303a383b7de2->leave($__internal_aaf614ed73812ff9089a4854408040d9044ea238909c7ee4dcf6303a383b7de2_prof);

        
        $__internal_59a59d95e05e506a3c8cfbcb414f5f2f3cad16f88301b442b3120d0171ce14e9->leave($__internal_59a59d95e05e506a3c8cfbcb414f5f2f3cad16f88301b442b3120d0171ce14e9_prof);

    }

    public function getTemplateName()
    {
        return "searchbyregion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 71,  147 => 67,  142 => 65,  138 => 64,  132 => 63,  128 => 62,  125 => 61,  121 => 60,  75 => 17,  71 => 15,  65 => 13,  59 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}


<main class=\"searchbyregion container\">

    <aside>

            {%  if   searchkey   == 'Paris'   %}
                <p>Restaurants situé à {{ searchkey }}</p>
            {% else %}
                <p>Restaurants dans le {{ searchkey }}</p>
            {% endif %}


        <form method=\"post\" action=\"{{ url('searchbyfilter.index')}}\"><!--method=\"post\" permet d'effacer les demandes dans l'url-->
            <fieldset>
                <legend>Affiner la recherche</legend>
                <select name=\"filter-price-note\">
                    <option>Tri par:</option>
                    <option>Prix</option>
                    <option>Note</option>
                </select>
            </fieldset>

            <fieldset>

                <div class=\"typenourriture\">
                    <label>Français</label>
                    <input name=\"fr\" value=\"Français\" type=\"checkbox\">
                </div>

                <div class=\"typenourriture\">
                    <label>Italien</label>
                    <input name=\"it\" value=\"Italien\" type=\"checkbox\">
                </div>

                <div class=\"typenourriture\">
                    <label>Burger US</label>
                    <input name=\"brgUS\" value=\"Burger US\" type=\"checkbox\">
                </div>

                <div class=\"typenourriture\">
                    <label>Burger Chic</label>
                    <input name=\"brgChic\" value=\"Burger chic\" type=\"checkbox\">
                </div>

                <div class=\"typenourriture\">
                    <label>Indien</label>
                    <input name=\"Ind\" value=\"Indien\" type=\"checkbox\">
                </div>

            </fieldset>
            <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary\"><!--bouton envoyer-->
        </form>
    </aside>

    <section>
        {% for result in searchresults %}
            <div>
                <img src=\"{{ asset('img/restaurant/'~result.photo)  }}\" class=\"img-fluid\" alt=\"\">
                <p><a href=\"{{ url('search.index', {'slugRestaurant': result.slug}) }}\">{{ result.name }}</a></p>
                <p>{{ result.mainFood }}</p>
                <p class=\"note\">Note moyenne : {{ result.avgRate|number_format(1) }} /5</p>

                <p>Prix moyen : {{ result.averagePrice }}</p>

            </div>
        {% endfor %}
    </section>


</main>

{% endblock %}


", "searchbyregion/index.html.twig", "/Applications/MAMP/htdocs/lacuillere2/app/Resources/views/searchbyregion/index.html.twig");
    }
}
