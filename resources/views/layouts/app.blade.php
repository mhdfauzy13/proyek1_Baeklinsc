<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container-fluid bg-secondary text-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('logo.png') }}" alt="Logo" class="float-start me-3">
                    <h1 class="mt-2">{{ config('app.name', 'Laravel') }}</h1>
                </div>
            </div>
        </div>
    </div>
   
