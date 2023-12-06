<!-- Name: Bandar Habib | ID: 2036359 | Section: CS1 | Date: 18/10/2023 -->
<!-- Name: Abdulaziz Alghamdi | ID: 2035244 | Section: CS1 | Date: 18/10/2023 -->
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  <title>Contact</title>
</head>
<body>
  @include('layouts.header') <!-- Include the header -->

  <!-- Main Content -->
  <header><h1>Contact us</h1></header>
  <hr />
  <div class="container">
    <form id="contact" action="{{ route('contact.submit') }}" method="POST">
      @csrf <!-- CSRF Token for form submission -->
      <label for="firstname">First Name</label>
      <input type="text" id="firstname" name="firstname" placeholder="Your name.." required />
      <label for="lastname">Last Name</label>
      <input type="text" id="lastname" name="lastname" placeholder="Your last name.." required />
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Your email.." required />
      <label for="subject">Subject</label>
      <textarea name="subject" id="subject" placeholder="Write your subject here.." style="height: 150px"></textarea>
      <input type="submit" value="Submit" />
      <input type="reset" value="Reset" />
    </form>
  </div>

  @include('layouts.footer') <!-- Include the footer -->
</body>
</html>