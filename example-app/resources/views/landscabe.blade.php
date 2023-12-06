<!-- Name: Bandar Habib | ID: 2036359 | Section: CS1 | Date: 18/10/2023 -->
<!-- Name: Abdulaziz Alghamdi | ID: 2035244 | Section: CS1 | Date: 18/10/2023 -->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" >
    <title>Saudi Arabia Video</title>
  </head>
  
  @include('layouts.header')
  <body><!-- Include the header -->

    <!-- Main Content -->
    <header><h1>Saudi Arabia</h1></header>
    <hr />

    <div class="video-container">
      <video width="1280" height="720" controls>
        <source src="{{ asset('videos/Saudi-Arabia.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>

    @include('layouts.footer') <!-- Include the footer -->
  </body>
</html>
