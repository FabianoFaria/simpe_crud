@extends('layout')

	@section('content')


		<div>
			<p>
				Listas de tarefas do CRUD simples
			</p>

			<ol>
				<li><a href="{{ route('registrar') }}">Cadastrar</a></li>
			</ol>

		</div>

		<div>
			<p>
				Listas de produtos cadastrados no Crud.
			</p>

			<table class="table">
				 <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Nome</th>
				      <th scope="col">Descrição</th>
				      <th scope="col">Preço</th>
				      <th scope="col">Quantidade</th>
				      <th scope="col">Editar</th>
				      <th scope="col">Excluir</th>
				    </tr>
				</thead>
				<tbody>
					@if($produtos->isEmpty())
					    <h4>{{ __('Não há registros para mostrar') }}</h4>
					@else

						@foreach($produtos as $produto)

							<tr>
						      <td>{{ $produto->id }}</td>
						      <td>{{ $produto->nome_produto }}</td>
						      <td>{{ $produto->descricao }}</td>
						      <td>{{ $produto->preco }}</td>
						      <td>{{ $produto->quantidade }}</td>
						      <td> <a href="{{ route('atualizar', $produto->id) }}">Editar</a></td>
						      <td> <a href="{{ route('remover', $produto->id) }}">Remover</a></td>
						    </tr>


						@endforeach

					@endif
				</tbody>
			</table>
		</div>

	@endsection