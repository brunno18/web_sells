<html>
	<head>
		<title> Tex Produtos Naturais | Para uma Vida Saudável </title>
		<link href='http://fonts.googleapis.com/css?family=Stalinist+One' rel='stylesheet' type='text/css'>
		<style type = "text/css">
			body	{
						margin: 0; 
						padding: 0;
						font: 12px/1.4 Verdana, Arial, Helvetica, sans-serif;
						text-align: center;
						background-color: #008B8B;
					}
					
			div.principal	{
							width: 980px;				
							border-width: 1px;
							margin: 0 auto;
							text-align:left;
							background-color: Snow;
							height: auto;
						}
			
			div.imagem	{	
							
							border-color: Snow;
							width: 969px;
							height: 236px;
							z-index: 1;
						}
			ul#nav {
				position:absolute; 
				left:50px; 
				top:210px;
				margin:0; 
				padding:0;
				color: Snow;
				z-index: 2;
				} 
			ul#nav li { 
				background: SkyBlue;
				margin-right:5px;
				display: inline;
				list-style-type: none;
				border-radius: 10px;
				box-shadow: black 0.5em 0.5em 0.3em
				}
			ul#nav li a {
				color: #fff;
				font-size: 12px;
				font-weight: bold;
				text-decoration: none;
				text-transform: uppercase;
				padding: 3px 15px;
				}
			ul#nav li a:hover {  
					background-color: PaleTurquoise;
					border-radius: 10px;
				}

			#busca { 
				position:absolute; 
				right:10px; 
				top:210px;
				margin: 0;
				padding: 0;
				color: #fff;
				font-size: 11px;
				font-weight: bold;
			}
			#busca input {
					background: SkyBlue;
					border: none;
					border-radius: 5px;
					color:#fff;
				}
			#busca input#submit {
					background: DarkTurquoise;
					border: 1px outset Turquoise;
					color:#fff;
					font-size:12px;
					border-radius: 5px;
				}
			#texto	{
					width: 500px;
					height: auto;
					float:left;
					background-color: Snow;
					margin-left: 20px;
					margin-right: 20px;
					text-align: justify;
					border-style: ridge;
					margin-bottom: 50px;
					padding: 10px 10px 10px 10px;
			}
			#imagens{
					float: right;
					width: 400px;
					margin-top: 10px;
				}
			#imagens img{
					border-radius: 20px;
					border-style: solid;
					border-color: Snow;
					margin-top: 20px;
				}
			#creditos{
					width: 980px;
					height: 20px;
					border-width: 1px;
					clear:both;
					background-color: Aquamarine;
				}
			#creditos p{
				margin-left: 20px;
			}
			
			#creditos p span {
				color: SeaGreen;
				font-weight: bold;
			}
			#texto h2 {
					margin-top: 50px;
					font-size:23px;
				}
		</style>
	</head>
	<body>
		<div class = "principal">
			<div style = "position:relative; width:980px; height:230px;">
				<div class = "imagem">
					<img src="imagens/perca-medo-ser-feliz-anamaria-767-11279.jpg" width="980px" height="236px" alt="Primeira Foto" />
				</div>
				
				
				<ul id = "nav">
					<li> <a href = "index.php"> HOME </a> </li>
					<li> <a href = "produtos/index.php"> PRODUTOS </a> </li>
					<li> <a href = "contato.html"> CONTATO </a> </li>
					<li> <a href = "escritorio.html"> ESCRITORIO VIRTUAL </a> </li>
					<li> <a href = "sobre/index.html"> SOBRE </a></li>
				</ul>
				
				<form id = "busca">
					<input type="text" value=" buscar" name="busca" />
					<input type="submit" value="OK" id="submit" />
				</form>
			</div>
			
			<img src = "imagens/scan.png" width = "980px" height = "50px" title = "teste" alt = "teste">
			
			<div id = "texto">
				<label> Login <label><input type = "text/css" title = "login" id = "login"> 
			</div>
			
			<div id = "imagens">
			
			</div>
			
			<div id = "creditos">
				<p>Copyright &copy; 2013 - <b>Text</b> <span> Produtos Naturais </span> </p>
			</div>
		</div>
	</body>
</html>