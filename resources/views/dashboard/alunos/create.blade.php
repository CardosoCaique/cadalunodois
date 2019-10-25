@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar novo Aluno</div>
                <div class="card-body">
                	<div class="form-group">
                		{{ Form::open(['route' => 'aluno.create', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) }}
			                <div class="form-group">
			                    <div class="form-row">
			                        <div class="col-md-6">
			                            <div class="form-group">
			                                {{ Form::label('nome', 'Nome do aluno') }}
			                                {{ Form::text('nome', 'old'('nome'), ['class' => 'form-control', 'placeholder' => 'Insira aqui o nome do aluno', 'required', 'autofocus']) }}
			                            </div>
			                        </div>
			                	</div>
			                	<div class="form-row">
			                        <div class="col-md-6">
			                            <div class="form-group">
			                                {{ Form::label('cpf', 'CPF do aluno') }}
			                                {{ Form::text('cpf', 'old'('cpf'), ['class' => 'form-control cpf', 'placeholder' => 'Insira aqui o CPF do aluno', 'required', 'autofocus',]) }}
			                            </div>
			                        </div>
			                		<div class="col-md-6">
			                			<div class="form-group">
			                                {{ Form::label('data_nascimento', 'Data de Nascimento') }}
			                                {{ Form::date('data_nascimento', 'old'('data_nascimento'), ['class' => 'form-control', 'required', 'autofocus']) }}
			                            </div>
			                		</div>
			                	</div>
			                    <hr>
			                    <div class="form-row">
			                    	<div class="col-md-12">
			                    		{{ Form::submit('Salvar', ['class' => 'btn btn-primary btn-block']) }}
			                    	</div>
			                    </div>
			                </div>
                		{{ Form::close() }}
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection