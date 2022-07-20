@extends('admin.templates.base')

@section('mainContent')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>city</th>
                <th>price</th>
                {{-- <th>street</th> --}}
                <th>is_rent</th>
                <th>free_from</th>
                <th>rooms</th>
                <th>surface</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($houses as $house)
                <tr data-id="{{ $house->id }}">
                    <td>{{ $house->id }}</td>
                    <td>{{ $house->city }}</td>
                    <td>{{ $house->price }}</td>
                    {{-- <td>{{ $house->street }}</td> --}}
                    <td>{{ $house->is_rent }}</td>
                    <td>{{ $house->free_from }}</td>
                    <td>{{ $house->rooms }}</td>
                    <td>{{ $house->surface }}</td>
                    <td>
                        <a href="{{ route('houses.show', ['house' => $house]) }}" class="btn btn-primary">View</a>
                    </td>
                    <td>
                        <a href="{{ route('houses.edit', ['house' => $house]) }}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <button class="btn btn-danger js-delete">Delete</button>
                        {{-- <form action="{{ route('houses.destroy', ['house' => $house]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger js-delete">Delete</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $houses->links() }}

    <section class="overlay d-none">
        <form class="popup" data-action="{{ route('houses.destroy', ['house' => '*****']) }}" method="post">
            @csrf
            @method('DELETE')

            <h1>Sei sicuro?</h1>
            <button type="submit" class="btn btn-warning js-yes">Yes</button>
            <button type="button" class="btn btn-danger js-no">No</button>
        </form>
    </section>
@endsection
