@extends('layouts.app')

@section('content')

    <section>

        <div class="container">

        <h1>{{$project->id}}: {{$project->title}}</h1>

        <h2 class="mt-4">Description:</h2>
        <div>
            {{$project->content}}
        </div>
         
        </div>

    </section>



@endsection