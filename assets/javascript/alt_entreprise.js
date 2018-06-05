$(function () {
     
      // Overrides the default autocomplete filter function to search only from the beginning of the string
      $.ui.autocomplete.filter = function (array, term) {
          var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(term), "i");

          return $.grep(array, function (value) {
              return matcher.test(value.label || value.value || value);
          });
      
          
      };



      
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



        });


       