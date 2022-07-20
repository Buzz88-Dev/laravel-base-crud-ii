@extends('admin.templates.base')
@section('mainContent')
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>thumb</th>
                    <th>price</th>
                    <th>series</th>
                    <th>sale_date</th>
                    <th>type</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Comics as $item)
                    <tr>
                        <td>{{ $item->id}} </td>
                        <td>{{ $item->title}} </td>
                        <td>{{ $item->description}} </td>
                        <td>{{ $item->thumb}} </td>
                        <td>{{ $item->price}} </td>
                        <td>{{ $item->series}} </td>
                        <td>{{ $item->sale_date}} </td>
                        <td>{{ $item->type}} </td>
                        <td>
                            <a href="{{ route('houses.show', ['house' => $item])}}" class="btn btn-primary">View</a>
                        </td>
                        <td>
                            <a href="{{ route('houses.edit', ['house' => $item])}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-danger">Delete</a>
                            {{-- <form action="{{ route('houses.destroy', ['house' => $Comics])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
