@extends('template.template_header')

@extends('template.template_body')

@section('content')
    <h1>CADASTRO DE EXAMES</h1>
    <form action="{{ route('create') }}" method="POST">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="paciente">Paciente</label>
                <input type="text" class="form-control" id="paciente" placeholder="Nome do Paciente">
            </div>
            <div class="form-group col-md-2">
                <label for="dataNasc">Data Nasc.</label>
                <input type="date" class="form-control" id="dataNasc" placeholder="Data de Nascimento do Paciente">
            </div>
            <div class="form-group col-md-3">
                <label for="municipio">Município</label>
                <input type="text" class="form-control" id="municipio" placeholder="Município do Paciente">
            </div>
        </div>    
        
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="codSus">Código SUS</label>
                <input type="text" class="form-control" id="codSus" placeholder="Código SUS do Tipo do Exame">
            </div>
            <div class="form-group col-md-2">
                <label for="dataExame">Data do Exame</label>
                <input type="date" class="form-control" id="dataExame" placeholder="Dia que o paciente fará o exame">
            </div>

            <div class="form-group col-md-2">
                <label for="horario">Horário</label>
                <input type="time" class="form-control" id="horario" placeholder="Horário que o paciente fará o exame">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>    
@stop

