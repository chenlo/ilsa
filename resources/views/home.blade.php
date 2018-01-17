@extends('layouts.app')

@section('content')

<div class="banner home-1" data-type="background" data-speed="4">
	<div class="banner-interior">
		<div class="container tall">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<h1>{{ setting('site.title') }}</h1>
					<p class="lead">{{ setting('site.subtitle') }}</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Begin main page content -->
<div class="content" id="main_content">
	<div class="container">
		
		<!-- Secondary headline -->
		<div class="row pad-top-sm pad-bottom line-bottom">
			<div class="col-md-12 text-center lead">
				{!! setting('site.description') !!}
			</div>
		</div>

		<div class="row pad-bottom">
			<div class="col-md-7">
				<h2>Líneas de investigación</h2>
				@foreach($lines as $line)
					<h3>{!! $line->title !!}</h3>
					<div class="row">
						@isset($line->image)
							<div class="col-md-3">
								<img src="{{ asset('storage/'.$line->image) }}" alt="" class="img-responsive img-line">
							</div>
						@endisset
						@if(empty($line->image))
							<div class="col-md-12">
						@else
							<div class="col-md-9">
						@endif
							<p>{!! $line->description !!}</p>
							<a href="{{ url('/proyectos/linea-investigacion/'.$line->id )}}" class="btn btn-primary">Proyectos</a>
							<a href="{{ url('/desarrollos/linea-investigacion/'.$line->id )}}" class="btn btn-primary">Desarrollos</a>
							<a href="{{ url('/publicaciones')}}" class="btn btn-primary">Publicaciones</a>
						</div>
					</div>
					<hr />
				@endforeach
			</div>

			<div class="col-md-4 col-md-offset-1">
				<a class="twitter-timeline" data-height="1000" href="{{ setting('site.twitter_timeline_url') }}">National Park Tweets - Curated tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
		</div>
	</div>
</div>

@endsection