@extends('admin.templates.base')
@section('mainContent')

    <h1>Modifico un film</h1>

    <form action="{{ route('houses.update', ['house' => $Comics]) }}" method="post">
        {{-- serve il metodo put --}}
        {{-- tramite una direttiva aggiungo il put --}}
        @method('PUT')
        @csrf
        <div>
            <label class="form-label" for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ $Comics->title }}">
        </div>

        <div>
            <label class="form-label" for="description">Description</label>
            <input class="form-control" type="text" name="description" id="description" value="{{ $Comics->description }}">
        </div>

        <div>
            <label class="form-label" for="thumb">Thumb</label>
            <input class="form-control" type="text" name="thumb" id="thumb" value="{{ $Comics->thumb }}">
        </div>

        <div>
            <label class="form-label" for="price">Price</label>
            <input class="form-control" type="text" name="price" id="price" value="{{ $Comics->price }}">
        </div>

        <div>
            <label class="form-label" for="series">Series</label>
            <input class="form-control" type="text" name="series" id="series" value="{{ $Comics->series }}">
        </div>

        <div>
            <label class="form-label" for="sale_date">sale_date</label>
            <input class="form-control" type="text" name="sale_date" id="sale_date" value="{{ $Comics->sale_date }}">
        </div>

        <div>
            <label class="form-label" for="type">Type</label>
            <input class="form-control" type="text" name="type" id="type" value="{{ $Comics->type}}">
        </div>

            <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
