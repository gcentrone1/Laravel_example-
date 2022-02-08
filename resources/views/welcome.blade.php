<!DOCTYPE html>

<head>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body style="font-family: Open Sans, sans-serif;">
<div>
    <section class="px-6 py-8">
        <nav class="flex justify-between items-center">
            <div>
                <a href="/">
                    <img src="./photos/logo.svg"  alt="Laracasts Logo" width="165" height="16">

                </a>
            </div>

            <div>
                <a href="/" class="text-xs uppercase"> Home Page</a>
                <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs text-white uppercase py-3 px-6">
                    Susbcribe for Updates </a>
            </div>

        </nav>
        <header class=" max-w-4xl mx-auto mt-20 text-center">
            <div class="max-w-xl mx-auto">

                <h1 class="text-4xl">
                    Latest <span class="text-blue-500">Laravel From Scratch</span> News
                </h1>
                <h2 class="inline-flex mt-5">By Lara Laracore <img src="./photos/lary-head.svg"></h2>
                <p class="text-m mt-10">
                    Another year. Another Update. We're refreshing the popular Laravel series with new content. I'm
                    going to keep you guys up to spped with what's going on!
                </p>
                <div class="tw-flex tw-justify-center space-x-6 mt-8">
                    <span class="relative bg-gray-100 items-center bg-gray-100 inline-block rounded-xl">
                        <select class="apperance-none bg-transparent py-2 pl-3 pr-5">
                            <option value="category" disabled selected>Category</option>
                            <option value="personal">Personal</option>
                            <option value="business">Business</option>

                        </select>
                    </span>
                    <span class="relative bg-gray-100 items-center bg-gray-100 inline-block rounded-xl">
                        <select class="apperance-none bg-transparent py-2 pl-3 pr-5">
                            <option value="category" disabled selected>Other Filters</option>
                            <option value="foo">Foo</option>
                            <option value="bar">Bar</option>

                        </select>
                    </span>
                    <span class="relative bg-gray-100 items-center bg-gray-100 inline-block rounded-xl px-3 py-2">
                        <form method="GET" action="#">
                            <input type="text" name="search" placeholder="Find something"
                                class="bg-transparent placeholder-black font-semibold">
                        </form>
                    </span>


                </div>
            </div>

        </header>
        <main class="max-w-6xl mx-auto mt-20 space-y-6">
            <article class="bg-gray-100 rounded-xl">

                <div class="py-6 px-5 flex">
                    <div class="flex-1 mr-8">
                        <img src="./photos/illustration-1.png">
                    </div>
                    <div class="flex-1">
                        <header>
                            <div class="space-x-2">
                                <a href="#"
                                    class="px-3 py-1 border border-blu-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                    style="font-size: 10px;">Techniques </a>
                                <a href="#"
                                    class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                    style="font-size: 10px;">Updates </a>

                            </div>
                            <div class="mt-4">
                                <h1 class="text-3xl">This is a big title and it will look great on two or even three
                                    line. </h1>
                                <span class="mt-2 block text-gray-400-xs">
                                    Published <time>1 day ago</time>
                                </span>
                            </div>
                        </header>
                        <div class="text-sm mt-6">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <p class="mt-2"> Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. </p>
                        </div>






                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img src="./photos/lary-avatar.svg">

                                <div class="ml-3">
                                    <h5 class="font-bold">Lary Laracore </h5>
                                    <h6>Mascot at Laracasts</h6>
                                </div>
                            </div>


                            <div>
                                <a href="#" class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-5"> Read
                                    More </a>

                            </div>

                        </footer>
                    </div>

                </div>

            </article>

            <div class="grid grid-cols-2">
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">

                    <div class="py-6 px-5x p-5">
                        <div>
                            <img src="./photos/illustration-1.png">
                        </div>
                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                        class="px-3 py-1 border border-blu-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px;">Techniques </a>
                                    <a href="#"
                                        class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px;">Updates </a>

                                </div>
                                <div class="mt-4">
                                    <h1 class="text-3xl">This is a big title and it will look great on two or even
                                        three
                                        line. </h1>
                                    <span class="mt-2 block text-gray-400-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                                </div>
                            </header>
                            <div class="text-sm mt-4">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <p class="mt-2"> Lorem Ipsum has been the industry's standard dummy text ever since
                                    the
                                    1500s, when an unknown printer took a galley of type and scrambled it to make a
                                    type
                                    specimen book. </p>
                            </div>






                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="./photos/lary-avatar.svg">

                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore </h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>


                                <div>
                                    <a href="#" class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-5">
                                        Read
                                        More </a>

                                </div>

                            </footer>
                        </div>

                    </div>

                </article>
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">

                    <div class="py-6 px-5x p-5">
                        <div>
                            <img src="./photos/illustration-2.png">
                        </div>
                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                        class="px-3 py-1 border border-blu-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px;">Techniques </a>
                                    <a href="#"
                                        class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px;">Updates </a>

                                </div>
                                <div class="mt-4">
                                    <h1 class="text-3xl">This is a big title and it will look great on two or even
                                        three
                                        line. </h1>
                                    <span class="mt-2 block text-gray-400-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                                </div>
                            </header>
                            <div class="text-sm mt-4">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <p class="mt-2"> Lorem Ipsum has been the industry's standard dummy text ever since
                                    the
                                    1500s, when an unknown printer took a galley of type and scrambled it to make a
                                    type
                                    specimen book. </p>
                            </div>






                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="./photos/lary-avatar.svg">

                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore </h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>


                                <div>
                                    <a href="#" class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-5">
                                        Read
                                        More </a>

                                </div>

                            </footer>
                        </div>

                    </div>

                </article>
            </div>
            <div class="grid grid-cols-3">
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">

                    <div class="py-6 px-5x p-5">
                        <div>
                            <img src="./photos/illustration-3.png">
                        </div>
                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                        class="px-3 py-1 border border-blu-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px;">Techniques </a>
                                    <a href="#"
                                        class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px;">Updates </a>

                                </div>
                                <div class="mt-4">
                                    <h1 class="text-3xl">This is a big title and it will look great on two or even
                                        three
                                        line. </h1>
                                    <span class="mt-2 block text-gray-400-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                                </div>
                            </header>
                            <div class="text-sm mt-4">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <p class="mt-2"> Lorem Ipsum has been the industry's standard dummy text ever since
                                    the
                                    1500s, when an unknown printer took a galley of type and scrambled it to make a
                                    type
                                    specimen book. </p>
                            </div>






                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="./photos/lary-avatar.svg">

                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore </h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>


                                <div>
                                    <a href="#" class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-5">
                                        Read
                                        More </a>

                                </div>

                            </footer>
                        </div>

                    </div>
                </article>


                <article class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">

                    <div class="py-6 px-5x p-5">
                        <div>
                            <img src="./photos/illustration-4.png">
                        </div>
                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                        class="px-3 py-1 border border-blu-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px;">Techniques </a>
                                    <a href="#"
                                        class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px;">Updates </a>

                                </div>
                                <div class="mt-4">
                                    <h1 class="text-3xl">This is a big title and it will look great on two or even
                                        three
                                        line. </h1>
                                    <span class="mt-2 block text-gray-400-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                                </div>
                            </header>
                            <div class="text-sm mt-4">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <p class="mt-2"> Lorem Ipsum has been the industry's standard dummy text ever since
                                    the
                                    1500s, when an unknown printer took a galley of type and scrambled it to make a
                                    type
                                    specimen book. </p>
                            </div>






                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="./photos/lary-avatar.svg">

                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore </h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>


                                <div>
                                    <a href="#" class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-5">
                                        Read
                                        More </a>

                                </div>

                            </footer>
                        </div>

                    </div>
                </article>
                <article class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">

                    <div class="py-6 px-5x p-5">
                        <div>
                            <img src="./photos/illustration-5.png">
                        </div>
                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                        class="px-3 py-1 border border-blu-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px;">Techniques </a>
                                    <a href="#"
                                        class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px;">Updates </a>

                                </div>
                                <div class="mt-4">
                                    <h1 class="text-3xl">This is a big title and it will look great on two or even
                                        three
                                        line. </h1>
                                    <span class="mt-2 block text-gray-400-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                                </div>
                            </header>
                            <div class="text-sm mt-4">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <p class="mt-2"> Lorem Ipsum has been the industry's standard dummy text ever since
                                    the
                                    1500s, when an unknown printer took a galley of type and scrambled it to make a
                                    type
                                    specimen book. </p>
                            </div>






                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="./photos/lary-avatar.svg">

                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore </h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>


                                <div>
                                    <a href="#" class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-5">
                                        Read
                                        More </a>

                                </div>

                            </footer>
                        </div>

                    </div>
                </article>
                </div>
        </main>

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="./photos/lary-newsletter-icon.svg" class="m-auto">
            <h5 class="text-3xl">Stay un touch with the latest posts.</h5>
            <p class="text-sm">Promise to keep the inbox clean. No bugs. </p>
            <div class="mt-10">
                <div class="relative inline-block max-w-xs mx-auto bg-gray-200 rounded-full py-3 px-5">
                    
                    <form method="POST" action="/" class="flex items-center text-sm">
                        <label for="email"> </label>
                        <input id="email" type="text" placeholder="Your email address" class="bg-transparent pl-4 focus-within:outline-none">
                        <button type="submit" class="bg-blue-500 ml-3 rounded-full text-xs text-white uppercase py-3 px-8">Susbcribe</button>
                    </form>
                </div>
            </div>

        </footer>
    </section>


</body>



</html>