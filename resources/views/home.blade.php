@extends('layout.main')

@section('content')
    <div class="container text-center p-5">
        <h1>Treni e Orari</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Azienza</th>
                <th scope="col">Partenza</th>
                <th scope="col">Arrivo</th>
                <th scope="col">Ora di Partenza</th>
                <th scope="col">Ora di Arrivo</th>
                <th scope="col">In orario</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                  <th scope="row">{{ $train->azienda }}</th>
                  <td>{{ $train->stazione_di_partenza }}</td>
                  <td>{{ $train->stazione_di_arrivo }}</td>
                  <td>{{ $train->ora_partenza }}</td>
                  <td>{{ $train->ora_arrivo }}</td>
                  <td>{{ $train->in_orario }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
