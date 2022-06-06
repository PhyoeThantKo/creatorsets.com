<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Create New Product, Chief</title>
     <link rel="stylesheet" href="../style.css">
</head>
<body>

     <form class="flex w-full" action="./addnewproduct.php" method="POST">
          <div class="w-full max-w-2xl px-5 py-10 mx-auto mt-10 bg-white rounded-lg shadow dark:bg-gray-800">
               <div class="mb-6 text-3xl font-light text-center text-gray-800 dark:text-white">
                    Add New Product
               </div>
               <div class="grid max-w-xl grid-cols-2 gap-4 m-auto">
                    <div class="col-span-2 lg:col-span-1">
                         <div class=" relative ">
                              <input type="text" name="name" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Name"/>
                         </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1">
                         <div class=" relative ">
                              <input type="text" name="price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Price"/>
                         </div>
                    </div>

                    <div class="col-span-2 lg:col-span-1">
                         <div class=" relative ">
                              <input type="text" name="yearly_price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Yearly Price"/>
                         </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1">
                         <div class=" relative ">
                         <select name="cms" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                              <option value="Ghost Ruby">Ghost Ruby</option>
                              <option value="Wordpress">Wordpress</option>
                         </select>
                         </div>
                    </div>

                    <div class="col-span-2 text-right">
                         <button type="submit" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                   Add Product
                         </button>
                    </div>
               </div>
          </div>
     </form>

</body>
</html>