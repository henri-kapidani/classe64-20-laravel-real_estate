@extends('admin.templates.base')

@section('mainContent')
    <h1>Insert new house</h1>

    <form action="{{ route('houses.store') }}" method="post">
        @csrf
        <div>
            <label for="city">City</label>
            <input type="text" name="city" id="city">
        </div>
        <div>
            <label for="price">price</label>
            <input type="text" name="price" id="price">
        </div>
        <div>
            <label for="street">street</label>
            <input type="text" name="street" id="street">
        </div>
        <div>
            <label for="is_rent">is_rent</label>
            <input type="text" name="is_rent" id="is_rent">
        </div>
        <div>
            <label for="free_from">free_from</label>
            <input type="text" name="free_from" id="free_from">
        </div>
        <div>
            <label for="rooms">rooms</label>
            <input type="text" name="rooms" id="rooms">
        </div>
        <div>
            <label for="surface">surface</label>
            <input type="text" name="surface" id="surface">
        </div>

        <button>Save</button>
    </form>
@endsection
