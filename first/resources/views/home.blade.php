{{--<a href="<?php echo route('/'); ?>">Home</a>--}}
{{--<a href="<?php echo route('/mabaut'); ?>">About</a>--}}

<a href="{{ route('/') }}">Home</a>
<a href="{{ route('/mabaut') }}">About</a>

<a href="{!!   route('/') !!}">Home</a>
<a href="{!!   route('/mabaut') !!}">About</a>

<h1>This is a new view.</h1>
<h1>{{ $fame }}</h1>
<h1>{{ $age }}</h1>
