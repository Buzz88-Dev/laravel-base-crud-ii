@extends('admin.templates.base')
@section('mainContent')

    <div class="container">
            <div>
                <p>Sono il fumetto con id: {{ $Comics['id']}}</p>
                <p>Titolo: {{ $Comics['title']}}</p>
            </div>
    </div>
@endsection
