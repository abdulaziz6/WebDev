<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  <title>Create Plan</title>
</head>
<body>
  @include('layouts.header') <!-- Include the header -->

  <!-- Main Content -->
  <div class="card-container">
    @foreach ($cities as $city)
      <a href="{{ url('/create-plan/' . $city->id) }}">
        <div class="card">
          <div class="card-section">
            <img src="{{ asset('image/' . $city->city . '.jpg') }}" alt="{{ $city->city }}" />
          </div>
          <div class="card-section">
            <div class="info-section">
              <!-- Your city information here -->
            </div>
          </div>
          <div class="card-section">
            <h2>{{ $city->city }}</h2>
            <p>{{ $city->description }}</p>
          </div>
        </div>
      </a>
    @endforeach
  </div>

  @include('layouts.footer') <!-- Include the footer -->
</body>
</html>
