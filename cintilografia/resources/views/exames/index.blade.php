@extends('template.header')

@extends('template.template')

@section('content')        
    <div>
        <div>
            <h3>Exames</h3>                
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Código</th>
                        <th scope="col">Procedimento</th>
                        <th scope="col">Grupo</th>
                        <th scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $result)
                        <tr>
                            <th scope="row">{{$result->id}}</th>
                            <td>{{$result->codigo}}</td>
                            <td>{{$result->procedimento}}</td>
                            <td>{{$result->grupo}}</td>
                            <td>{{$result->valor}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $results->links() !!}
        </div>            
    </div>    
@stop

@extends('template.footer')