@extends('layouts.layout')

@section('title', 'João Tomás - Portfolio/CV')
@section('meta_description', 'Olá Bem vindo ao meu site, Sou João Tomás, dev mobile e web')
@section('meta_keywords', 'João Tomás,Portfolio Pessoal,CV,Angola,João,Tomás,Programador,Programador Angolano')

@section('content')

<!-- Hero Area Start -->
@include('sections.hero')

<!-- About Area Start -->
@include('sections.about')


<!-- Fun Fact Area Start -->
@include('sections.fun-facts')

<!-- Service Area Start -->
@include('sections.services')
<!-- habilidades Area Start -->
@include('sections.habilidades')
<!-- Resume Area Start -->
@include('sections.resume')

<!-- Portfolio Area Start -->
@include('sections.portfolio')

<!-- Pricing Area Start -->
@include('sections.pricing')

<!-- Testimonial Area Start -->
@include('sections.testimonials')

<!-- Blog Area Start -->
@include('sections.blog')

<!-- Contact Area Start -->
@include('sections.contact')

<!-- Client Area Start -->
@include('sections.clients')

@endsection
