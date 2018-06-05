

 


    function selectionDomaine(domaine) {

    //  alert(document.getElementById("domaine").value.toUpperCase());
        if ((domaine == 'ARTISANAT') 
        || (document.getElementById("domaine_principal").value.toUpperCase() == 'ARTISANAT')) {
                document.getElementById("rowDomaineArtisanat").style.display = '';
        } else {
                document.getElementById("rowDomaineArtisanat").style.display = 'none';
        }                      

    }
                                


    $(function () {
        var domainesDisponibles = [
            "ADMINISTRATION - MANAGEMENT - DIRECTION",
            "AÉRONAUTIQUE - FERROVIAIRE - NAVALE ET SPATIAL",
            "AGRICULTURE",
            "ARCHITECTURE",
            "ARTISANAT",
            "ARTS DU SPECTACLE - AUDIOVISUEL",
            "AUDIT-CONSEIL",
            "AUTOMOBILE",
            "BANQUE - ASSURANCE",
            "BATIMENT ET TRAVAUX PUBLICS (BTP)",
            "BIEN-ÊTRE",
            "COMMERCE - DISTRIBUTION - VENTE",
            "COMPTABILITÉ - GESTION",
            "CULTURE - PATRIMOINE",
            "DROIT - JUSTICE",
            "EDITION - LIBRAIRIE - BIBILOTHEQUE",
            "ELECTRONIQUE",
            "ENERGIE",
            "ENSEIGNEMENT",
            "ENVIRONNEMENT-QUALITE",
            "FONCTION PUBLIQUE",
            "HOTELLERIE - RESTAURATION",
            "IMMOBILIER",
            "INDUSTRIE ALIMENTAIRE",
            "INDUSTRIE CHIMIQUE",
            "INDUSTRIE PHARMACEUTIQUE",
            "INFORMATIQUE - INTERNET",
            "LOGISTIQUE ET TRANSPORT",
            "MARKETING - COMMUNICATION - PUBLICITÉ",
            "MECANIQUE",
            "MODE ET INDUSTRIE TEXTILE",
            'NETTOYAGE',
            "RESSOURCES HUMAINES",
            "SANTÉ",
            "SÉCURITÉ - ARMÉE",
            "SOCIAL",
            "SPORT",
            "TELECOMS ET RESEAUX",
            "TOURISME",
            "URBANISME ET AMENAGEMENT"
            
        ];
    
        // Overrides the default autocomplete filter function to search only from the beginning of the string
        $.ui.autocomplete.filter = function (array, term) {
            var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(term), "i");

            return $.grep(array, function (value) {
                return matcher.test(value.label || value.value || value);
            });
        
            
        };

    

        $("#domaine_principal").autocomplete({
            source: domainesDisponibles,
            minLength: 0,
            
            select: function (event, ui) {
                var label = ui.item.label;
                var value = ui.item.value;
                //store in session
                //document.valueSelectedForAutocomplete = value
                // alert('jj: '+ value);
                selectionDomaine(value); 
            }
        }).bind('focus', function () {
        if(!$(this).val().trim())
            $(this).keydown(); 
        });
    });

    $(function () {
        var domainesArtisanatDisponibles = [
            "AMBULANCIER",
            "BIJOUTIER-JOAILLIER",
            "BONNETIER",
            "BOTTIER",
            "BOUCHER",
            "BOULANGER",
            "CANALISATEUR",
            "CARRELEUR-MOSAISTE",
            "CARROSSIER",
            "CHAPELIER",
            "CHARCUTIER",
            "CHARPENTIER",
            "CHAUDRONNIER",
            "CHAUFFAGISTE",
            "CHAUFFEUR DE TAXI",
            "CHOCOLATIER",
            "COIFFEUR",
            "COMPAGNON ROUTIER",
            "CONDUCTEUR D'ENGINS",
            "CONFISEUR",
            "CONSTRUCTEUR BOIS",
            "CONSTRUCTEUR D'OUVRAGE D’ART",
            "CONTROLEUR TECHNIQUE",
            "CORDONNIER",
            "COSTUMIER / BONNETIER",
            "COUTELIER",
            "COUTURIER",
            "COUVREUR",
            "CREMATEUR ANIMALIER",
            "CRÊPIER",
            "DEMENAGEUR",
            "DOREUR",
            "EBENISTE",
            "ECAILLER",
            "ELECTRICIEN",
            "ELECTRICIEN AUTOMOBILE",
            "ÉLECTROTECHNICIEN",
            "EMAILLEUR",
            "EMBAUMEUR",
            "ENCADREUR",
            "ESTHETICIENNE",
            "ETANCHEUR DU BTP",
            "FABRICANT D'ARTICLES TEXTILES",
            "FABRICANT D'OBJETS EN PLASTIQUE",
            "FAÇONNIER",
            "FERRONNIER",
            "FLEURISTE",
            "FONDEUR",
            "FOURREUR",
            "FRESQUISTE / PEINTRE EN DECOR",
            "FRIGORISTE",
            "FROMAGER",
            "GLACIER",
            "GRAVEUR SUR PIERRE",
            "HORLOGER",
            "IMPRIMEUR",
            "INFOGRAPHISTE",
            "INSTALLATEUR SANITAIRE",
            "LAPIDAIRE",
            "LAYETIER",
            "LUNETIER",
            "LUTHIER",
            "MAÇON",
            "MAQUILLEUR",
            "MARBRIER",
            "MARECHAL-FERRANT",
            "MAROQUINIER",
            "MARQUETEUR",
            "MÉCANICIEN AGRICOLE",
            "MÉCANICIEN AUTOMOBILE",
            "MÉCANICIEN CYCLES ET MOTOCYCLES",
            "MÉCANICIEN D'ENGINS DE CHANTIER", 
            "MÉCANICIEN EN MATÉRIELS DE PARCS ET JARDINS",
            "MENUISIER-AGENCEUR",
            "METIERS",
            "MODÉLISTE TEXTILE",
            "MODÉLISTE-MAQUETTISTE",
            "MONTEUR ÉLECTRICIEN",
            "MOQUETTISTE-SOLIER",
            "MOSAÏSTE",
            "OPÉRATEUR EN PRODUCTION MÉCANIQUE",
            "ORFÈVRE",
            "ORTHOPROTHÉSISTE",
            "PÂTISSIER",
            "PEINTRE DÉCORATEUR",
            "PEINTRE EN BÂTIMENT",
            "PEINTRE EN CARROSSERIE",
            "PHOTOGRAPHE",
            "PIZZAÏOLO",
            "PLÂTRIER-PLAQUISTE",
            "PLOMBIER",
            "PODO-ORTHÉSISTE",
            "POISSONNIER",
            "POTIER-CÉRAMISTE",
            "PROFESSIONNEL DU PESAGE",
            "PROTHÉSISTE DENTAIRE",
            "RESTAURATEUR CÉRAMIQUE",
            "RETOUCHEUR",
            "SCULPTEUR SUR PIERRE",
            "SELLIER-HARNACHEUR",
            "SÉRIGRAPHE",
            "SERRURIER-MÉTALLIER",
            "SERTISSEUR",
            "SOUFFLEUR DE VERRE",
            "STAFFEUR STUCATEUR",
            "TAILLEUR",
            "TAILLEUR DE PIERRE",
            "TAPISSIER",
            "TAXIDERMISTE",
            "TEINTURIER PRESSING",
            "TOILETTEUR POUR ANIMAUX",
            "TOURNEUR FRAISEUR",
            "TRAITEUR",
            "TRIPIER",
            "VENDEUR EN ALIMENTATION",
            "VITRAILLISTE",
            "VOLAILLER"
        ];
    
        $("#domaine_artisanat").autocomplete({
            source: domainesArtisanatDisponibles,
            minLength: 0

        }).bind('focus', function () {
        if(!$(this).val().trim())
            $(this).keydown(); 
        });
    });



    $(function () {
    
        var villesDisponibles = [
            ""
        ];
    
    

    $("#ville").autocomplete({
        source: villesDisponibles,
        minLength: 3

    }).bind('focus', function () {
    if(!$(this).val().trim())
        $(this).keydown(); 
    });

    $("#ville_proche").autocomplete({
        source: villesDisponibles,
        minLength: 3

    }).bind('focus', function () {
    if(!$(this).val().trim())
        $(this).keydown(); 
    });

    $("#societe_adresse_ville").autocomplete({
        source: villesDisponibles,
        minLength: 3

    }).bind('focus', function () {
    if(!$(this).val().trim())
        $(this).keydown(); 
    });
    

});





$(function () {
    var domainesDisponibles = [
        "ADMINISTRATION - MANAGEMENT - DIRECTION",
        "AERONAUTIQUE - FERROVIAIRE - NAVALE ET SPATIAL",
        "AGRICULTURE",
        "ARCHITECTURE",
        "ARTISANAT",
        "ARTS DU SPECTACLE - AUDIOVISUEL",
        "AUDIT-CONSEIL",
        "AUTOMOBILE",
        "BANQUE - ASSURANCE",
        "BATIMENT ET TRAVAUX PUBLICS (BTP)",
        "BIEN-ÊTRE",
        "COMMERCE - DISTRIBUTION - VENTE",
        "COMPTABILITE - GESTION",
        "CULTURE - PATRIMOINE",
        "DROIT - JUSTICE",
        "EDITION - LIBRAIRIE - BIBILOTHEQUE",
        "ELECTRONIQUE",
        "ENERGIE",
        "ENSEIGNEMENT",
        "ENVIRONNEMENT - QUALITE",
        "FONCTION PUBLIQUE",
        "HOTELLERIE - RESTAURATION",
        "IMMOBILIER",
        "INDUSTRIE ALIMENTAIRE",
        "INDUSTRIE CHIMIQUE",
        "INDUSTRIE PHARMACEUTIQUE",
        "INFORMATIQUE - INTERNET",
        "LOGISTIQUE ET TRANSPORT",
        "MARKETING - COMMUNICATION - PUBLICITE",
        "MECANIQUE",
        "MODE ET INDUSTRIE TEXTILE",
        'NETTOYAGE',
        "RESSOURCES HUMAINES",
        "SANTE",
        "SECURITÉ - ARMEE",
        "SOCIAL",
        "SPORT",
        "TELECOMS ET RESEAUX",
        "TOURISME",
        "URBANISME ET AMENAGEMENT"
        
    ];

    // Overrides the default autocomplete filter function to search only from the beginning of the string
    $.ui.autocomplete.filter = function (array, term) {
        var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(term), "i");

        return $.grep(array, function (value) {
            return matcher.test(value.label || value.value || value);
        });
    
        
    };



    $("#societe_secteur_activite").autocomplete({
        source: domainesDisponibles,
        minLength: 0,
        
        select: function (event, ui) {
            var label = ui.item.label;
            var value = ui.item.value;
            //store in session
            //document.valueSelectedForAutocomplete = value
            // alert('jj: '+ value);
            selectionDomaineEntreprise(value); 
        }
    }).bind('focus', function () {
    if(!$(this).val().trim())
        $(this).keydown(); 
    });
});