<!-- Name: Bandar Habib | ID: 2036359 | Section: CS1 | Date: 18/10/2023 -->
<!-- Name: Abdulaziz Alghamdi | ID: 2035244 | Section: CS1 | Date: 18/10/2023 -->
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/print.css') }}" media="print" />
    <title>Plan details</title>
</head>
<body>
  @include('layouts.header') <!-- Include the header -->

  <!-- Main Content -->
  <div class="card-container">
    <div class="print-container">
      <table class="trip-table">
        <caption>
          Travel Itinerary
        </caption>
        <thead>
          <tr>
            <th>Date</th>
            <th>Destination</th>
            <th colspan="2">Transportation</th>
            <th>Activity</th>
          </tr>
        </thead>
        <tbody>
          @php $dayCounter = 1; @endphp
          @foreach ($activities as $activity)
          <tr>
            <td>Day {{ $dayCounter }}</td>
            <td>{{ $activity->destination }}</td>
            <td colspan="2">{{ $activity->transportation }}</td>
            <td>{{ $activity->activity }}</td>
          </tr>
          @php $dayCounter++; @endphp
          @endforeach
          <div class="card-container">
            <a href="{{ url('/create-plan/')}}">
              <div class="card">
                <div class="card-section">
                  <img src="{{ asset('image/' . $activity->city->city . '.jpg') }}" alt="{{ $activity->city->city }}" />
                </div>
                <div class="card-section">
                </div>
                <div class="info-section">
                </div>
                <div class="card-section">
                  <h2>{{ $activity->city->city }}</h2>
                  <p>{{ $activity->city->description }}</p>
                </div>
              </div>
            </a>
        </div>
        </tbody>
      </table>
    </div>
  </div>

    <!-- Footer -->
    @include('layouts.footer')
</body>
</html>
