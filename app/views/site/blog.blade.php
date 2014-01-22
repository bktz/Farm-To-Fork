@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.blog') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')

<h2>blog page</h2>

@stop
