<!-- Name: Bandar Habib | ID: 2036359 | Section: CS1 | Date: 18/10/2023 -->
<!-- Name: Abdulaziz Alghamdi | ID: 2035244 | Section: CS1 | Date: 18/10/2023 -->
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  <title>Our Project</title>
</head>
<body>
  @include('layouts.header') <!-- Include the header -->

  <!-- Main Content -->
  <div class="container">
    <h1>About our project</h1>
    <section class="content">
      <h2>project</h2>
      <p>
        An AI travel planner is an application or system that utilizes
        artificial intelligence techniques to assist travelers in planning
        their trips. It leverages machine learning algorithms and data
        analysis to provide personalized recommendations, optimize
        itineraries, and enhance the overall travel experience.
      </p>
    </section>

    <blockquote>
      <p>
        <b>According to a study published in</b>
        <cite>The Journal of Travel Research</cite>
        <i>Travel is the only thing you can buy that makes you richer.</i>
      </p>

      <address>
        Written by Bander Alghamdi<br />
        <a href="mailto:DontMailme@hotmail.com">DontMailme@gmail.com</a>
        <br />
      </address>
    </blockquote>

    <section class="content">
      <h2>Our Team</h2>
      <ul>
        <li>Bandar Habib - Team Leader</li>
        <li>Abdulaziz Alghamdi - Team Member</li>
      </ul>
    </section>
  </div>

  @include('layouts.footer') <!-- Include the footer -->
</body>
</html>
