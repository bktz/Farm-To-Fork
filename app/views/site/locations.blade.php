@extends('site.layouts.default') 

@section('content')

<h3>Locations Page</h3>

<div class="map">
	<iframe width="100%" height="300"
		src="https://maps.google.ca/maps/ms?msa=0&amp;msid=204775546586272442844.0004c4043735d2a0fad24&amp;ie=UTF8&amp;t=m&amp;source=embed&amp;ll=43.547802,-80.253067&amp;spn=0.074652,0.102825&amp;output=embed"></iframe>
	<br /> <small>View <a
		href="https://maps.google.ca/maps/ms?msa=0&amp;msid=204775546586272442844.0004c4043735d2a0fad24&amp;ie=UTF8&amp;t=m&amp;source=embed&amp;ll=43.547802,-80.253067&amp;spn=0.074652,0.102825"
		style="color: #0000FF; text-align: left">Emergency Food Services - Guelph</a> in a larger map
	</small>
</div>

@foreach ($pantries as $pantry)
<div class="panel panel-primary">
	<div class="panel-body">
		<dl class="dl-horizontal">
			<dt></dt>
			<dd>
				<h3>{{ String::title($pantry->name) }}</h3>
			</dd>
			<p />
			<dt>Description</dt>
			<dd>{{ Str::limit($pantry->description, 750) }}</dd>
			<p />
			<dt>Contact Info</dt>
			<dt></dt>
			<dd>
				<a href={{ '"mailto:'.$pantry->email.'"'}}>{{$pantry->email}}</a>
			</dd>
			<dt></dt>
			<dd>{{ $pantry->phone_number }} @if($pantry->phone_number_ext != '') Ext. {{$pantry->phone_number_ext}} @endif</dd>
			<p />
			<p />
			<dd>
				<a href={{ '"/pantry/'.$pantry->id.'"' }}>
					<button type="button" class="btn btn-lg btn-primary">
						<span class="glyphicon"></span>View Pantry
					</button>
				</a> <a href={{ '"/pantry/'.$pantry->id.'/edit"' }}>
					<button type="button" class="btn btn-lg btn-success">
						<span class="glyphicon glyphicon-pencil"></span> Edit Pantry
					</button>
				</a>
			</dd>
		</dl>
	</div>
</div>
@endforeach @stop
