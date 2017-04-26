<?php

/* base.html.twig */
class __TwigTemplate_3021766ed2225e3a68d444af94728eab5a7906b86a804f921320b2491d192a0d extends Twig_Template
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
        $__internal_d2d252b4682cafaab965b4e64688bf5f6757eca96e2d50b261caa07557f7c9db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d252b4682cafaab965b4e64688bf5f6757eca96e2d50b261caa07557f7c9db->enter($__internal_d2d252b4682cafaab965b4e64688bf5f6757eca96e2d50b261caa07557f7c9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_de95b9a1db8bf9cd9e97ebd1a99874b9fb5e378a879893ee43789c6c1a5e2d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de95b9a1db8bf9cd9e97ebd1a99874b9fb5e378a879893ee43789c6c1a5e2d78->enter($__internal_de95b9a1db8bf9cd9e97ebd1a99874b9fb5e378a879893ee43789c6c1a5e2d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d2d252b4682cafaab965b4e64688bf5f6757eca96e2d50b261caa07557f7c9db->leave($__internal_d2d252b4682cafaab965b4e64688bf5f6757eca96e2d50b261caa07557f7c9db_prof);

        
        $__internal_de95b9a1db8bf9cd9e97ebd1a99874b9fb5e378a879893ee43789c6c1a5e2d78->leave($__internal_de95b9a1db8bf9cd9e97ebd1a99874b9fb5e378a879893ee43789c6c1a5e2d78_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_328f137dbf052f5a55c905be09349ab4bc1d3c7cf0be485d011332e6ef105d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_328f137dbf052f5a55c905be09349ab4bc1d3c7cf0be485d011332e6ef105d8d->enter($__internal_328f137dbf052f5a55c905be09349ab4bc1d3c7cf0be485d011332e6ef105d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80dd40423eee08681b045b7c5e52a16d6e1e3f897ba8e2ed1dca25b12d4380c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80dd40423eee08681b045b7c5e52a16d6e1e3f897ba8e2ed1dca25b12d4380c9->enter($__internal_80dd40423eee08681b045b7c5e52a16d6e1e3f897ba8e2ed1dca25b12d4380c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_80dd40423eee08681b045b7c5e52a16d6e1e3f897ba8e2ed1dca25b12d4380c9->leave($__internal_80dd40423eee08681b045b7c5e52a16d6e1e3f897ba8e2ed1dca25b12d4380c9_prof);

        
        $__internal_328f137dbf052f5a55c905be09349ab4bc1d3c7cf0be485d011332e6ef105d8d->leave($__internal_328f137dbf052f5a55c905be09349ab4bc1d3c7cf0be485d011332e6ef105d8d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e235472ea986b0eaea1b2d16b06f7f65c42020da4cc5bc08de34b9c61d44318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e235472ea986b0eaea1b2d16b06f7f65c42020da4cc5bc08de34b9c61d44318->enter($__internal_1e235472ea986b0eaea1b2d16b06f7f65c42020da4cc5bc08de34b9c61d44318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6d6c832a56301cace0829705e174cc349a97c25afd8cb076a6e48b9009c37172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6c832a56301cace0829705e174cc349a97c25afd8cb076a6e48b9009c37172->enter($__internal_6d6c832a56301cace0829705e174cc349a97c25afd8cb076a6e48b9009c37172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6d6c832a56301cace0829705e174cc349a97c25afd8cb076a6e48b9009c37172->leave($__internal_6d6c832a56301cace0829705e174cc349a97c25afd8cb076a6e48b9009c37172_prof);

        
        $__internal_1e235472ea986b0eaea1b2d16b06f7f65c42020da4cc5bc08de34b9c61d44318->leave($__internal_1e235472ea986b0eaea1b2d16b06f7f65c42020da4cc5bc08de34b9c61d44318_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3433c8bada8c39854271de9bf8bfd08be619883d6d5f8f69de9f32dd5101f896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3433c8bada8c39854271de9bf8bfd08be619883d6d5f8f69de9f32dd5101f896->enter($__internal_3433c8bada8c39854271de9bf8bfd08be619883d6d5f8f69de9f32dd5101f896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ea3dbd74beb3221d7936d1ffcd605ea85a9b8e15b73d4ad8d3dcf7310b40adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea3dbd74beb3221d7936d1ffcd605ea85a9b8e15b73d4ad8d3dcf7310b40adc->enter($__internal_9ea3dbd74beb3221d7936d1ffcd605ea85a9b8e15b73d4ad8d3dcf7310b40adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9ea3dbd74beb3221d7936d1ffcd605ea85a9b8e15b73d4ad8d3dcf7310b40adc->leave($__internal_9ea3dbd74beb3221d7936d1ffcd605ea85a9b8e15b73d4ad8d3dcf7310b40adc_prof);

        
        $__internal_3433c8bada8c39854271de9bf8bfd08be619883d6d5f8f69de9f32dd5101f896->leave($__internal_3433c8bada8c39854271de9bf8bfd08be619883d6d5f8f69de9f32dd5101f896_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac283494809b5563c051878b1de38e861204182ee28cc8311bc113cfc514fc6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac283494809b5563c051878b1de38e861204182ee28cc8311bc113cfc514fc6f->enter($__internal_ac283494809b5563c051878b1de38e861204182ee28cc8311bc113cfc514fc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1f428cc3b0ada449fa818992f0d5ad0e69c3a73a21698de97d56174d7325abca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f428cc3b0ada449fa818992f0d5ad0e69c3a73a21698de97d56174d7325abca->enter($__internal_1f428cc3b0ada449fa818992f0d5ad0e69c3a73a21698de97d56174d7325abca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1f428cc3b0ada449fa818992f0d5ad0e69c3a73a21698de97d56174d7325abca->leave($__internal_1f428cc3b0ada449fa818992f0d5ad0e69c3a73a21698de97d56174d7325abca_prof);

        
        $__internal_ac283494809b5563c051878b1de38e861204182ee28cc8311bc113cfc514fc6f->leave($__internal_ac283494809b5563c051878b1de38e861204182ee28cc8311bc113cfc514fc6f_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/AntibioPlusTEST/app/Resources/views/base.html.twig");
    }
}
