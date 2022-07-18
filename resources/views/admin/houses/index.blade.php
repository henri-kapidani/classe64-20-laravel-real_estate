@extends('admin.templates.base')

@section('mainContent')
    <main>
        <table>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
