@extends(Auth::check() ? 'layouts.admin' : 'layouts.guest')

@section('title', 'about')

@section('content')
about
@endsection