<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Logistic_Managers.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/20c5629a29.js" crossorigin="anonymous"></script>
    <title>Bidding - Logistic Managers</title>
</head>
<body>
<?php include 'menubar.php'; ?>
  <div class="banner-section-bg-container">
    <center><h1 class="banner-title">Bidding</h1></center>
    <div class="d-flex flex-row ">
      <a style="color: rgb(153, 134, 134); padding-left:1150px;" href="Logistic_Managers.html">Home</a>
      <p style="color: white;">/ Bidding</p>
    </div>
  </div>
  <div class="bidding_timer mt-3">

    <div id="timer">Bidding Ends In: <span id="countdown">00:00</span></div>
    <button type="button" id="startButton" class="btn btn-primary ml-3 mb-5 mt-2">Start Bidding</button>

    <script>
        let countdownInterval;

        function startTimer(duration) {
            const timerElement = document.getElementById('countdown');
            const endTime = Date.now() + duration * 1000;

            function updateTimer() {
                const currentTime = Date.now();
                const timeLeft = endTime - currentTime;

                if (timeLeft <= 0) {
                    clearInterval(countdownInterval);
                    timerElement.textContent = 'Bidding Ended';
                } else {
                    const minutes = Math.floor(timeLeft / 60000);
                    const seconds = Math.floor((timeLeft % 60000) / 1000);
                    const minutesDisplay = String(minutes).padStart(2, '0');
                    const secondsDisplay = String(seconds).padStart(2, '0');
                    timerElement.textContent = `${minutesDisplay}:${secondsDisplay}`;
                }
            }

            updateTimer(); // Update the timer immediately

            countdownInterval = setInterval(updateTimer, 1000);
        }

        document.getElementById('startButton').addEventListener('click', () => {
            startTimer(300); // Set the duration in seconds (e.g., 300 seconds for a 5-minute bidding)
        });
    </script>

  </div>
  <div class="d-flex flex-row mt-5">
    <div>
      <h5 class="contactus_box_names">Present Address</h5>
      <textarea class="loginbox mr-5" style="width:570px;height:60px;" placeholder="Enter your address here"></textarea><br><br>  
    </div>
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right ml-3" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
      </svg>
    </div>
    <div>
      <h5 class="contactus_box_names">Shifting Address</h5>
      <textarea class="loginbox" style="width:570px;height:60px;" placeholder="Enter your address here"></textarea><br><br>  
    </div>
  </div>
  <div class="bidding_box">
    <div class="d-flex flex-row">
      <input type="text" class="ml-5" name="" style="width:270px;height:35px;" placeholder="Bid here"/><br><br>            
      <button type="button" class="btn btn-primary ml-3 mb-5">SUBMIT</button>
    </div> 
  </div>
  </div>
  <footer class="footer_items d-flex flex-row space-evenly">
        <div class="footer_container mr-5">
          <h5 class="footer_title">About Us</h5>
          <hr class="hr-line"/>
          <p class="footer_para">Due to relocation and overall development, the packers and movers are demanding. Logistic Managers make your life relaxed by doing this work very positively for you. </p>
          <div class="d-flex flex-row justify-content-center mb-3">
            <div class="icon-section">
                <i class="fab fa-google icons"></i>
            </div>
            <div class="icon-section">
                <i class="fab fa-twitter icons"></i>
            </div>
            <div class="icon-section">
                <i class="fab fa-instagram icons"></i>
            </div>
          </div>
        </div>
        <div class="footer_container mr-5">
          <h5 class="footer_title ml-2">Our Service Areas</h5>
          <hr class="hr-line"/>
          <div class="d-flex flex-row">
            <ul class="unorderedlist_items">
              <li class="mb-2">Domestic Shifting</li>
              <li class="mb-2">Corporate Shifting</li>
              <li class="mb-2">Car Shifting</li>
              <li class="mb-2"> Bike Shifting</li>
            </ul>
            <ul class="unorderedlist_items">
              <li class="mb-2">Office Shifting</li>
              <li class="mb-2">Home Storage</li>
              <li class="mb-2">Local Shifting</li>
            </ul>
          </div>
        </div>
        <div class="footer_container mr-5">
          <h5 class="footer_title ml-2">Quick Links</h5>
          <hr class="hr-line" />
          <div class="d-flex flex-column">
            <a class="navbar-link ml-5 mb-2" href="Logistic_Managers.html">Home</a>
            <a class="navbar-link ml-5 mb-2" href="About Us.html">About Us</a>
            <a class="navbar-link ml-5 mb-2" href="Registration Form.html">Registration Form</a>
            <a class="navbar-link ml-5 mb-2" href="Services.html">Services</a>
            <a class="navbar-link ml-5 mb-2" href="Bidding.html">Bidding</a>
            <a class="navbar-link ml-5 mb-2" href="Contact us.html">Contact Us</a>
          </div>
        </div>
        <div class="footer_container mr-5">
          <h5 class="footer_title ml-2">Contact Info</h5>
          <hr class="hr-line" />
          <div class="d-flex flex-column">
            <div class="d-flex flex-row">
              <i class="fas fa-map-marker-alt con_icon"></i>
              <p class="con_para">Seshadri Rao Gudlavalleru Engineering College, Seshadri Rao Knowledge Village, Gudlavalleru, Krishna(dt), Andhra Pradesh 521356.</p>
            </div>
            <div class="d-flex flex-row">
              <i class="fas fa-phone-alt con_icon"></i>
              <p class="con_para">1234506789</p>
            </div>
            <div class="d-flex flex-row">
                <i class="fas fa-envelope con_icon"></i>
                <p class="con_para">logisticmanagers@gmail.com</p>
            </div>
        </div>
          
        </div>
  </footer>
</body>
</html>