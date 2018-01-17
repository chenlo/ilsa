@extends('layouts.app')

@section('content')

<div class="banner">
	<div class="bread-wrap">
		<div class="container no-height">
			<div class="row">
				<div class="col-sm-12">
					<ol class="breadcrumb">
						<li>Estás en:</li>
						@if(empty($line))
							<li>Proyectos</li>
						@else
							<li><a href="/desarrollos">Desarrollos</a></li>
							<li>Desarrollos de {!! $line->title !!}</li>
						@endif
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Begin main page content -->
<div class="content" id="main_content">
	<div class="container">
		<div class="row pad-bottom">
			<div class="col-md-10 col-md-offset-1">
				<h1>
					Desarrollos
					@isset($line)
						de {!! $line->title !!}
					@endisset
				</h1>
				@forelse($developments as $development)
				<div class="row">
					<div class="panel panel-default">
					  <div class="row">
	                        <div class="col-md-3">
	                            <img src="{{ asset('storage/'.$development->logo) }}" class="img-responsive">
	                        </div>
	                        <div class="col-md-9">
	                        	<h3>{!! $development->title !!}</h3>
	                        	<p>{!! $development->description !!}</p>
	                        	<p>
	                        		<a href="{!! $development->url !!}" target="_blank">
	                        			Enlace a {!! $development->title !!}
	                        		</a>
	                        	</p>
	                        </div>
	                    </div>
					</div>
				</div>
				@empty
					<div class="well">
						Esta línea de investigación no tiene desarrollos asociados.
					</div>
				@endforelse
			</div>
		</div>
	</div>
</div>

@endsection