<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Fony-awesome-url -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- External css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Attendance Manager</title>
    <style type="text/css">
    .about-section {
        padding: 30px 20px;
        background-color: #f8f9fa;
        color: #343a40;
        margin-top: 30px;
        border-radius: 10px;
    }
    .about-section h2 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        font-weight: bold;
/*        color: #0020C2;*/
    }
    .about-section p {
        font-size: 1.1rem;
        line-height: 1.8;
        text-align: justify;
    }
    .card{
      width: 50rem;
      height: 30rem;
      margin-bottom: 50px;
      margin-left: 320px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    @media (max-width: 780px) {
     .card{
      width: 19rem;
      height: 40rem;
      margin-bottom: 50px;
      margin-left: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    } 
    .about-section {
        padding: 30px 20px;
        background-color: #f8f9fa;
        color: #343a40;
        margin-top: 30px;
        border-radius: 10px;
    }
    .about-section h2 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        font-weight: bold;
        color: #0020C2;
    }
    .about-section p {
        font-size: 1.1rem;
        line-height: 1.8;
        text-align: justify;
    }
  }
    </style>
  </head>
  <body>

  <!-- Nabvar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="">
    <img src="../images/mimit.jpeg" class="logo" width="50" height="50">
    <a class="navbar-brand" href="#">Attend<span style="color: #f0a500;">M</span>aster</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#section"><i class="fas fa-cog"></i> Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about"><i class="fas fa-info-circle"></i> About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact"><i class="fas fa-envelope"></i> Contact</a>
      </li>
    </ul>
  </div>
 </nav>

 <!-- Simplify Attendance Management  -->
 <div class="main-container">
    <div class="content">
      <h1 class="title">Manage <span style="color: #f0a500; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">A</span>ttendance Efficiently</h1>
        <p class="subtitle">
          "Manage Attendance Efficiently" is a streamlined solution designed to simplify the process of tracking and managing attendance.<br> It provides real-time updates, intuitive features, and a user-friendly interface, making it ideal for educators, managers, and <br> administrators.
        </p>
        <div>
          <a href="../started/index.php" class="btn btn-primary btn-lg mr-2">Get Started</a>
          <a href="#" class="btn btn-secondary btn-lg">Learn More</a>
        </div>
    </div>
 </div>

 <!-- Key Features Section -->
 <section class="section" id="section">
    <div class="container">
        <h2 class="section-title">Key Features</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <h5>Attendance Tracking</h5>
                    <p>Track student attendance in real-time with instant updates.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <h5>Data Security</h5>
                    <p>Keep student data safe with top-level encryption and secure servers.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <h5>Reports & Analytics</h5>
                    <p>Generate detailed reports and insights with just a few clicks.</p>
                </div>
            </div>
        </div>
    </div>
 </section>
 <hr>
 <br>
 <br>
 <br>

 <!-- How It Works Section -->
 <section class="section">
      <div class="container">
          <h2 class="section-title">How It Works</h2>
          <div class="row">
              <div class="col-md-4 mb-4">
                  <div class="step-card">
                      <h1>1</h1>
                      <h5>Create an Account</h5>
                      <p>Sign up as an admin or teacher to manage your college’s attendance.</p>
                  </div>
              </div>
              <div class="col-md-4 mb-4">
                  <div class="step-card">
                      <h1>2</h1>
                      <h5>Add Students</h5>
                      <p>Easily upload student details and organize them by class or group.</p>
                  </div>
              </div>
              <div class="col-md-4 mb-4">
                  <div class="step-card">
                      <h1>3</h1>
                      <h5>Manage Attendance</h5>
                      <p>Take attendance daily and generate reports anytime.</p>
                  </div>
              </div>
          </div>
      </div>
  </section>

    <!-- About us -->
  <div class="container about-section" id="about">
    <h2 class="text-center mt-5">About Us</h2>
    <p>
        Welcome to <strong>AttendMaster</strong>, where innovation meets excellence. We are a dynamic organization committed to delivering exceptional services and cutting-edge solutions that drive progress and create lasting value. With a passion for excellence and a customer-centric approach, we strive to exceed expectations through innovation, collaboration, and integrity.
    </p>
    <p>
        Founded on the principles of trust and transparency, we have built a reputation for reliability and success. Our team of experienced professionals brings diverse expertise and a shared commitment to pushing the boundaries of possibility. By embracing the latest technologies and industry best practices, we provide tailored solutions that empower businesses and individuals to achieve their goals.
    </p>
    <p>
        At <strong>AttendMaster</strong>, we believe in fostering long-term partnerships built on mutual respect and shared success. Our customer-focused philosophy ensures personalized service, with every project managed with precision, care, and attention to detail. We are proud to be a trusted partner to our clients, helping them navigate challenges and seize new opportunities.
    </p>
</div>
<br>
<br>
<br>

 
 <!-- Contact Us Section -->
 <section class="contact-section card" id="contact" style="">
  <div class="container">
      <h2 class="text-center" style="margin-top: -20px;">Contact Us</h2>
      <div class="row">
          <!-- Contact Form -->
          <div class="col-md-8 mx-auto">
              <form>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                      </div>
                      <div class="form-group col-md-6">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="message">Message</label>
                      <textarea class="form-control" id="message" rows="5" placeholder="Your Message" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Send Message</button>
              </form>
          </div>
      </div>
  </div>
  </section>


  <!-- Footer Section -->
  <footer class="footer">
      <div class="container">
          <div class="row">
              <!-- Footer Links -->
              <div class="col-md-3 mb-4">
                  <h5>Quick Links</h5>
                  <ul class="list-unstyled">
                      <li><a href="#home">Home</a></li>
                      <li><a href="#about">About</a></li>
                      <li><a href="#contact">Contact</a></li>
                      <li><a href="#features">Features</a></li>
                  </ul>
              </div>
              <!-- Contact Information -->
            <div class="col-md-6 mb-4">
                <h5>Contact</h5>
                <p>Email: contact@attendance.com</p>
                <p>Phone: +1 (123) 456-7890</p>
                <p>&copy; 2024 Student Attendance System. All Rights Reserved.</p>
            </div>
        </div>
    </div>
  </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>