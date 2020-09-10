
@extends('layouts.app')

@section('content')

<div class="body" >
<div class="flex-center position-ref full-height container" >
    <form action="/accueil/rup" method="post">
    	<h1 class="text-center display-3" svg viewBox="0 0 24 24" width="80" height="80" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-1hy7qas"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>MED-DZ...</h1>
    	@csrf
         <div class="input-group input-group-lg ">
  <input type="text" name="med" class="form-control shadow-sm " size="40" placeholder=" Chercher par NOM/DCI/CODE...">
        
  <div class="input-group-append">
    <input class="btn btn-primary shadow-sm" type="submit" value="Cherche">
  </div>
</div>

    </form>
    
</div>
</div>
<div>


	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space bg-info">
		<div class="container">
			
			<h3 class="text-center thin">Raisons d'utiliser ce site web</h3>
			
			<div class="row " style="margin-left: 10%;">
				
				
				<div class="col-md-3 col-sm-6 highlight" >
					<div class="h-caption"><h4 class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                    <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
                    <g><path d="M490.5,767.7c0-90.1,45.1-169.7,113.9-218c-0.2-0.1-0.4-0.2-0.7-0.2c2.7-1.5,5.2-3.1,7.9-4.7c3-2,6.1-3.8,9.2-5.6c79-51.2,131.3-140.2,131.3-241.5c0-158.9-128.5-287.6-287-287.6c-158.5,0-287,128.8-287,287.6c0,108.5,60,202.8,148.4,251.8C161,602,35.8,745.7,10.6,922c-5,34.7,22,65.9,57,65.9h539.7C536.9,939.8,490.5,859.1,490.5,767.7z M767.1,545.5c-122.9,0-222.9,99.7-222.9,222.3c0,122.6,100,222.3,222.9,222.3S990,890.3,990,767.7C990,645.2,890,545.5,767.1,545.5z M778.2,870.6c-26,26-68.5,26-94.5,0c-26-26-26-68.5,0-94.5l39.4-39.4l94.5,94.5L778.2,870.6z M872.7,776.1l-39.4,39.4L738.8,721l39.4-39.4c26-26,68.5-26,94.5,0C898.7,707.6,898.7,750.1,872.7,776.1z"/></g>
                    </svg><br>Patient</h4></div>
					<div class="h-body text-center">
						<p>Cette application web permettant aux patients de trouver en temps réduit la pharmacie la plus proche qui offre le médicament en rupture dont ils ont besoin.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight" style="margin-left: 10%;">
					<div class="h-caption"><h4 class="text-center">
	<img src="https://img.icons8.com/ios-filled/90/000000/pharmacy-shop.png"/><br>Pharmacie</h4></div>
					<div class="h-body text-center">
						<p>Peut consulter la liste des ruptures signalée par l’utilisateur, et en fonction de son stock il répond par oui ou non à la disponibilité du médicament.<br>
                        Le pharmacien peut également consulter et créer un médicament.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight" style="margin-left: 10%;">
					<div class="h-caption"><h4 class="text-center"><img src="https://img.icons8.com/ios-glyphs/90/000000/supplier.png"/><br>Fournissuer</h4></div>
					<div class="h-body text-center">
						<p>Peut consulter la liste des pharmaies qui on repond par nom sur un medicament pour livrer ce dernier.<br>
                        Le fournisseur peut aussi consulter la liste des médicaments.</p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
	


	<footer id="footer  " class="top-space ">
		
		<div class="jumbotron footer1 ">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+213 797 062 058<br>
								<a href="#">m.hammouti.inf@gmail.com</a><br>
								<br>
								////////////////////////////////////////////
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
						<p class="follow-me-icons" style="margin-left: 7%;" >
								<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a>
								<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></a>
								<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>

							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Objectif</h3>
						<div class="widget-body">
							<p>résoudre un problème que l’on rencontre Souvent quand on cherche un ou plusieurs médicament chez une pharmacie  et on ne le trouve pas, alors on est obligé  de chercher dans plusieurs pharmacies, ce qui consomme du temps, de l'énergie et de l’argent avec de de grave problème en cas d'urgence.</p>
							<h3 class="widget-title">L'idée</h3>
							<p>La boite de développement informatique <a href="https://hdconsulting-dz.com">"HDConsulting" </a>à Tlemcen, nous a proposé une solution pour ce problème, cette solution permet de rechercher des médicaments d'une façon automatique et facile à l'aide d'une simple application web qui permet de vérifier où vous pouvez trouver ces médicaments sans perte de temps et d'efforts avec une implication des pharmacies.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

      
	</footer>	

	<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2020, MED-DZ.</p>
    </div>
    <!-- /.container -->
  </footer>

</div>


@endsection