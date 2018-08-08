@extends('layout')

	@section('content')


		
		<div class="row">
		    <div class="col-12 col-md-4">
		      <h1 class="page-title">{{ __('Editar produto') }}</h1>
		      <p>{{ __('Preencha o formulário para editar o produto.') }}</p>
		      <a href="{{ route('home') }}" class="btn btn-secondary">{{ __('Voltar') }}</a>
		    </div>
		    <div class="col-12 col-md-8">
		       {{ Form::model($produto, ['route' => ['salvar_atualizar', $produto->id], 'id' => 'form-edit', 'files' => 'true', 'method' => 'PUT']) }}
		        @include('form')
		        {{ Form::submit(__('Atualizar'), ['class' => 'btn btn-dark', 'dusk' => 'submit']) }}
		      	{{ Form::close() }}
		    </div>
		 </div>


	@endsection
