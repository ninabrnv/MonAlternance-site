<?php

/* alt_accueil_map.html */
class __TwigTemplate_10c8f500b9e62343857b3b6da982b640519a2e999afb43e602ed165ffe40c400 extends Twig_Template
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
        echo "<div id=\"map";
        echo $this->getAttribute(($context["villes"] ?? null), "NUM_ONGLET", array());
        echo "\" class=\"mapAnnonce\" ></div>

<script>
    function initMap() {
        // France: 46.227638 | Longitude : 2.213749
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 46.227638, lng: 2.213749},
            zoom: 6
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given \"locations\" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

         // Add a marker clusterer to manage the markers.
         var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

         


    }
    //var markerVitrolles = {lat: 43.442979, lng: 5.250262};
    var markerToulouse = {lat: 43.6046256, lng: 1.4442050000000108};
    var markerCastelnau = {lat: 43.783897, lng: 1.3576699999999846};
    var markerMontrozier = {lat: 44.40605799999999, lng: 2.7468200000000706};
    var markerVauver = {lat: 43.692984, lng: 4.278325999999993};
    var markerCaveirac = {lat: 43.82521000000001, lng: 4.261500000000069};
    var markerColomiers = {lat: 43.612189, lng: 1.3365790000000288};
    

    var locations = [
      //  markerVitrolles,
      ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "list_geoloc", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["list_geoloc"]) {
            // line 45
            echo "      {lat: ";
            echo $this->getAttribute($context["list_geoloc"], "LAT", array());
            echo ", lng: ";
            echo $this->getAttribute($context["list_geoloc"], "LONG", array());
            echo "},
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_geoloc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
    ];
</script>
<script src=\"https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js\">
</script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAqnvp98NNzkSrxXhSaTROZQ0TTQDkgOfU&callback=initMap\"
async defer></script>";
    }

    public function getTemplateName()
    {
        return "alt_accueil_map.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 47,  70 => 45,  66 => 44,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_accueil_map.html", "");
    }
}
