<?php
  $req_type = $_SERVER['REQUEST_METHOD'];

  function display_field($field_name, $req_type) {
    $value = ($req_type == 'GET' && isset($_GET[$field_name])) ? htmlspecialchars($_GET[$field_name]) : 
             ($req_type == 'POST' && isset($_POST[$field_name])) ? htmlspecialchars($_POST[$field_name]) : '';
    echo "<td style='text-decoration: underline;'>$value</td>";
  }

  //Basic Validation (Expand this for more robust validation)
  function validate_email($email) { return filter_var($email, FILTER_VALIDATE_EMAIL); }
  function validate_age($age) { return is_numeric($age) && $age > 0; }

?>

<table>
  <tr>
    <td width="120">First Name:</td>
    <?php display_field('fname', $req_type); ?>
  </tr>
  <tr>
    <td>Middle Name:</td>
    <?php display_field('mname', $req_type); ?>
  </tr>
  <tr>
    <td>Last Name:</td>
    <?php display_field('lname', $req_type); ?>
  </tr>
  <tr>
    <td>Age:</td>
    <?php display_field('age', $req_type); ?>
  </tr>
  <tr>
    <td>Gender:</td>
    <?php display_field('gender', $req_type); ?>
  </tr>
  <tr>
    <td>Email:</td>
    <?php display_field('email', $req_type); ?>
  </tr>
  <tr>
    <td>Address:</td>
    <?php display_field('address', $req_type); ?>
  </tr>
  <tr>
    <td>Contact Number:</td>
    <?php display_field('contacts', $req_type); ?>
  </tr>
</table>