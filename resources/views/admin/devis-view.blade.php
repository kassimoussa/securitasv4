@extends('admin.app', ['page' => 'Administration | Devis', 'pageSlug' => 'devis', 'sup' => 'devis'])
@section('content')
   
    {{-- <livewire:admin-toggle /> --}}
    @livewire("gestion-devis")

@endsection
