<style>
h2{
    font-family: 'Brush Script MT';
    color:white;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: yellow;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
h3{
    text-align:center;
    color:green;
}
label{
    color:blue;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<h3>Contact us if you what to buy something</h3>
<div class="container">
  <div style="text-align:center">
    <h3>Contact Us</h3>
  </div>
  <div class="row">
    <div class="column">
      <img src="https://img.buzzfeed.com/buzzfeed-static/static/2018-06/5/18/tmp/buzzfeed-prod-web-03/tmp-name-2-24424-1528239391-0_dblbig.jpg?output-format=auto&output-quality=90" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="name">Name shop</label>
        <p>Daysana shop<p>
        <label for="Email">Email Address</label>
        <p>Daysana.shop@gmail.com<p>
        <label for="Phone number">Phone number</label>
        <p>0962932531, 085746958<p>
        <label for="Address">Address shop</label>
        <p>St 271B, songkat Obekrom, kan Sensok, Phnom phenh<p>
      </form>
    </div>
  </div>
</div>
<footer class="bg-light text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    ©2021 Sreyhon khim:
    <a class="text-dark" href="https://mdbootstrap.com/">WEB 2021B</a>
  </div>
</footer>

