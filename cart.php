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
     <section class="w-full px-8">

          <div class="bg-white my-20 max-w-5xl mx-auto rounded-2xl">
               <div class="flex border-b justify-center border-gray-200 dark:border-gray-700 max-w-5xl mx-auto pt-5">
                    <h1 id="cart_nav" class="h-10 px-4 py-2 -mb-px text-sm text-center text-blue-600 text-gray-700 bg-transparent border-b-2 border-blue-500 sm:text-base dark:border-blue-400 dark:text-blue-300 whitespace-nowrap focus:outline-none">
                         01. Cart
                    </h1>

                    <h1 id="acc_nav" class="h-10 px-4 py-2 -mb-px text-sm text-center text-gray-700 bg-transparent border-b-2 border-transparent sm:text-base dark:text-white whitespace-nowrap cursor-base focus:outline-none">
                         02. Create Admin Account
                    </h1>

                    <h1 id="payment_nav" class="h-10 px-4 py-2 -mb-px text-sm text-center text-gray-700 bg-transparent border-b-2 border-transparent sm:text-base dark:text-white whitespace-nowrap cursor-base focus:outline-none">
                         03. Payment
                    </h1>
               </div>
               <?php
                    include('./admin/config/config.php');
                    $productfeature_id = $_GET['featureid'];
                    $chosen_product = mysqli_query($conn, "SELECT products.*, features.site FROM products LEFT JOIN features ON products.featurelist_id=features.id WHERE featurelist_id=$productfeature_id");
                    $result = mysqli_fetch_assoc($chosen_product);
               ?>
               <div class="p-12">
                    <div>
                         <form action="./cartDone.php" method="POST">
                              <!--Cart-->
                              <div id="cart">
                                   <h2 class="mb-3"><?php echo $result['name']." ".$result['site'] ?></h2>
                                   <div class="flex justify-between">
                                        <div>
                                             <label><input type="radio" id="paymonthly" name="payment_sequence" value="Pay Monthly">   Pay Monthly</label><br>
                                        </div>
                                        <div>
                                        <?php echo $result['price']." Ks/month"; ?>
                                        </div>
                                   </div>
                                   <div class="flex justify-between py-3">
                                        <div>
                                             <label><input type="radio" id="annually" name="payment_sequence" value="Pay Annually">   Pay Annually</label><br>
                                        </div>
                                        <div>
                                        <?php echo $result['yearly_price']." Ks/month"; ?>
                                        </div>
                                   </div>
                                   <br>
                              
                                   <a name="continue" id="continue" class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-yellow-600 hover:bg-yellow-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 rounded-full cursor-pointer text-center">
                                        Continue
                                   </a>
                              </div>

                              <!--Create Admin Acc-->
                              <div id="create_account" class="hidden">
                                   <div class="container mx-auto">
                                        <div class="w-full md:w-1/2 mx-auto my-3">
                                        <h1 class="text-xl my-3 font-bold">Create Account</h1>
                                        <div class="flex flex-col mt-4">
                                             <input
                                                  type="text"
                                                  name="name"
                                                  class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
                                                  placeholder="Your Name"
                                             />
                                             <input
                                                  type="email"
                                                  name="email"
                                                  class="px-4 py-3 w-full mt-4 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
                                                  placeholder="Email address"
                                             />
                                             <input
                                                  type="password"
                                                  name="password"
                                                  class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
                                                  placeholder="Password"
                                             />
                                             <a id="continue_to_payment" class="px-4 mt-5 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 rounded-full cursor-pointer text-center">
                                                  Create Account & Continue
                                             </a>
                                             <div class="flex flex-col items-center mt-5">
                                                  <p class="mt-1 text-xs font-light text-gray-500">
                                                       IMPORTANT! You will need these infromation to Log In to your Creator Set Website<a class="ml-1 font-medium text-blue-400">Sign up now</a>
                                                  </p>
                                             </div>
                                        </div>
                                        </div>
                                   </div>
                              </div>

                              <!--Payment-->
                              <div id="payment" class="hidden">
                                   Payments coming soon
                              </div>
                         </form>
               </div>
          </div>

     </section>

     <!--Js-->
     <script src="./app/cart.js"></script>
</body>
</html>