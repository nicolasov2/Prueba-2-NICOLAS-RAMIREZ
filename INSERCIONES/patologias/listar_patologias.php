<!DOCTYPE html>
<html>
  
<head>
      
<!--======================================= ESTILO DE LA TABLA PLOMO ==============================-->      
	<title>PRUEBAS</title>
  	<meta charset="UTF-8">
	<link rel="icon" 		type="image/png" 	href="total/images/icons/favicon.ico"/>
	<link rel="stylesheet"  type="text/css" 	href="total/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"  type="text/css" 	href="total/css_table/main.css">

      
<!--======================== ESTE ES EL ESTILO PARA LOS BOTONES Y EL CAJON DE BUSQUEDA=============-->	      
    <style>
		body {
		font-family: Arial;
			 }

		* {
  		box-sizing: border-box;
		}
		form.example input[type=text] {
  		padding: 10px;
  		font-size: 17px;
  		border: 1px solid grey;
  		float: left;
  		width: 80%;
  		background: #f1f1f1;
		}
		form.example button {
  		float: left;
  		width: 20%;
  		padding: 10px;
  		background: #2196F3;
  		color: white;
  		font-size: 17px;
  		border: 1px solid grey;
  		border-left: none;
  		cursor: pointer;
		}
		form.example button:hover {
  		background: #0b7dda;
		}
        form.example::after {
  		content: "";
  		clear: both;
  		display: table;
		}
  		h1 {text-align: center;}
  		h2 {text-align: center;}
  		p {text-align: center;}
        iframe{
        width: 100%;
        border: 2px solid #ccc;
    	}
   
  
    </style>
    
	</head>
<!--======================== ESTE ES EL ESTILO PARA LOS BOTONES Y EL CAJON DE BUSQUEDA=============-->      
	<body> 
  
 		<div class="limiter">
		<div class="container-table100">
		<div class="wrap-table100"> 
 		<h1>BASE DE DATOS DE PRUEBAS: TECNOCIENCIA PERU</h1>
        <br>

         <div id="wrap">
		 <div id="header">
		 <p align="center">
   

         <form class="example" target="iframe_box"  method="post"  action="" style= " margin-left: auto; margin-right: auto; width: 430px;">  

         <button style= " margin: 5px; width: 200px; background-color: #4CAF50 " type="submit" onclick="javascript: form.action='ver_tabla_pruebas.php';">Ver tabla completa</button>
         <button style= " margin: 5px; width: 200px; background-color: #4CAF50 " type="submit" onclick="javascript: form.action='ver_reporte_grafico.php';">Ver reporte Grafico</button>
         
         </form>               
        
        </div>
		</div>                 
        
        <div align="center"> <iframe name="iframe_box" id="iframe_box" class="iframe" scrolling="no" frameborder="0" ></iframe> </div>
        

        <script> 
        var div = document.getElementById("iframe_box"); 
        div.onload = function() 
        {           
         div.style.height = div.contentWindow.document.body.scrollHeight + 'px'; 

         div.style.width =  div.contentWindow.document.body.scrollWidth+'px';
        
        } 
    	</script>           
                
	   	</div>
  		</div>
		</div>
</body>
</html>