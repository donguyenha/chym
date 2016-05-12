@extends('main')

@section('content')
    <div class="table-responsive">
    <table class="table">
    <thead>
        <tr>
            <th>ID: </th>
            <th>Title</th>
            <th>Link</th>
            <th>YT_id</th>
            <th>Category</th>
            <th>Date Create</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ str_limit($item->title, 40) }}</td>
                <td><a href="{{ $item->link }}" target="_blank">{{ str_limit($item->link, 30) }}</td>
                <td>{{ $item->yt_id }}</td>
                <td>{{ $item->category_id }}</td>
                <td>{{ $item->Ins }}</td>
            </tr>
        </tbody>
    </table>

</div>
@endsection
