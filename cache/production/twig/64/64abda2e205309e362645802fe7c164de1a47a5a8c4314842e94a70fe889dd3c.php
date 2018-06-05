<?php

/* viewforum_body.html */
class __TwigTemplate_140fbf6583be0bdf35fb8a619c111e5f90fbbd7d51e3510c7ac2bf8d020cdc5d extends Twig_Template
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
        ob_start();
        // line 2
        echo "\t";
        if ((($context["S_HAS_SUBFORUM"] ?? null) && ($context["U_MARK_FORUMS"] ?? null))) {
            // line 3
            echo "\t\t<li class=\"small-icon icon-mark\"><a href=\"";
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\" data-ajax=\"mark_forums_read\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_SUBFORUMS_READ");
            echo "</a></li>
\t";
        }
        // line 5
        echo "\t";
        if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", array())))) {
            // line 6
            echo "\t\t<li class=\"small-icon icon-mark\"><a href=\"";
            echo ($context["U_MARK_TOPICS"] ?? null);
            echo "\" accesskey=\"m\" data-ajax=\"mark_topics_read\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_TOPICS_READ");
            echo "</a></li>
\t";
        }
        // line 8
        $value = 1;
        $context['definition']->set('NAVLINKS_SHOW_DEFAULT', $value);
        $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
        $context['definition']->set('NAVLINKS', $value);
        // line 10
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 10)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 11
        echo "
<div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">



";
        // line 18
        // line 19
        echo "<h2 class=\"forum-title\">";
        echo "<a href=\"";
        echo ($context["U_VIEW_FORUM"] ?? null);
        echo "\">";
        echo ($context["FORUM_NAME"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 20
        // line 21
        if (((($context["FORUM_DESC"] ?? null) || ($context["MODERATORS"] ?? null)) || ($context["U_MCP"] ?? null))) {
            // line 22
            echo "<div>
\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t";
            // line 24
            if (($context["FORUM_DESC"] ?? null)) {
                echo "<div style=\"display: none !important;\">";
                echo ($context["FORUM_DESC"] ?? null);
                echo "<br /></div>";
            }
            // line 25
            echo "\t";
            if (($context["MODERATORS"] ?? null)) {
                echo "<p><strong>";
                if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
                }
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo ($context["MODERATORS"] ?? null);
                echo "</p>";
            }
            // line 26
            echo "</div>
";
        }
        // line 28
        echo "
";
        // line 29
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 30
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 33
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 34
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 36
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 37
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 39
            echo "
\t\t</div>
\t</div>
";
        }
        // line 43
        echo "
";
        // line 44
        if (($context["S_HAS_SUBFORUM"] ?? null)) {
            // line 45
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 45)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 47
        echo "
";
        // line 48
        if ((((($context["S_DISPLAY_POST_INFO"] ?? null) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
            // line 49
            echo "\t<div class=\"action-bar bar-top\">

\t";
            // line 51
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 52
                echo "\t\t\t";
                // line 53
                echo "
\t\t<a href=\"";
                // line 54
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t";
                // line 55
                if (($context["S_IS_LOCKED"] ?? null)) {
                    // line 56
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_FORUM_LOCKED");
                    echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                } else {
                    // line 58
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_NEW_TOPIC");
                    echo "</span> <i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                }
                // line 60
                echo "\t\t</a>
\t\t\t";
                // line 61
                // line 62
                echo "
\t";
            }
            // line 64
            echo "
\t";
            // line 65
            if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
                // line 66
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"forum-search\" action=\"";
                // line 67
                echo ($context["S_SEARCHBOX_ACTION"] ?? null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
                // line 69
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUM");
                echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
                // line 70
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 71
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
                // line 73
                echo ($context["U_SEARCH"] ?? null);
                echo "\" class=\"button button-search-end\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 74
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                echo "</span>
\t\t\t\t</a>
\t\t\t\t";
                // line 76
                echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 81
            echo "
\t<div class=\"pagination\">
\t\t";
            // line 83
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", array())))) {
                echo "<a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" class=\"mark\" accesskey=\"m\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 84
            echo "\t\t";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t";
            // line 85
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 86
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 86)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 87
                echo "\t\t";
            } else {
                // line 88
                echo "\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t";
            }
            // line 90
            echo "\t</div>

\t</div>
";
        }
        // line 94
        echo "
";
        // line 95
        if (($context["S_NO_READ_ACCESS"] ?? null)) {
            // line 96
            echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 99
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_READ_ACCESS");
            echo "</strong>
\t\t</div>
\t</div>

\t";
            // line 103
            if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 104
                echo "
\t\t<form action=\"";
                // line 105
                echo ($context["S_LOGIN_ACTION"] ?? null);
                echo "\" method=\"post\">

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"content\">
\t\t\t\t<h3><a href=\"";
                // line 111
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
                echo "</a>";
                if (($context["S_REGISTER_ENABLED"] ?? null)) {
                    echo "&nbsp; &bull; &nbsp;<a href=\"";
                    echo ($context["U_REGISTER"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                    echo "</a>";
                }
                echo "</h3>

\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"username\">";
                // line 115
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
                // line 116
                echo ($context["USERNAME"] ?? null);
                echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"password\">";
                // line 119
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" size=\"25\" class=\"inputbox autowidth\" autocomplete=\"off\" /></dd>
\t\t\t\t\t";
                // line 121
                if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                    echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"3\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
                    echo "</label></dd>";
                }
                // line 122
                echo "\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"4\" /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_ME");
                echo "</label></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd><input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
                // line 126
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 128
                echo ($context["S_LOGIN_REDIRECT"] ?? null);
                echo "
\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t</form>

\t";
            }
            // line 138
            echo "
";
        }
        // line 140
        echo "
";
        // line 141
        // line 142
        echo "
";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topicrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 144
            echo "
\t";
            // line 145
            if (( !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) &&  !$this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()))) {
                // line 146
                echo "\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 150
            echo "
\t";
            // line 151
            if (($this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()) ||  !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()))) {
                // line 152
                echo "\t\t<div class=\"forumbg";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo " announcement";
                }
                echo "\">
\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t<dt";
                // line 157
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo " id=\"active_topics\"";
                }
                echo "><div class=\"list-inner\">";
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTIVE_TOPICS");
                } elseif (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ANNOUNCEMENTS");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                }
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 158
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 159
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 160
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">
\t";
            }
            // line 166
            echo "
\t\t";
            // line 167
            // line 168
            echo "\t\t<li class=\"row";
            if (($this->getAttribute($context["topicrow"], "S_ROW_COUNT", array()) % 2 == 0)) {
                echo " bg1";
            } else {
                echo " bg2";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " global-announce";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " announce";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " sticky";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " reported";
            }
            echo "\">
\t\t\t";
            // line 169
            // line 170
            echo "\t\t\t<dl class=\"row-item ";
            echo $this->getAttribute($context["topicrow"], "TOPIC_IMG_STYLE", array());
            echo "\">
\t\t\t\t<dt";
            // line 171
            if (($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array()) && ($context["S_TOPIC_ICONS"] ?? null))) {
                echo " style=\"background-image: url(";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                echo "); background-repeat: no-repeat;\"";
            }
            echo " title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\">
\t\t\t\t\t";
            // line 172
            if (($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array()) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                echo "\" class=\"row-item-link\"></a>";
            }
            // line 173
            echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
            // line 174
            // line 175
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array()) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 176
                echo "\t\t\t\t\t\t\t<a class=\"unread\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-red icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 177
                echo ($context["NEW_POST"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 180
            echo "\t\t\t\t\t\t<a href=\"";
            echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
            echo "\" class=\"topictitle\">";
            echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
            echo "</a>
\t\t\t\t\t\t";
            // line 181
            if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                // line 182
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 183
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 186
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", array())) {
                // line 187
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_DELETED");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-recycle fa-fw icon-green\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 188
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_DELETED");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 191
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                // line 192
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 193
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 196
            echo "\t\t\t\t\t\t<br />
\t\t\t\t\t\t";
            // line 197
            // line 198
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo "<i class=\"topic-status sticky fa fa-thumb-tack\"></i>";
            }
            // line 199
            echo "
\t\t\t\t\t\t";
            // line 200
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 201
                echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                // line 202
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo " &laquo; <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "</a>
\t\t\t\t\t\t\t";
                // line 203
                if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array()) && (($context["FORUM_ID"] ?? null) != $this->getAttribute($context["topicrow"], "FORUM_ID", array())))) {
                    echo "<br />";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["topicrow"], "FORUM_NAME", array());
                    echo "</a>";
                }
                // line 204
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 205
                if ($this->getAttribute($context["topicrow"], "REPLIES", array())) {
                    // line 206
                    echo "\t\t\t\t\t\t\t<span class=\"responsive-show\" style=\"display: none;\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                    echo "</strong></span>
\t\t\t\t\t\t\t";
                }
                // line 208
                echo "\t\t\t\t\t\t";
            }
            // line 209
            echo "
\t\t\t\t\t\t<div class=\"topic-poster responsive-hide\">
\t\t\t\t\t\t\t";
            // line 211
            if ($this->getAttribute($context["topicrow"], "S_HAS_POLL", array())) {
                echo "<i class=\"icon fa-bar-chart fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 212
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 213
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
            echo " &raquo; ";
            echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
            echo "
\t\t\t\t\t\t\t";
            // line 214
            if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array()) && (($context["FORUM_ID"] ?? null) != $this->getAttribute($context["topicrow"], "FORUM_ID", array())))) {
                echo " &raquo; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                echo " <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "FORUM_NAME", array());
                echo "</a>";
            }
            // line 215
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 216
            if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                // line 217
                echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<span><i class=\"icon fa-clone fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 220
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 221
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                        // line 222
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                        echo "<li class=\"active\"><span>";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 223
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 224
$context["pagination"], "S_IS_NEXT", array())) {
                        // line 225
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        echo "<li><a class=\"button\" href=\"";
                        echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                        echo "\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</a></li>\t\t\t\t\t\t\t\t";
                    }
                    // line 226
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 227
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 230
            echo "
\t\t\t\t\t\t";
            // line 231
            // line 232
            echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"posts\">";
            // line 234
            echo $this->getAttribute($context["topicrow"], "REPLIES", array());
            echo " <dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"views\">";
            // line 235
            echo $this->getAttribute($context["topicrow"], "VIEWS", array());
            echo " <dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t<span><dfn>";
            // line 237
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
            echo " </dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
            echo "
\t\t\t\t\t\t";
            // line 238
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 239
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 240
                echo ($context["VIEW_LATEST_POST"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 243
            echo "\t\t\t\t\t\t<br />";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
            echo "
\t\t\t\t\t</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
            // line 247
            // line 248
            echo "\t\t</li>
\t\t";
            // line 249
            // line 250
            echo "
\t";
            // line 251
            if ($this->getAttribute($context["topicrow"], "S_LAST_ROW", array())) {
                // line 252
                echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 256
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 258
            echo "\t";
            if (($context["S_IS_POSTABLE"] ?? null)) {
                // line 259
                echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
                // line 261
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPICS");
                echo "</strong>
\t\t</div>
\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "
";
        // line 267
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", array())) &&  !($context["S_DISPLAY_ACTIVE"] ?? null))) {
            // line 268
            echo "\t<div class=\"action-bar bar-bottom\">
\t\t";
            // line 269
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 270
                echo "\t\t\t";
                // line 271
                echo "\t\t\t<a href=\"";
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t";
                // line 272
                if (($context["S_IS_LOCKED"] ?? null)) {
                    // line 273
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_FORUM_LOCKED");
                    echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                } else {
                    // line 275
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_NEW_TOPIC");
                    echo "</span> <i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                }
                // line 277
                echo "\t\t\t</a>

\t\t\t";
                // line 279
                // line 280
                echo "\t\t";
            }
            // line 281
            echo "
\t\t";
            // line 282
            if ((($context["S_SELECT_SORT_DAYS"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 283
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["S_FORUM_ACTION"] ?? null);
                echo "\">
\t\t\t";
                // line 284
                $location = "display_options.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("display_options.html", "viewforum_body.html", 284)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 285
                echo "\t\t\t</form>
\t\t";
            }
            // line 287
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 289
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", array())))) {
                echo "<a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 290
            echo "\t\t\t";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t\t";
            // line 291
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 292
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 292)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 293
                echo "\t\t\t";
            } else {
                // line 294
                echo "\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 296
            echo "\t\t</div>
\t</div>
";
        }
        // line 299
        echo "
";
        // line 300
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewforum_body.html", 300)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 301
        echo "
";
        // line 302
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 303
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3><a href=\"";
            // line 304
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t<p>";
            // line 305
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 308
        echo "
";
        // line 309
        if (($context["S_DISPLAY_POST_INFO"] ?? null)) {
            // line 310
            echo "\t<div class=\"stat-block permissions\">
\t\t<h3>";
            // line 311
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PERMISSIONS");
            echo "</h3>
\t\t<p>";
            // line 312
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "rules", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                echo $this->getAttribute($context["rules"], "RULE", array());
                echo "<br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t</div>
";
        }
        // line 315
        echo "




</div>
</div>
</div>

";
        // line 324
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 324)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1025 => 324,  1014 => 315,  1000 => 312,  996 => 311,  993 => 310,  991 => 309,  988 => 308,  982 => 305,  976 => 304,  973 => 303,  971 => 302,  968 => 301,  956 => 300,  953 => 299,  948 => 296,  942 => 294,  939 => 293,  926 => 292,  924 => 291,  919 => 290,  911 => 289,  907 => 287,  903 => 285,  891 => 284,  886 => 283,  884 => 282,  881 => 281,  878 => 280,  877 => 279,  873 => 277,  867 => 275,  861 => 273,  859 => 272,  848 => 271,  846 => 270,  844 => 269,  841 => 268,  839 => 267,  836 => 266,  825 => 261,  821 => 259,  818 => 258,  812 => 256,  806 => 252,  804 => 251,  801 => 250,  800 => 249,  797 => 248,  796 => 247,  788 => 243,  782 => 240,  775 => 239,  773 => 238,  765 => 237,  758 => 235,  752 => 234,  748 => 232,  747 => 231,  744 => 230,  739 => 227,  733 => 226,  724 => 225,  722 => 224,  716 => 223,  709 => 222,  706 => 221,  702 => 220,  697 => 217,  695 => 216,  692 => 215,  682 => 214,  673 => 213,  668 => 212,  664 => 211,  660 => 209,  657 => 208,  648 => 206,  646 => 205,  643 => 204,  631 => 203,  617 => 202,  614 => 201,  612 => 200,  609 => 199,  604 => 198,  603 => 197,  600 => 196,  594 => 193,  587 => 192,  584 => 191,  578 => 188,  571 => 187,  568 => 186,  562 => 183,  555 => 182,  553 => 181,  546 => 180,  540 => 177,  535 => 176,  532 => 175,  531 => 174,  528 => 173,  522 => 172,  511 => 171,  506 => 170,  505 => 169,  484 => 168,  483 => 167,  480 => 166,  471 => 160,  467 => 159,  463 => 158,  449 => 157,  438 => 152,  436 => 151,  433 => 150,  427 => 146,  425 => 145,  422 => 144,  417 => 143,  414 => 142,  413 => 141,  410 => 140,  406 => 138,  393 => 128,  388 => 126,  380 => 122,  374 => 121,  368 => 119,  362 => 116,  357 => 115,  340 => 111,  331 => 105,  328 => 104,  326 => 103,  319 => 99,  314 => 96,  312 => 95,  309 => 94,  303 => 90,  297 => 88,  294 => 87,  281 => 86,  279 => 85,  274 => 84,  266 => 83,  262 => 81,  254 => 76,  249 => 74,  243 => 73,  238 => 71,  234 => 70,  230 => 69,  225 => 67,  222 => 66,  220 => 65,  217 => 64,  213 => 62,  212 => 61,  209 => 60,  203 => 58,  197 => 56,  195 => 55,  185 => 54,  182 => 53,  180 => 52,  178 => 51,  174 => 49,  172 => 48,  169 => 47,  155 => 45,  153 => 44,  150 => 43,  144 => 39,  139 => 37,  134 => 36,  126 => 34,  124 => 33,  115 => 30,  113 => 29,  110 => 28,  106 => 26,  92 => 25,  86 => 24,  82 => 22,  80 => 21,  79 => 20,  70 => 19,  69 => 18,  60 => 11,  48 => 10,  43 => 8,  35 => 6,  32 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "viewforum_body.html", "");
    }
}
