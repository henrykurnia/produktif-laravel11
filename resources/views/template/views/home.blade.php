<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <!-- Favicon -->
    <link rel="icon" type="icon" href="assets/images/favicon.png" />
    <title>Elevate</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="public/assets/css/styles.css">
    <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="public/assets/css/custom.css">
</head>

<body>
    <header class="bg-gray-dark sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center py-4">
            <!-- Left section: Logo -->
            <div class="flex items-center">
                <img src="assets/images/logo-blue.png" alt="Logo" class="h-14 w-auto mr-4">
            </div>

            <!-- Hamburger menu (for mobile) -->
            <div class="flex md:hidden">
                <button id="hamburger" class="text-black focus:outline-none">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Center section: Menu -->
            <nav class="hidden md:flex md:flex-grow justify-center">
                <ul class="flex justify-center space-x-4 text-black">
                    <li><a href="index.html" class="hover:text-secondary font-bold">Home</a></li>
                    <li><a href="aboutus.html" class="hover:text-secondary font-bold">About us</a></li>
                    <li><a href="reviews.html" class="hover:text-secondary font-bold">Reviews</a></li>
                    <li><a href="portfolio.html" class="hover:text-secondary font-bold">Portfolio</a></li>
                    <li><a href="team.html" class="hover:text-secondary font-bold">Team</a></li>
                    <li><a href="404.html" class="hover:text-secondary font-bold">404</a></li>
                    <li><a href="contact.html" class="hover:text-secondary font-bold">Contact</a></li>
                </ul>
            </nav>

            <!-- Right section: Buttons (for desktop) -->
            <div class="hidden lg:flex items-center space-x-4">
                <a href="https://spacema-dev.com/elevate-free-tailwind-business-template/"
                    class="bg-primary hover:bg-secondary text-black font-semibold px-4 py-2 rounded-full inline-block">Get
                    started</a>
            </div>
        </div>
    </header>
    <!-- Mobile menu -->
    <nav id="mobile-menu-placeholder" class="mobile-menu hidden flex flex-col items-center space-y-8 md:hidden">
        <ul>
            <li><a href="index.html" class="hover:text-secondary font-bold">Home</a></li>
            <li><a href="aboutus.html" class="hover:text-secondary font-bold">About us</a></li>
            <li><a href="reviews.html" class="hover:text-secondary font-bold">Reviews</a></li>
            <li><a href="portfolio.html" class="hover:text-secondary font-bold">Portfolio</a></li>
            <li><a href="team.html" class="hover:text-secondary font-bold">Team</a></li>
            <li><a href="404.html" class="hover:text-secondary font-bold">404</a></li>
            <li><a href="contact.html" class="hover:text-secondary font-bold">Contact</a></li>
        </ul>
        <div class="flex flex-col mt-6 space-y-2 items-center">
            <a href="https://spacema-dev.com/elevate-free-tailwind-business-template/"
                class="bg-primary hover:bg-secondary text-white font-semibold px-4 py-2 rounded-full inline-block flex items-center justify-center min-w-[110px]">Download</a>
        </div>
    </nav>

  <section id="home" class="bg-white py-16">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
      <!-- Left column: Description and buttons -->
      <div class="md:w-1/2 text-center md:text-left mb-8 md:mb-0">
        <h2 class="text-5xl font-bold mb-4">Free <span class="text-primary">Tailwind</span> Template</h2>
        <p class="my-7">Tailwind CSS is an open source CSS framework. The main feature of this library is that, unlike
          other CSS frameworks like Bootstrap, it does not provide a series of predefined classes for elements such as
          buttons or tables.</p>
        <div class="space-x-2">
          <a href="/"
                class="bg-primary hover:bg-secondary text-white font-semibold px-4 py-2 rounded-full inline-block">Download</a>
          </div>
      </div>

      <!-- Right column: Responsive image -->
      <div class="md:w-1/2">
        <img src="/assets/images/1.jpg" alt="Image" class="w-full md:mx-auto md:max-w-md rounded-lg bg-gray-100 shadow-lg" />
      </div>
    </div>
  </section>

  <section id="aboutus" class="py-16 bg-gray-dark">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
      <!-- Left column: Image -->
      <div class="md:w-1/2 mb-8 md:mb-0">
        <img src="/assets//images/2.jpg" alt="Image" class="w-full md:mx-auto md:max-w-md rounded-lg bg-gray-100 shadow-lg" />
      </div>

      <!-- Right column: Title, description list, and button -->
      <div class="md:w-1/2">
        <h2 class="text-5xl font-bold mb-4 text-white">Our <span class="text-primary">Process</span></h2>
        <p class="my-5 text-white">At Our company, we follow a well-defined process to ensure the success of every project. Our approach is tailored to meet your unique requirements and deliver outstanding outcomes consistently.</p>
        <ol class="mt-5 mb-10 list-outside">
              <li class="flex items-center mb-4">
                  <strong class="bg-primary text-white rounded-full w-8 h-8 text-lg font-semibold flex items-center justify-center mr-3">1</strong>
                  <span class="text-white">We start by conducting a thorough analysis of your needs and goals.</span>
              </li>
              <li class="flex items-center mb-4">
                  <strong class="bg-primary text-white rounded-full w-8 h-8 text-lg font-semibold flex items-center justify-center mr-3">2</strong>
                  <span class="text-white">Our team collaborates closely with you to craft a customized strategy.</span>
              </li>
              <li class="flex items-center mb-4">
                  <strong class="bg-primary text-white rounded-full w-8 h-8 text-lg font-semibold flex items-center justify-center mr-3">3</strong>
                  <span class="text-white">We execute the plan meticulously, ensuring clear communication throughout the process.</span>
              </li>
              <li class="flex items-center mb-4">
                  <strong class="bg-primary text-white rounded-full w-8 h-8 text-lg font-semibold flex items-center justify-center mr-3">4</strong>
                  <span class="text-white">Regular updates and feedback sessions keep you informed and involved.</span>
              </li>
              <li class="flex items-center mb-4">
                  <strong class="bg-primary text-white rounded-full w-8 h-8 text-lg font-semibold flex items-center justify-center mr-3">5</strong>
                  <span class="text-white">We deliver the final product with precision, meeting your expectations and beyond.</span>
              </li>
          </ol>
          <button class="bg-primary hover:bg-secondary text-white font-semibold px-4 py-2 rounded-full">Get Started</button>
      </div>
    </div>
  </section>


  <section id="clients" class="bg-white py-16 px-4">
    <div class="container mx-auto max-w-screen-xl px-4 testimonials">
      <div class="text-center mb-12 lg:mb-20">
        <h2 class="text-5xl font-bold mb-4">What <span class="text-primary">Our Clients</span> Say</h2>
        <p class="my-7">Discover the experiences of our satisfied clients</p>
      </div>

      <div class="swiper clients-swiper-slider">
        <div class="swiper-wrapper">
            <!-- Client Logo 1 -->
            <div class="swiper-slide flex-none bg-gray-200 flex items-center justify-center rounded-md">
                <img src="/assets/images/clients/netflix.svg" alt="Client Logo" class="max-h-full max-w-full">
            </div>
    
            <!-- Client Logo 2 -->
            <div class="swiper-slide flex-none bg-gray-200 flex items-center justify-center rounded-md">
                <img src="/assets/images/clients/amazon.svg" alt="Client Logo" class="max-h-full max-w-full">
            </div>
    
            <!-- Client Logo 3 -->
            <div class="swiper-slide flex-none bg-gray-200 flex items-center justify-center rounded-md">
                <img src="/assets/images/clients/invision.svg" alt="Client Logo" class="max-h-full max-w-full">
            </div>
    
            <!-- Client Logo 4 -->
            <div class="swiper-slide flex-none bg-gray-200 flex items-center justify-center rounded-md">
                <img src="/assets/images/clients/walmart.svg" alt="Client Logo" class="max-h-full max-w-full">
            </div>
    
            <!-- Client Logo 5 -->
            <div class="swiper-slide flex-none bg-gray-200 flex items-center justify-center rounded-md">
                <img src="/assets/images/clients/yahoo.svg" alt="Client Logo" class="max-h-full max-w-full">
            </div>
        </div>
    
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
  </section>

    <section class="py-16">
        <div class="text-center mb-12 lg:mb-20">
            <h2 class="text-5xl font-bold mb-4">Discover <span class="text-primary">Our</span> Services</h2>
            <p class="my-7">Explore our team, portfolio, and learn more about us</p>
        </div>
        <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
            <div class="grid w-full grid-cols-1 gap-6 mx-auto lg:grid-cols-3">
                <div class="p-6">
                    <img class="object-cover object-center w-full mb-8 rounded-xl" src="/assets/images/blog/blog-1.jpg" alt="blog">
                    <h2 class="mb-8 text-xs font-semibold tracking-widest text-primary uppercase">Discover Our Story</h2>
                    <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-gray-dark lg:text-3xl">Get to Know Us Better.</h1>
                    <p class="mx-auto text-base font-medium leading-relaxed text-gray-txt">Learn about our journey, values, and mission. Dive into our story to understand who we are, what we stand for, and how we strive to make a difference.</p>
                    <div class="mt-4">
                        <a href="#" class="inline-flex items-center mt-4 font-semibold text-primary lg:mb-0 hover:text-gray-dark" title="Read Our Story"> Read Our Story » </a>
                    </div>
                </div>
                <div class="p-6">
                    <img class="object-cover object-center w-full mb-8 rounded-xl" src="/assets/images/blog/blog-2.jpg" alt="blog">
                    <h2 class="mb-8 text-xs font-semibold tracking-widest text-primary uppercase">Our Portfolio</h2>
                    <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-gray-dark lg:text-3xl">Explore Our Creative Projects.</h1>
                    <p class="mx-auto text-base font-medium leading-relaxed text-gray-txt">Discover a collection of our latest projects showcasing our expertise in web development, design, and innovation. Dive into our portfolio to see how we bring ideas to life.</p>
                    <div class="mt-4">
                        <a href="#" class="inline-flex items-center mt-4 font-semibold text-primary lg:mb-0 hover:text-gray-dark" title="Explore Our Portfolio"> Explore Our Portfolio » </a>
                    </div>
                </div>
                <div class="p-6">
                    <img class="object-cover object-center w-full mb-8 rounded-xl" src="/assets/images/blog/blog-3.jpg" alt="blog">
                    <h2 class="mb-8 text-xs font-semibold tracking-widest text-primary uppercase">Meet Our Team</h2>
                    <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-gray-dark lg:text-3xl">Discover the Talented Minds Behind Our Success.</h1>
                    <p class="mx-auto text-base font-medium leading-relaxed text-gray-txt">Learn more about the dedicated professionals who make our projects possible. Explore their skills, experiences, and contributions.</p>
                    <div class="mt-4">
                        <a href="#" class="inline-flex items-center mt-4 font-semibold text-primary lg:mb-0 hover:text-gray-dark" title="Explore Our Team"> Explore Our Team » </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <section id="subscribe" class="bg-primary py-4">
      <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
          <div class="flex flex-col items-center rounded-lg bg-gray-100 p-4 sm:p-8 lg:flex-row lg:justify-between">
              <div class="mb-4 sm:mb-8 lg:mb-0">
                  <h2 class="text-center text-xl font-bold text-white sm:text-2xl lg:text-left lg:text-3xl">Stay
                      Updated</h2>
                  <p class="text-center text-white lg:text-left">Subscribe to our newsletter</p>
              </div>
              <div class="flex flex-col items-center w-96 lg:items-end">
                  <form class="flex w-full gap-2">
                      <input placeholder="Enter your email address"
                          class="bg-gray-white w-full flex-1 rounded px-3 py-2 text-gray-txt placeholder-gray-dark focus:outline-none" />
                      <button
                          class="inline-block rounded bg-white px-8 py-2 text-center text-sm font-semibold text-primary  md:text-base hover:text-secondary">Subscribe</button>
                  </form>
              </div>
          </div>
      </div>
  </section>

  <footer class="py-10">
    <img src="assets/images/logo-gray.png" alt="Logo" class="h-14 w-auto mx-auto mb-5">
    <span class="block text-center text-gray-txt font-semibold">© 2024. All Rights Reserved.
        Developerd by <a href="https://spacema-dev.com" class="text-primary">Spacema-dev</a>
    </span>
    <ul class="flex justify-center mt-10 space-x-8">
        <li>
            <a href="#">
                <img src="assets/images/social_icons/instagram.png" alt="Instagram" class="h-10 w-10">
            </a>
        </li>
        <li>
            <a href="#">
                <img src="assets/images/social_icons/youtube.png" alt="YouTube" class="h-10 w-10">
            </a>
        </li>
        <li>
            <a href="#">
                <img src="assets/images/social_icons/facebook.png" alt="Facebook" class="h-10 w-10">
            </a>
        </li>
        <li>
            <a href="#">
                <img src="assets/images/social_icons/twitter.png" alt="Twitter" class="h-10 w-10">
            </a>
        </li>
        <li>
            <a href="#">
                <img src="assets/images/social_icons/linkedin.png" alt="LinkedIn" class="h-10 w-10">
            </a>
        </li>
    </ul>
</footer>

<script src="node_modules/swiper/swiper-bundle.js"></script>
<script src="assets/js/script.js"></script>

</body>

</html>
