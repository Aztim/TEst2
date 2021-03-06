<?php require 'PHPMailer/PHPMailerAutoload.php';?>
<?php
function Redirect_to($New_Location)
{header("Location:" . $New_Location);
    exit;
}

// call the contact() function if contact_btn is clicked
if (isset($_POST['contact_btn'])) {
    contact();
}

function contact()
{
    if (isset($_POST["contact_btn"])) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];

        // Email Functionality

        date_default_timezone_set('Etc/UTC');

        $mail = new PHPMailer();

        $mail->setFrom($_POST['email']);
        $mail->addAddress('barboza-82@mail.ru');

        // The subject of the message.
        $mail->Subject = 'Received Message From Client ' . $name;

        $message = '<html><body>';

        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

        $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";

        $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";

        $message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";

        $message .= "<tr><td><strong>Message</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";

        $message .= "</table>";
        $message .= "</body></html>";

        $mail->Body = $message;

        $mail->isHTML(true);

        if ($mail->send()) {
            Redirect_to("thanks.html");
        } else {
            Redirect_to("index.php");
        }

    } //Ending of Submit Button If-Condition
    //

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
      Professional Air Duct Cleaning Services in Los Angeles
    </title>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body id="home">
    <!--Header-->
    <header>
      <!-- Navbar -->
      <nav
        class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar"
      >
        <div class="container">
          <a class="logotext navbar-brand font-weight-bolder title" href="/"
            >Green Group</a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="list-unstyled navbar-nav mr-auto navleft">
              <li class="nav-item ml-4 mb-0">
                <a class="nav-link textcolor font-weight-normal" href="#home">
                  Home
                </a>
              </li>
              <li class="nav-item ml-4">
                <a class="nav-link textcolor font-weight-normal" href="#about">
                  About
                </a>
              </li>
              <li class="nav-item ml-4">
                <a
                  class="nav-link textcolor font-weight-normal"
                  href="#services"
                >
                  Services
                </a>
              </li>
              <li class="nav-item ml-4">
                <a class="nav-link textcolor font-weight-normal" href="#price">
                  Price
                </a>
              </li>
              <li class="nav-item ml-4">
                <a
                  class="nav-link textcolor font-weight-normal"
                  href="#testimonials"
                >
                  Testimonial
                </a>
              </li>
              <li class="nav-item ml-4">
                <a class="nav-link textcolor font-weight-normal" href="#home">
                  Contact
                </a>
              </li>
            </ul>
            <!-- Social Icon  -->
            <ul class="navbar-nav nav-flex-icons">
              <li class="nav-item">
                <a class="nav-link text-info">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary">
                  <i class="fab fa-twitter title"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger">
                  <i class="fab fa-instagram title"></i>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a
                  class="btn bookhover btn-outline-success btn-rounded waves-effect font-weight-bold btn-sm"
                  href="tel:+923246273666"
                  data-offset="90"
                  >03246273666</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->

      <!-- Full Page Intro -->
      <div
        class="view"
        style="
          background-image: url('img/Air-duct-mainPic.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        "
      >
        <!-- Mask & flexbox options-->
        <div
          class="mask rgba-black-light d-flex justify-content-center align-items-center"
        >
          <!-- Content -->
          <div class="container">
            <!--Grid row-->
            <div class="row mt-5">
              <!--Grid column-->
              <div
                class="col-md-7 mb-5 mt-md-0 mt-5 white-text text-center text-md-left"
              >
                <h1
                  class="h1-responsive font-weight-bold wow fadeInLeft"
                  style="padding-top: 18%;"
                  data-wow-delay="0.3s"
                >
                  Professional Air Duct <br />
                  Cleaning Services in Los Angeles
                </h1>

                <h4 class="mb-3 pt-4 pb-4 wow fadeInLeft" data-wow-delay="0.3s">
                  Our summer special brings the heat???
                </h4>
                <a
                  class="btn bookhover2 btn-outline-white btn-rounded wow fadeInLeft"
                  data-wow-delay="0.3s"
                  href="#about"
                  >About Us</a
                >
              </div>
              <!--Grid column-->
              <!--Grid column-->
              <div class="col-md-5 col-xl-5 mb-4">
                <!--Form-->
                <div class="card wow fadeInRight" data-wow-delay="0.3s">
                  <form name="Contact Form" method="post" action="index.php" >
                    <div
                      class="card-body z-depth-2"
                      style="background-color: white;"
                    >
                      <!--Header-->
                      <div class="text-center">
                        <h3 class="dark-grey-text">
                          <strong>Book Now:</strong>
                        </h3>
                        <hr />
                      </div>
                      <!--Body-->
                      <div class="md-form">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input
                          type="text"
                          id="form3"
                          class="form-control"
                          name="name"
                          required
                        />
                        <label class="dark-grey-text" for="form3">Name</label>
                      </div>
                      <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input
                          type="email"
                          id="form2"
                          class="form-control"
                          name="email"
                          required
                        />
                        <label class="dark-grey-text" for="form2">Email</label>
                      </div>
                      <div class="md-form">
                        <i class="fas fa-phone prefix grey-text"></i>
                        <input
                          type="number"
                          id="form5"
                          class="form-control"
                          name="phone"
                          required
                        />
                        <label class="dark-grey-text" for="form5">Phone</label>
                      </div>
                      <!--Textarea with icon prefix-->
                      <div class="md-form">
                        <i class="fas fa-pencil-alt prefix grey-text"></i>
                        <textarea
                          type="text"
                          id="form8"
                          class="md-textarea form-control"
                          rows="3"
                          name="message"
                          required
                        ></textarea>
                        <label class="dark-grey-text" for="form8"
                          >Message</label
                        >
                      </div>
                      <div class="text-center mt-3">
                        <button
                          type="submit"
                          class="btn bookhover btn-outline-success btn-rounded waves-effect"
                          name="contact_btn"
                        >
                          Book an appointment
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
                <!--/.Form-->
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </div>
          <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
      </div>
      <!-- Full Page Intro -->
    </header>
    <!--Header-->

    <!-- Main -->
    <main>
      <!-- Our $249 cleaning package -->
      <div style="background-color: #ffffff;">
        <div class="container pt-5 pb-5 px-5">
          <!-- Section -->
          <section>
            <style>
              /* Steps */
              .step {
                list-style: none;
                margin: 0;
              }

              .step-element {
                display: flex;
                padding: 1rem 0;
              }

              .step-number {
                position: relative;
                width: 7rem;
                flex-shrink: 0;
                text-align: center;
              }

              .step-number .number {
                color: #fff;
                background-color: #00c851;
                font-size: 1.5rem;
              }

              .step-number .number {
                width: 30px;
                height: 30px;
                line-height: 30px;
              }

              .number {
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: 38px;
                border-radius: 10rem;
              }

              .step-number::before {
                content: '';
                position: absolute;
                left: 50%;
                top: 48px;
                bottom: -2rem;
                margin-left: -1px;
                border-left: 2px dashed #eaeff4;
              }

              .step .step-element:last-child .step-number::before {
                bottom: 1rem;
              }
            </style>

            <h3
              class="font-weight-bold text-center dark-grey-text pb-2 wow fadeInUp slow"
            >
              Our $249 cleaning package is now just $99
            </h3>
            <hr class="w-header my-4" />

            <div class="row align-items-center">
              <div class="col-lg-6 col-md-6 mb-4 mb-md-0 wow fadeInLeft slow">
                <!--Image-->
                <div class="z-depth-1-half">
                  <img
                    src="https://image.freepik.com/free-photo/technician-service-removing-air-filter-air-conditioner-cleaning_35076-3617.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <a href="#">
                    <div class="mask rgba-white-light"></div>
                  </a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 mb-4 wow fadeInRight slow">
                <p class="lead pl-5 text-muted pt-2 mb-5">
                  A thorough cleaning of a heater or AC Unit with unlimited
                  vents and FREE inspection of your:
                </p>
                <ol class="step pl-0">
                  <li class="step-element pb-0">
                    <div class="step-number">
                      <span class="number">1</span>
                    </div>
                    <div class="step-excerpt">
                      <h6 class="font-weight-bold dark-grey-text mb-3">
                        Entire heating system
                      </h6>
                    </div>
                  </li>
                  <li class="step-element pb-0">
                    <div class="step-number">
                      <span class="number">2</span>
                    </div>
                    <div class="step-excerpt">
                      <h6 class="font-weight-bold dark-grey-text mb-3">
                        Air conditioning system
                      </h6>
                    </div>
                  </li>

                  <li class="step-element pb-0">
                    <div class="step-number">
                      <span class="number">3</span>
                    </div>
                    <div class="step-excerpt">
                      <h6 class="font-weight-bold dark-grey-text mb-3">
                        Actual air unit for efficiency and air quality
                      </h6>
                    </div>
                  </li>
                  <li class="step-element pb-0">
                    <div class="step-number">
                      <span class="number">4</span>
                    </div>
                    <div class="step-excerpt">
                      <h6 class="font-weight-bold dark-grey-text mb-3">
                        Dryer vent (common fire hazard)
                      </h6>
                    </div>
                  </li>
                </ol>
              </div>
            </div>
          </section>
          <!-- Section -->
        </div>
      </div>
      <!-- Our $249 cleaning package -->

      <!-- Why should you do it -->
      <div
        class="pt-5 pb-5 mt-5 wow fadeInUp"
        style="background-color: #eeeeee;"
      >
        <!--Section: Content-->
        <section class="dark-grey-text text-center">
          <!-- Section heading -->
          <h3 class="font-weight-bold mb-4 pb-2">Why should you do it</h3>
          <!-- Section description -->
          <p class="grey-text font-weight-bolder w-responsive mx-auto mb-3">
            Clean air ducts = an investment in your family???s physical and
            financial health
          </p>

          <a
            type="button"
            class="btn bookhover mb-2 btn-outline-success btn-rounded waves-effect"
            href="#home"
          >
            Book an appointment
          </a>

          <!-- Grid row -->

          <!-- Grid row -->
        </section>
        <!--Section: Content-->
      </div>
      <!-- Why should you do it-->

      <!-- ABOUT US -->
      <div id="about" style="background-color: #ffffff;">
        <div class="container pt-5 mt-5 pb-5">
          <!-- Section -->
          <section>
            <h3
              class="font-weight-bold text-center dark-grey-text pt-5 pb-2 wow fadeInDown slow"
            >
              About us
            </h3>
            <hr class="w-header my-4" />
            <p class="lead text-center font-weight-bolder text-muted pt-2 mb-5">
              Why choose us for your air ducts needs?
            </p>

            <div class="row">
              <div class="col-md-6 col-xl-3 mb-4 wow fadeInLeft slow">
                <div class="card text-center bg-success text-white">
                  <div class="card-body">
                    <p class="mt-4 pt-2">
                      <i class="fas fa-hand-holding-heart fa-4x"></i>
                    </p>
                    <h5 class="font-weight-normal my-4 py-2">
                      <a class="text-white">Trust</a>
                    </h5>
                    <p class="mb-4">
                      10-year legacy of building trust and relationships in LA
                      County
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-xl-3 mb-4 wow fadeInUp slow">
                <div class="card text-center">
                  <div class="card-body">
                    <p class="mt-4 pt-2">
                      <i class="fas fa-ribbon fa-4x grey-text"></i>
                    </p>
                    <h5 class="font-weight-normal my-4 py-2">
                      <a class="dark-grey-text">Best</a>
                    </h5>
                    <p class="text-muted pt-2 pb-3 mb-4">
                      We only use the best professional technicians
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-xl-3 mb-4 wow fadeInUp slow">
                <div class="card text-center deep-purple lighten-1 text-white">
                  <div class="card-body">
                    <p class="mt-4 pt-2">
                      <i class="fas fa-history fa-4x"></i>
                    </p>
                    <h5 class="font-weight-normal my-4 py-2">
                      <a class="text-white">On Time</a>
                    </h5>
                    <p class="pt-2 pb-3 mb-4">
                      You can count on us: we???re on time, every time.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-xl-3 wow fadeInRight slow">
                <div class="card text-center">
                  <div class="card-body">
                    <p class="mt-4 pt-2">
                      <i class="fas fa-city fa-4x grey-text"></i>
                    </p>
                    <h5 class="font-weight-normal my-4 py-2">
                      <a class="dark-grey-text">Business</a>
                    </h5>
                    <p class="text-muted pt-2 pb-3 mb-4">
                      We???re a locally owned and operated business
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Section -->
        </div>
      </div>
      <!-- ABOUT US -->

      <!-- Don???t take our word for it -->
      <div class="pt-5 pb-5 mt-5" style="background-color: #eeeeee;">
        <!--Section 3: Content-->
        <section class="dark-grey-text text-center">
          <!-- Section heading -->
          <h3 class="font-weight-bold mb-4 pb-2">
            Don???t take our word for it, see for yourself
          </h3>

          <div class="container">
            <div class="row pt-2">
              <div
                class="col-lg-4 col-md-4 mb-4 wow fadeInLeft slow"
                style="visibility: visible; animation-name: fadeInLeft;"
              >
                <!-- Card -->
                <div
                  class="card card-image cardfixing"
                  style="
                    background-image: url(img/Air-Duct-CTA-01-161024-580e59303b32c.jpg);
                  "
                >
                  <!-- Content -->
                  <div
                    class="text-white cardmask text-center rgba-black-light py-5 px-4"
                  >
                    <div>
                      <h3
                        class="card-title cardh pt-5 pb-5 font-weight-normal"
                      ></h3>
                    </div>
                  </div>
                  <!-- Content -->
                </div>
                <!-- Card -->
              </div>
              <div
                class="col-lg-4 col-md-4 mb-4 wow fadeInUp slow"
                style="visibility: visible;"
              >
                <!-- Card -->
                <div
                  class="card card-image cardfixing"
                  style="background-image: url(img/Before-After-1.jpg);"
                >
                  <!-- Content -->
                  <div
                    class="text-white cardmask text-center rgba-black-light py-5 px-4"
                  >
                    <div>
                      <h3
                        class="card-title cardh pt-5 pb-5 font-weight-normal"
                      ></h3>
                    </div>
                  </div>
                  <!-- Content -->
                </div>
                <!-- Card -->
              </div>
              <div
                class="col-lg-4 col-md-4 mb-4 wow fadeInRight slow"
                style="visibility: visible;"
              >
                <!-- Card -->
                <div
                  class="card card-image cardfixing"
                  style="background-image: url(img/Before_After.webp);"
                >
                  <!-- Content -->
                  <div
                    class="text-white cardmask text-center rgba-black-light py-5 px-4"
                  >
                    <div>
                      <h3
                        class="card-title cardh pt-5 pb-5 font-weight-normal"
                      ></h3>
                    </div>
                  </div>
                  <!-- Content -->
                </div>
                <!-- Card -->
              </div>
            </div>

            <a
              type="button"
              class="btn bookhover mb-2 btn-outline-success btn-rounded waves-effect"
              href="#home"
            >
              Book an appointment
            </a>
          </div>

          <!-- Grid row -->

          <!-- Grid row -->
        </section>
        <!--Section: Content-->
      </div>
      <!-- Don???t take our word for it -->

      <!-- Additional Services -->
      <div
        id="services"
        class="mt-5 pt-5 pb-5"
        style="background-color: #ffffff;"
      >
        <div class="container mt-5">
          <!--Section: Content-->
          <section class="dark-grey-text text-center">
            <!-- Section heading -->
            <h2 class="font-weight-bold mb-4 pb-2 wow fadeInDown slow">
              Additional Services
            </h2>
            <!-- Section description -->
            <p
              class="text-center font-weight-bolder mx-auto w-responsive mb-5 wow fadeInLeft slow"
            >
              If you???re feeling like going all-in on summer cleaning,<br />
              we offer a wide spectrum of additional services
            </p>

            <!-- Grid row -->
            <div class="row">
              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-4 wow fadeInLeft slow">
                <!-- Featured image -->
                <div class="rounded z-depth-2 mb-4">
                  <img
                    class="img-fluid"
                    src="https://production-next-images-cdn.thumbtack.com/i/302057235946324148/width/640.jpeg"
                    alt="Sample image"
                    style="height: 200px;"
                  />
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Category -->

                <!-- Post title -->
                <h6 class="font-weight-bold mb-3">
                  <strong>Mold cleaning and removal </strong>
                </h6>
              </div>
              <!-- Grid column -->

              <div class="col-lg-4 col-md-6 mb-4 wow fadeInDown slow">
                <!-- Featured image -->
                <div class="rounded z-depth-2 mb-4">
                  <img
                    class="img-fluid"
                    src="data:image/jpeg;base64,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"
                    alt="Sample image"
                    style="width: 100%; height: 200px;"
                  />
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Category -->

                <!-- Post title -->
                <h6 class="font-weight-bold mb-3">
                  <strong>Odor removal</strong>
                </h6>
              </div>

              <div class="col-lg-4 col-md-6 mb-4 wow fadeInRight slow">
                <!-- Featured image -->
                <div class="rounded z-depth-2 mb-4">
                  <img
                    class="img-fluid"
                    src="data:image/jpeg;base64,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"
                    alt="Sample image"
                    style="height: 200px; width: 100%;"
                  />
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Category -->

                <!-- Post title -->
                <h6 class="font-weight-bold mb-3">
                  <strong>Medical Grade Cleaning</strong>
                </h6>
              </div>

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-4 wow fadeInLeft slow">
                <!-- Featured image -->
                <div class="rounded z-depth-2 mb-4">
                  <img
                    class="img-fluid"
                    src="data:image/jpeg;base64,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"
                    alt="Sample image"
                    style="height: 200px;"
                  />
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Category -->

                <!-- Post title -->
                <h6 class="font-weight-bold mb-3">
                  <strong>Dryer Vent Cleaning </strong>
                </h6>
              </div>
              <!-- Grid column -->

              <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp slow">
                <!-- Featured image -->
                <div class="rounded z-depth-2 mb-4">
                  <img
                    class="img-fluid"
                    src="data:image/jpeg;base64,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"
                    alt="Sample image"
                    style="height: 200px; width: 100%;"
                  />
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Category -->

                <!-- Post title -->
                <h6 class="font-weight-bold mb-3">
                  <strong>Chimney Cleaning </strong>
                </h6>
              </div>

              <div class="col-lg-4 col-md-6 mb-4 wow fadeInRight slow">
                <!-- Featured image -->
                <div class="rounded z-depth-2 mb-4">
                  <img
                    class="img-fluid"
                    src="data:image/jpeg;base64,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"
                    alt="Sample image"
                    style="width: 100%; height: 200px;"
                  />
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Category -->

                <!-- Post title -->
                <h6 class="font-weight-bold mb-3">
                  <strong>Furnace Inspection and cleaning </strong>
                </h6>
              </div>
            </div>
            <!-- Grid row -->
          </section>
          <!--Section: Content-->
        </div>
      </div>
      <!-- Additional Services -->

      <!-- THE CLEAN AIR DUCT DIFFERENCE -->
      <div style="background-color: #eeeeee;">
        <div class="container mt-5 pt-5 pb-5">
          <style>
            .card-body {
              border-bottom-left-radius: inherit !important;
              border-bottom-right-radius: inherit !important;
            }
          </style>
          <section class="dark-grey-text text-center">
            <!-- Section heading -->
            <h3 class="font-weight-bold pt-5 mb-4 pb-4 wow fadeInDown slow">
              THE CLEAN AIR DUCT DIFFERENCE
            </h3>
            <div class="row">
              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-4 wow fadeInLeft slow">
                <!-- Card -->
                <div class="card card-cascade wider card-ecommerce">
                  <!-- Card image -->
                  <div class="view-cascade">
                    <img
                      src="data:image/jpeg;base64,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"
                      class="card-img-top"
                      alt="sample photo"
                      style="height: 245px;"
                    />
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card image -->
                  <!-- Card content -->
                  <div
                    class="card-body card-body-cascade text-center pb-0"
                    style="height: 330px;"
                  >
                    <!-- Title -->
                    <h5 class="card-title">
                      <strong class="logotext">
                        A Cleaner Home
                      </strong>
                    </h5>
                    <!-- Description -->
                    <p class="card-text pb-3 pt-4">
                      Dust inevitably settles in airducts over time. When your
                      system powers up, dust spreads throughout your home,
                      causing allergies and dirtiness.
                    </p>
                    <!-- Card footer -->
                    <div class="mt-4 mb-4">
                      <a
                        type="button"
                        class="btn bookhover mb-2 btn-outline-success btn-rounded waves-effect"
                        href="#home"
                      >
                        Book an appointment
                      </a>
                    </div>
                  </div>
                  <!-- Card content -->
                </div>
                <!-- Card -->
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp slow">
                <!-- Card -->
                <div class="card card-cascade wider card-ecommerce">
                  <!-- Card image -->
                  <div class="view-cascade">
                    <img
                      src="https://techcrunch.com/wp-content/uploads/2014/11/shutterstock_148264043.jpg?w=730&crop=1"
                      style="height: 245px;"
                      class="card-img-top"
                      alt="sample photo"
                    />
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card image -->
                  <!-- Card content -->
                  <div
                    class="card-body card-body-cascade text-center pb-0"
                    style="height: 330px;"
                  >
                    <!-- Title -->
                    <h5 class="card-title">
                      <strong class="logotext">
                        Better Air Quality
                      </strong>
                    </h5>
                    <!-- Description -->
                    <p class="card-text pt-2 pb-2">
                      Contaminants, microorganisms, pet dander, mildew and other
                      pollutants also collect in your airducts. By periodically
                      getting your airducts cleaned, you???re looking out for your
                      family???s health.
                    </p>
                    <!-- Card footer -->
                    <div class="mt-4 mb-4">
                      <a
                        type="button"
                        class="btn bookhover mb-2 btn-outline-success btn-rounded waves-effect"
                        href="#home"
                      >
                        Book an appointment
                      </a>
                    </div>
                  </div>
                  <!-- Card content -->
                </div>
                <!-- Card -->
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-4 col-md-12 mb-4 wow fadeInRight slow">
                <!-- Card -->
                <div class="card card-cascade wider card-ecommerce">
                  <!-- Card image -->
                  <div class="view-cascade">
                    <img
                      src="data:image/jpeg;base64,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"
                      style="height: 245px;"
                      class="card-img-top"
                      alt="sample photo"
                    />
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card image -->
                  <!-- Card content -->
                  <div
                    class="card-body card-body-cascade text-center pb-0"
                    style="height: 330px;"
                  >
                    <!-- Title -->
                    <h5 class="card-title">
                      <strong class="logotext">
                        Lower Electricity Bill
                      </strong>
                    </h5>
                    <!-- Description -->
                    <p class="card-text">
                      When ductwork and registers build-up dust and grime, they
                      do not operate as efficiently. Anytime air supply is even
                      partially blocked, your system has to work harder to
                      accomplish the same outcome. Cleaner systems operate more
                      efficiently
                    </p>
                    <!-- Card footer -->
                    <div class="mb-4">
                      <a
                        type="button"
                        class="btn bookhover mb-2 btn-outline-success btn-rounded waves-effect"
                        href="#home"
                      >
                        Book an appointment
                      </a>
                    </div>
                  </div>
                  <!-- Card content -->
                </div>
                <!-- Card -->
              </div>
              <!-- Grid column -->
            </div>
          </section>
        </div>
      </div>
      <!-- THE CLEAN AIR DUCT DIFFERENCE -->

      <!-- Our pricing plans -->
      <div id="price" style="background-color: #ffffff;">
        <div class="container pt-5 mt-5 pb-5">
          <section class="text-center">
            <!-- Section heading -->
            <h3
              class="font-weight-bold dark-grey-text pt-5 pb-2 mb-4 wow fadeInDown slow"
            >
              Our pricing plans
            </h3>
            <!-- Section description -->
            <p
              class="text-muted font-weight-bolder w-responsive mx-auto mb-5 wow fadeInLeft"
            >
              With our summer sale, you can have the same peace of mind for only
              $99
            </p>

            <!-- Grid row -->
            <div class="row">
              <!-- Grid column -->
              <div class="col-lg-4 col-md-12 mb-4 wow fadeInLeft slow">
                <!-- Card -->
                <div
                  class="card card-image"
                  style="
                    background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(6).jpg');
                  "
                >
                  <!-- Pricing card -->
                  <div
                    class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded"
                  >
                    <!-- Content -->
                    <div class="card-body">
                      <h5>Basic</h5>

                      <!-- Price -->
                      <div class="price pt-4">
                        <h2 class="mb-0" style="font-size: 65px;">$200</h2>
                      </div>

                      <ul class="striped mb-0">
                        <li>
                          <p><strong>Talk about a hot deal</strong></p>
                        </li>
                      </ul>
                      <a class="btn bookhover2 btn-outline-success" href="#home"
                        >Book an appointment</a
                      >
                    </div>
                    <!-- Content -->
                  </div>
                  <!-- Pricing card -->
                </div>
                <!-- Card -->
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp slow">
                <!-- Card -->
                <div
                  class="card card-image"
                  style="
                    background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(6).jpg');
                  "
                >
                  <!-- Pricing card -->
                  <div
                    class="text-white text-center pricing-card d-flex align-items-center rgba-teal-strong py-3 px-3 rounded"
                  >
                    <!-- Content -->
                    <div class="card-body">
                      <h5>Pro</h5>

                      <!-- Price -->
                      <div class="price pt-4">
                        <h2 class="mb-0" style="font-size: 65px;">$150</h2>
                      </div>

                      <ul class="striped mb-0">
                        <li>
                          <p><strong>Talk about a hot deal</strong></p>
                        </li>
                      </ul>
                      <a class="btn bookhover2 btn-outline-success" href="#home"
                        >Book an appointment</a
                      >
                    </div>
                    <!-- Content -->
                  </div>
                  <!-- Pricing card -->
                </div>
                <!-- Card -->
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-4 wow fadeInRight slow">
                <!-- Card -->
                <div
                  class="card card-image"
                  style="
                    background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(6).jpg');
                  "
                >
                  <!-- Pricing card -->
                  <div
                    class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded"
                  >
                    <!-- Content -->
                    <div class="card-body">
                      <h5>Enterprise</h5>

                      <!-- Price -->
                      <div class="price pt-4">
                        <h2 class="mb-0" style="font-size: 65px;">$300</h2>
                      </div>

                      <ul class="striped mb-0">
                        <li>
                          <p><strong>Talk about a hot deal</strong></p>
                        </li>
                      </ul>
                      <a class="btn bookhover2 btn-outline-success" href="#home"
                        >Book an appointment</a
                      >
                    </div>
                    <!-- Content -->
                  </div>
                  <!-- Pricing card -->
                </div>
                <!-- Card -->
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </section>
        </div>
      </div>
      <!-- Our pricing plans -->

      <!-- Testimonials -->
      <div
        id="testimonials"
        class="mt-5 pt-5 pb-5 wow fadeInUp slow"
        style="background-color: #eeeeee;"
      >
        <section class="text-center pt-5 dark-grey-text">
          <!-- Section heading -->
          <h3 class="font-weight-bold mb-4 pb-2">Testimonials</h3>

          <div class="wrapper-carousel-fix">
            <!-- Carousel Wrapper -->
            <div
              id="carousel-example-1"
              class="carousel no-flex testimonial-carousel slide carousel-fade"
              data-ride="carousel"
              data-interval="false"
            >
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img
                        src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg"
                        class="rounded-circle img-fluid"
                        alt="First sample avatar image"
                      />
                    </div>
                    <!--Content-->
                    <div class="star">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                    </div>

                    <p>
                      <i class="fas fa-quote-left"></i> Nemo enim ipsam
                      voluptatem quia voluptas sit aspernatur aut odit aut
                      fugit, sed quia consequuntur magni dolores eos qui ratione
                      voluptatem sequi nesciunt. Neque porro quisquam est, qui
                      dolorem ipsum quia dolor sit amet, consectetur, adipisci
                      velit, sed quia non numquam eius modi tempora incidunt ut
                      labore.
                    </p>
                    <h4 class="font-weight-bold my-3">Damian B.</h4>
                    <br />
                  </div>
                </div>
                <!--First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img
                        src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
                        class="rounded-circle img-fluid"
                        alt="Second sample avatar image"
                      />
                    </div>
                    <!--Content-->
                    <div class="star">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                    </div>

                    <p>
                      <i class="fas fa-quote-left"></i> Nemo enim ipsam
                      voluptatem quia voluptas sit aspernatur aut odit aut
                      fugit, sed quia consequuntur magni dolores eos qui ratione
                      voluptatem sequi nesciunt. Neque porro quisquam est, qui
                      dolorem ipsum quia dolor sit amet, consectetur, adipisci
                      velit, sed quia non numquam eius modi tempora incidunt ut
                      labore.
                    </p>
                    <h4 class="font-weight-bold my-3">Leilani V.</h4>
                    <br />
                  </div>
                </div>
                <!--Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img
                        src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg"
                        class="rounded-circle img-fluid"
                        alt="Third sample avatar image"
                      />
                    </div>
                    <!--Content-->
                    <!--Review-->
                    <div class="star">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                    </div>

                    <p>
                      <i class="fas fa-quote-left"></i> Nemo enim ipsam
                      voluptatem quia voluptas sit aspernatur aut odit aut
                      fugit, sed quia consequuntur magni dolores eos qui ratione
                      voluptatem sequi nesciunt. Neque porro quisquam est, qui
                      dolorem ipsum quia dolor sit amet, consectetur, adipisci
                      velit, sed quia non numquam eius modi tempora incidunt ut
                      labore.
                    </p>
                    <h4 class="font-weight-bold my-3">Antonio N.</h4>
                    <br />
                  </div>
                </div>
                <!--Third slide-->
              </div>
              <!--Slides-->
              <!--Controls-->
              <a
                class="carousel-control-prev left carousel-control"
                href="#carousel-example-1"
                role="button"
                data-slide="prev"
              >
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a
                class="carousel-control-next right carousel-control"
                href="#carousel-example-1"
                role="button"
                data-slide="next"
              >
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--Controls-->
            </div>
            <!-- Carousel Wrapper -->
          </div>
        </section>
      </div>
      <!-- Testimonials -->

      <!-- OUR CLIENTS -->
      <div class="container my-5">
        <section class="text-center py-4">
          <!-- Logo carousel -->
          <div
            id="carouselExampleSlidesOnly"
            class="carousel slide"
            data-ride="carousel"
            data-interval="1800"
          >
            <div class="carousel-inner">
              <!-- First slide -->
              <div class="carousel-item active">
                <!--Grid row-->
                <div class="row">
                  <!--First column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/5.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/First column-->

                  <!--Second column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/7.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Second column-->

                  <!--Third column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/6.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Third column-->

                  <!--Fourth column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/9.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Fourth column-->
                </div>
                <!--/Grid row-->
              </div>
              <!-- First slide -->

              <!-- Second slide -->
              <div class="carousel-item">
                <!--Grid row-->
                <div class="row">
                  <!--First column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/11.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/First column-->

                  <!--Second column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/10.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Second column-->

                  <!--Third column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/12.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Third column-->

                  <!--Fourth column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/13.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Fourth column-->
                </div>
                <!--/Grid row-->
              </div>
              <!-- Second slide -->

              <!-- Third slide -->
              <div class="carousel-item">
                <!--Grid row-->
                <div class="row">
                  <!--First column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/1a.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/First column-->

                  <!--Second column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/2a.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Second column-->

                  <!--Third column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/3a.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Third column-->

                  <!--Fourth column-->
                  <div
                    class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="https://mdbootstrap.com/img/Photos/Template/4a.png"
                      class="img-fluid px-4"
                      alt="Logo"
                    />
                  </div>
                  <!--/Fourth column-->
                </div>
                <!--/Grid row-->
              </div>
              <!-- Third slide -->
            </div>
          </div>
          <!-- Logo carousel -->
        </section>
      </div>
      <!-- OUR CLIENYS -->
    </main>

    <!-- Main -->

    <footer class="page-footer pt-5 unique-color-dark">
      <!-- Footer Links -->
      <div class="container text-center">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-6 mx-auto text-md-left">
            <!-- Links -->
            <h5
              class="font-weight-bolder text-uppercase mt-3 mb-4"
              style="color: #00c851;"
            >
              Green Group
            </h5>
            <p class="font-weight-bolder">
              We Provide Professional Air Duct Cleaning Services in Los Angeles.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none" />

          <hr class="clearfix w-100 d-md-none" />

          <!-- Grid column -->
          <div class="col-md-6 mx-auto">
            <!-- Links -->
            <h5 class="font-weight-bolder text-uppercase mt-3 mb-4">Links</h5>

            <ul class="list-unstyled">
              <li class="pb-2">
                <a class="font-weight-bolder fotterhover" href="#home">Home</a>
              </li>
              <li class="pb-2">
                <a class="font-weight-bolder fotterhover" href="#about"
                  >About</a
                >
              </li>
              <li class="pb-2">
                <a class="font-weight-bolder fotterhover" href="#services"
                  >Services</a
                >
              </li>
              <li class="pb-2">
                <a class="font-weight-bolder fotterhover" href="#price"
                  >Price</a
                >
              </li>
            </ul>
          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none" />

          <!-- Grid column -->
          <!-- <div class="col-md-4 col-sm-12 mx-auto">


            <div class="px-5">
              <form action="index.php" method="POST" class="input-group">
                <ul class="list-unstyled newsletter">
                  <li class="">
                    <div class="md-form md-outline form-lg mb-0">
                      <input
                        type="email"
                        required=""
                        class="white form-control form-control-lg"
                        name="signupemail"
                        placeholder="Email address"
                        aria-label="Your email"
                      />
                    </div>
                    <button
                      name="signup_btn"
                      type="submit"
                      class="sbbtn btn btn-block btn-lg waves-effect waves-light"
                    >
                      SUBSCRIBE
                    </button>
                  </li>
                </ul>
              </form>
            </div>
          </div> -->
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-12 pt-5">
            <div class="flex-center">
              <!-- Facebook -->
              <a class="fb-ic">
                <i
                  class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"
                >
                </i>
              </a>
              <!-- Twitter -->
              <a class="tw-ic">
                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x">
                </i>
              </a>
              <!-- Google +-->
              <a class="gplus-ic">
                <i
                  class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"
                >
                </i>
              </a>
              <!--Linkedin -->
              <a class="li-ic">
                <i
                  class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"
                >
                </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic">
                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x">
                </i>
              </a>
              <!--Pinterest-->
              <a class="pin-ic">
                <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
              </a>
            </div>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
        <!-- Grid row -->
      </div>
      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center pb-5 py-3 unique-color-dark">
        <hr class="site-footer__hr" />

        <div class="row">
          <div class="col-lg-12 pt-4 text-white">
            ?? 2020,
            <a href="#" class="fotterhover">Green Group</a>
            <a href="#" class="fotterhover">Powered by AQ</a>
          </div>
        </div>
      </div>
      <!-- Copyright -->
    </footer>

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript">
      $(function () {
        new WOW().init();
        // Add smooth scrolling to all links
        $('a').on('click', function (event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== '') {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate(
              {
                scrollTop: $(hash).offset().top,
              },
              800,
              function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              }
            );
          } // End if
        });
      });
    </script>
  </body>
</html>
