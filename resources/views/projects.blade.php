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
							<li><a href="/proyectos">Proyectos</a></li>
							<li>Proyectos de {!! $line->title !!}</li>
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
					Proyectos de investigación
					@isset($line)
						de {!! $line->title !!}
					@endisset
				</h1>
				@forelse($projects as $project)
				<div class="row">
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">{!! $project->title !!}</h3>
					  </div>
					  <div class="panel-body">
					    <p><strong>Descripción: </strong> {!! $project->description !!}</p>
						<p><strong>Nº referencia: </strong> {!! $project->reference_num !!}</p>
						<p><strong>Entidad financiadora: </strong>{!! $project->funding_entity !!}</p> 
						<p><strong>Entidades participantes: </strong>{!! $project->participating_entities !!}</p>
						<p><strong>Duración: </strong>{!! $project->duration !!}</p>
 						<p><strong>Director o investigador principal:</strong> {!! $project->director !!}</p>
 						<p><strong>Número de investigadores: </strong>{!! $project->researcher_num !!}</p>
 						<p>
 							<strong>Líneas de investigación: </strong> 
 							@foreach($project->lines as $line) 
 								{{ $loop->first ? '' : ', ' }}
 								{!! $line->title !!} 
 							@endforeach
 						</p>
 						@isset($project->developments)
 						<p class="projects-resources-buttons">
						  <button class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Desarrollos</i>
						  </button>
						</p>
						<div class="row">
						  <div class="col-md-12">
						    <div class="collapse multi-collapse" id="multiCollapseExample1">
						      <div class="card card-body">
						      	<h2>Desarrollos</h2>
						      	@foreach($project->developments as $development) 
						      		<div class="panel">
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
						      	@endforeach
						      	</ul>
						      </div>
						    </div>
						  </div>
						</div>
						@endisset		
					</div>
				</div>
				@empty
					<div class="well">
						Esta línea de investigación no tiene proyectos asociados.
					</div>
				@endforelse
			</div>
		</div>
	</div>
</div>

@endsection