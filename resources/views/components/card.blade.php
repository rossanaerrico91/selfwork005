@section('css')
    {{ $css ?? '' }}
@endsection

<h1 class="text-center mb-4">{{ $title }}</h1>
<!-- Anteprima Portfolio -->
<section id="portfolio" class="bg-light">
    <div class="container">


        <div class="card">

            <div class="card-body">


                <div class="row">
                    <div class="col-md-4">
                        <img src="/img/{{ $service['uri'] }}.jpeg" class="img-thumbnail" alt="Sviluppo Siti Web">
                    </div>

                    <div class="col-md-8">
                        <h3>{{ $service['name'] }}</h3>
                        <p>{{ $slot }}</p>
                        <h4>Tempo di realizzazione: {{ $service['tempo_di_realizzazione'] }}</h4>
                        <h4 class="mt-4">Prezzo in Euro: {{ number_format($service['costo'], 2) }}</h4>
                    </div>
                </div>


            </div>
        </div>

    </div>
</section>
