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
          <div class="bg-white my-20 pb-5 max-w-5xl mx-auto rounded-2xl">
               <div class="flex border-b justify-center border-gray-200 dark:border-gray-700 max-w-5xl mx-auto pt-5">
                    <h1 id="cart_nav" class="h-10 px-4 py-2 -mb-px text-sm text-center text-yellow-600 text-gray-700 bg-transparent border-b-2 border-yellow-500 sm:text-base dark:border-yellow-400 dark:text-yellow-300 whitespace-nowrap focus:outline-none">
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
                    <form action="./submitOrder.php" name="customer_info" method="POST">
                         <input type="text" name="product_id" value="<?php echo $result['id'] ?>" class="hidden">

                         <!--Cart-->
                         <div id="cart">
                              <h2 class="mb-3 font-medium text-xl"><?php echo $result['name']." ".$result['site'] ?></h2>

                              <div class="flex justify-between items-center">
                                   <div class="w-2/3 leading-relaxed">
                                        <div class="flex justify-between">
                                             <div>
                                                  <label><input type="radio" id="paymonthly" name="payment_sequence" value="Monthly" required>   Pay Monthly</label><br>
                                             </div>
                                             <div>
                                                  <span id="mo_price">
                                                            <?php echo $result['price']; ?>
                                                  </span> Ks/month
                                             </div>
                                        </div>
                                        <div class="flex justify-between py-3">
                                             <div>
                                                  <label><input type="radio" id="annually" name="payment_sequence" value="Annually" required>   Pay Annually</label><br>
                                             </div>
                                             <div>
                                                  <span id="an_price">
                                                       <?php echo $result['yearly_price']; ?>
                                                  </span> Ks/month
                                             </div>
                                        </div>

                                   </div>

                                   <div class="w-1/3 leading-loose tracking-wide">
                                        <div class="float-right text-indigo-800 px-7 py-5 bg-indigo-200 rounded-3xl">
                                             <span id="select_notice" class="text-gray">Slect billing term to see total</span>
                                             <div id="total_container" class="hidden">
                                             Subtotal : <span id="subtotal"></span> <br>
                                             Duration : <span id="duration"></span> <br>
                                             Total : <span class="total"></span>
                                             </div>
                                             <input type="text" name="total" value="" id="total_input" class="hidden">
                                        </div>
                                   </div>
                              </div>

                              <br>
                         
                              <a name="continue" id="continue" class="float-right opacity-50 pointer-events-none px-5 py-3 font-medium tracking-wide text-yellow-700 capitalize transition-colors duration-200 transform bg-yellow-200 hover:bg-yellow-300 hover:text-yellow-800 focus:outline-none focus:ring focus:ring-yellow-300 focus:ring-opacity-80 rounded-full cursor-pointer text-center">
                                   Continue
                              </a>
                         </div>

                         <!--Create Admin Acc-->
                         <div id="create_account" class="hidden">
                              <div class="container mx-auto">
                                   <div class="w-full md:w-1/2 mx-auto my-3">
                                   <h1 class="text-xl my-3 font-medium">Create Account</h1>
                                   <div class="flex flex-col mt-4">
                                        <input
                                             type="text"
                                             name="name"
                                             id="name"
                                             class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
                                             placeholder="Your Full Name"
                                        />
                                        <input
                                             type="email"
                                             name="email"
                                             id="email"
                                             class="px-4 py-3 w-full mt-4 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
                                             placeholder="Email address"
                                        />
                                        <input
                                             type="password"
                                             name="password"
                                             id="password"
                                             class="px-4 py-3 mt-4 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
                                             placeholder="Password"
                                        />
                                        <a id="continue_to_payment" class="px-5 mt-5 py-3 font-medium tracking-wide text-yellow-700 capitalize transition-colors duration-200 transform bg-yellow-200 hover:bg-yellow-300 hover:text-yellow-800 focus:outline-none focus:ring focus:ring-yellow-300 focus:ring-opacity-80 rounded-full cursor-pointer text-center">
                                             Create Account & Continue
                                        </a>
                                        <div class="flex flex-col items-center mt-5">
                                             <p class="mt-1 text-xs font-light text-gray-500">
                                                  IMPORTANT! You will need these infromation to Log In to your Creator Set Website
                                             </p>
                                        </div>
                                   </div>
                                   </div>
                              </div>
                         </div>

                         <!--Payment-->
                         <div id="payment" class="hidden">
                              <h1 class="mb-4 text-xl font-medium">Choose Payment Method & Pay</h1>
                              <div class="flex w-full">
                                   <div class="w-3/4 pr-8">
                                        <p class="border-2  text-lg rounded-2xl px-5 py-3"><input id="wallet" type="radio" name="payment_method" value="Mobile Wallet" required>   Mobile Wallets 
                                             <br> 
                                             <span id="wallet_info" class="hidden flex mt-3 flex-col justify-center max-w-3xl mx-5 text-center col-span-full lg:col-span-3 lg:text-left">
     
                                                  <span>01. Pay through one of the below wallets <br> <span class="pl-7">Kbz Pay, Wave Pay, One Pay & UAB Pay : 09785854399</span> <br> <span class="pl-7">Name : PHYO THANT KO</span> </span>
     
                                                  <span class="mt-4">02. Upload the screenshot that include transferred date and time</span>
                                                       <input class="form-control block w-full px-2 py-1 my-2 text-sm font-normal bg-gray-200 bg-clip-padding border border-solid border-gray-300 rounded-md transition ease-in-out
                                                       m-0 focus:border-yellow-600 focus:outline-none" type="file">
                                                  </span>
     
                                             </span>
                                        </p> 
                                        <br>
                                        <p class="border-2  text-lg rounded-2xl px-5 py-2"><input id="bank" type="radio" name="payment_method" value="Bank" required>   Bank ( Mobile Banking or Traditional Banking)
                                             <br> 
                                             <span id="bank_info" class="hidden flex mt-3 flex-col justify-center max-w-3xl mx-5 text-center col-span-full lg:col-span-3 lg:text-left">
                                                  <span>01. Pay through one of the banks below <br> <span class="pl-7">KBZ : 3123 0131 2007 8210 1 <br> <span class="pl-7">UAB : 0653 3010 0014 544</span> <br> <span class="pl-7">Name : PHYO THANT KO</span></span>
                                                  </span>
     
                                                  <span class="mt-4">02. Upload the bank transfer receipt or the screenshot that include transferred date and time</span>
                                                       <input class="form-control block w-full px-2 py-1 my-2 text-sm font-normal bg-gray-200 bg-clip-padding border border-solid border-gray-300 rounded-md transition ease-in-out
                                                       m-0 focus:border-yellow-600 focus:outline-none" id="formFileSm" type="file">
                                                  </span>
                                             </span>
                                        </p>
                                   </div>
                                   <div class="w-1/4 leading-loose tracking-wide">
                                        <div class="float-right text-indigo-800 px-7 py-5 bg-indigo-200 rounded-3xl">
                                             <div id="total_container">
                                             Your Total Amount To Pay : <span class="total"> </span>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <input type="submit" name="submit" id="submit" value="Submit Order" class="float-right mt-2 px-5 py-3 font-medium tracking-wide text-yellow-700 capitalize transition-colors duration-200 transform bg-yellow-200 hover:bg-yellow-300 hover:text-yellow-800 focus:outline-none focus:ring focus:ring-yellow-300 focus:ring-opacity-80 rounded-full cursor-pointer text-center">
                         </div>
                    </form>
               </div>
          </div>
     </section>

     <!--Js-->
     <script src="./app/cart.js"></script>
</body>
</html>