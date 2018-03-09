@extends('app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="main-banners-container">
				<div class="item one"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h1 class="title">Nuestro concepto</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="concept-image"><img src="images/concepto-omigoto-nigiri-to-go.jpg" alt="Imagen concepto omigoto nigiri to go"></div>
			</div>
			<div class="col-sm-6 concept-text-container">
				<p class="concep-text">Es un nuevo concepto de comida japonesa que pretende brindar la más alta calidad, frescura, innovación en sus platillos a un precio razonable. A través de una barra en donde expertos preparan los mejores platillos se pretende que OMIGOTO sea la opción ideal para quien desea pedidos para llevar; Además contamos con servicio a domicilio propio, Rappi, Uber Eats entre otros.</p>
				<p class="concep-text">En caso de que se requiera OMIGOTO cuenta con una pequeña barra para que los clientes puedan disfrutar la frescura, sabor y calidad en el lugar. A través de innovación en sus empaques, así como un proyecto arquitectónico elegante, distinguido y original OMIGOTO pretende convertirse en una opción original, una experiencia agradable y una excelente opción en términos de precio-calidad.</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2 class="title">Platillos</h2>
			</div>
			
			<div class="col-xs-12 dishes-menu">
				<ul>
					<li><a href="#" class="icon-nigiri active"></a></li>
					<li><a href="#" class="icon-maki"></a></li>
					<li><a href="#" class="icon-handroll"></a></li>
					<li><a href="#" class="icon-entradas"></a></li>
				</ul>
			</div>

			<div class="col-xs-12 nigiri-container">
				<div class="item">
					<img src="images/producto-nigiri-01.jpg" alt="producto nigiri 01">
					<p class="title text-center">Nigiri de camarón</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est nisi sunt id dicta voluptate, ratione consectetur soluta laborum sequi impedit natus commodi quaerat fugit eum nobis, mollitia aut voluptatem ullam!</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<p class="text-center download-menu"><a href="#" class="red">Descarga nuestro menú</a></p>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2 class="title">Bento BOX</h2>
				<img class="bento-svg" src="images/bentobox.svg" alt="bentobox">
			</div>

			<div class="col-xs-12">
				<ul>
					<li>3 PARES DE NIGIRI (6 pzas totales)*</li>
					<li>1 HAND ROLL O MAKI</li>
					<li>1 YAKIMESHI (arroz frito) O MISO (sopa)</li>
					<li>1 ENSALADA SUNOMONO (ensalada de pepino) O 1 SEAWEED (ensalada alga)</li>
					<li>EDAMAMES</li>
				</ul>
				
				<p>
					*Hamachi, Ikura y Unagui tiene costo extra.
				</p>

				<p class="price red text-center">$260</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 text-center">
				<h2 class="title">SUCURSAL</h2>
			</div>
			<div class="col-xs-12 map"></div>
			<div class="col-xs-12">
				<p class="title text-center">Providencia</p>
				<p>
					Av. Pablo Neruda 3158<br>
					Col. Providencia<br>
					Tel. 3640·0589<br>
					<span class="icon-wa"></span> 333 1482 572
				</p>
				<p>
					Horario: <br>
					Lunes a domingo de 14:00-22:30 <br>
					Descansamos los martes.
				</p>
			</div>
		</div>
	</div>

@stop