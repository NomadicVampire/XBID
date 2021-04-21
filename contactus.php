<?php

  include_once 'assets/header.php';

?>
<style>
body {
  background: #f7f7f7;
}

.form-box {
  max-width: 500px;
  margin: auto;
 
  background-color: #f8f9d2;
    background-image: linear-gradient(315deg, #f8f9d2 0%, #e8dbfc 74%); 
  
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}

h1, p {
  text-align: center;
}

input, textarea {
  width: 100%;
}
</style>
</br>
</br>
<body><div class="form-box">
  <h1>Contact Us </h1>
  
  <form action="https://api.formbucket.com/f/c2K3QTQ" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input class="form-control" id="name" type="text" name="Name">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input class="form-control" id="email" type="email" name="Email">
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea class="form-control" id="message" name="Message"></textarea>
    </div>
    <input class="btn btn-primary" type="submit" value="Submit" />
    </div>
  </form>
</div>
</body>
<?php
    include_once "assets/footer.php";
?>