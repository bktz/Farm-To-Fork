@extends('site.layouts.default') 
@section('content')

<div class="container">
	<h3>Show Pantry (id) Page</h3>
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

				<dd>
					<a href={{ '"mailto:'.$pantry->email.'"'}}>{{$pantry->email}}</a>
				</dd>

				<dd>{{ $pantry->phone_number }} @if($pantry->phone_number_ext != '') Ext. {{$pantry->phone_number_ext}} @endif</dd>
				<p />
				<p />

				<dt>Address</dt>
				<dd>{{ $pantry->address }}, {{ $pantry->city }}</dd>
				<dd>{{ $pantry->province_state }} {{ $pantry->postal_code }}</dd>
				<p />
				<p />

				<dt>Operating Hours</dt>
				<dd>
					<b>Monday: </b>{{ $pantry->hoursMon }}
				</dd>
				<dd>
					<b>Tuesday: </b>{{ $pantry->hoursTues }}
				</dd>
				<dd>
					<b>Wednesday: </b>{{ $pantry->hoursWed }}
				</dd>
				<dd>
					<b>Thursday: </b>{{ $pantry->hoursThurs }}
				</dd>
				<dd>
					<b>Friday: </b>{{ $pantry->hoursFri }}
				</dd>
				<dd>
					<b>Saturday: </b>{{ $pantry->hoursSat }}
				</dd>
				<dd>
					<b>Sunday: </b>{{ $pantry->hoursSun }}
				</dd>
				<p />
				<p />

				<dd>
					</a> <a href={{ '"/pantry/'.$pantry->id.'/edit"' }}>
						<button type="button" class="btn btn-lg btn-success">
							<span class="glyphicon glyphicon-pencil"></span> Edit Pantry
						</button>
					</a>
				</dd>
			</dl>
		</div>
	</div>
</div>
@stop
