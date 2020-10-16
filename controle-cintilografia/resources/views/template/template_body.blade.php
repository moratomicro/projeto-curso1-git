<body>
    <div class="form-group">
        <header>
            <svg>
                <img src="{{ asset('/img/logo-site.png') }}" class= "logo" />        
                <section class="menu1">
                    <ul>
                        <li><a href="{{asset('/')}}" class="btn btn-primary mb-3">Home</a></li>
                        <li><a href="{{ asset('/exames')}}" class="btn btn-primary mb-3">Exames_Ofertados</a></li>
                        <li><a href="{{asset('/agenda')}}" class="btn btn-primary mb-3">Agendas</a></li>
                        <li><a href="{{asset('/agenda/create')}}" class="btn btn-primary mb-3">Agendar_Paciente</a></li>
                        <li><a href="{{asset('/agenda/edit')}}" class="btn btn-primary mb-3">Edit</a></li>            
                    </ul>
                </section>
            </svg>
        </header>
    </div>
    <div class="form-group">
        <section>
            @yield('content')
        </section>
    </div>