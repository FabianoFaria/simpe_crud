
<div class="form-group required">
  {{ Form::label('nome_produto', __('Nome do produto'), ['for' => 'nome_produto'])}}
  {{ Form::text('nome_produto', old('nome_produto'), ['id' => 'nome_produto', 'class' => 'form-control', 'maxlength' => 64, 'dusk' => 'nome_produto' ])}}
  <div class="invalid-feedback errors-name show">{{ $errors->first('name') }}</div>
</div>

<div class="form-group required">
  {{ Form::label('descricao', __('Descrição'), ['for' => 'descricao'])}}
  {{ Form::text('descricao', old('descricao'), ['id' => 'descricao', 'class' => 'form-control', 'maxlength' => 64 , 'dusk' => 'descricao'])}}
  <div class="invalid-feedback errors-email show">{{ $errors->first('email') }}</div>
</div>

<div class="form-group required">
  {{ Form::label('preco', __('Preço'), ['for' => 'preco'])}}
  {{ Form::text('preco', old('preco'), ['id' => 'preco', 'class' => 'form-control', 'maxlength' => 64 , 'dusk' => 'preco'])}}
  <div class="invalid-feedback errors-email show">{{ $errors->first('preco') }}</div>
</div>

<div class="form-group required">
  {{ Form::label('quantidade', __('Quantidade'), ['for' => 'quantidade'])}}
  {{ Form::text('quantidade', old('quantidade'), ['id' => 'quantidade', 'class' => 'form-control', 'maxlength' => 64 , 'dusk' => 'quantidade'])}}
  <div class="invalid-feedback errors-email show">{{ $errors->first('quantidade') }}</div>
</div>
