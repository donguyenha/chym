@extends('layouts.master')

@section('content')
    @foreach ($news_details as $detail)
        {{-- $detail->title }}
        {{ $detail->image }}
        {{ $detail->content --}}
        @include('partials.row', array('detail' => $detail))
    @endforeach
@endsection

@section('page')
    {!! $news_details->links() !!}
    {--!! $news_details->render() !!--}
@endsection
