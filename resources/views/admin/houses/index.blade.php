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
                <tr>
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
                        <form action="{{ route('houses.destroy', ['house' => $house]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
