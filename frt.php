<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">-->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.css" />
  <title>Freewheeling HMS</title>
  <link rel="shortcut icon" type="image" href="img/Hospital.jpg" />
</head>

<body>
  <!--Header-->
  <header class=" Home text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>-->
        <a href="#" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          class="w-10 h-10 text-white text-center p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24"><i
            class="fas fa-hospital-alt"></i></a>
        <span class="ml-3 text-xl">Freewheeling HMS</span>
      </a>
      <nav
        class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-gray-900" href='#About'>Home</a>
        <a class="mr-5 hover:text-gray-900" href='#About'>About Us</a>
        <a class="mr-5 hover:text-gray-900" href='#Features'>Features</a>
        <a class="mr-5 hover:text-gray-900" href='#Services'>Services</a>
        <a class="mr-5 hover:text-gray-900" href='#Contact'>Support</a>
      </nav>
      <button
        class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
        <a href="Sign_in.php">Sign In</a>
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
      <div1
        class=" ml-4 inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
        <a href="Sign_up.php">Sign Up</a>
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
        <style>
          li {
            display: none;
          }

          div1:hover li {
            margin-top: 15px;
            margin-right: 20px;
            display: block;
            position: absolute;
          }
        </style>
      </div1>
    </div>
  </header>
  <style>
    header {
      display: flex;
      flex-wrap: wrap;
      display: block;
      background-color: white;
      position: sticky;
      top: 0;
    }
  </style>
  <!--About US-->
  <section id="About" class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div
        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-3xl text-3xl mb-4 font-medium text-gray-900">Welcome To
          <br class="hidden lg:inline-block">Freewheeling Hospital Management System
        </h1>
        <p class="mb-8 leading-relaxed">The Management System build by you for you. Freewheeling Hospital Management
          System
          gives you the best inhand experience while managing your Hospital.
        </p>
        <div class="flex justify-center">
          <button
            class=" ml-4 inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
            <a href="Sign_up.php">Enroll Your Hospital Now</a>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="img" src="img/Hospital.jpg">
      </div>

      <!-- Chat Bot-->
      <button class="needhelp" id="chat">
          Need Help ?
      </button>
      <div>
        <iframe id="chatbot" src='https://webchat.botframework.com/embed/fhmschatbot-bot?s=vR1BNM60iCk.qdPQq0NQLcRVQdMQHy-03T2McMr-sIwWkh_lrIBx8zo'></iframe>
      </div>

      <style>
        .needhelp {
          width: 100px;
          height: 50px;
          background-color: #4D34BF;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 15px;
          color: white;
          font-weight: 650;
          border-radius: 50px;
          box-shadow: 2px 2px 5px rgb(0, 0, 0, 0.40);
          position: fixed;
          right: 30px;
          bottom: 40px;
          transition-duration: 200;
          overflow: hidden;
        }

        .needhelp:hover {
          background-color: #3821A6;
        }
        #chatbot{
          display: none;
        }
        #chatbot.bot{
          display: block; 
          border-color: black;
          border-width: 2px;
          position: fixed; 
          right: 30px; 
          bottom: 100px; 
          min-width: 200px; 
          min-height: 400px;
          z-index: 9;
        }
      </style>
  </section>
  <!--Features-->
  <section id="Features" class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Freewheeling Hospital Management
        System
        <br class="hidden sm:block">Features
      </h1>
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
        <div class="p-4 md:w-1/3 flex">
          <div
            class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-4 flex-shrink-0">
            <a href="#" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          class="w-10 h-10 text-white text-center p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24"><i
            class="fas fa-eye-slash"></i></a>
          </div>
          <div class="flex-grow pl-6">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Visibility and Transperancy</h2>
            <p class="leading-relaxed text-base"> Freewheeling Hospital Management System developed by Mihir Naik improves the visibility and transparency in the complete management process and in all records</p>
            <a class="mt-3 text-purple-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="p-4 md:w-1/3 flex">
          <div
            class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-4 flex-shrink-0">
            <a href="#" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          class="w-10 h-10 text-white text-center p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24"><i
            class="fas fa-history"></i></a>
          </div>
          <div class="flex-grow pl-6">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Time Management</h2>
            <p class="leading-relaxed text-base">It improves the time management because it allows getting access to any required data or information with one click.
               It also allows to add or update information within in few clicks..</p>
            <a class="mt-3 text-purple-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="p-4 md:w-1/3 flex">
          <div
            class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-4 flex-shrink-0">
            <a href="#" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          class="w-10 h-10 text-white text-center p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24"><i
            class="fas fa-universal-access"></i></a>
          </div>
          <div class="flex-grow pl-6">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Ease to Access System Facilities</h2>
            <p class="leading-relaxed text-base"> Freewheeling Hospital Management System developed by Mihir Naik make it easy to get access to the management 
              system facilities for the authorized users and keep it safe from unauthorized users.</p>
            <a class="mt-3 text-purple-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Services-->
  <section id="Services" class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Our Services</h1>
        <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Freewheeling Hospital Management System provide a wide list of services
          which include
        </p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            <div
              class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-4">
              <a href="#" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          class="w-10 h-10 text-white text-center p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24"><i
            class="fas fa-users"></i></a>
            </div>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Staff Management</h2>
            <p class="leading-relaxed text-base">The Staff of the Hospital can be Easily Managed by the Admin.</p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            <div
              class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-4">
              <a href="#" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          class="w-10 h-10 text-white text-center p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24"><i
            class="fas fa-user-injured"></i></a>
            </div>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Patient Management</h2>
            <p class="leading-relaxed text-base">The Patients can be Easily Managed by the Respective Doctor Staff.</p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            <div
              class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-4">
              <a href="#" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          class="w-10 h-10 text-white text-center p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24"><i
            class="fas fa-chart-pie"></i></a>
            </div>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Analysis</h2>
            <p class="leading-relaxed text-base">It provides A complete Analysis of the Covid-19 patients accross the India.</p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            <div
              class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-4">
              <a href="#" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          class="w-10 h-10 text-white text-center p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24"><i
            class="fas fa-user"></i></a>
            </div>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Seperate Interface for Admin and User</h2>
            <p class="leading-relaxed text-base">It provides a Seperate Interface for the User and Administrator.</p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            <div
              class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-4">
              <a href="#" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          class="w-10 h-10 text-white text-center p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24"><i
            class="fas fa-people-arrows"></i></a>
            </div>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">User page accessible to Admin</h2>
            <p class="leading-relaxed text-base">User Page is Easily Accessible to the Administrator.</p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            <div
              class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-4">
              <a href="#" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          class="w-10 h-10 text-white text-center p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24"><i
            class="fas fa-key"></i></a>
            </div>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Secured by Password</h2>
            <p class="leading-relaxed text-base">All Accounts are protected by Password which can be changed time to time.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Support-->
  <section id="Contact" class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap">
      <div
        class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
          marginwidth="0" scrolling="no"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1899.7631383285811!2d74.11205171653286!3d17.76694665507854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2361d375fff29%3A0xeb44c6569e3ed490!2zMTfCsDQ2JzAxLjEiTiA3NMKwMDYnNDEuNSJF!5e0!3m2!1sen!2sin!4v1638768543170!5m2!1sen!2sin"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
        <div class="bg-white flex py-6 rounded shadow-md">
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
            <p class="mt-1">A/p Satararoad, Motichandnagar Room No.54 Tal:Koregaon Dist:Satara Pin Code:415010</p>
          </div>
          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
            <a class="text-purple-500 leading-relaxed">freewheeling.hms@gmail.com</a>
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
            <p class="leading-relaxed">9834072923</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
        <p class="leading-relaxed mb-5 text-gray-600">Please provide your valuable feedback</p>
        <div class="mb-4">
          <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
          <input type="text" id="name" name="name"
            class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
          <input type="email" id="email" name="email"
            class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="mb-4">
          <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
          <textarea id="message" name="message"
            class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        <button
          class="text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded text-lg">Submit</button>
        <p class="text-xs text-gray-500 mt-3">Please provide your valuable feedback</p>
      </div>
    </div>
  </section>
  <footer id="Contact" class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <a href="#" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          class="w-10 h-10 text-white text-center p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24"><i
            class="fas fa-hospital-alt"></i></a>
        <span class="ml-3 text-xl">Freewheeling HMS</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022
        Freewheeling HMS —
        <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer"
          target="_blank">@fwheeling</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
            viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
            viewBox="0 0 24 24">
            <path
              d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
            </path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"
            class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none"
              d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>
  <script>
    var chatbot = document.getElementById("chatbot");
    var button = document.getElementById("chat");
    button.onclick = function(){
        if(chatbot.className == "bot"){
          chatbot.className = "";
        }else{
          chatbot.className = "bot";
        }
    }
  </script>
</body>

</html>