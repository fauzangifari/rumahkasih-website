<?php 
require_once('assets/components/html-page.php');
require_once('assets/components/navbar.php');

$name = $email = $gender = $message = "";
$interests = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $interests = isset($_POST['interests']) ? $_POST['interests'] : array();
    $message = $_POST['message'];
}
?>

<section class="process-page">
  <div class="overlay">
    <div class="container">
      <h1>Form Data</h1>
      <table>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Interests</th>
          <th>Motivation</th>
        </tr>
        <tr>
          <td><?php echo $name; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $gender; ?></td>
          <td><?php echo implode(", ", $interests); ?></td>
          <td><?php echo $message; ?></td>
        </tr>
      </table>
    </div>
  </div>
</section>

<script src="./assets/js/script.js"></script>
<?php require_once('assets/components/footer.php'); ?>
