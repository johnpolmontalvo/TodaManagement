<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   RFID Card Payment System for Tricycle Rental
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
 </head>
 <body class="bg-gray-100">
                                <!-- Landing Page -->
  <section class="min-h-screen flex flex-col justify-center items-center bg-white">
   <img alt="Image of a tricycle with a driver and a passenger" class="w-full max-w-md mb-8" height="400" src="https://storage.googleapis.com/a1aa/image/0AnYmjEmVSqoORra8JGXbhCtMiS1as76itXBfHJGtGd6eM6TA.jpg" width="600"/>
   <h1 class="text-3xl font-bold mb-4">
    Welcome to Tricycle Rental
   </h1>
   <p class="text-lg mb-8">
    Rent a tricycle easily with your RFID card.
   </p>
   <a class="bg-blue-500 text-white px-6 py-3 rounded-full text-lg" href="#payment">
    Get Started
   </a>
  </section>
                                <!-- Payment Page -->
  <section class="min-h-screen flex flex-col justify-center items-center bg-gray-100" id="payment">
   <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6">
     RFID Card Payment
    </h2>
    <form action="#confirmation" class="space-y-4" method="POST">
     <div>
      <label class="block text-sm font-medium text-gray-700" for="rfid">
       RFID Card Number
      </label>
      <input class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" id="rfid" name="rfid" required="" type="text"/>
     </div>
     <div>
      <label class="block text-sm font-medium text-gray-700" for="amount">
       Amount
      </label>
      <input class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" id="amount" name="amount" required="" type="number"/>
     </div>
     <button class="w-full bg-blue-500 text-white px-4 py-2 rounded-md text-lg" type="submit">
      Pay Now
     </button>
    </form>
   </div>
  </section>
                                     <!-- Confirmation Page -->
  <section class="min-h-screen flex flex-col justify-center items-center bg-white" id="confirmation">
   <div class="bg-gray-100 p-8 rounded-lg shadow-lg w-full max-w-md text-center">
    <img alt="Image of a tricycle with a driver and a passenger" class="w-full max-w-md mb-8" height="400" src="https://storage.googleapis.com/a1aa/image/0AnYmjEmVSqoORra8JGXbhCtMiS1as76itXBfHJGtGd6eM6TA.jpg" width="600"/>
    <h2 class="text-2xl font-bold mb-4">
     Payment Successful
    </h2>
    <p class="text-lg mb-8">
     Thank you for your payment. Your tricycle is ready for use.
    </p>
    <a class="bg-blue-500 text-white px-6 py-3 rounded-full text-lg" href="#">
     Back to Home
    </a>
   </div>
  </section>
 </body>
</html>
