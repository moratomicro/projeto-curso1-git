@extends('template.template_header')

@extends('template.template_body')

@section('content')
    <h1>AGENDA MENSAL</h1>
    <div class="form-group">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Paciente</th>
                <th scope="col">Data Nasc.</th>
                <th scope="col">Muncípio</th>
                <th scope="col">Cód. SUS</th>
                <th scope="col">Procedimento</th>
                <th scope="col">Valor</th>
                <th scope="col">Data Agendada</th>
                <th scope="col">Horário</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
            <tr>
                <th scope="row">{{ $result->id }}</th>
                <td>{{ $result->paciente }}</td>
                <td>{{ $result->dataNasc }}</td>
                <td>{{ $result->municipio }}</td>
                <td>{{ $result->codSus }}</td>
                <td>{{ $result->procedimento }}</td>
                <td>{{ $result->valor }}</td>
                <td>{{ $result->dataExame }}</td>
                <td>{{ $result->horario }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    {{ $results->links() }}   
@stop

@extends('template.template_footer')