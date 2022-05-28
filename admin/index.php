<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-gray-50">
    <div class="flex">
        <div class="flex flex-col w-64 h-screen px-4 py-8 border-r dark:bg-gray-800 dark:border-gray-600">
            <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">CreatorSets</h2>
            
            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav>
                    <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-200 rounded-md dark:bg-gray-700 dark:text-gray-200" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="mx-4 font-medium">Dashboard</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="mx-4 font-medium">Manage Orders</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="mx-4 font-medium">Manage Products</span>
                    </a>
                </nav>
            </div>
        </div>
        <div class="mx-auto py-8">
            <h2 class="text-2xl font-medium">Dashboard</h2>
            <div class="mt-6 grid gap-20 grid-flow-col">
                <div class="shadow-sm bg-white flex pl-4 pr-28 py-5 rounded-lg">
                    <img src="../app/images/user.png" class="w-12 mr-4">
                    <p class="grid place-items-center"> 1938 <br> Total Users</p>
                </div>

                <div class="shadow-sm bg-white flex pl-4 pr-28 py-5 rounded-lg">
                    <img src="../app/images/shopping-bag.png" class="w-12 mr-4">
                    <p class="grid place-items-center"> 1938 <br> Total Orders</p>
                </div>

                <div class="shadow-sm bg-white flex pl-4 pr-28 py-5 rounded-lg">
                    <img src="../app/images/user.png" class="w-12 mr-4">
                    <p class="grid place-items-center"> 1938 <br> Total Users</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>