<x-layout>

    <x-header title="Dettaglio"/>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <img src="/img/IMG_20221119_145141.jpg" alt="">
            </div>
            <div class="col-6 d-flex justify-content-center flex-column">
                <h2>{{$student['name']}}</h2>
                <h2>{{$student['surname']}}</h2>
                <a href="{{route('homepage')}}" class="btn btn-danger">Torna alla Home</a>
            </div>
        </div>
    </div>

</x-layout>