@extends('site.layouts.default')
{{-- Web site Title --}}

{{-- Content --}}
@section('content')

<h3>Locations Page</h3>

<div class="map">
	<iframe width="100%" height="300" src="https://maps.google.ca/maps/ms?msa=0&amp;msid=204775546586272442844.0004c4043735d2a0fad24&amp;ie=UTF8&amp;t=m&amp;source=embed&amp;ll=43.547802,-80.253067&amp;spn=0.074652,0.102825&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.ca/maps/ms?msa=0&amp;msid=204775546586272442844.0004c4043735d2a0fad24&amp;ie=UTF8&amp;t=m&amp;source=embed&amp;ll=43.547802,-80.253067&amp;spn=0.074652,0.102825" style="color:#0000FF;text-align:left">Emergency Food Services - Guelph</a> in a larger map</small>
</div>

@stop
