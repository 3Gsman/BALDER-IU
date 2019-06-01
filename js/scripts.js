$(document).ready(function () {
  /* The $.getJSON() method loads the JSON-encoded data from the server using a GET HTTP request based on a URL to which the request is sent.
  */
  $.getJSON('json/usuarios.json', function (usuarios) {
    var output = "";

    $.each(usuarios.usuarios, function (key, val) {
      var id=String(new Date().getUTCMilliseconds())+String(Math.floor(100000000 + Math.random() * 900000000));
      output += '<div class="m-3 p-1 card">';
        output += '<div class="row">';
          output += '<div class="col-sm-12">';
            output += '<img src="';
            output += val.picture1 + '" class="img-fluid" height="100%" width = "100%">';
          output += '</div>';
        output += '</div>';
        output += '<div class="row m-2">';
          output += '<div class="col-sm-10 my-auto">';
            output += '<a href="perfil.html" class="d-inline-block"><img src="';
            output += val.picture2 + '" class="rounded-circle mx-2" align="center" height="20%" width = "20%"><h7>' + val.name + '</h7></a>';
            //output += '</div>';
            //output += '<div class="col-sm-4 my-auto">';
            //output += '<h4>' + val.name + '</h4>';
          output += '</div>';
          output += '<div class="m-2 col-sm-2 text-right mx-auto">';
            output += '<a href="#" class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg></a>';
            output += '<form class="d-none" action="ofertar.html"><input type="hidden" name="description" value="'+val.description+'"><input type="hidden" name="titulo" value="'+val.title+'"><input type="hidden" name="search" value="'+val.picture1+'"><input type="hidden" name="perfil" value="'+val.picture2+'"><input type="hidden" name="nombre" value="'+val.name+'"><input id="'+id+'" class="d-none" type="submit"></form><a onclick="$(\'#'+id+'\').click();" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/><path d="M0 0h24v24H0z" fill="none"/></svg></a>';
          output += '</div>';
          output += '<div class="m-2 col-sm-12">';
            output += '<h2>' + val.title + '</h2>';
            output += val.description;
          output += '</div>';
        output += '</div>';
      output += '</div>';
    });

    $('#users').append(output);

  });
});  

