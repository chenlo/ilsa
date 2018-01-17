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
							<li>Publicaciones</li>
						@else
							<li><a href="/publicaciones">Publicaciones</a></li>
							<li>Publicaciones de {!! $line->title !!}</li>
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
		<div class="row pad-bottom-lg">
			<div class="col-md-10 col-md-offset-1">
				<h1>
					Publicaciones
				</h1>
				<div class="input-group">
	                <div class="input-group-btn search-panel">
	                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	                    	<span id="search_concept">Buscar por </span><i class="fa fa-caret-down" aria-hidden="true"></i>
	                    </button>
	                    <ul class="dropdown-menu" role="menu">
	                      <li><a href="#contains">Por año</a></li>
	                      <li><a href="#its_equal">Por línea de investigación</a></li>
	                      <li><a href="#greather_than">Por proyecto</a></li>
	                      <li><a href="#less_than">Por desarrollo</a></li>
	                      <li><a href="#less_than">Por autor</a></li>
	                    </ul>
	                </div>
	                <input type="hidden" name="search_param" value="all" id="search_param">         
	                <input type="text" class="form-control" name="x" placeholder="Buscar publicación">
	                <span class="input-group-btn">
	                    <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
	                </span>
	            </div>
			</div>
		</div>
	</div>
</div>

@endsection