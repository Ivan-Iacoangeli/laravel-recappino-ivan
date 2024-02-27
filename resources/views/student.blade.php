<x-layout>

    <x-header title="Alcuni dei ragazzi"/>

    <div class="containner">
        <div class="row justify-content-center">
            @foreach ($students as $student)
                <div class="col-12 col-md-6 d-flex justify-content-center mt-5 mb-5">
                    <x-card
                    name="{{$student['name']}}"
                    link="{{route('student.detail' , ['name' => $student['name']])}}"
                    />
                </div>
            @endforeach
        </div>
    </div>

</x-layout>