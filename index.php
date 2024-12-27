<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Coffee</title>
    <!-- font awesome  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body class="bg-[url('img/bg.jpg')]">
    
    <!-- nav section  -->
    <div class="navbar bg-base-100 max-w-5xl justify-self-center ">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a>HOME</a></li>
                    <li><a>PRODUCTS</a></li>
                    <li><a>ORDERS</a></li>
                    <li><a>ABOUT US</a></li>
                    <li><a>CONTACT US</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl">
                <img width="70%" src="img/logo.jpg" alt="">
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a>HOME</a></li>
                <li><a>PRODUCTS</a></li>
                <li><a>ORDERS</a></li>
                <li><a>ABOUT US</a></li>
                <li><a>CONTACT US</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <a class="btn"><i class="fa-solid fa-user"></i></a>
            <a class="btn"><i class="fa-regular fa-heart"></i></a>
            <a class="btn"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </div>
</body>

</html>