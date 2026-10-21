<x-App>

    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-primary mb-3" href="{{ route('student.create') }}" role="button">create student</a>

    <table class="table table-bordered border-primary table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">nim</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($students as $student )
                
            
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $student->name }}</td>
                <td>{{ $student->nim }}</td>
            </tr>
            
            @endforeach

        </tbody>
    </table>

</x-App>
