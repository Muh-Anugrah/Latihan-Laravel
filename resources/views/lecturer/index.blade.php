<x-App>

    <x-slot:title>{{ $title }}</x-slot>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a class="btn btn-primary mb-3" href="{{ route('lecturer.create') }}" role="button">create lecturer</a>

    <table class="table table-bordered border-primary table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">departement</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($lecturers as $lecturer)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $lecturer->name }}</td>
                    <td>{{ $lecturer->departement->name }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('lecturer.edit', $lecturer) }}" role="button">Edit</a>

                        <form method="POST" action="{{ route('lecturer.destroy', $lecturer) }}"class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</x-App>
