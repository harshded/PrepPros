<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="landing/faq.css">
<link rel="stylesheet" href="landing/brand.css">
<?php
include  dirname(__DIR__).'/preppros/includes/head1.php';

include  dirname(__DIR__).'/preppros/includes/head.php';

?>

</head>
<body>

<?php
include  dirname(__DIR__).'/preppros/includes/header.php';

?>


  <div class="hero-wrap js-fullheight" style="background-image: url('images/landingpage.png');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate">
          <span class="subheading">Welcome to StudyLab</span>
          <h1 class="mb-4">We Are Online Platform For Make Learn</h1>
          <p class="caps">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          <p class="mb-0"><a href="#" class="btn btn-primary">Our Course</a> <a href="#" class="btn btn-white">Learn
              More</a></p>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
      <div class="row">
        <div class="col-md-7"></div>
        <div class="col-md-5 order-md-last">
          <!-- <div class="login-wrap p-4 p-md-5"> -->
          <!-- </div> -->
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center pb-4">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <span class="subheading">Start Learning Today</span>
          <h2 class="mb-4">Browse Online Course Category</h2>
        </div>
      </div>
      <div class="row justify-content-center">
     <div class="col-md-3 col-lg-2">
        <a href="\preppros\resources.php" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/python.png);">
           <div class="text w-100 text-center">
              <h3>Python</h3>
              
          </div>
      </a>
  </div>
  <div class="col-md-3 col-lg-2">
    <a href="\preppros\resources.php" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/java.jpeg);">
       <div class="text w-100 text-center">
          <h3>Java</h3>
          
      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="\preppros\resources.php" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/c++.jpeg);">
       <div class="text w-100 text-center">
          <h3>C++</h3>
          
      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="\preppros\resources.php" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/c.webp);">
       <div class="text w-100 text-center">
          <h3>C</h3>
          
      </div>
  </a>
</div>
        <div class="col-md-12 text-center mt-5">
          <a href="\preppros\resources.php" class="btn btn-secondary">See All Courses</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Text based courses -->
  <div class="row justify-content-center pb-7">
						<div class="col-md-12 heading-section text-center ftco-animate">
							<h2 class="mb-4">Jumpstart with these courses</h2>
						</div>
					</div>
					<div class="row">
						<section class="container1">
							<section class="card1"><a style="color: white;" href="<?php echo $base_url;?>Courses/Java/java.php">
								<div class="product-image">
									<img src="images/work-3.png" alt="OFF-white Red Edition" draggable="false" />
								</div>
								<div class="product-info">
									<h2>Java</h2>
									
								</div>
								<div class="btn">
									<a href="java.html"><button class="buy-btn">Start Now</button></a>
									<button class="fav">
										<svg class="svg" id="i-star" xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 32 32" stroke="#000" stroke-linecap="round"
											stroke-linejoin="round" stroke-width="2">
											<path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
										</svg>
									</button>
								</div></a>
							</section>
							<section class="card1 card-blue">
								<div class="product-image">
									<img src="images/work-2.png" alt="OFF-white Blue Edition" draggable="false" />
								</div>
								<div class="product-info">
									<h2>Python</h2>
									
								</div>
								<div class="btn">
									<button class="buy-btn"><a style="color: white;" href="<?php echo $base_url;?>Courses/cpp/cpp.php">Start Now</a></button>
									<button class="fav">
										<svg class="svg" id="i-star" xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 32 32" stroke="#000" stroke-linecap="round"
											stroke-linejoin="round" stroke-width="2">
											<path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
										</svg>
									</button>
								</div>
							</section>
							
							
						</section>
					</div>

					<div class="row">
						<section class="container1">
							<section class="card1" style="background-color: rgb(248 255 168);">
								<div class="product-image">
									<center><img src="images/c.webp" alt="OFF-white Red Edition" draggable="false" width=250 height=250 /></center>
								</div>
								<div class="product-info">
									<h2>C</h2>
									
								</div>
								<div class="btn">
									<button class="buy-btn"><a style="color: white;" href="<?php echo $base_url;?>Courses/Java/java.php">Start Now</a></button>
									<button class="fav">
										<svg class="svg" id="i-star" xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 32 32" stroke="#000" stroke-linecap="round"
											stroke-linejoin="round" stroke-width="2">
											<path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
										</svg>
									</button>
								</div>
							</section>
							<section class="card1 card-blue" style="background-color: rgb(255 168 168)">
								<div class="product-image">
									<center><img src="images/cpp.webp" alt="OFF-white Blue Edition" draggable="false" width=250 height=250/></center>
								</div>
								<div class="product-info">
									<h2>C++</h2>
									
								</div>
								<div class="btn">
									<button class="buy-btn"><a style="color: white;" href="<?php echo $base_url;?>Courses/cpp/cpp.php">Start Now</a></button>
									<button class="fav">
										<svg class="svg" id="i-star" xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 32 32" stroke="#000" stroke-linecap="round"
											stroke-linejoin="round" stroke-width="2">
											<path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
										</svg>
									</button>
								</div>
							</section>
							
							
						</section>
					</div>

  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 d-flex align-items-center">
            <div class="icon"><span class="flaticon-online"></span></div>
            <div class="text">
              <strong class="number" data-number="400">0</strong>
              <span>Online Courses</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 d-flex align-items-center">
            <div class="icon"><span class="flaticon-graduated"></span></div>
            <div class="text">
              <strong class="number" data-number="4500">0</strong>
              <span>Students Enrolled</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 d-flex align-items-center">
            <div class="icon"><span class="flaticon-instructor"></span></div>
            <div class="text">
              <strong class="number" data-number="1200">0</strong>
              <span>Experts Instructors</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 d-flex align-items-center">
            <div class="icon"><span class="flaticon-tools"></span></div>
            <div class="text">
              <strong class="number" data-number="300">0</strong>
              <span>Hours Content</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<div class="row justify-content-center pb-7">
						<div class="col-md-12 heading-section text-center ftco-animate">
							<h2 class="mb-4">PrepPross built using</h2>
						</div>
					</div>

<main class="wrapper" style="background: #ffcfa0;border-radius:18px;">
  <article class="badge orange">
    <div class="rounded"><i class="fab fa-html5"></i></div>
  </article>
  <article class="badge blue">
    <div class="rounded"><i class="fab fa-css3-alt"></i></div>
  </article>
  <article class="badge gold">
    <div class="rounded"><i class="fab fa-js-square"></i></div>
  </article>
  <article class="badge purple">
    <div class="rounded"><i class="fab fa-php"></i></div>
  </article>
  <article class="badge green">
    <div class="rounded"><i class="fab fa-node"></i></div>
  </article>
  <article class="badge steel">
    <div class="rounded"><i class="fab fa-python"></i></div>
  </article>
  <article class="badge rebecca">
    <div class="rounded"><i class="fab fa-bootstrap"></i></div>
  </article>

</main>


  <section class="ftco-section testimony-section bg-light">
    <div class="overlay" style="background-image: url(images/bg_2.jpg);"></div>
    <div class="container">
      <div class="row pb-4">
        <div class="col-md-7 heading-section ftco-animate">
          <span class="subheading">Testimonial</span>
          <h2 class="mb-4">What Are Students Says</h2>
        </div>
      </div>
    </div>
    <div class="container container-2">
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="star">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </p>
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="star">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </p>
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="star">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </p>
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="star">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </p>
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="star">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </p>
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-intro ftco-section ftco-no-pb">
 <div class="container">
    <div class="row justify-content-center">
       <div class="col-md-12 text-center">
          <div class="img"  style="background-image: url(images/bg_4.jpg);">
             <div class="overlay"></div>
             <h2>Start preparing for
              Your Dream Job</h2>
             <p class="mb-0"><a href="\preppros\resources.php" class="btn btn-primary px-4 py-3">Get Started</a></p>
         </div>
     </div>
 </div>
</div>
</section>


<!--Premium-->
<section id="Premium"class="ftco-section bg-light">
<br>
<div class="course-section__title">
   <center><h3><b style="color: #5400ae;font-size: 30px;;">Premium</b> </h3></center> 
  </div>
 
</div>

  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 heading-section pr-md-5 ftco-animate d-flex align-items-center">
         <div class="w-100 mb-4 mb-md-0">
            <h2 class="mb-4">Get started with a PrepPros Subscription that works for you.</h2>
            
            
            <main class="max-w-6xl mx-auto pt-10 pb-36 px-8">
  
                
                
                <div class="flex flex-col justify-between items-center lg:flex-row lg:items-start">
                  
                  <div class="w-full flex-1 mt-8 p-8 order-2 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full lg:order-1 lg:rounded-r-none">
                    <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
                      
                      <div class="ml-5">
                        <span class="block text-2xl font-semibold"></span><b>Monthly</b></span>
                        <span><span class="font-medium text-gray-500 text-xl align-top">&thinsp;</span><span class="text-3xl font-bold"><b>RS 1600</b> </span></span><span class="text-gray-500 font-medium">/ user</span>
                      </div>
                    </div>
                    <ul class="mb-7 font-medium text-gray-500">
                      <li class="flex text-lg mb-2">
                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                        <span class="ml-3">one-on-one mentorship </span></span>
                      </li>
                      <li class="flex text-lg mb-2">
                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                        <span class="ml-3">HR Round</span></span>
                      </li>
                      <li class="flex text-lg">
                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                        <span class="ml-3"><span class="text-black">Select Questions by Company</span>
                      </li>
                    </ul>
                    <div style="background-color: #5400ae;text-align-last:center;">
                        <a href="/PrepPros/premium.php" class="flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl">
                            Subscibe
                            <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                          </a>
                    </div>
                   
                  </div>
                  
                  
                  
                </div>
                
              </main>
            <div class="d-flex video-image align-items-center mt-md-4">
                
               
         </div>
     </div>
 </div>
 <div class="col-md-6">
     <div class="row">
        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
          <div class="services">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tools"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Top Quality Content</h3>
              <p>Explore a personalized learning experience designed just for you.</p>
          </div>
      </div>      
  </div>
  <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
      <div class="services">
        <div class="icon icon-2 d-flex align-items-center justify-content-center"><span class="flaticon-instructor"></span></div>
        <div class="media-body">
          <h3 class="heading mb-3">Highly Skilled Instructor</h3>
          <p>Receive support and guidance from experienced mentors for your success</p>
      </div>
  </div>    
</div>
<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
  <div class="services">
    <div class="icon icon-3 d-flex align-items-center justify-content-center"><span class="flaticon-quiz"></span></div>
    <div class="media-body">
      <h3 class="heading mb-3">FAANG Company Questions</h3>
      <p>Discover companie's unique interview questions for targeted preparation.</p>
  </div>
</div>      
</div>
<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
  <div class="services">
    <div class="icon icon-4 d-flex align-items-center justify-content-center"><span class="flaticon-browser"></span></div>
    <div class="media-body" >
      <h3 class="heading mb-3">HR Round</h3>
      <p>Evaluate your skills under our experts with our timed assessment setting</p>
  </div>
  
</div>      
</div>
</div>
</div>
</div>
</div>
<center><p id="FAQ" class="mb-0"><a href="/PrepPros/premium.php" class="btn btn-primary px-4 py-3" >Subscibe</a></p></center>
</section >

<!--FAQS-->
<section >
<div  class="row justify-content-center pb-4">
    <div class="col-md-12 heading-section text-center ftco-animate">
        <h3><b style="color: #ae5e00;font-size: 30px;;">Frequently Asked</b> Question</h3>
        
  </div>
</div>
<div class="faq">
<div class="demo">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What should the candidate know before starting on PrepPros?

                              </a>
                          </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                              <p class="p_color">
                                We expect people to know basic programming in one of   C++ / Java / Python /c#. People should have a good understanding of loops and if - else constructs. They should understand about the scope of variables and size of each data type. </p>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How comfortable will I be with tech interviews after successfully completing the course?
                              </a>
                          </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                              <p class="p_color">
                                For a regular user, the course is designed to take 3 months. As learning becomes much faster if you are consistently practicing everyday.
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How comfortable will I be with tech interviews after successfully completing the course?
                              </a>
                          </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                              <p class="p_color">Based on the pattern we have seen in most technical interviews, same set of questions tend to get repeated. We have covered most of the questions here on the site itself. So, you should be VERY comfortable with a tech interview after completing the course. 
                                That's one of the reasons, we make it a point for you to write code and practice, so that over time, you write bug-free code in one go. </p>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
      </div>
  </div>
</div>
</section>


  <?php
include  dirname(__DIR__).'/preppros/includes/footer.php';

?>


  
</body>

</html>