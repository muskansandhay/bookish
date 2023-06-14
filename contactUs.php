<!DOCTYPE html>
<html>

<head>
  <title>Customer Feedback Form</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet'
    type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link href='css/contact.css' rel='stylesheet' type='text/css'>
  <script src="https://kit.fontawesome.com/1ffbe32919.js" crossorigin="anonymous"></script>


</head>

<body>

  <div class="feedback">
    <form action="/">
      <h1>Customer Feedback Form</h1>
      <p>Please take a few minutes to give us feedback about our service by filling in this short Customer Feedback
        Form. We are conducting this research in order to measure your level of satisfaction with the quality of our
        service. We thank you for your participation.</p>
      <hr />
      <h3>Overall experience with our service</h3>
      <div class="rating">
        <table>
          <tr>
            <th class="first-col"></th>
            <th>Very Good</th>
            <th>Good</th>
            <th>Fair</th>
            <th>Poor</th>
            <th>Very Poor</th>
          </tr>
          <tr>
            <td class="first-col">How would you rate your overall experience with our service?</td>
            <td><input type="radio" value="none" name="rate" /></td>
            <td><input type="radio" value="none" name="rate" /></td>
            <td><input type="radio" value="none" name="rate" /></td>
            <td><input type="radio" value="none" name="rate" /></td>
            <td><input type="radio" value="none" name="rate" /></td>
          </tr>
          <tr>
            <td class="first-col">How satisfied are you with the comprehensiveness of our offer?</td>
            <td><input type="radio" value="none" name="satisfied" /></td>
            <td><input type="radio" value="none" name="satisfied" /></td>
            <td><input type="radio" value="none" name="satisfied" /></td>
            <td><input type="radio" value="none" name="satisfied" /></td>
            <td><input type="radio" value="none" name="satisfied" /></td>
          </tr>
          <tr>
            <td class="first-col">How would you rate our prices?</td>
            <td><input type="radio" value="none" name="prices" /></td>
            <td><input type="radio" value="none" name="prices" /></td>
            <td><input type="radio" value="none" name="prices" /></td>
            <td><input type="radio" value="none" name="prices" /></td>
            <td><input type="radio" value="none" name="prices" /></td>
          </tr>
          <tr>
            <td class="first-col">How satisfied are you with the timeliness of order delivery?</td>
            <td><input type="radio" value="none" name="timeliness" /></td>
            <td><input type="radio" value="none" name="timeliness" /></td>
            <td><input type="radio" value="none" name="timeliness" /></td>
            <td><input type="radio" value="none" name="timeliness" /></td>
            <td><input type="radio" value="none" name="timeliness" /></td>
          </tr>
          <tr>
            <td class="first-col">How satisfied are you with the customer support?</td>
            <td><input type="radio" value="none" name="name" /></td>
            <td><input type="radio" value="none" name="name" /></td>
            <td><input type="radio" value="none" name="name" /></td>
            <td><input type="radio" value="none" name="name" /></td>
            <td><input type="radio" value="none" name="name" /></td>
          </tr>
          <tr>
            <td class="first-col">Would you recommend our product / service to other people?</td>
            <td><input type="radio" value="none" name="recommend" /></td>
            <td><input type="radio" value="none" name="recommend" /></td>
            <td><input type="radio" value="none" name="recommend" /></td>
            <td><input type="radio" value="none" name="recommend" /></td>
            <td><input type="radio" value="none" name="recommend" /></td>
          </tr>
        </table>
      </div>
      <hr>
      <h3>
        <p>Fill form below to give your information and feedback</p>
      </h3>
      <hr>
      <div class="userinfo">

        <form action="//" method="post">
          <label for="name">Fullname</label>
          <input type="text" id="name" name="name" required="required" novalidate><br><br>
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required="required" novalidate><br><br>
          <label for="phone">Phone no</label>
          <input type="number" id="phone" name="phone" required="required" novalidate>
          <hr>
          <h2>Feedback for betterment</h2>
          <textarea rows="5"> Write your feed back here.....</textarea>
        </form>
      </div>
      <center><button type="submit" href="/">Send Feedback</button></center>
  </div>
  </form>
  </div>



</body>
<footer>
  <i class="fa-brands fa-instagram"></i>
  <i class="fa-brands fa-facebook"></i>
  <i class="fa-brands fa-twitter"></i>
</footer>

</html>