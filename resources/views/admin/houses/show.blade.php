@extends('admin.templates.base')

@section('mainContent')
    <h1>Bellissima casa con id {{ $house->id }}</h1>

    <table>
        <thead>
            <tr>
                <th>Campo</th>
                <th>Valore</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($house->toArray() as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
@endsection
