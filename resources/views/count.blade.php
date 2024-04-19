{{-- resources/views/count.blade.php --}}

@extends('layouts.app')
 
@section('title', 'Count')

@section('content')
    There are {{ $queueSize }} jobs in queue {{ $queueName }}
@endsection
