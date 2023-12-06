<!-- Name: Bandar Habib | ID: 2036359 | Section: CS1 | Date: 18/10/2023 -->
<!-- Name: Abdulaziz Alghamdi | ID: 2035244 | Section: CS1 | Date: 18/10/2023 -->
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  <title>Feedback</title>
</head>
<body>
  @include('layouts.header') <!-- Include the header -->

  <!-- Main Content -->
  <header><h1>Rate our services</h1></header>
  <hr />

  <form class="feedback-form" action="{{ route('feedback.submit') }}" method="POST">
    @csrf <!-- CSRF Token for form submission -->

    <fieldset>
      <legend>Personal Information</legend>
      <label for="firstname">First Name</label>
      <input type="text" id="firstname" name="firstname" placeholder="Your name.." required />
      <label for="lastname">Last Name</label>
      <input type="text" id="lastname" name="lastname" placeholder="Your last name.." required />
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Your email.." required />
    </fieldset>

    <fieldset>
      <legend>Rate our services</legend>

      <label for="experience">Overall Experience:</label>
      <select id="experience" name="experience">
        <option value="excellent">Excellent</option>
        <option value="good">Good</option>
        <option value="average">Average</option>
        <option value="poor">Poor</option>
      </select>

      <label for="add_more_plans">Do you want us to add more plans:</label>
      <input type="radio" id="Q1_yes" name="add_more_plans" value="yes" />
      <label for="Q1_yes">Yes</label>
      <input type="radio" id="Q1_no" name="add_more_plans" value="no" />
      <label for="Q1_no">No</label>

      <label for="additional_feedback">Additional Feedback:</label>
      <textarea id="additional_feedback" name="additional_feedback" rows="6"></textarea>

      <label for="subscribe_to_notifications">Subscribe to notification email:</label>
      <input type="checkbox" id="subscribe_to_notifications" name="subscribe_to_notifications" value="yes" />
      <label for="subscribe_to_beta">Subscribe to our beta version:</label>
      <input type="checkbox" id="subscribe_to_beta" name="subscribe_to_beta" value="yes" />
    </fieldset>

    <button type="submit">Submit</button>
  </form>

  @include('layouts.footer') <!-- Include the footer -->
</body>
</html>
