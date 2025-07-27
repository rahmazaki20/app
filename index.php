<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Aston Test</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
     * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      background-color: #10162E;
      /* background-color: #17223f; */
    }
  </style>
</head>
<body class="">
<nav class=" bg-[rgba(28,34,56,1)] text-white fixed top-0 left-0 right-0 z-50">
  <div class="bg-transparent flex items-center justify-between p-4">
    <!-- Logo -->
    <div class="flex items-center bg-transparent">
      <img src="./logo1.svg" alt="Afra Logo" class="h-14 mr-2 bg-transparent">
      <span class="text-4xl font-extrabold text-gray-100 bg-transparent">Aston</span>
    </div>

    <!-- Desktop Links -->
    <div class="hidden md:flex items-center space-x-6 bg-transparent">
      <a href="#" class="text-white hover:text-gray-200 font-semibold bg-transparent">Pricing</a>
      <a href="#" class="text-white hover:text-gray-200 font-semibold bg-transparent">Contact us</a>
      <div class="relative bg-transparent">
        <select class="appearance-none bg-transparent border-none text-white py-2 px-3 pr-8 rounded leading-tight focus:outline-none font-semibold">
          <option class="bg-blue-400 text-white" value="en">EN</option>
          <option class="bg-blue-400 text-white" value="es">ES</option>
          <option class="bg-blue-400 text-white" value="fr">FR</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-white bg-transparent">
          <svg class="fill-current h-4 w-4 bg-transparent" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </div>
      </div>
      <button class="px-4 py-2 border-2 border-white text-white rounded-md hover:bg-white hover:text-blue-400 font-semibold transition duration-300">Login</button>
      <button class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 font-semibold transition duration-300">Register</button>
    </div>

    <!-- Mobile menu button -->
    <button id="menu-toggle" class="md:hidden focus:outline-none">
      <svg class="w-6 h-6 bg-transparent" fill="none" stroke="currentColor " viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden hidden flex-col items-start space-y-4 px-4 pb-4">
    <a href="#" class="text-white hover:text-gray-200 font-semibold">Pricing</a>
    <a href="#" class="text-white hover:text-gray-200 font-semibold">Contact us</a>
    <select class="appearance-none bg-transparent border border-white text-white py-2 px-3 rounded w-full">
      <option class="bg-blue-400 text-white" value="en">EN</option>
      <option class="bg-blue-400 text-white" value="es">ES</option>
      <option class="bg-blue-400 text-white" value="fr">FR</option>
    </select>
    <button class="w-full px-4 py-2 border-2 border-white text-white rounded-md hover:bg-white hover:text-blue-400 font-semibold transition duration-300">Login</button>
    <button class="w-full px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 font-semibold transition duration-300">Register</button>
  </div>
</nav>
<!-- LOGIN -->
  <div class="flex justify-center items-center h-screen">
    <div class="p-5 md:p-6 mb-4 rounded-2xl transition-all duration-200 shadow-sm ring-1 ring-gray-200 bg-white">
      <div class="flex flex-col gap-4 bg-white">
        <!-- Heading -->
        <div class="flex items-center flex-col text-center bg-white">
          <h1 class="text-lg md:text-xl font-semibold text-[#cc9D6A] bg-white">Welcome Back</h1>
          <h2 class="text-sm font-medium text-[#cc9D6A] bg-white">Login to your UltimatePOS account</h2>
        </div>

        <!-- Login Form -->
        <form method="POST" action="login.php" id="login-form" class="bg-white">
          <!-- Username -->
          <label class="block space-y-1 bg-white">
            <span class="text-xs md:text-sm font-medium text-black bg-white">Username</span>
            <input
              class="border border-[#D1D5DA] outline-none h-12 bg-transparent rounded-lg px-3 font-medium text-black placeholder:text-gray-500 placeholder:font-medium w-full bg-white"
              name="username" required autofocus placeholder="Username" type="text" />
          </label>

          <!-- Password -->
          <label class="block space-y-1 relative mt-4 bg-white">
            <div class="flex justify-between items-center bg-white">
              <span class="text-xs md:text-sm font-medium text-black bg-white">Password</span>
              <a href="#" class="text-xs md:text-sm font-medium bg-gradient-to-r text-[rgba(28,34,56,1)] inline-block text-transparent bg-clip-text">Forgot your password?</a>
            </div>
            <input
              class="border border-[#D1D5DA] outline-none h-12 bg-transparent rounded-lg px-3 font-medium text-black placeholder:text-gray-500 placeholder:font-medium w-full bg-white"
              id="password" type="password" name="password" placeholder="Password" required />
            <button type="button" id="show_hide_icon" class="absolute top-[48px] right-2 bg-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 bg-white" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
              </svg>
            </button>
          </label>

          <!-- Remember Me -->
          <div class="mt-4 bg-white">
            <label class="flex items-center gap-2 cursor-pointer bg-white">
              <input type="checkbox" name="remember" class="accent-indigo-500 bg-white">
              <span class="text-xs md:text-sm font-medium text-black mt-[0.2rem] bg-white">Remember me</span>
            </label>
          </div>

          <!-- Submit Button -->
          <button type="submit"
            class="bg-gradient-to-r from-indigo-500 to-blue-500 h-12 rounded-xl text-sm md:text-base text-white font-semibold w-full max-w-full mt-4 hover:from-indigo-600 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 active:from-indigo-700 active:to-blue-700">
            Login
          </button>
        </form>

        <!-- Register Link -->
        <div class="flex items-center flex-col mt-4 bg-white">
          <a href="register.php" class="text-sm font-medium text-gray-500 hover:text-gray-500 mt-2 bg-white">
            Not yet registered?
            <span class="text-sm font-medium bg-gradient-to-r from-indigo-500 to-blue-500 inline-block text-transparent bg-clip-text hover:text-[#467BF5] hover:underline bg-white">
              Register now
            </span>
          </a>
        </div>

      </div>
    </div>
  </div>
<hr>

<div class="row">
    <h1 class="page-header text-center">UltimatePOS</h1>

    <div class="col-md-8 col-md-offset-2">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title text-center">Register and Get Started in minutes</h3>
            </div>

            <form action="postRegister.php" method="POST">
                <!-- Example token (not secure, just a placeholder) -->
                <input type="hidden" name="_token" value="<?php echo bin2hex(random_bytes(16)); ?>">

                <div class="box-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Business Name:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-suitcase"></i>
                                </span>
                                <input type="text" name="name" class="form-control" placeholder="Business name">
                            </div>
                        </div>
                    </div>

                    <!-- Repeat for each field -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="start_date">Start Date:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input type="text" name="start_date" class="form-control start-date-picker" placeholder="Start Date" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="currency">Currency:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fas fa-money-bill-alt"></i>
                                </span>
                                <select name="currency" class="form-control tw-text-black">
                                    <option value="">Select Currency</option>
                                    <option value="USD">USD</option>
                                    <option value="EUR">EUR</option>
                                    <option value="SAR">SAR</option>
                                    <!-- Add more currencies here -->
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Add other form fields similarly, like city, state, country etc. -->

                    <div class="col-md-12">
                        <hr />
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <input type="text" name="email" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input type="password" name="password" class="form-control" placeholder="Login Password">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input type="password" name="confirm_password" class="form-control" placeholder="Same as Login Password">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-success pull-right">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
