@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.privacyTitle') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')

{{{ Lang::get('site.privacyPolicy') }}} ::

@stop
