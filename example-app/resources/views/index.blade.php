<!-- Name: Bandar Habib | ID: 2036359 | Section: CS1 | Date: 18/10/2023 -->
<!-- Name: Abdulaziz Alghamdi | ID: 2035244 | Section: CS1 | Date: 18/10/2023 -->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Landing page</title>
  </head>
  <body>
    <!-- Toolbar -->
    @include('layouts.header')

    <!-- Code -->
    <!--here we creating container and inside of it intro to plan your next trip and image and try now button which linked to create plan page  -->
    <div class="container-index">
      <section class="content-main">
        <h2>Plan your next trip</h2>
        <p>
          Embark on a journey of anticipation and adventure as you plan your
          next unforgettable trip.
        </p>
      </section>
      <section class="content-main">
        <a href="{{ url('create-plan') }}">
          <button>Try Now</button>
        </a>
      </section>
      <section class="content-main">
        <img src="..\image\Plane.png" alt="Plane" width="400px" />
      </section>
    </div>
    <div class="idea-box">
      <!--intro to project idea and function of our project-->
      <h2>Project Idea</h2>
      <hr />

      <p>
        The objective of this project is to design a smart AI model that can
        provide travel planning, especially in our great land Saudi Arabia by
        taking travelers' personalized recommendations and assisting them.
      </p>

      <hr />
      <h2>Functions</h2>
      <hr />

      <p>
        Create Account , Log in , Contact us , Travelers preferences form ,
        Choose plan , Customize plan
      </p>
    </div>
    <!-- Footer -->
    @include('layouts.footer')
  </body>
</html>
