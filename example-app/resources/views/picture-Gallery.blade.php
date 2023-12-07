<!-- Name: Bandar Habib | ID: 2036359 | Section: CS1 | Date: 18/10/2023 -->
<!-- Name: Abdulaziz Alghamdi | ID: 2035244 | Section: CS1 | Date: 18/10/2023 -->
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  <title>Gallery</title>
</head>
<body>
  @include('layouts.header') <!-- Include the header -->

  <!-- Main Content -->
  <header><h1>Picture Gallery</h1></header>
  <hr>

  <div class="gallery">
    <ul>
      <li>
        <a href="#"><img src="{{ asset('image/main-logo.png') }}" width="500" height="500" alt=""></a>
      </li>
      <li>
        <a href="#"><img src="{{ asset('image/background1.jpg') }}" width="500" height="500" alt=""></a>
      </li>
      <li>
        <a href="#"><img src="{{ asset('image/card-background.jpg') }}" width="500" height="500" alt=""></a>
      </li>
      <li>
        <a href="#"><img src="{{ asset('image/Jeddah.jpg') }}" width="500" height="500" alt=""></a>
      </li>
      <li>
        <a href="#"><img src="{{ asset('image/footer-background.jpg') }}" width="500" height="500" alt=""></a>
      </li>
      <li>
        <a href="#"><img src="{{ asset('image/Plane.png') }}" width="500" height="500" alt=""></a>
      </li>
      <li>
        <a href="#"><img src="{{ asset('image/Riyadh.jpg') }}" width="500" height="500" alt=""></a>
      </li>
      <li>
        <a href="#"><img src="{{ asset('image/preview.jpg') }}" width="500" height="500" alt=""></a>
      </li>
    </ul>
  </div>
  <script src="{{ asset('js/imageSize.js') }}"></script>

  @include('layouts.footer') <!-- Include the footer -->
</body>
</html>
