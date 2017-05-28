<?php

/* ConecTICRUDUserBundle:Default:index.html.twig */
class __TwigTemplate_6847498dc32d75b5106f2a17c14a853003b1ad3d8c2e2f4d6f380d3e4e7c3dfc extends Twig_Template
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
        $__internal_98f74d0a9f7899923e89daa563020b3679fa54a09ecf7aa00090ab09c653834b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f74d0a9f7899923e89daa563020b3679fa54a09ecf7aa00090ab09c653834b->enter($__internal_98f74d0a9f7899923e89daa563020b3679fa54a09ecf7aa00090ab09c653834b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ConecTICRUDUserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_98f74d0a9f7899923e89daa563020b3679fa54a09ecf7aa00090ab09c653834b->leave($__internal_98f74d0a9f7899923e89daa563020b3679fa54a09ecf7aa00090ab09c653834b_prof);

    }

    public function getTemplateName()
    {
        return "ConecTICRUDUserBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "ConecTICRUDUserBundle:Default:index.html.twig", "C:\\AppServ\\www\\desweb\\cti_crud\\src\\ConecTI\\CRUDUserBundle/Resources/views/Default/index.html.twig");
    }
}
