@extends('layouts.app')
@section('title', $page->meta_title)
@section('description', $page->meta_description)
@section('keywords', $page->meta_keywords)
@section('content')
    <div id="information-information">
        <div class="container">
            <div class="row">
                <div id="content" class="col-sm-12 mb-md">
                    <div class="heading-wrap">
                        <h1>{{$page->title}}</h1>
                    </div>
                    <div id="page-body">
                        {!! $page->body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
