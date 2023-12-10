@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '')
@section('message', __($exception->getMessage() ?: 'Сегодня мы не работаем.'))
