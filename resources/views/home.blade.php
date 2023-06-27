<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Migration</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container my-5">
              <h1>Trains</h1>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Company</th>
                    <th scope="col">Departure station</th>
                    <th scope="col">Arrival station</th>
                    <th scope="col">Departure time</th>
                    <th scope="col">Arrival time</th>
                    <th scope="col">Train code</th>
                    <th scope="col">On time</th>
                    <th scope="col">Cancelled</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($trains as $train)
                    <tr>
                      <th scope="row">{{ $train->id }}</th>
                      <td>{{ $train->company }}</td>
                      <td>{{ $train->departure_station }}</td>
                      <td>{{ $train->arrival_station }}</td>
                      <td>{{ $train->departure_time}}</td>
                      <td>{{ $train->arrival_time }}</td>
                      <td>{{ $train->train_code }}</td>
                      <td>{{ $train->on_time }}</td>
                      <td>{{ $train->cancelled }}</td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
        </main>

    </body>
</html>
