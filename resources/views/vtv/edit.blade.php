@extends('main')

@section('content')
    {!! Form::open(['route' => ['posts.update', $item->id], 'method' => 'put']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', $item->title, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('yt_id', 'YT ID') }}
            {{ Form::text('yt_id', $item->yt_id, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('link', 'Link') }}
            {{ Form::text('link', $item->link, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('category_id', 'Category ID') }}
            {{ Form::text('category_id', $item->category_id, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description', $item->description, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('copyright', 'Copyright') }}
            {{ Form::text('copyright', $item->copyright, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('link_mp4', 'Link MP4') }}
            {{ Form::text('link_mp4', $item->link_mp4, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('Ins', 'INS') }}
            {{ Form::text('Ins', $item->Ins, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('source', 'Source') }}
            {{ Form::text('source', $item->source, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('tags', 'Tags') }}
            {{ Form::text('tags', $item->tags, ['class' => 'form-control']) }}
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    {!! Form::close() !!}
@endsection
