<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Cart</title>
     <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100">
     <section class="w-full px-16">

     <div class="bg-white h-full m-52 rounded-2xl">
          <div class="flex border-b justify-center border-gray-200 dark:border-gray-700 max-w-5xl mx-auto pt-5">
               <h1 class="h-10 px-4 py-2 -mb-px text-sm text-center text-blue-600 bg-transparent border-b-2 border-blue-500 sm:text-base dark:border-blue-400 dark:text-blue-300 whitespace-nowrap focus:outline-none">
                    01. Cart
               </h1>

               <h1 class="h-10 px-4 py-2 -mb-px text-sm text-center text-gray-700 bg-transparent border-b-2 border-transparent sm:text-base dark:text-white whitespace-nowrap cursor-base focus:outline-none">
                    02. Create Admin Account
               </h1>

               <h1 class="h-10 px-4 py-2 -mb-px text-sm text-center text-gray-700 bg-transparent border-b-2 border-transparent sm:text-base dark:text-white whitespace-nowrap cursor-base focus:outline-none">
                    03. Payment
               </h1>
          </div>
          <div class="p-12">
               <h2>Strat-up (best-seller) Ghost Creator Set</h2>
               <div class="pt-4">
               <form action="./cartDone.php" method="POST">
                    <div class="flex justify-between">
                         <div>
                              <label><input type="radio" id="paymonthly" name="payment_sequence" value="Pay Monthly">   Pay Monthly</label><br>
                         </div>
                         <div>
                              19000MMK
                         </div>
                    </div>
                    <div class="flex justify-between py-3">
                         <div>
                              <label><input type="radio" id="paysemiannually" name="payment_sequence" value="Pay Semiannually">   Pay Semiannually (15920MMK/month)</label><br>
                         </div>
                         <div>
                              95520MMK
                         </div>
                    </div>
                    
                    <input type="submit" name="continue" class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-yellow-600 hover:bg-yellow-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 rounded-full">

               </form>
          </div>
     </div>

     </section>
</body>
</html>