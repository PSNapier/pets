<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@vite('resources/css/app.css')

	<title>Pet Care</title>
	<link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🐶</text></svg>">
</head>

<body class="bg-stone-100 text-stone-900">
	<header>
		<div class="h-6 bg-[#795435]"></div>
		<div class="mt-1 h-2 bg-[#DDB37D]"></div>
	</header>

	<div class="m-6 grid grid-cols-1 text-xl md:mx-auto md:mt-0 md:grid-cols-2 max-w-[1000px]">
		<section id="services-prices" class="md:m-auto md:pt-6 md:w-5/6 col-span-2 md:col-span-1 md:flex md:items-center">
			<ul>
				<li class="font-semibold text-2xl">Dog Walking & Pet Care</li>
				<li class="mt-2">🐕 <span class="font-semibold">Dog Walking</span> - $13 per 20 minutes</li>
				<ul class="ml-6 italic">
					<li>- +$5 for each additional dog</li>
					<li>- enquire for price of remedial training walks</li>
				</ul>
				<li class="mt-2">🐶 <span class="font-semibold">Check-Ins</span> - $10 per visit</li>
				<li class="mt-2">🐹 <span class="font-semibold">Small-Animal Sitting</span> - $13 per day</li>
				<li class="mt-2">🐩 <span class="font-semibold">Nail Clipping</span> - $13</li>
				<ul class="ml-6 italic">
					<li>- enquire for price of remedial training nail clipping</li>
				</ul>
			</ul>
		</section>

		<section class="col-span-2 mt-4 md:col-span-1">
			<img src="images/henry-lai-h0kQJ5wi4gA-unsplash.jpg" class="m-auto md:p-4 w-full rounded-full" style="filter: drop-shadow(3px 5px 5px #00000060)"
" />
		</section>

		<section id="about-me" class="col-span-2 mt-6 md:mx-4">
			<h1 class="font-semibold">Experience:</h1>
			<p>Animal aficionado, dog-owner of 20+ years. Studied
			positive-reinforcement and pressure-release training methods.
			Childhood 4H dog-club member, passed canine good citizen class,
			obedience and agility classes. Experience with dogs, equines,
			cats, reptiles (snakes and lizards) and small-animals (hamsters and rabbits).</p>
		</section>

		<section id="contact-me" class="col-span-2 mt-6 pb-6 text-center">
			<p class="italic text-md">Currently serving my neighbors in the Rancho Sienna and Morning Star subdivisions.</p>
			<p class="mt-2 font-semibold text-2xl">Email me at: <a href="mailto:abaturestudio@gmail.com" class="underline transition hover:scale-150">AbatureStudio@gmail.com</a></p>
		</section>
	</div>
</body>

</html>