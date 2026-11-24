<x-App>

    <x-slot:title>{{ $title }}</x-slot>


    <form method="POST" action="{{ route('lecturer.update',$lecturer) }}">
        @csrf
        @method('put')



        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name',$lecturer ->name) }}">

            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">
            <label for="departement_id" class="form-label">departement</label>

            <select class="form-select @error('departement_id') is-invalid @enderror"
                id="departement_id" name="departement_id"
                <option value="">--choose departement--</option>
                @foreach ($departements as $departement)
                    <option value="{{ $departement->id }}" @selected(old('departement_id',$lecturer ->name) == $departement->id)>
                        {{ $departement->name }}
                    </option>
                @endforeach
            </select>


            @error('departement_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror


        </div>

        <a class="btn btn-warning" href="{{ route('lecturer.index') }}" role="button">back</a>
        <button type="submit" class="btn-solid theme-primary">Submit</button>
    </form>

</x-App>
