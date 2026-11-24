<x-App>

    <x-slot:title>{{ $title }}</x-slot>


    <a class="btn btn-warning mb-3" href="{{ route('departement.index') }}" role="button">
        back to departement
    </a>


    <ul class="list-group">

        @foreach ($departement->lecturers as $lecturer )
            
        <li class="list-group-item">{{ $lecturer->name }}</li>
        @endforeach


    </ul>


</x-App>
