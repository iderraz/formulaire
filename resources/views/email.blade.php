@extends('html')

@section('content')



    {{-- <p>{{ $contenuMail['name'] }}</p>
    <p>{{ $contenuMail['email'] }}</p>
    <p>{{ $contenuMail['subject'] }}</p>
    <p>{{ $contenuMail['message'] }}</p> --}}

    <section class="container d-flex flex-column">

        <h1>utilisateur: {{ $contenuMail['name'] }} </h1>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
              {{-- <h5 class="card-title">{{ $contenuMail['name'] }}</h5> --}}
              <h6 class="card-subtitle mb-2 text-muted">{{ $contenuMail['email'] }}</h6>
              <p class="card-text">{{ $contenuMail['subject'] }}</p>
              <p class="card-text">{{ $contenuMail['message'] }}</p>
            </div>
          </div>

    </section>


@endsection
