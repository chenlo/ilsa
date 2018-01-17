@extends('layouts.app')

@section('content')

<div class="banner">
	<div class="bread-wrap">
		<div class="container no-height">
			<div class="row">
				<div class="col-sm-12">
					<ol class="breadcrumb">
						<li>Estás en:</li>
						<li>Miembros</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Begin main page content -->
<div class="content" id="main_content">
	<div class="container">
		<h1>Miembros del grupo de investigación</h1>
		@foreach($collectives as $indexCollective => $collective)
			<h2>{!! $collective->title !!}</h2>
			<?php
				$numOfCols = 4;
				$bootstrapColWidth = 12 / $numOfCols;
			?>
			<div class="row">
				@foreach($collective->users as $indexUser => $user)
					<div class="col-md-<?php echo $bootstrapColWidth; ?>">
						<div class="thumbnail">
			                <a href="#modal-user-{{ $indexCollective.'-'.$indexUser }}" rel="modal:open">
			                	<img src="{{ asset('storage/'.$user->avatar) }}" class="">
			                </a>	
			                <div class="caption">
			                	<a href="#modal-user-{{ $indexCollective.'-'.$indexUser }}" rel="modal:open">
			                     	<h4 class="">{!! $user->name !!}</h4>
								</a>
			                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, culpa itaque odio similique suscipit</p>
			                    <a href="#modal-user-{{ $indexCollective.'-'.$indexUser }}" rel="modal:open" class="btn btn-default btn-xs" role="button">Ver ficha completa</a>
			                </div>
			            </div>
					</div>
					<div class="modal" id="modal-user-{{ $indexCollective.'-'.$indexUser }}">
						<div class="lib-item" data-category="view">
				            <div class="lib-panel">
				                <div class="row box-shadow">
			                		<div class="col-md-12">
				                        <img src="{{ 'storage/'.$user->avatar }}" class="lib-img-show img-responsive">
				                    </div>	
				                    <div class="col-md-12">
				                        <div class="lib-row lib-header">
				                            <h3></h3>
				                            <div class="lib-header-seperator"></div>
				                        </div>
				                        <div class="lib-row lib-desc">
											<strong>Biografía</strong>
				                        	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quis amet dicta, itaque ea beatae eos quasi a maiores rem nostrum obcaecati tempore! Temporibus quam, eligendi facere exercitationem vel. Deserunt.</p>
				                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quis amet dicta, itaque ea beatae eos quasi a maiores rem nostrum obcae.</p>
				                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quis amet dicta, itaque ea beatae eos quasi a maiores rem nostrum obcae.</p>
				                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quis amet dicta, itaque ea beatae eos quasi a maiores rem nostrum obcae.</p>
				                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quis amet dicta, itaque ea beatae eos quasi a maiores rem nostrum obcae.</p>
				                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quis amet dicta, itaque ea beatae eos quasi a maiores rem nostrum obcae.</p>
				                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quis amet dicta, itaque ea beatae eos quasi a maiores rem nostrum obcae.</p>
				                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quis amet dicta, itaque ea beatae eos quasi a maiores rem nostrum obcae.</p>
				                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quis amet dicta, itaque ea beatae eos quasi a maiores rem nostrum obcae.</p>
				                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quis amet dicta, itaque ea beatae eos quasi a maiores rem nostrum obcae.</p>
				                            <strong>URL: </strong><a href="">http://test.ucm.es/user</a>
				                        </div>
				                    </div>
			                	</div>
							</div>
						</div>
						<a href="#" rel="modal:close">Cerrar</a>
					</div>
				@endforeach
			</div>
		@endforeach
	</div>
</div>
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
@endsection