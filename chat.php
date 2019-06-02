<!-- Font Awesome -->
	<style>
		.dropdown-submenu:nth-child(1) {
		  position: relative;
		  border-radius: .25rem .25rem .25rem 0;
		}
		.dropdown-submenu {
		  position: relative;
		  border-radius: 0 .25rem .25rem 0;
		}
		.dropdown-submenu span {
		  color: black;
		}

		.dropdown-submenu:nth-child(even) {
		  background-color: #eee;
		}
		.dropdown-submenu:nth-child(odd) {
		  background-color: #ccc;
		}

		.dropdown-submenu .dropdown-menu {
		  top: 0;
		  position: fixed;
		  left: -101%;
		  margin-top: -1px;
		  height: 101%;
		  width: 100%;
		}
		.messageRight{
			max-width: 61%;
			background-color: blue;
			width: 60%;
			padding: 2px;
			color: white;
		}
		.messageLeft{
			max-width: 61%;
			background-color: DeepSkyBlue;
			width: 60%;
			padding: 2px;
			color: white;
		}
		.chat{

		  height:calc(0.70*40vh);
		  overflow-y: scroll;
		}

		.contacts{
			height:calc(40vh);
		  overflow-y: scroll;
		}
		#chatDropDown{
			height: 40vh; 
			width: 40vw; 
			min-width: 300px;
			min-height: 00px;
		}

		#addfile {

			font-size: 30px;	
		  width: 55px;
		  height: 55px;
		  line-height: 45px;
		  text-align: center;
		  padding: 0;
		  border-radius: 50%;
		  margin-bottom: 10px;
		  margin-left: 50px;
		}

		#addfileMobile {

			font-size: 20px;	
		  width: 115px;
		  height: 45px;
		  line-height: 45px;
		  text-align: center;
		  padding: 0;
		}

	</style>
	<div class="fixed-bottom w-100">

		<div class="float-right">
			<!-- Default dropup button -->
			<div class="btn-group dropup">
			  <button id="chatDropDownButton" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Chat
			  </button>
			  <div id="chatDropDown" class="rounded dropdown-menu p-0" style="">
			    <!-- Dropdown menu links -->
			    <div class="row rounded">
			    	<div class="col pr-0 border-right">
			    		<div class="rounded-top" id="chatShow">
			        	<div class="pl-2 pt-1 mb-1 border-bottom rounded-bottom" style="z-index: 5; width: 100%; ">
			        		 <span class=" ml-1 font-weight-bold text-decoration-none text-truncate w-100" style="min-height: 42px; height: 42px"> <img class="img-fluid rounded-circle" src="https://s3.amazonaws.com/blackboard.cloud.dev/sites/cb92116f-70ce-4a77-8f15-d18889e202e0/profiles/57daa827e4b06c5ca2626a18/98704483-a139-40be-80db-34697a9c8c06.jpg" style=" height: 40px;">German Garcia</span>
			        	</div>

			        	<div class="chat mb-2">
				        	<div   class=" messageRight float-right mr-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
				        	<div   class=" messageLeft float-left ml-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
				        	<div   class=" messageRight float-right mr-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
				        	<div   class=" messageLeft float-left ml-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
				        	<div   class=" messageRight float-right mr-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
				        	<div   class=" messageLeft float-left ml-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
				        	<div   class=" messageRight float-right mr-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
				        	<div   class=" messageLeft float-left ml-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
			        	</div>
			        	<div class="" style=" max-width: 100%">
			        		<div class="container-fluid">
				        		<div class="row">
				        			<div class="col-12"><input class=" newMessage d-inline-block" style="max-width: 100%; width: 100%" type="text" name=""></div>
				        		</div>
			        		</div>
			        		
			        	</div>
			        
			        </div>
			    	</div>
			    	<div class="col contacts rounded pl-0">
			    		<div class="dropdown-submenu p-2" id="german">
			        <a class="contantA test w-100 h-100" tabindex="-1" href="#"> <span class="ml-1 d-block font-weight-bold text-decoration-none text-truncate"><img class="img-fluid rounded-circle" src="https://s3.amazonaws.com/blackboard.cloud.dev/sites/cb92116f-70ce-4a77-8f15-d18889e202e0/profiles/57daa827e4b06c5ca2626a18/98704483-a139-40be-80db-34697a9c8c06.jpg" style=" height: 40px;"> German Garcia</span> <span class="caret"></span></a>
			        <ul class="dropdown-menu d-none">
			        	<div class="pl-2 text-truncate pt-1 mb-1 border-bottom rounded-bottom" style="z-index: 5; width: 100%;">
			        		 <span class=" ml-1 font-weight-bold text-decoration-none text-truncate w-100" style="min-height: 42px; height: 42px"> <img class="img-fluid rounded-circle" src="https://s3.amazonaws.com/blackboard.cloud.dev/sites/cb92116f-70ce-4a77-8f15-d18889e202e0/profiles/57daa827e4b06c5ca2626a18/98704483-a139-40be-80db-34697a9c8c06.jpg" style=" height: 40px;">German Garcia</span>
			        	</div>

			        	<div class="chat mb-2">
				        	<div   class=" messageRight float-right mr-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
				        	<div   class=" messageLeft float-left ml-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
				        	<div   class=" messageRight float-right mr-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
				        	<div   class=" messageLeft float-left ml-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
				        	<div   class=" messageRight float-right mr-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
				        	<div   class=" messageLeft float-left ml-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
				        	<div   class=" messageRight float-right mr-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
				        	<div   class=" messageLeft float-left ml-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
			        	</div>
			        	<div class="" style=" max-width: 100%">
			        		<div class="container-fluid">
				        		<div class="row">
				        			<div class="col-12"><input class="newMessage border d-inline-block" style="max-width: 100%; width: 100%" type="text" name=""></div>
				        		</div>
			        		</div>
			        		
			        	</div>
			        </ul>
			      </div>
			      <div class="dropdown-submenu p-2" id="luis">
			        <a class="contantA test w-100 h-100" tabindex="-1" href="#"> <span class="ml-1 d-block font-weight-bold text-decoration-none text-truncate"><img class="img-fluid rounded-circle" src="https://s3.amazonaws.com/blackboard.cloud.dev/sites/cb92116f-70ce-4a77-8f15-d18889e202e0/profiles/57e051f9e4b06c5ca268ca54/1f0d7208-85a4-405d-83b9-b64dc9963a1b.jpg" style=" height: 40px;"> Luis Ferrer</span> <span class="caret"></span></a>
			        <ul class="dropdown-menu d-none">
			        	<div class="pl-2 pt-1 mb-1 border-bottom rounded-bottom" style="z-index: 5; width: 100%; ">
			        		 <span class="text-truncate ml-1 font-weight-bold text-decoration-none text-truncate w-100" style="min-height: 42px; height: 42px"> <img class="img-fluid rounded-circle" src="https://s3.amazonaws.com/blackboard.cloud.dev/sites/cb92116f-70ce-4a77-8f15-d18889e202e0/profiles/57e051f9e4b06c5ca268ca54/1f0d7208-85a4-405d-83b9-b64dc9963a1b.jpg" style=" height: 40px;">Luis Ferrer</span>
			        	</div>

			        	<div class="chat mb-2">
				        	<div   class=" messageRight float-right mr-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
				        	<div   class=" messageLeft float-left ml-2 rounded text-wrap my-2" style="" >Mensaje sajhbsda ashdba asjna</div>
			        	</div>
			        	<div class="" style=" max-width: 100%">
			        		<div class="container-fluid">
				        		<div class="row">
				        			<div class="col-12"><input class="newMessage border d-inline-block" style="max-width: 100%; width: 100%" type="text" name=""></div>
				        		</div>
			        		</div>
			        		
			        	</div>
			        </ul>
			      </div>
			      <div class="dropdown-submenu p-2" id="chatContact2">
			        <a class="contantA test w-100 h-100" tabindex="-1" href="#"> <span class="ml-1 d-block font-weight-bold text-decoration-none text-truncate"><img class="img-fluid rounded-circle" src="https://s3.amazonaws.com/blackboard.cloud.dev/sites/cb92116f-70ce-4a77-8f15-d18889e202e0/profiles/57e11cece4b0a2d3cad5de75/3d534ffa-b2c8-4f15-93a1-1cd72c7c37dd.jpg" style=" height: 40px;"> Adrian Villanueva</span> <span class="caret"></span></a>
			        <ul class="dropdown-menu d-none">
			        	<div class="pl-2 pt-1 mb-1 border-bottom rounded-bottom" style="z-index: 5; width: 100%;">
			        		 <span class="text-truncate ml-1 font-weight-bold text-decoration-none text-truncate w-100" style="min-height: 42px; height: 42px"> <img class="img-fluid rounded-circle" src="https://s3.amazonaws.com/blackboard.cloud.dev/sites/cb92116f-70ce-4a77-8f15-d18889e202e0/profiles/57e11cece4b0a2d3cad5de75/3d534ffa-b2c8-4f15-93a1-1cd72c7c37dd.jpg" style=" height: 40px;">Adrian Villanueva</span>
			        	</div>

			        	<div class="chat mb-2">
				        	
			        	</div>
			        	<div class="" style=" max-width: 100%">
			        		<div class="container-fluid">
				        		<div class="row">
				        			<div class="col-12"><input class="newMessage border d-inline-block" style="max-width: 100%; width: 100%" type="text" name=""></div>
				        		</div>
			        		</div>
			        		
			        	</div>
			        </ul>
			      </div>
			      <div class="dropdown-submenu p-2" id="chatContact3">
			        <a class="contantA test w-100 h-100" tabindex="-1" href="#"> <span class="ml-1 d-block font-weight-bold text-decoration-none text-truncate"><img class="img-fluid rounded-circle" src="https://s3.amazonaws.com/blackboard.cloud.dev/sites/cb92116f-70ce-4a77-8f15-d18889e202e0/profiles/58aff680e4b08252e50bfc8c/4719e51c-872d-48e7-971c-ae0c98464d00.jpg" style=" height: 40px;"> Pablo Ferrer</span> <span class="caret"></span></a>
			        <ul class="dropdown-menu d-none">
			        	<div class="pl-2 pt-1 mb-1 border-bottom rounded-bottom" style="z-index: 5; width: 100%; ">
			        		 <span class="text-truncate ml-1 font-weight-bold text-decoration-none text-truncate w-100" style="min-height: 42px; height: 42px"> <img class="img-fluid rounded-circle" src="https://s3.amazonaws.com/blackboard.cloud.dev/sites/cb92116f-70ce-4a77-8f15-d18889e202e0/profiles/58aff680e4b08252e50bfc8c/4719e51c-872d-48e7-971c-ae0c98464d00.jpg" style=" height: 40px;">Pablo Ferrer</span>
			        	</div>

			        	<div class="chat mb-2">
				        	
			        	</div>
			        	<div class="" style="max-width: 100%">
			        		<div class="container-fluid">
				        		<div class="row">
				        			<div class="col-12"><input class="newMessage border d-inline-block" style="max-width: 100%; width: 100%" type="text" name=""></div>
				        		</div>
			        		</div>
			        		
			        	</div>
			        </ul>
			      </div>

			      <div class="dropdown-submenu p-2" id="chatContact4">
			        <a class="contantA test w-100 h-100" tabindex="-1" href="#"> <span class="ml-1 d-block font-weight-bold text-decoration-none text-truncate"><img class="img-fluid rounded-circle" src="https://s3.amazonaws.com/blackboard.cloud.dev/sites/cb92116f-70ce-4a77-8f15-d18889e202e0/profiles/57d838ffe4b0a2d3cad1c855/563c7c64-ed83-4412-8b80-9559c1b68136.jpg" style=" height: 40px;"> Daniel Vilar</span> <span class="caret"></span></a>
			        <ul class="dropdown-menu d-none">
			        	<div class="pl-2 pt-1 mb-1 border-bottom rounded-bottom" style="z-index: 5; width: 100%;">
			        		 <span class="text-truncate ml-1 font-weight-bold text-decoration-none text-truncate w-100" style="min-height: 42px; height: 42px"> <img class="img-fluid rounded-circle" src="https://s3.amazonaws.com/blackboard.cloud.dev/sites/cb92116f-70ce-4a77-8f15-d18889e202e0/profiles/57d838ffe4b0a2d3cad1c855/563c7c64-ed83-4412-8b80-9559c1b68136.jpg" style=" height: 40px;">Daniel Vilar</span>
			        	</div>

			        	<div class="chat mb-2">
				        	
			        	</div>
			        	<div class="" style=" max-width: 100%">
			        		<div class="container-fluid">
				        		<div class="row">
				        			<div class="col-12"><input class="newMessage border d-inline-block" style="max-width: 100%; width: 100%" type="text" name=""></div>
				        		</div>
			        		</div>
			        		
			        	</div>
			        </ul>
			      </div>
			      <div class="dropdown-submenu p-2" id="chatContact5">
			        <a class="contantA test w-100 h-100" tabindex="-1" href="#"> <span class="ml-1 d-block font-weight-bold text-decoration-none text-truncate"><img class="img-fluid rounded-circle" src="https://s3.amazonaws.com/blackboard.cloud.dev/sites/cb92116f-70ce-4a77-8f15-d18889e202e0/profiles/588cedb6e4b0d96ae53bb7db/34243026-3c44-4a1e-8475-4127267e20e4.jpg" style=" height: 40px;"> Ana del Valle</span> <span class="caret"></span></a>
			        <ul class="dropdown-menu d-none">
			        	<div class="pl-2 pt-1 mb-1 border-bottom rounded-bottom" style="z-index: 5; width: 100%;">
			        		 <span class="text-truncate ml-1 font-weight-bold text-decoration-none text-truncate w-100" style="min-height: 42px; height: 42px"> <img class="img-fluid rounded-circle" src="https://s3.amazonaws.com/blackboard.cloud.dev/sites/cb92116f-70ce-4a77-8f15-d18889e202e0/profiles/588cedb6e4b0d96ae53bb7db/34243026-3c44-4a1e-8475-4127267e20e4.jpg" style=" height: 40px;">Ana del Valle</span>
			        	</div>

			        	<div class="chat mb-2">
				        	
			        	</div>
			        	<div class="" style=" max-width: 100%">
			        		<div class="container-fluid">
				        		<div class="row">
				        			<div class="col-12"><input class="newMessage border d-inline-block" style="max-width: 100%; width: 100%" type="text" name=""></div>
				        		</div>
			        		</div>
			        		
			        	</div>
			        </ul>
			      </div>
			      
			      
			      
			    	</div>
			    </div>
			    	
				
			  </div>
			</div>
		</div>
		<script>
			var selected=""
$(document).ready(function(){
	$('#chatShow').parent().hide();
	$('#chatDropDown').css('min-width','150px');
	$('#chatDropDown').css('width','20vw');
	

	$('.contantA').on("click", function(e){
		if(selected!=""){
			$('#'+selected+' .dropdown-menu').html($('#chatShow').html());
		}
		if(selected==$(this).parent().attr('id') || selected==""){
			$('#chatShow').parent().toggle();
		} else {
			if($('#chatShow').is(":hidden")){
				$('#chatShow').parent().show();
			}
		}
		selected=$(this).parent().attr('id');
		$('#chatShow').html($('#'+selected+' .dropdown-menu').html())
		$("#chatShow .chat").scrollTop($("#chatShow .chat")[0].scrollHeight);
		console.log(selected);
		if($('#chatShow').is(":visible")){
			$('#chatDropDown').css('min-width','300px');
			$('#chatDropDown').css('width','40vw');

		} else {
			$('#chatDropDown').css('min-width','150px');
			$('#chatDropDown').css('width','20vw');
		}
		console.log($('#chatDropDown').height()*0.15);
		$('#chatShow  div').css('height',$('#chatDropDown').height()*0.15);
		$('.chat').css('height',$('#chatDropDown').height()*0.70);
		$('#chatShow input').css('height',$('#chatDropDown').height()*0.10);

		$('#chatDropDownButton').click();
		$('#chatDropDownButton').click();
		$('#chatShow .newMessage').keypress(function(event){
		    var keycode = (event.keyCode ? event.keyCode : event.which);
		    if(keycode == '13'){
		        $('#chatShow .chat').html($('#chatShow .chat').html()+'<div   class=" messageRight float-right mr-2 rounded text-wrap my-2" style="" >'+$('#chatShow .newMessage')[0].value+'</div>');
		        setTimeout(function(){$('#chatShow .chat').html($('#chatShow .chat').html()+'<div   class=" messageLeft float-left ml-2 rounded text-wrap my-2" style="" > RESPUESTA </div>');
		    		$("#chatShow .chat").scrollTop($("#chatShow .chat")[0].scrollHeight);},1000);
		        $('#chatShow .newMessage')[0].value='';
		        $("#chatShow .chat").scrollTop($("#chatShow .chat")[0].scrollHeight);

		    }
		});

		
	});
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
  
});
</script>





	</div>
	<div class="fixed-bottom w-25">
<div class="float-left d-md-block d-none">
      <button id="addfile" type="button" class="btn btn-secondary">
         +
      </button>
    </div>
    <div class="float-left d-md-none d-block">
      <button id="addfileMobile" type="button" class="btn btn-secondary">
         + 
      </button>
    </div>
</div>