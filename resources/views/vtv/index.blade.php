@extends('main')

@section('content')
    @include('partials._message')
    <div class="table-responsive">
    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Link</th>
            <th>YT_id</th>
            <!--th>Category</th-->
            <th>Date Create</th>
            <th>Operation</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ str_limit($item->title, 40) }}</td>
                <td><a href="{{ $item->link }}" target="_blank">{{ str_limit($item->link, 30) }}</td>
                <td>{{ $item->yt_id }}</td>
                <!--td>{{-- $item->category_id --}}</td-->
                <td>{{ $item->Ins }}</td>
                <td>
                    <a href="{{ route('posts.edit', ['id' => $item->id]) }}" class="btn btn-primary" target="_blank">Edit</a>
                    <a href="{{ route('posts.show', ['id' => $item->id]) }}" class="btn btn-default" target="_blank">Show</a>
                    <a href="{{ route('posts.yt', ['id' => $item->id]) }}" class="btn btn-danger" target="_blank">YT</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {!! $items->links() !!}
    </div>

</div>
@endsection
