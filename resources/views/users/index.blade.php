@include('users.common.head')

<!-- ======= Hero Section ======= -->
<div id="hero" class="hero route bg-image" style="background-image: url({{asset('assets/img/background.webp')}}">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">LightWebx</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Designers, Developers, Freelancers, Engineers"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="{{asset('assets/img/logo.webp')}}" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>LightWebx</span></p>
                        <p><span class="title-s">Email: </span> <span>lightwebx@gmail.com</span></p>
                        <p><span class="title-s">Phone: </span> <span>+975-17959259</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skills</p>
                    <span>Problem Solving</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Creativity</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Client-Focused</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Attention to Detail</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Communication</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About us
                      </h5>
                    </div>
                    <p class="lead">
                        Welcome to our innovative web development company, where creativity and functionality converge seamlessly.
                        Our team's expertise is exemplified by our commitment to crafting online experiences that resonate with your audience.
                    </p>
                    <p class="lead">
                        At our core, we embrace the artistry of design and the precision of technology.
                        This balance allows us to deliver websites that not only captivate visually but also perform
                        flawlessly. Our solutions are more than just code – they're a testament to our dedication to excellence.

                    </p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <p class="subtitle-a">
                Check out the services I provide below
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
              <a class="nav-link scrollto" href="/#contact">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-briefcase"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Simple Web Design</h2>
                <p class="s-description text-center ">
                  We understand that not every project requires complex features or ongoing updates,
                    which is why we've crafted this service to suit those seeking a
                    clean and straightforward online presence of your needs.
                </p>
              </div>
                <div>
                    <h4>Cost: Nu. 10,000</h4>
                </div>
            </div>
              </a>
          </div>
          <div class="col-md-4">
              <a class="nav-link scrollto" href="/#contact">
              <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Intermediate Web Development</h2>
                <p class="s-description text-center">
                    We bridge the gap between simple websites and complex web applications,
                    offering a range of features and functionalities that cater to your growing needs.
                </p>
              </div>
                <div>
                    <h4>Cost: Nu. 15,000 </h4>
                </div>
            </div>
              </a>
          </div>
          <div class="col-md-4">
              <a class="nav-link scrollto" href="/#contact">
              <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-bar-chart"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Complex Web Development</h2>
                <p class="s-description text-center">
                    we turn ambitious digital visions into fully-fledged, cutting-edge web solutions.
                    If you're looking for a sophisticated, feature-rich, and highly customized web experience, this service is
                    perfect for you.
                </p>
              </div>
                <div>
                    <h4>Cost: Nu. 30,000</h4>
                </div>
            </div>
              </a>
          </div>



        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url('assets/img/counters-bg.jpg')">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-people"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-award"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">Competitions  WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->



      <!-- ======= Portfolio Section ======= -->
      <section id="work" class="portfolio-mf sect-pt4 route">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12">
                      <div class="title-box text-center">
                          <h3 class="title-a">
                              Portfolio
                          </h3>
                          <p class="subtitle-a">
                              Please check out my previous work below
                          </p>
                          <div class="line-mf"></div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  @foreach($event as $events)

                  <div class="col-md-4">
                      <div class="work-box">
                          <a href="event_images/{{$events->image}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                              <div class="work-img">
                                  <img src="event_images/{{$events->image}}" alt="" class="img-fluid">
                              </div>
                          </a>
                          <div class="work-content">
                              <div class="row">
                                  <div class="col-sm-8">
                                      <h2 class="w-title">{{$events->title}}</h2>
                                      <div class="w-more">
                                          <span class="w-ctegory">Web Design</span>
                                      </div>
                                  </div>
                                  <div class="col-sm-4">
                                      <div class="w-like">
                                          <a href="{{$events->url}}" target="_blank"> <span class="bi bi-plus-circle"></span></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endforeach

              </div>
          </div>
      </section><!-- End Portfolio Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message
                      </h5>
                    </div>
                    <div>
                      <form action="/message" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone No" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">

                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                          Whether you have a question, a project idea, or just want to say hello, we're here and eager to connect.
                          Reach out to us today, and let's start a conversation that could lead to something extraordinary. Your journey towards success begins with a simple message.
                      </p>
                      <ul class="list-ico">
                        <li><span class="bi bi-phone"></span>+97517959259</li>
                        <li><span class="bi bi-envelope"></span> lightwebx@gmail.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="https://www.facebook.com/lightwebx" target="_blank"><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                        <li><a href="https://www.instagram.com/lightwebx/" target="_blank"><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                        <li><a href="https://twitter.com/bishaldhakal133" target="_blank"><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                        <li><a href="https://www.linkedin.com/in/bishal-dhakal-582729204/" target="_blank"><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                        <li><a href="https://www.fiverr.com/bishaldhakal353" target="_blank"><span class="ico-circle"><img src="https://cdn-images-1.medium.com/max/1200/1*Xa26ULIpZTTP1hN_ReUXVQ.png" width="30" height="30"></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @include('users.common.footer')
