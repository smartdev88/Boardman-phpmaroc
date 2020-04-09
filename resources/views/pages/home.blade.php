@extends('layouts.master', ['title' => 'Home'])


@section('content')
<div id="app">
    
<slider-component></slider-component>

<!-- Page Content -->
<section class="page-content">
	<div class="container">
		<stats-component></stats-component>

		<div class="spacer-xl"></div>

		<listening-component></listening-component>

		<div class="spacer-xxl"></div>

		<promobox-component></promobox-component>

		<div class="spacer-lg"></div>

		<div class="spacer"></div>

		<testimonials-component></testimonials-component>
	</div>
</section>
</div>

<script src="js/app.js"></script>
@endsection