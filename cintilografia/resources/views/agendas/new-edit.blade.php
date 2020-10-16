@extends('template.header')

@extends('template.template')

@section('content')
    <div class="container">
        <form action="{{ route('agendar_paciente') }}" method="POST">
            @csrf
            <div class="form-group container">
                <div class="row">
                    <div class="col-7">
                        <label for="paciente">Paciente:</label>
                        <input type="text" name="paciente" class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="dataNasc">Data De Nascimento:</label>
                        <input type="date" name="dataNasc" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="municipio">Município:</label>
                <select name="municipio" id="municipio">
                    <option value="municipio">Selecione o Município</option>
                    <option value="municipio">Brazópolis</option>
                    <option value="municipio">Conceição das Pedras</option>
                    <option value="municipio">Consolação</option>
                    <option value="municipio">Delfim Moreira</option>
                    <option value="municipio">Gonçalves</option>
                    <option value="municipio">Itajubá</option>
                    <option value="municipio">Maria da Fé</option>
                    <option value="municipio">Marmelópolis</option>
                    <option value="municipio">Paraisópolis</option>
                    <option value="municipio">Pedralva</option>
                    <option value="municipio">Piranguçu</option>
                    <option value="municipio">Piranguinho</option>
                    <option value="municipio">São José do Alegre</option>
                    <option value="municipio">Sapucaí Mirim</option>
                    <option value="municipio">Wenceslau Bráz</option>
                </select>
            </div>
            <div class="form-group">
                <label for="codSus">Procedimento:</label>
                <select name="codSus">
                    <option>Selecione o Exame</option>

                    @foreach ($results as $result)
                    <option value="{{$result->id}}">
                        {{ $result->procedimento }}
                    </option>
                    @endforeach
                </select>                
            </div>
            <div class="form-group container">
                <div class="row">
                    <div class="col-4">
                    <label for="dataExame">Data do Exame:</label>
                    <input type="date" name="dataExame" class="form-control">
                    </div>
                    <div class="col-4">
                    <label for="horario">Horário:</label>
                    <input type="time" name="horario" class="form-control">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">Salvar</button>
    </form>
@stop

@extends('template.footer')