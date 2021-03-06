<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>



        <link href="{{asset('css/vendor.css')}}" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <!-- Load Font Awesome 5 -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

        <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
        <style>
            #menu-toggle:checked + #menu {
                display: block;
            }
        </style>
    </head>
    <body class="bg-chosen">
    <header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-0 py-2 border-t-4 border-teal-600">
        <div class="flex-1 flex justify-between items-center">
            <a href="#">
                <svg width="32" height="36" viewBox="0 0 32 36" xmlns="http://www.w3.org/2000/svg"><path d="M15.922 35.798c-.946 0-1.852-.228-2.549-.638l-10.825-6.379c-1.428-.843-2.549-2.82-2.549-4.501v-12.762c0-1.681 1.12-3.663 2.549-4.501l10.825-6.379c.696-.41 1.602-.638 2.549-.638.946 0 1.852.228 2.549.638l10.825 6.379c1.428.843 2.549 2.82 2.549 4.501v12.762c0 1.681-1.12 3.663-2.549 4.501l-10.825 6.379c-.696.41-1.602.638-2.549.638zm0-33.474c-.545 0-1.058.118-1.406.323l-10.825 6.383c-.737.433-1.406 1.617-1.406 2.488v12.762c0 .866.67 2.05 1.406 2.488l10.825 6.379c.348.205.862.323 1.406.323.545 0 1.058-.118 1.406-.323l10.825-6.383c.737-.433 1.406-1.617 1.406-2.488v-12.757c0-.866-.67-2.05-1.406-2.488l-10.825-6.379c-.348-.21-.862-.328-1.406-.328zM26.024 13.104l-7.205 13.258-3.053-5.777-3.071 5.777-7.187-13.258h4.343l2.803 5.189 3.107-5.832 3.089 5.832 2.821-5.189h4.352z"></path></svg>
            </a>
        </div>

        <label for="menu-toggle" class="pointer-cursor lg:hidden block"><svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
            <nav>
                <ul class="lg:flex items-center justify-between text-base text-gray-700 mb-0 lg:pt-0">
                    <li class="mr-6"><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 hover:no-underline" href="#">Features</a></li>
                    <li class="mr-6"><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 hover:no-underline" href="#">Pricing</a></li>
                    <li class="mr-6"><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 hover:no-underline" href="#">Documentation</a></li>
                    <li class="mr-6"><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 hover:no-underline" href="#">Support</a></li>
                </ul>
            </nav>
            <a href="#" class="lg:ml-0 flex items-center justify-start lg:mb-0 mb-0 pointer-cursor">
                <img class="rounded-full w-10 h-10 border-2 border-transparent hover:border-indigo-400" src="https://pbs.twimg.com/profile_images/1128143121475342337/e8tkhRaz_normal.jpg" alt="Andy Leverenz">
            </a>

        </div>

    </header>
    <div class="px-4">
        <div class="max-w-3xl bg-white rounded-lg mx-auto my-16 p-16">
            <h1 class="text-2xl font-medium mb-2">Let's Build: With Tailwind CSS</h1>
            <h2 class="font-medium text-sm text-indigo-400 mb-4 uppercase tracking-wide">Responsive Navbar</h2>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum illo cupiditate molestias atque consequuntur ea quo cumque, odit velit sint similique? Asperiores ratione aperiam tempora, alias corrupti deleniti quaerat molestiae.
        </div>
    </div>
    <div id="app"></div>
    <script src="{{asset('js/manifest.js')}}"></script>
    <script src="{{asset('js/vendor.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
