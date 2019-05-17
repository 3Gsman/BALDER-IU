$(document).ready(function () {
    /* The $.getJSON() method loads the JSON-encoded data from the server using a GET HTTP request based on a URL to which the request is sent.
    */
    $.getJSON('json/usuarios.json', function(usuarios) { 
         var output ="";
      
        $.each(usuarios.usuarios, function(key, val) { 
          output += '<div class="m-3 p-1 card">';
            output += '<div class="row">';
              output += '<div class="col-sm-12">';
                output += '<img src="';
                output += val.picture1 + '" class="img-fluid" height="100%"" width = "100%">';
              output +='</div>';
            output +='</div>';
            output += '<div class="row">';
              output += '<div class="m-2 col-sm-2">';
                output += '<img src="';
                output += val.picture2 + '" class="float-right rounded-circle height="80%" width = "80%"">';
              output +='</div>';
              output += '<div class="m-2 col-sm-8">';
                output += '<h2>' + val.username + '</h2>';
                output += val.description;
              output +='</div>';
            output +='</div>';
          output +='</div>'; 
        }); 
        
         $('#users').append(output); 

    }); 
});  