<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo03" aria-expaded="false" aria-label="Togglenavigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="{{ url('Beranda')}}">Beranda</a>

	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active">
				<a class="nav-link" href="{{ url('Beranda')}}">Home<span class="sr-only">(curent)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ url('Tentang')}}">About</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</nav>