<?php

/* overall_header.html */
class __TwigTemplate_a5093e472a3a94692b79f0cbd3e2c53be090439f6592fc459948f201d5905bfa extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
";
        // line 6
        if (($context["DESCRIPTION_PAGE"] ?? null)) {
            // line 7
            echo "<meta name=\"description\" content=\"";
            echo ($context["DESCRIPTION_PAGE"] ?? null);
            echo "\">
";
        }
        // line 9
        echo "<meta name=\"keywords\" content=\"alternance, offres alternance, formation alternance, alternance ecole, ecole alternance, contrat alternance, formations en alternance, stage, emploi, job\">
";
        // line 10
        echo ($context["META"] ?? null);
        echo "

<meta property=\"og:title\" content=\"Mon Alternance\">
<meta property=\"og:type\" content=\"website\">
<meta property=\"og:url\" content=\"http://mon-alternance.fr\">
<meta property=\"og:image\" content=\"http://mon-alternance.fr/images/site/logo/og.png\">
<meta property=\"og:description\" content=\"";
        // line 16
        echo ($context["DESCRIPTION_PAGE"] ?? null);
        echo "\">
<meta property=\"og:locale\" content=\"fr_FR\">
<meta property=\"og:site_name\" content=\"Mon-Alternance\">

<title>";
        // line 20
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</title>

";
        // line 22
        if (($context["ALT_PRODUCTION"] ?? null)) {
            // line 23
            echo "<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-111385779-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111385779-1');
</script>

<!-- <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: \"ca-pub-5250430950478493\",
          enable_page_level_ads: true
     });
</script> -->

";
        }
        // line 42
        echo "
";
        // line 43
        $location = "_style_config.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("_style_config.html", "overall_header.html", 43)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 44
        echo "
";
        // line 45
        if (($context["OLD_S_ENABLE_FEEDS"] ?? null)) {
            // line 46
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 47
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 48
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 49
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 50
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 51
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forum", array("forum_id" => ($context["S_FORUM_ID"] ?? null)));
                echo "\">";
            }
            // line 52
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topic", array("topic_id" => ($context["S_TOPIC_ID"] ?? null)));
                echo "\">";
            }
            // line 53
            echo "\t";
        }
        // line 55
        echo "
";
        // line 56
        if (($context["U_CANONICAL"] ?? null)) {
            // line 57
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 59
        echo "
<!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script> -->
<script src=\"";
        // line 61
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/jquery.min.js\"></script>

 <!-- <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">  -->
 <link rel=\"stylesheet\" href=\"";
        // line 64
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/css/bootstrap.min.css\">
 <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css\"> -->
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 66
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/css/jquery-ui.min.css\">

";
        // line 68
        if (($context["ALT_STYLE_fORUM"] ?? null)) {
            // line 69
            echo "<link href=\"";
            echo ($context["T_FONT_AWESOME_LINK"] ?? null);
            echo "\" rel=\"stylesheet\">
<link href=\"";
            // line 70
            echo ($context["T_STYLESHEET_LINK"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 72
        echo "
";
        // line 73
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 74
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 76
        echo "
";
        // line 77
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 78
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 80
        echo "
";
        // line 81
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 82
            echo "\t<link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 84
        echo "


";
        // line 87
        // line 88
        echo "
";
        // line 89
        echo $this->getAttribute(($context["definition"] ?? null), "STYLESHEETS", array());
        echo "

";
        // line 91
        // line 92
        echo "
<link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/alt.css\">



<!-- <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'> -->
<link rel='stylesheet prefetch' href='";
        // line 100
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/css/normalize.min.css'>

</head>
<body id=\"monalternance\" class=\"nojs notouch section-";
        // line 103
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\" data-online-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE");
        echo "\">


";
        // line 106
        // line 107
        echo "


<div class=\"container-fluid fixed-top pt-2 mb-2\" style=\"background-color: white;  box-shadow: 8px 8px 8px #aaa; padding-left: 0px; padding-right: 0px;\">\t
\t<div class=\"row\">
\t\t<div class=\"col mr-auto d-none d-md-block d-lg-block d-xl-block\">
\t\t\t<!-- LOGO -->\t
\t\t\t<a href=\"";
        // line 114
        echo ($context["U_SITE_HOME"] ?? null);
        echo "\"><img src=\"";
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/logo/";
        echo ($context["IMAGE_LOGO_MON_ALTERNANCE"] ?? null);
        echo "\" border=\"0\" class=\"ml-1\" alt=\"Mon Alternance logo\"></a>
\t\t</div>
\t\t<div class=\"col mr-auto d-block d-sm-block d-md-none\">
\t\t\t<!-- LOGO small -->\t
\t\t\t<!-- <a href=\"";
        // line 118
        echo ($context["U_SITE_HOME"] ?? null);
        echo "\"><img src=\"";
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/logo/logo-small-60px.png\" border=\"0\" class=\"ml-1\" alt=\"Mon Alternance logo\"></a> -->
\t\t\t<a href=\"";
        // line 119
        echo ($context["U_SITE_HOME"] ?? null);
        echo "\"><img src=\"";
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/logo/";
        echo ($context["IMAGE_LOGO_MON_ALTERNANCE"] ?? null);
        echo "\" border=\"0\" class=\"ml-1\" alt=\"Mon Alternance logo\" style=\"max-width: 200px\"></a>
\t\t</div>

\t\t<!-- <div class=\"col mr-auto d-none d-sm-none d-md-block d-lg-block d-xl-block\">
\t\t\t
\t\t</div> -->

\t\t";
        // line 126
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "\t
\t\t<div class=\"col-auto\">\t
\t\t\t<div class=\"d-block d-sm-block d-md-none mt-2 mr-2\">
\t\t\t\t\t<a href=\"";
            // line 129
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"Connexion\"><button type=\"button\" class=\"btn btn-outline-danger btn-sm imageConnexionSmall\">Connexion</button></a>
\t\t\t\t\t\t<!-- <img src=\"";
            // line 130
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/connexionLogo.jpg\" alt=\"Connexion\"> -->
\t\t\t\t\t
\t\t\t
\t\t\t</div>
\t\t\t<div class=\"d-none d-md-block d-lg-block d-xl-block mr-1\">
\t\t\t\t<a href=\"";
            // line 135
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"Connexion\"><button type=\"button\" class=\"btn btn-outline-danger imageConnexion\">Connexion</button></a>
\t\t\t\t\t<!-- <img src=\"";
            // line 136
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/connexionLogo.jpg\" alt=\"Connexion\"> -->
\t\t\t\t\t
\t\t\t\t
\t\t\t\t<a href=\"";
            // line 139
            echo ($context["U_ALT_RECRUTEURS"] ?? null);
            echo "\" title=\"Accès recruteur\"><button type=\"button\" class=\"btn btn-primary\" style=\"font-size: 11px; font-weight: bold\">Accès recruteur<div style=\"font-size: 9px\">Publier une annonce</div></button></a>
\t\t\t\t\t<!-- <img src=\"";
            // line 140
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/accesRecruteur.png\" alt=\"Accès Recruteurs\"> -->
\t\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>\t

\t\t";
        } else {
            // line 147
            echo "\t\t<div class=\"col-auto\">
\t\t\t

\t\t\t<div class=\"btn-group mr-1 mt-3\">
\t\t\t\t<button class=\"btn btn-outline-danger dropdown-toggle imageConnexion\" type=\"button\" id=\"dropdownMenuCompte\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t";
            // line 152
            echo ($context["user_email_or_nomprenom"] ?? null);
            echo "
\t\t\t\t</button>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenu2\">
\t\t\t
\t\t\t\t\t";
            // line 156
            if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
                echo "\t
\t\t\t\t\t<a href=\"";
                // line 157
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\" style=\"text-decoration: none\"><button class=\"dropdown-item\" type=\"button\">Connexion</button></a>
\t\t\t\t\t<a href=\"";
                // line 158
                echo ($context["U_REGISTER"] ?? null);
                echo "\" style=\"text-decoration: none\"><button class=\"dropdown-item\" type=\"button\">Créér un compte</button></a>
\t\t\t\t\t";
            } else {
                // line 160
                echo "\t\t\t\t\t<a href=\"";
                echo ($context["U_ALT_MES_ANNONCES"] ?? null);
                echo "\" style=\"text-decoration: none\"><button class=\"dropdown-item\" type=\"button\">Mes annonces</button></a>
\t\t\t\t\t";
                // line 161
                if (($context["TYPE_COMPTE_CANDIDAT"] ?? null)) {
                    echo "\t
\t\t\t\t\t<a href=\"";
                    // line 162
                    echo ($context["U_ALT_MES_FAVORIS"] ?? null);
                    echo "\" style=\"text-decoration: none\"><button class=\"dropdown-item\" type=\"button\">Mes favoris</button></a>
\t\t\t\t\t";
                } else {
                    // line 164
                    echo "\t\t\t\t\t<!-- <a href=\"";
                    echo ($context["U_ALT_MES_CV"] ?? null);
                    echo "\" style=\"text-decoration: none\"><button class=\"dropdown-item\" type=\"button\">CVThèque</button></a> -->
\t\t\t\t\t";
                }
                // line 166
                echo "\t\t\t\t\t<a href=\"";
                echo ($context["U_ALT_MON_PROFIL"] ?? null);
                echo "\" style=\"text-decoration: none\"><button class=\"dropdown-item\" type=\"button\">Mon profil</button></a>
\t\t\t\t\t<a href=\"";
                // line 167
                echo ($context["U_ALT_MON_COMPTE"] ?? null);
                echo "\" style=\"text-decoration: none\"><button class=\"dropdown-item\" type=\"button\">Mon compte</button></a>
\t\t\t\t\t
\t\t\t\t\t";
                // line 169
                if (($context["U_ALT_MODERATEUR"] ?? null)) {
                    echo " 
\t\t\t\t\t<a href=\"";
                    // line 170
                    echo ($context["U_ALT_MODERATEUR"] ?? null);
                    echo "\" style=\"text-decoration: none\"><button class=\"dropdown-item\" type=\"button\">Admin</button></a>
\t\t\t\t\t";
                }
                // line 172
                echo "
\t\t\t\t\t";
                // line 173
                if (($context["U_USER_ADMIN"] ?? null)) {
                    echo " 
\t\t\t\t\t<a href=\"";
                    // line 174
                    echo ($context["U_USER_ADMIN"] ?? null);
                    echo "\" style=\"text-decoration: none\"><button class=\"dropdown-item\" type=\"button\">Super Admin</button></a>
\t\t\t\t\t";
                }
                // line 176
                echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t

\t\t\t\t\t<a href=\"";
                // line 180
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\" style=\"text-decoration: none\"><button class=\"dropdown-item\" type=\"button\">Déconnexion</button></a>
\t\t\t\t\t";
            }
            // line 181
            echo "\t
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</div>
\t\t";
        }
        // line 186
        echo "\t
\t\t
\t</div>\t
\t<div class=\"row\" >
\t\t<div class=\"col\">

\t\t\t\t
\t\t\t<nav id=\"k9nav-inner\" class=\"navbar navbar-expand-sm navbar-dark container-fluid\" style=\"background-color: #d81212; color: white\">\t
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 194
        echo ($context["U_INDEX"] ?? null);
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 195
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/home-interface.png\" width=\"20\" height=\"20\" style=\" position:relative; bottom:3px; left:5px\" alt=\"Accueil\">
\t\t\t\t</a>
\t
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsMonAlternance\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarsMonAlternance\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"navbar-nav w-100\">

\t\t\t\t\t\t\t<li class=\"nav-item active dropdown mr-5 \" >
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLinkCandidats\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\tConseils aux candidats
\t\t\t\t\t\t\t\t</a>
\t
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLinkCandidats\" style=\"width: 250px\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 211
        echo ($context["U_ALT_CANDIDATS_SALAIRES"] ?? null);
        echo "\" rel=\"follow\">Les salaires en alternance</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 213
        echo ($context["U_ALT_CANDIDATS_CONTRATS"] ?? null);
        echo "\" rel=\"follow\">Les contrats en alternance</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 215
        echo ($context["U_ALT_CANDIDATS_STAGES"] ?? null);
        echo "\" rel=\"follow\">Les stages en entreprise</a>
\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t
\t\t\t\t\t\t\t<li class=\"nav-item active dropdown mr-5\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownEntreprises\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\tAides aux entreprises
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuEntreprises\" style=\"width: 250px\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"  href=\"";
        // line 228
        echo ($context["U_ALT_ENTREPRISES_AIDE_AUX_TPE"] ?? null);
        echo "\" rel=\"follow\">Aides aux TPE</a>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 231
        echo ($context["U_ALT_ENTREPRISES_AIDE_A_APPRENTISSAGE"] ?? null);
        echo "\" rel=\"follow\">Aides à l'apprentissage</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li> 
\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"nav-item active dropdown mr-5\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownActualites\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\tActualités
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuActualites\" style=\"width: 360px\">

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"  href=\"";
        // line 245
        echo ($context["U_ALT_ARTICLE_ALTERNANCE_10_BONNES_RAISONS"] ?? null);
        echo "\" rel=\"follow\">L'alternance en 10 bonnes raisons</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>

\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"  href=\"";
        // line 248
        echo ($context["U_ALT_ARTICLE_TRAVAILLER_ET_ECOLE"] ?? null);
        echo "\" rel=\"follow\">Travailler et être à l'école ?</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"  href=\"";
        // line 251
        echo ($context["U_ALT_ACTUALITE_REFORME"] ?? null);
        echo "\" rel=\"follow\">Rupture du contrat d’apprentissage</a>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"  href=\"";
        // line 254
        echo ($context["U_ALT_ACTUALITE_RUPTURE"] ?? null);
        echo "\" rel=\"follow\">Rupture du contrat de professionnalisation</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"  href=\"";
        // line 257
        echo ($context["U_ALT_LA_REFORME"] ?? null);
        echo "\" rel=\"follow\">La réforme en faveur de l'alternance</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"  href=\"";
        // line 260
        echo ($context["U_ALT_ARTICLE_TROUVER_FORMATION"] ?? null);
        echo "\" rel=\"follow\">Trouver sa formation en alternance</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"  href=\"";
        // line 263
        echo ($context["U_ALT_ARTICLE_DECLARATION_REVENUS"] ?? null);
        echo "\" rel=\"follow\">Déclarer ses revenus en alternance</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"  href=\"";
        // line 266
        echo ($context["U_ALT_ARTICLE_ALTERNANCE_A_30_ANS"] ?? null);
        echo "\" rel=\"follow\">L'alternance jusqu'à 30 ans</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"  href=\"";
        // line 269
        echo ($context["U_ALT_ARTICLE_RECRUTER_JEUNE_ALTERNANCE"] ?? null);
        echo "\" rel=\"follow\">Recruter un jeune en alternance</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"  href=\"";
        // line 272
        echo ($context["U_ALT_ARTICLE_ALTERNANCE_VOIX_REUSSITE"] ?? null);
        echo "\" rel=\"follow\">L'alternance : voix de réussite</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"nav-item  active mr-5\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 281
        echo ($context["U_ALT_EMPLOIS"] ?? null);
        echo "\" rel=\"follow\">Emplois</a>
\t\t\t\t\t\t\t</li>
\t
\t\t\t\t\t\t\t<li class=\"nav-item  active mr-5\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 285
        echo ($context["U_ALT_CONTACT"] ?? null);
        echo "\">Contact</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</nav>
\t\t</div>
\t</div>\t
\t\t\t\t\t\t\t\t\t
</div>

\t\t";
        // line 299
        // line 300
        echo "
\t";
        // line 301
        // line 302
        echo "



\t<a id=\"start_here\" class=\"anchor\"></a>
\t<div id=\"page-body\" class=\"page-body\" role=\"main\" style=\"padding-top: 140px;\">

\t\t";
        // line 309
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  681 => 309,  672 => 302,  671 => 301,  668 => 300,  667 => 299,  650 => 285,  643 => 281,  631 => 272,  625 => 269,  619 => 266,  613 => 263,  607 => 260,  601 => 257,  595 => 254,  589 => 251,  583 => 248,  577 => 245,  560 => 231,  554 => 228,  538 => 215,  533 => 213,  528 => 211,  509 => 195,  505 => 194,  495 => 186,  487 => 181,  482 => 180,  476 => 176,  471 => 174,  467 => 173,  464 => 172,  459 => 170,  455 => 169,  450 => 167,  445 => 166,  439 => 164,  434 => 162,  430 => 161,  425 => 160,  420 => 158,  416 => 157,  412 => 156,  405 => 152,  398 => 147,  388 => 140,  384 => 139,  378 => 136,  374 => 135,  366 => 130,  362 => 129,  356 => 126,  342 => 119,  336 => 118,  325 => 114,  316 => 107,  315 => 106,  303 => 103,  297 => 100,  287 => 92,  286 => 91,  281 => 89,  278 => 88,  277 => 87,  272 => 84,  264 => 82,  262 => 81,  259 => 80,  251 => 78,  249 => 77,  246 => 76,  238 => 74,  236 => 73,  233 => 72,  228 => 70,  223 => 69,  221 => 68,  216 => 66,  211 => 64,  205 => 61,  201 => 59,  195 => 57,  193 => 56,  190 => 55,  187 => 53,  174 => 52,  161 => 51,  150 => 50,  139 => 49,  128 => 48,  117 => 47,  106 => 46,  104 => 45,  101 => 44,  89 => 43,  86 => 42,  65 => 23,  63 => 22,  58 => 20,  51 => 16,  42 => 10,  39 => 9,  33 => 7,  31 => 6,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_header.html", "");
    }
}
