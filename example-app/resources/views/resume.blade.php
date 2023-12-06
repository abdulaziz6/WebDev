<!-- Name: Bandar Habib | ID: 2036359 | Section: CS1 | Date: 18/10/2023 -->
<!-- Name: Abdulaziz Alghamdi | ID: 2035244 | Section: CS1 | Date: 18/10/2023 -->
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  <title>Resume</title>
</head>
<body>
  @include('layouts.header') <!-- Include the header -->

  <!-- Main Content -->
  <div class="card-container">
    <object data="{{ asset('Resume/Bandar_Habib_2023_V1.pdf') }}" type="application/pdf" width="816px" height="1180px"></object>
  </div>

  <div class="card-container">
    <object data="{{ asset('Resume/resume.pdf') }}" type="application/pdf" width="816px" height="1180px"></object>
  </div>

  @include('layouts.footer') <!-- Include the footer -->
</body>
</html>