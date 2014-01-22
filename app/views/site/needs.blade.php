@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.needs') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')

<h3>Needs Page</h3>

@stop
