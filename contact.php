<?php require_once('assets/components/html-page.php'); ?>
<?php require_once('assets/components/navbar.php'); ?>

<section class="contact-page">
  <div class="overlay">
    <div class="container">
      <div class="title">
        <h2>Join Us</h2>
        <p>
          We are always looking for volunteers to help us in our mission. If you
          are interested in joining us, please fill out the form below and we will
          get back to you as soon as possible.
        </p>
      </div>
      <form action="process.php" method="POST">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" required maxlength="50">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <select id="gender" name="gender" required>
            <option value="">Select your gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div class="form-group">
          <label>Interests:</label>
          <div class="interest">
            <input type="checkbox" id="interest1" name="interests[]" value="sports">
            <label for="interest1">Sports</label>
            <input type="checkbox" id="interest2" name="interests[]" value="music">
            <label for="interest2">Music</label>
            <input type="checkbox" id="interest3" name="interests[]" value="movies">
            <label for="interest3">Movies</label>
          </div>
        </div>
        <div class="form-group">
          <label for="message">Motivation:</label>
          <textarea id="message" name="message" placeholder="Enter your motivation" required maxlength="500px"></textarea>
        </div>
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>
</section>

<script src="./assets/js/script.js"></script>
<?php require_once('assets/components/footer.php'); ?>