<?php

/* inc/nav.html.twig */
class __TwigTemplate_3c015c2a73f30d09d34ca231175b892926f35976c1c09d55c76d19f961fdc21e extends Twig_Template
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
        $__internal_fec7d315a8e40b2deab18a176d1a6cd65e939d9bf6d179fe7987181689512b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec7d315a8e40b2deab18a176d1a6cd65e939d9bf6d179fe7987181689512b3c->enter($__internal_fec7d315a8e40b2deab18a176d1a6cd65e939d9bf6d179fe7987181689512b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/nav.html.twig"));

        $__internal_e13f087c47f975804d49bf713af36063b94636b4b50df103fb65721c2d4ed47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13f087c47f975804d49bf713af36063b94636b4b50df103fb65721c2d4ed47b->enter($__internal_e13f087c47f975804d49bf713af36063b94636b4b50df103fb65721c2d4ed47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/nav.html.twig"));

        // line 1
        echo "
<link rel=\"stylesheet\" href =\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">


<header>

    <div>
        <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage.index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/css/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\">La Cuillère dorée</a>
    </div>

    <nav>
        <form  method=\"post\" action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("search.index");
        echo "\">
            <input class=\"input-search\" list=\"datalist-search\" type=\"search\" name=\"restaurantname\" placeholder=\"Nom du restaurant\" aria-label=\"Search\">
            <datalist id=\"datalist-search\"></datalist>
            <button class=\"\">Valider</button>
        </form>

        ";
        // line 18
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 19
            echo "            <a class=\"connect\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("security.logout");
            echo "\">Déconnexion</a>
        ";
        } else {
            // line 21
            echo "                <a class=\"connect\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("security.login");
            echo "\">CONNEXION</a>
        ";
        }
        // line 23
        echo "    </nav>

</header>



";
        
        $__internal_fec7d315a8e40b2deab18a176d1a6cd65e939d9bf6d179fe7987181689512b3c->leave($__internal_fec7d315a8e40b2deab18a176d1a6cd65e939d9bf6d179fe7987181689512b3c_prof);

        
        $__internal_e13f087c47f975804d49bf713af36063b94636b4b50df103fb65721c2d4ed47b->leave($__internal_e13f087c47f975804d49bf713af36063b94636b4b50df103fb65721c2d4ed47b_prof);

    }

    public function getTemplateName()
    {
        return "inc/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  63 => 21,  57 => 19,  55 => 18,  46 => 12,  37 => 8,  28 => 2,  25 => 1,);
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
<link rel=\"stylesheet\" href =\"{{ asset('css/style.css') }}\">


<header>

    <div>
        <a href=\"{{ url('homepage.index')}}\"><img src=\"{{ asset('img/css/logo.jpg') }}\" alt=\"logo\">La Cuillère dorée</a>
    </div>

    <nav>
        <form  method=\"post\" action=\"{{ url('search.index')}}\">
            <input class=\"input-search\" list=\"datalist-search\" type=\"search\" name=\"restaurantname\" placeholder=\"Nom du restaurant\" aria-label=\"Search\">
            <datalist id=\"datalist-search\"></datalist>
            <button class=\"\">Valider</button>
        </form>

        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <a class=\"connect\" href=\"{{ url('security.logout') }}\">Déconnexion</a>
        {% else %}
                <a class=\"connect\" href=\"{{ url('security.login') }}\">CONNEXION</a>
        {% endif %}
    </nav>

</header>



", "inc/nav.html.twig", "/Applications/MAMP/htdocs/lacuillere2/app/Resources/views/inc/nav.html.twig");
    }
}
