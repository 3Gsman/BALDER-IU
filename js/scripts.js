$(document).ready(function () {
    /* The $.getJSON() method loads the JSON-encoded data from the server using a GET HTTP request based on a URL to which the request is sent.
    */
    $.getJSON('json/usuarios.json', function (usuarios) {
        var output = "";
        $.each(usuarios.usuarios, function (key, val) {
            var id = String(new Date().getUTCMilliseconds()) + String(Math.floor(100000000 + Math.random() * 900000000));
            output += '<div class="m-3 p-1 card">';
            output += '<div class="row">';
            output += '<div class="col-sm-12">';
            output += '<img src="';
            output += val.picture1 + '" class="img-fluid" height="100%" width = "100%">';
            output += '</div>';
            output += '</div>';
            output += '<div class="row m-2">';
            output += '<div class="col-sm-10 my-auto">';
            output += '<a href="';
            output += val.profile;
            output += '" class="d-inline-block"><img src="';
            output += val.picture2 + '" class="rounded-circle mx-2" align="center" height="20%" width = "20%"><h7>' + val.name + '</h7></a>';
            output += '</div>';
            output += '<div class="m-2 col-sm-2 text-right mx-auto">';
            output += '<img src="img/like1.png" class="rounded-circle mr-3" id="'+id+'like" align="center" onclick="console.log(\'CLICK\');if($(\'#'+id+'like\').attr(\'src\')==\'img/like1.png\'){console.log(\'IF\');$(\'#'+id+'like\').attr(\'src\',\'img/like2.png\');}else{$(\'#'+id+'like\').attr(\'src\',\'img/like1.png\');}">';
            output += '<form class="d-none" action="ofertar.html"><input type="hidden" name="description" value="'+val.description+'"><input type="hidden" name="titulo" value="'+val.title+'"><input type="hidden" name="search" value="'+val.picture1+'"><input type="hidden" name="perfil" value="'+val.picture2+'"><input type="hidden" name="nombre" value="'+val.name+'"><input id="'+id+'" class="d-none" type="submit"></form><a onclick="$(\'#'+id+'\').click();" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/><path d="M0 0h24v24H0z" fill="none"/></svg></a>';
            output += '</div>';
            output += '<div class="m-2 col-sm-12">';
            output += '<h2>' + val.title + '</h2>';
            output += '<button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#descol'+id+'" aria-expanded="false">Show more</button>';
            output += '<div class="navbar-collapse collapse" id="descol'+id+'">'+val.description+'</div>';
            output += '</div>';
            output += '</div>';
            output += '</div>';
        });

        $('#users').append(output);

    });
});  

