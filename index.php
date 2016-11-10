<!-- 
1-creer un nouveau projet
2-template bootstrap +cdn jquerry
3-creer une liste de mot en anglais
4-lorqu'on clique sur un mot de la liste un requete est envoyéé au serveur ; celui-ci analyse le mt envoyé et renvie la traduction au navigateur.
 -->


 <!DOCTYPE html>
 <html>
	 <head>
	 	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Mon CSS -->
	 <link rel="stylesheet" type="text/css" href="css/style.css">
	 	<title>EXO 2</title>
	 </head>
	 <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

    <div class="starter-template">
	    <h1><b>Seb translate</b></h1>
	    <p class="lead">Traduction de quelques mots en anglais</p>
    </div>
    	<section>
    		<ul class="list-group">
    		<h2>Mot en anglais</h2>
		  <li class="list-group-item list-group-item-success words" id="Cat">Cat</li>
		  <li class="list-group-item list-group-item-info words" id="Soccer">Soccer</li>
		  <li class="list-group-item list-group-item-warning words" id="Duck">Duck</li>
		  <li class="list-group-item list-group-item-danger words" id="Surf">Surf</li>
		</ul>
    	<!-- </section>		
			<button id="btnCat">Translate Cat</button>
			<button id="btnSoccer">Translate Soccer</button>
			<button id="btnDuck">Translate Duck</button>
			<button id="btnSurf">Translate Surf</button>

      <section> -->
        <ul class="list-group">
        <h2>Mot en Francais</h2>

      <li class="list-group-item list-group-item-success" id="chat"></li>
      <li class="list-group-item list-group-item-info" id="foot"></li>
      <li class="list-group-item list-group-item-warning" id="canard"></li>
      <li class="list-group-item list-group-item-danger" id="Surfr"></li>
    </ul>
      </section>  

    </div><!-- /.container -->

	<!-- integrer le CDN jQuery -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Mon JS -->
	<script type="text/javascript" src="js/script.js"></script>

	 </body>
 </html>