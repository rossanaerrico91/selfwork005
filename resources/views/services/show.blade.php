<x-service-layout>

    {{--@section('css')
        <style>a{font-size:1vh;}</style>
    @endsection--}}

    <x-slot:title>
        {{ $service['name'] }}
    </x-slot:title>

    <div class="row">
        <div class="col-md-3">
            <img src="/img/{{ $service['uri'] }}.jpeg" class="img-thumbnail" alt="Sviluppo Siti Web">
        </div>

        <div class="col-md-9">
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris augue ex, mattis nec
                elit
                quis, lacinia cursus justo. Phasellus erat lacus, tempor ut tristique non, fermentum vel
                nibh. Ut vitae dui quis tellus efficitur pulvinar. Morbi sed mattis ex. Vestibulum
                pretium
                blandit arcu vitae aliquet. Donec eget tristique metus. Morbi lacinia vehicula justo, a
                varius velit eleifend id. Etiam quis urna congue, elementum est sit amet, ultrices
                lectus.
                Maecenas consectetur faucibus lectus nec pharetra. Fusce vitae lacus nec diam tempor
                tempus
                lacinia sed justo. Phasellus purus quam, auctor mollis orci sit amet, suscipit porta
                ligula.</p>
                <h4>Tempo di realizzazione: {{$service['tempo_di_realizzazione']}}</h4>
                <h4 class="mt-4">Prezzo in Euro: {{number_format($service['costo'],2)}}</h4>
        </div>
    </div>
</x-service-layout>
