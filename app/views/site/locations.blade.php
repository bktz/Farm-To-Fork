@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.locations') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')

<h3>Locations Page</h3>

@stop
