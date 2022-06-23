<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Toll Automation</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- Header Showcase -->
<header id="showcase" class="grid">
  <div class="bg-image"></div>
  <div class="content-wrap">
    <h1>Welcome to Synergy Solutions</h1>
    <p>We aim to provide the best solutions available for everyone to embark a journey towards a sustainable and innovative future.</p>
    <a href="home.php" style="border-radius: 2rem;" class="btn">Home</a>
    <a href="loginad/" style="border-radius: 2rem;" class="btn">Admin</a>
    <a href="loginop/" style="border-radius: 2rem;" class="btn">Operator</a>
    <a href="#section-b" style="border-radius: 2rem;" class="btn">Read More</a>
  </div>
</header>

<!-- Main Area -->
<main id="main">
  <!-- Section A -->
  <!-- Addition for future -->

  <!-- Section B -->
  <section id="section-b" class="grid" >
    <ul>
      <li>
        <div class="card">
          <img src="iot.PNG" alt="">
          <div class="card-content">
            <h3 class="card-title">Embedded IoT</h3>
            <p>The ultrasonic sensors connected to the Arduino UNO board are used as triggers to capture burst images of the high speed vehicle passing through the area of interest.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="card">
          <img src="car_home.jpg" alt="">
          <div class="card-content">
            <h3 class="card-title">Object Detection</h3>
            <p>The object detection is used to detect where the license plate lies in the image given as input to the trained model and crops the required area and saves it as an external image file.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="card">
          <br><br>
          <img src="np_text_home.png" alt="">
          <div class="card-content">
            <h3 class="card-title">Optical Character Recognition</h3>
            <p>The cropped image of the license plate is given as input to the trained OCR model which in turn gives the output in the form of text which is later saved as a text file.</p>
          </div>
        </div>
      </li>
    </ul>
  </section>

  <!-- Section C -->
  <section id="section-c" class="grid">
    <div class="content-wrap">
      <h2 class="content-title"><i>"The first rule of any technology used in a business is that automation applied to an efficient operation will magnify the efficiency."</i></h2>
      <p style="font-size: 1.8em;">Bill Gates</p>
    </div>
  </section>

  <!-- Section D -->
  <section id="section-d" class="grid">
    <div class="box">
      <h2 class="content-title">Contact Us</h2>
      Hirabai Haridas Vidyanagari, Mumbai Agra Road, Panchavati, Nashik 422003<br/><b>Email us at:</b> team.synergy.ultimate@gmail.com
    </div>
    <div class="box" style="background: #000;">
      <h2 class="content-title">About Us</h2>
      We are a team of passionate youngsters who have the willingness to use technology to create a difference.
    </div>
  </section>
</main>
<div style="margin-left: auto; margin-right: auto; margin-top: 2px; text-align: center; width: 50%;">
  <h2>Stakeholders</h2>
  <a href="https://nhai.gov.in/#/">
    <img style="display: inline-block;border-radius:2rem; float: none; padding: 10px;width:150px; height:150px;" src="nhai.jpg" alt="NHAI">
  </a>
  <a href="https://morth.nic.in/">  
    <img style="display: inline-block;border-radius:2rem; float: none; padding: 10px;width:200px; height:150px;" src="mrth.jpg" alt="MRTH">
  </a>
</div>

<!-- Footer -->
<footer id="main-footer" class="grid">
  <div>&copy Synergy Solutions</div>
  <div>Project By <a href="https://www.youtube.com/channel/UCOjMnEe2Rwuc32Ab4cyLBEw" target="_blank">Team Synergy</a></div>
</footer>
<!-- partial -->

</body>
</html>

