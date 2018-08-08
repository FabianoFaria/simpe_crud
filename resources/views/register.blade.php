@extends('layout')

	@section('content')


		
		<div class="row">
		    <div class="col-12 col-md-4">
		      <h1 class="page-title">{{ __('Novo produto') }}</h1>
		      <p>{{ __('Preencha o formulário para cadastrar o novo produto.') }}</p>
		      <a href="{{ route('home') }}" class="btn btn-secondary">{{ __('Voltar') }}</a>
		    </div>
		    <div class="col-12 col-md-8">
		      {{ Form::open(['route' => 'salvar', 'id' => 'form-create', 'files' => 'true',]) }}
		        @include('form')
		        {{ Form::submit(__('Cadastrar'), ['class' => 'btn btn-dark', 'dusk' => 'submit']) }}
		      {{ Form::close() }}
		    </div>
		 </div>


	@endsection





