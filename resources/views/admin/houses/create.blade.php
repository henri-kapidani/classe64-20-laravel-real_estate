@extends('admin.templates.base')

@section('mainContent')
    <h1>Insert new house</h1>

    <form action="{{ route('houses.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label class="form-label" for="city">City</label>
            <input class="form-control" type="text" name="city" id="city">
            @error('city')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="price">Price</label>
            <input class="form-control" type="text" name="price" id="price">
            @error('price')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="street">Street</label>
            <input class="form-control" type="text" name="street" id="street">
            @error('street')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="is_rent">Is rent</label>
            <input class="form-control" type="text" name="is_rent" id="is_rent">
            @error('is_rent')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="free_from">Free from</label>
            <input class="form-control" type="date" name="free_from" id="free_from">
            @error('free_from')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="rooms">Rooms</label>
            <input class="form-control" type="number" name="rooms" id="rooms">
            @error('rooms')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="surface">Surface</label>
            <input class="form-control" type="number" name="surface" id="surface" step="0.01">
            @error('surface')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
