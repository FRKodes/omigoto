<div class="container">
	<div class="row">
		<div class="col-xs-12 text-center">
			<h2 class="title">SUCURSAL</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1">
			<div class="map" id="map"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<p class="title text-center">Providencia</p>
			<p class="address-schedule">Av. Pablo Neruda 3158 Col. Providencia </p>
			<p class="address-schedule">
				Horario: Lunes a domingo de 14:00 - 22:30 Hrs.<br>
				Descansamos los martes.
			</p>
			<p class="address-schedule">Tel. 3640 · 0589 &nbsp; <span class="icon-wa"></span> 333 1482 572 </p>
		</div>
	</div>

	<div class="row" id="contacto">
		<div class="col-xs-12 rapi-plus-uber">
			<ul>
				<li><a href="#"><img class="uber-eats" src="/images/ue-logo.svg" alt="ubereats logo"></a></li>
				<li><a href="#"><img src="images/rappi-logo.svg" alt="rappi logo"></a></li>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 instagram-feed">
			@foreach($posts as $post)
				<div class="instagram-item" style="background-image: url({{ $post->images->standard_resolution->url }})">
					<a href="{{ $post->link }}" target="_blank" title="Ver... {{ $post->caption->text }}">
						<img src="images/pixel-transparent.png" alt="{{ $post->caption->text }}">
					</a>
				</div>
			@endforeach
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 text-center">
			<a href="https://www.instagram.com/omigotomx/" target="_blank" class="icon-instagram"></a>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 credits text-center barlow">
			<p class="gray">Developed by <a class="white" href="http://www.blueterrier.mx" target="_blank">Blue Terrier Studio</a></p>
		</div>
	</div>
</div>