@extends('site.layouts.default')
{{-- Web site Title --}}

{{-- Content --}}
@section('content')

<h1>Farm To Fork Newsfeed</h1>
<p>Keep up with Farm To Fork through our <a href="http://farmtoforkguelph.wordpress.com">blog</a>, on <a href ="http://www.facebook.com/farmtoforkguelph">facebook</a> or on <a href="http://www.twitter.com/Farm_2_Fork">twitter</a></p>

@foreach ($blogInfo as $blog)


<div class="panel panel-default">
	<div class="panel-heading"><a href="{{ $blog['link'] }}"><h4>{{ $blog['title'] }}</h4></a></div>
	<div class="panel-body">
		<h4>
			<span class="left">{{ $blog['date'] }}</span>
			<span class="right">Posted by <a href="/contact-us">{{ $blog['creator'] }}</a></span>
		</h4>
		<p>{{ $blog['description'] }}</p>
	</div>
</div>

@endforeach

@stop
