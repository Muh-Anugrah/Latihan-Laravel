<x-App>

    <x-slot:title>{{ $title }}</x-slot>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a class="btn btn-primary mb-3" href="{{ route('departement.create') }}" role="button">create departement</a>

    <table id="example" class="table table-bordered border-primary table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($departements as $departement)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $departement->name }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('departement.show', $departement) }}" role="button">Detail</a>
                        <a class="btn btn-warning" href="{{ route('departement.edit', $departement) }}" role="button">Edit</a>

                        <form method="POST" action="{{ route('departement.destroy', $departement) }}"class="d-inline">
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
