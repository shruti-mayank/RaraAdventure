@extends('layout.main')

@section('content')

<style type="text/css">
	.explain{
		font-size: 15px;
		font-family: 'Roboto', sans-serif;
		font-weight: 300px;
	}
</style>

<div class="container">
	<h1 class="heading-h1 py-4">Extras</h1>
	<div class="pb-5">
		<div class="heading-h2 text-center pb-3">Helicopter For Hire</div>
		<div class="row">
			<div class="col-md-6 order-1 order-md-1">
				<img src="{{ asset('user/extras/helicopter.jpg') }}" class="img-fluid img-responsive w-100" style="height: 280px;">
			</div>
			<div class="col-md-6 pl-md-3 order-2 order-md-2 pt-2">
				<div class="explain">
					Rara adventure also provides helicopter rides along multiple routes. The routes range from mountain flights to the Everest and Annapurna to Rara Lake and Gosaikunda. The helicopter tour packages are opportunities to explore one of the most beautiful countries in the world with convenience and ease. <br>
					The packages offered are listed below:
					<ul class="pl-3">
						<li>Annapurna Helicopter Tour</li>
						<li>Everest Base camp Helicopter Tour</li>
						<li>Gosaikunda Helicopter Tour</li>
						<li>Langtang Helicopter Tour</li>
						<li>Muktinath Helicopter Tour</li>
						<li>Upper Mustang Helicopter Tour</li>
						<li>Manaslu Helicopter Tour</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="pb-5">
		<div class="heading-h2 text-center pb-3">Paragliding</div>
		<div class="row">
			<div class="col-md-6 order-1 order-md-2">
				<img src="{{ asset('user/extras/paragliding.jpg') }}" class="img-fluid img-responsive w-100" style="height: 280px;">
			</div>
			<div class="col-md-6 pl-md-3 order-2 order-md-1 pt-2">
				<div class="explain">
					Can you imagine sharing the same space with the Himalayan griffin vulture, eagles, and kites as you soar over the rivers, lakes and villages? Pokhara is among the hottest spots for Paragliding and is also one of the top five paragliding destinations in the world. The thirty minute flight will surely make you feel like a bird. You can experience unparalleled scenic grandeur as you share airspace with the Himalayas. 
				</div>
			</div>
		</div>
	</div>
	<div class="pb-5">
		<div class="heading-h2 text-center pb-3">Rafting</div>
		<div class="row">
			<div class="col-md-6 order-1 order-md-1">
				<img src="{{ asset('user/extras/rafting.jpg') }}" class="img-fluid img-responsive w-100" style="height: 280px;">
			</div>
			<div class="col-md-6 pl-md-3 order-2 order-md-2 pt-2">
				<div class="explain">
					Nepal has one of the best rafting river streams in the world. Trishuli being one of the best is just a three hours drive from the capital. The Trishuli river is the most famous river in Nepal to explore the typical cross-section of the country’s natural as well as the ethno-cultural heritage with massive adrenaline buzz on these world class white water thrills. Big waves, hefty holes and tricky chutes all go towards making an exhilarating ride to remember with a combination of grade II+ and III+ rapids with some IV+ in the post monsoon season. During this rafting expedition, you will face many famous rapids such as Snell’s nose, Teen Devi, Women delight, upset and surprise rapids. Rara Adventure will cater for all your needs while you get on with your daredevil exploits.
				</div>
			</div>
		</div>
	</div>
	<div class="pb-5">
		<div class="heading-h2 text-center pb-3">Ultra Light</div>
		<div class="row">
			<div class="col-md-6 order-1 order-md-2">
				<img src="{{ asset('user/extras/ultralight.jpg') }}" class="img-fluid img-responsive w-100" style="height: 280px;">
			</div>
			<div class="col-md-6 pl-md-3 order-2 order-md-1 pt-2">
				<div class="explain">
					Rara Adventures has partnered with Pokhara Ultra Flight to offer a breathtaking bird’s eye view of the city and surrounding areas. You will fly over Pokhara city with the primary highlights being the Fewa Lake, White Stupa, Sarangkot hill and you will get close to Mount Fishtail and Annapurna Mountain Range. The shortest flight will take you over the city of Pokhara, Phewa Lake, near Sarangkot hill, over the Buddha monastery and the south side of the city. This short flight at the speed of 50km/hr to 90km/hr will give you a panoramic view of the whole Annapurna range and Dhaulagiri range. 
				</div>
			</div>
		</div>
	</div>
	<div class="pb-5">
		<div class="heading-h2 text-center pb-3">Bungee Jumping</div>
		<div class="row">
			<div class="col-md-6 order-1 order-md-1">
				<img src="{{ asset('user/extras/bungee.jpg') }}" class="img-fluid img-responsive w-100" style="height: 280px;">
			</div>
			<div class="col-md-6 pl-md-3 order-2 order-md-2 pt-2">
				<div class="explain">
					Pokhara is already famous for adventure sports from Paragliding, Zip-flying, Ultra Flight, as well as short hiking, Trekking, Pony Trek, Stand up paddle and many more. But Bungee Jumping surely takes the crown as the king of all other adventure sports. You will probably find it on many bucket lists around the globe and rightly so. Rara Adventure will help you “take that leap”.
				</div>
			</div>
		</div>
	</div>
	<div class="pb-5">
		<div class="heading-h2 text-center pb-3">Vehicle Hire</div>
		<div class="row">
			<div class="col-md-6 order-1 order-md-2">
				<img src="{{ asset('user/extras/vehicle.jpg') }}" class="img-fluid img-responsive w-100" style="height: 280px;">
			</div>
			<div class="col-md-6 pl-md-3 order-2 order-md-1 pt-2">
				<div class="explain">
					Rara Adventures has a fleet of vehicles at its disposal. We have shuttle buses, land cruisers, coaches, jeeps and cars. We also provide drivers if you need drivers. All our vehicles are clean and comfortable. You can hire it for long term or short term.
				</div>
			</div>
		</div>
	</div>
	<div class="pb-5">
		<div class="heading-h2 text-center pb-3">Mountain Flight</div>
		<div class="row">
			<div class="col-md-6 order-1 order-md-1">
				<img src="{{ asset('user/extras/flight.jpg') }}" class="img-fluid img-responsive w-100" style="height: 280px;">
			</div>
			<div class="col-md-6 pl-md-3 order-2 order-md-2 pt-2">
				<div class="explain">
					Mountain flight in Nepal is a much easier way to see the Himalayan peaks including the Everest. We offer various mountain flights in the mornings at all times except in the monsoon seasons i.e June, July & August. Most flights fly along the Himalayan range and also beyond for passengers to get a good view of the Himalayan range. All flights take off from Kathmandu airport and heads eastward and the peaks come into view almost immediately. Rara Adventure will pick you up and provide you with all amenities for a mountain flight that you will not forget.
				</div>
			</div>
		</div>
	</div>
	<div class="pb-5">
		<div class="heading-h2 text-center pb-3">Bird Watching</div>
		<div class="row">
			<div class="col-md-6 order-1 order-md-2">
				<img src="{{ asset('user/extras/bird.jpg') }}" class="img-fluid img-responsive w-100" style="height: 280px;">
			</div>
			<div class="col-md-6 pl-md-3 order-2 order-md-1 pt-2">
				<div class="explain">
					Nepal is a bird watchers' paradise with national parks and conservation areas making up a large part of its territory. More than 850 species of birds are found in Nepal, and surprisingly a good number of these birds can be spotted in and around the Kathmandu Valley alone.  Bird watching is possible in any corner of Nepal.
					Koshi Tappu, Chitwan and Bardiya are the main sites in the plains. While in the mountainous region, the Everest and Annapurna regions boast other well-known species of birds. The hills around Kathmandu valley especially Nagarjun, Godavari and Phulchowki are popular bird watching areas and the Taudaha Lake on the way to Dakshinkali is ideal for watching migratory water fowl during the winter months. In the higher Himalayan regions are found the raptors and birds of prey of which there are numerous species. Rara Adventures organize regular bird watching tours. Join us on our next bird watching adventure. 
				</div>
			</div>
		</div>
	</div>
</div>

@endsection