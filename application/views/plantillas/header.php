<!DOCTYPE HTML>
<head>
<title>Talk Up!</title>

</head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<div>
<style>
body{
	background:  #66ccff;	
}
a, u, li {
	text-decoration: none;
	color: White;
	text-shadow: 2px 2px 5px rgb(23, 23, 23);
	
}
#index_games
{
    padding-top: 50px;
    
    height: 320px;
    
    background-image: url('<?php echo base_url();?>imagenes/index_games_background.png');
    background-position: 0 0;
    background-repeat: no-repeat;
}

#index_games h1
{
    color: #666;
    
    font-family: 'Pacifico';
    font-size: 40px;
    font-weight: normal;
    
    text-align: center;
}

#index_games p
{
    margin: 5px 30px 10px 20px;
    
    font-family: 'Signika', sans-serif;
    font-size: 17px;
    
    line-height: 1.5;
    
    color: #7E8A91;
    
    text-align: center;
}
</style>
<style>
body{
background-repeat: no repeat;
background-size: cover;
}
.cloud
{
    position: absolute;
    z-index: 100;
    top: 80px;
    left: -125px;
    background-image: url('<?php echo base_url();?>imagenes/sun_cloud.png');
    background-position: center top;
    width: 397px;
    height: 159px;
}
.sun
{
    position: absolute;
    top: -102px;
    left: 60px;
    
    -webkit-animation: fadein 2s ease 0s forwards;
    -moz-animation: fadein 2s ease 0s forwards;
    -ms-animation: fadein 2s ease 0s forwards;
    -o-animation: fadein 2s ease 0s forwards;
    animation: fadein 2s ease 0s forwards;
}

.sunflares
{
    position: absolute;
    top: 0;
    left: 0;
    width: 294px;
    height: 279px;
    background-image: url('<?php echo base_url();?>imagenes/sun_flare.png');
    
    -webkit-animation: rotate 15s infinite;
    -moz-animation: rotate 15s infinite;
    -ms-animation: rotate 15s infinite;
    -o-animation: rotate 15s infinite;
    animation: rotate 15s infinite;
    
    -webkit-animation-timing-function: linear;
    -moz-animation-timing-function: linear;
    -ms-animation-timing-function: linear;
    -o-animation-timing-function: linear;
    animation-timing-function: linear;

}

.face
{
    margin: 0;
    position: absolute;
    top: 74px;
    left: 80px;
    width: 133px;
    height: 132px;
    background-image: url('<?php echo base_url();?>imagenes/sun_face.png');
}
@-webkit-keyframes fadein
{
    0%
    {
        top: -450px;
    }

    60%
    {
        top: -295px;
    }

    100%
    {
        top: -50px;
    }
}

@-moz-keyframes fadein
{
    0%
    {
        top: -450px;
    }

    60%
    {
        top: -295px;
    }

    100%
    {
        top: -50px;
    }
}

@-ms-keyframes fadein
{
    0%
    {
        top: -450px;
    }

    60%
    {
        top: -295px;
    }

    100%
    {
        top: -50px;
    }
}

@-o-keyframes fadein
{
    0%
    {
        top: -450px;
    }

    60%
    {
        top: -295px;
    }

    100%
    {
        top: -50px;
    }
}

@keyframes fadein
{
    0%
    {
        top: -450px;
    }

    60%
    {
        top: -295px;
    }

    100%
    {
        top: -50px;
    }
}

@-webkit-keyframes rotate
{
    0%
    {
        -webkit-transform: rotate(0deg);
    }

    100%
    {
        -webkit-transform: rotate(360deg);
    }
}

@-moz-keyframes rotate
{
    0%
    {
        -moz-transform: rotate(0deg);
    }

    100%
    {
        -moz-transform: rotate(360deg);
    }
}

@-ms-keyframes rotate
{
    0%
    {
        -ms-transform: rotate(0deg);
    }

    100%
    {
        -ms-transform: rotate(360deg);
    }
}

@-o-keyframes rotate
{
    0%
    {
        -o-transform: rotate(0deg);
    }

    100%
    {
        -o-transform: rotate(360deg);
    }
}

@keyframes rotate
{
    0%
    {
        transform: rotate(0deg);
    }

    100%
    {
        transform: rotate(360deg);
    }
}
/* Dropdown Button */
.dropbtn {
    background-color: transparent;
    color: black;
    padding: 12px;
    font-size: 14px;
    border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: gray;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: gray;}

.page_menu
{
    position: relative;
    
    height: 131px;
    
    background-image: url('../img/menu_background.png');
    background-position: 0 0;
    background-repeat: no-repeat;
}
</style>
<script>
window.onload = function(){
	var activeTab= localStorage.getItem('activeTab');
	if(activeTab == null){
		localStorage.setItem('activeTab', 'home');
	}
	document.getElementById('tab' + activeTab).classList.add("active");
	document.getElementById(activeTab).classList.add("active");
}
</script>
<script>
	function openFormresponsable() {
	  $("#overlayResponsable").css({"display":"block"});
	  $("#formResponsable").css({"display":"block"});
	}
	function closeFormresponsable() {
		$("#overlayResponsable").css({"display":"none"});
		$("#formResponsable").css({"display":"none"})
	}
	
	function openFormsucursal() {
	  $("#overlaySucursal").css({"display":"block"});
	  $("#formSucursal").css({"display":"block"});
	}
	function closeFormsucursal() {
		$("#overlaySucursal").css({"display":"none"});
		$("#formSucursal").css({"display":"none"});
	}
	
	function openFormarticulo() {
	  $("#overlayArticulo").css({"display":"block"});
	  $("#formArticulo").css({"display":"block"});
	}
	function closeFormarticulo() {
		$("#overlayArticulo").css({"display":"none"});
		$("#formArticulo").css({"display":"none"});
	}
	
	function openFormubicacion() {
	  $("#overlayUbicacion").css({"display":"block"});
	  $("#formUbicacion").css({"display":"block"});
	}
	function closeFormubicacion() {
		$("#overlayUbicacion").css({"display":"none"});
		$("#formUbicacion").css({"display":"none"});
	}
	
	function openFormcategoria() {
	  $("#overlayCategoria").css({"display":"block"});
	  $("#formCategoria").css({"display":"block"});
	}
	function closeFormcategoria() {
		$("#overlayCategoria").css({"display":"none"});
		$("#formCategoria").css({"display":"none"});
	}
	
	function openFormsubcategoria() {
	  $("#overlaySubcategoria").css({"display":"block"});
	  $("#formSubcategoria").css({"display":"block"});
	}
	function closeFormsubcategoria() {
		$("#overlaySubcategoria").css({"display":"none"});
		$("#formSubcategoria").css({"display":"none"});
	}
	
	function openFormactivo() {
	  $("#overlayActivo").css({"display":"block"});
	  $("#formActivo").css({"display":"block"});
	}
	function closeFormactivo() {
		$("#overlayActivo").css({"display":"none"});
		$("#formActivo").css({"display":"none"});
	}
	
	$(document).ready(function(){
		$('#searchresponsable').keyup(function() {
			var val= $(this).val().toLowerCase();
			$(".sresponsable").hide();
			$(".sresponsable").each(function() {
				var text= $(this).text().toLowerCase();
				if(text.indexOf(val) != -1)
				{
					$(this).show();
				}
			});
		});
	});
	
	$(document).ready(function(){
		$('#searcharticulo').keyup(function() {
			var val= $(this).val().toLowerCase();
			$(".sarticulo").hide();
			$(".sarticulo").each(function() {
				var text= $(this).text().toLowerCase();
				if(text.indexOf(val) != -1)
				{
					$(this).show();
				}
			});
		});
	});
	
	$(document).ready(function(){
		$('#searchsucursal').keyup(function() {
			var val= $(this).val().toLowerCase();
			$(".ssucursal").hide();
			$(".ssucursal").each(function() {
				var text= $(this).text().toLowerCase();
				if(text.indexOf(val) != -1)
				{
					$(this).show();
				}
			});
		});
	});
	
	$(document).ready(function(){
		$('#searchubicacion').keyup(function() {
			var val= $(this).val().toLowerCase();
			$(".subicacion").hide();
			$(".subicacion").each(function() {
				var text= $(this).text().toLowerCase();
				if(text.indexOf(val) != -1)
				{
					$(this).show();
				}
			});
		});
	});

	
	$(document).ready(function(){
		$('#searchcategoria').keyup(function() {
			var val= $(this).val().toLowerCase();
			$(".scategoria").hide();
			$(".scategoria").each(function() {
				var text= $(this).text().toLowerCase();
				if(text.indexOf(val) != -1)
				{
					$(this).show();
				}
			});
		});
	});

	
	$(document).ready(function(){
		$('#searchsubcategoria').keyup(function() {
			var val= $(this).val().toLowerCase();
			$(".ssubcategoria").hide();
			$(".ssubcategoria").each(function() {
				var text= $(this).text().toLowerCase();
				if(text.indexOf(val) != -1)
				{
					$(this).show();
				}
			});
		});
	});
	
	$(document).ready(function(){
		$('#searchactivo').keyup(function() {
			var val= $(this).val().toLowerCase();
			$(".sactivo").hide();
			$(".sactivo").each(function() {
				var text= $(this).text().toLowerCase();
				if(text.indexOf(val) != -1)
				{
					$(this).show();
				}
			});
		});
	});

	function HTMLtoPDF(idelemento,nombreelemento)
	{
		var pdf = new jsPDF('p', 'pt', 'letter');
		source = $('#'+idelemento)[0];
		specialElementHandlers = 
		{
			'#bypassme': function(element, renderer)
			{
				return true
			}
		}
		margins = 
		{
			top: 50,
			left: 60,
			width: 545
		};
		pdf.fromHTML
		(
			source, 
			margins.left, 
			margins.top, 
			{
				'width': margins.width , 'elementHandlers': specialElementHandlers
			},
			function (dispose) 
			{
				pdf.save(nombreelemento+'.pdf');
			}
		)		
	}

</script>
<style>
  .carousel-inner { 
	 min-height: 30vh;
	 max-height: 100vh;
     <! --  custom hight -->
  }

   .item  {
	 width: 100%;
  }

</style>
<style>

::-webkit-scrollbar { 
    display: none; 
}
  .navbar-default .nav-pills > li > a:hover, .navbar-default .nav-pills > li > a:focus {
    background-color: transparent !important;}
.roundedimg {
    border-radius: 50%;
}
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.header {padding-right: 0; padding-left: 0;}
body{
  margin:0 ;
  padding:0;
	margin-left: auto;
	margin-right: auto;
	font-family: Arial;
}
.nocolor {
    text-decoration: none !important;
	color: white;
}

#agregar{
	background-color: #337ab7;
	color: #fff;
}

a[aria-expanded=true] .glyphicon-chevron-down {
    display: none;
}
a[aria-expanded=false] .glyphicon-chevron-up {
    display: none;
}
.pointer{
  cursor:pointer;
}

.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
}
.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}

</style>
<style>


#overlayUsuario {
  position:fixed;
  left:0;
  top:0;
  width:100vw;
  height:100vh;
  display:none;
  background-color:#000;
  opacity:0.5;
}


.form-popup-usuario {
  border-radius: 12px;
  background-color: white;
  display: none;
  position: fixed;
  top: 110;
  right: 15px;
  z-index: 9;  
  box-shadow: 2px 2px 5px #999;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0s;
    animation: animatezoom 0.1s;
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

</style>
<script>
	window.onload = function(){
		var activeTab= localStorage.getItem('activeTab');
		if(activeTab == null){
			localStorage.setItem('activeTab', 'home');
		}
		document.getElementById('tab' + activeTab).classList.add("active");
		document.getElementById(activeTab).classList.add("active");
	}
</script>
<script>

	function openFormusuario() {
	  $("#overlayUsuario").css({"display":"block"});
	  $("#formUsuario").css({"display":"block"});
	}
	function closeFormusuario() {
		$("#overlayUsuario").css({"display":"none"});
		$("#formUsuario").css({"display":"none"})
	}

	$(document).ready(function(){
		$('#searchusuario').keyup(function() {
			var val= $(this).val().toLowerCase();
			$(".susuario").hide();
			$(".susuario").each(function() {
				var text= $(this).text().toLowerCase();
				if(text.indexOf(val) != -1)
				{
					$(this).show();
				}
			});
		});
	});

</script>
<style>


</style>
<html>
<head>
	<title>
		<?php echo $title;?>
	</title>
</head>