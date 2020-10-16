<body>
    <header>
        <svg>
            <img src="{{ asset('/img/logo-site.png') }}" class= "logo" />        
            <section class="menu1">
                <ul>
                    <li><a href="{{ asset('/')}}"            class="btn btn-primary mb-3">Home</a></li>
                    <li><a href="{{ asset('/exames')}}"      class="btn btn-primary mb-3">Exames_Ofertados</a></li>
                    <li><a href="{{ asset('/listaMensal')}}" class="btn btn-primary mb-3">Agendas</a></li>
                    <li><a href="{{ asset('/novo') }}"       class="btn btn-primary mb-3">Agendar_Paciente</a></li>
                    <li><a href="#"                          class="btn btn-primary mb-3">Sobre</a></li>            
                </ul>
            </section>
        </svg>
    </header>

    <section  id="rolagem">
        @yield('content')
    </section>   