@extends('admin.app', ['page' => 'Administration | Messages', 'pageSlug' => 'messages', 'sup' => 'messages'])
@section('content')
   
    {{-- <livewire:admin-toggle /> --}}
    @livewire("gestion-message")

@endsection
