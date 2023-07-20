@extends('layouts.app')

@section('content')
    <x-homepage-carousel :imgpaths="$imgpaths" />
    <x-homepage-others :imgpaths="$otherimgs"/>
@endsection