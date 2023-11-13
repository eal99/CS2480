<?php
include 'top.php';
?>

<main>
  <h2>Online Gallery</h2>

  <table>
    <tr>
      <th>Field</th>
      <th>Data Type</th> 
      <th>Description</th>
    </tr>
    <tr>
      <td>SubmissionId</td>
      <td>int</td>
      <td>The unique number for the the contact submission</td>
    </tr>
    <tr>
      <td>Name</td>
      <td>varchar</td>
      <td>The name of the contacter</td>
    </tr>
    <tr>
      <td>Email</td>
      <td>varcher</td>
      <td>The email of the person making contact</td>
    </tr>
    <tr>
      <td>Subject</td>
      <td>varchar</td> 
      <td>The subject of the contact submission</td>
    </tr>
    <tr>
      <td>Message</td>
      <td>Text</td> 
      <td>The message for the submission</td>
    </tr>
    <tr>
      <td>Timestamp</td>
      <td>timestamp</td>
      <td>The time of the sumission</td>
    </tr>
    <tr>
      <td>ProductId</td>
      <td>int</td>
      <td>The unique identification number for the product</td>
    </tr>
    <tr>
      <td>Product Name</td>
      <td>varchar</td> 
      <td>The name of the product for sale</td>
    </tr>
    <tr>
      <td>Product Description</td>
      <td>Text</td>
      <td>The range of scores possible for the quiz based on correct answers.</td>
    </tr>
    <tr>
      <td>Price</td>
      <td>decimal</td>
      <td>The price of the product</td>
    </tr>
    <tr>
      <td>Category</td>
      <td>varchar</td>
      <td>The category the product falls under</td>
    </tr>
    <tr>
      <td>OrderId</td>
      <td>int</td>
      <td>The unique identification number for the order</td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td>int</td>
      <td>The number of orders the user places</td>
    </tr>
    <tr>
      <td>Total Price</td>
      <td>decimal</td>
      <td>The total price of  the order</td>
    </tr>
    <tr>
      <td>Status</td>
      <td>enum</td>
      <td>The status of the order</td>
    </tr>
    <tr>
      <td>Username</td>
      <td>varchar</td>
      <td>The username of the buyer</td>
    </tr>
    <tr>
      <td>Password</td>
      <td>varchar</td>
      <td>The password for the account holder</td>
    </tr>
    <tr>
      <td>Role</td>
      <td>enum</td>
      <td>Displays if the user is an admin</td>
    </tr>

  </table>

</main>

<?php include 'footer.php'; ?>

