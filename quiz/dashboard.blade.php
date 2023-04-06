<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor Pak!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Icon tab -->
    <link rel="icon" href="{{ URL::asset('polisi.png') }}" type="image/png" />
</head>

<!-- UP top -->

<body class="bg-body-tertiary">
<header>
  @extends('LaporPak.templates.template')
</header>

<main class="container">
  
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>NPM</th>
          <th>Name</th>
          <th>Gender</th>
          <th>Address</th>
        <tr>
</thead>

<tbody>
  @foreach ($data['students'] as $index => $result)

    <tr>
      <td>{{ $index+1 }}</td>
      <td> {{ $result['npm'] }}</td>
      <td> {{ $result['name'] }}</td>
      <td> {{ $result['gender']}}</td>
      <td> {{ $result['address']}}</td>
</tr>
  @endforeach
</tbody>
</table>

</div>


</main>


    
</body>
</html>