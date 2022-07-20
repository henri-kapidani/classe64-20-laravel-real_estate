@extends('admin.templates.base')

@section('mainContent')
    <h1>Insert new house</h1>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('houses.update', ['house' => $house]) }}" method="post">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label class="form-label" for="city">City</label>
            <input class="form-control" type="text" name="city" id="city" value="{{ old('city', $house->city) }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="price">Price</label>
            <input class="form-control" type="text" name="price" id="price" value="{{ old('price', $house->price) }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="street">Street</label>
            <input class="form-control" type="text" name="street" id="street" value="{{ old('street', $house->street) }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="is_rent">Is rent</label>
            <input class="form-control" type="text" name="is_rent" id="is_rent" value="{{ old('is_rent', $house->is_rent) }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="free_from">Free from</label>
            <input class="form-control" type="date" name="free_from" id="free_from" value="{{ old('free_from', $house->free_from) }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="rooms">Rooms</label>
            <input class="form-control" type="number" name="rooms" id="rooms" value="{{ old('rooms', $house->rooms) }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="surface">Surface</label>
            <input class="form-control" type="number" name="surface" id="surface" value="{{ old('surface', $house->surface) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('houses.show', ['house' => $house->id]) }}" class="btn btn-primary">View</a>
    </form>
@endsection
