@extends('_layouts.master')

@section('body')
    <div class="container mx-auto px-4">
        <div class="nav flex justify-between items-center h-24">
            <div class="contact">
                <a href="mailto:me@thinky.cz" class="no-underline text-blue-600 hover:text-blue-700">
                    <i class="text-xl fas fa-comments"></i><span
                            class="inline-block font-semibold mx-2">Get in touch</span>
                </a>
            </div>
            <div class="social">
                <a href="https://www.linkedin.com/in/hailongdo" target="_blank"
                   class="text-gray-700 hover:text-blue-700 mx-2"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/thinkycz" target="_blank" class="text-gray-700 hover:text-blue-700 mx-2"><i
                            class="fab fa-github"></i></a>
                <a href="https://twitter.com/thinkycz" class="text-gray-700 hover:text-blue-700 mx-2"><i
                            class="fab fa-twitter"></i></a>
                <a href="https://thinkycz.tumblr.com" target="_blank" class="text-gray-700 hover:text-blue-700 mx-2"><i
                            class="fab fa-tumblr"></i></a>
                <a href="https://about.nulisec.com" target="_blank" class="text-gray-700 hover:text-blue-700 mx-2"><i
                            class="fas fa-users"></i></a>
            </div>
        </div>

        <div class="landing md:flex justify-between items-center mt-16">
            <div class="md:w-2/3">
                <h1 class="text-5xl font-light">Hai Long Do</h1>
                <p class="text-gray-700 text-xl font-normal mt-4">Hi! My name is Hai Long Do, and my friends call me
                    Leo.</p>
                <p class="text-gray-700 text-xl font-normal mt-4">I am a Laravel <span class="text-pink-600">Web Developer</span>
                    &amp; Co-Founder of <span class="text-blue-600">Nulisec s.r.o.</span></p>
                <p class="text-gray-700 text-xl font-normal mt-4">Let's be friends!</p>

                <ul class="list-reset mt-12">
                    <li><p class="text-gray-700 text-lg mt-4">I make Web and iOS applications</p></li>
                    <li><p class="text-gray-700 text-lg mt-4">I love travelling and photography</p></li>
                    <li><p class="text-gray-700 text-lg mt-4">I learn Mandarin in my free time</p></li>
                </ul>
            </div>
            <div class="md:w-1/3 lg:p-12 hidden md:block">
                <img src="assets/images/profile.jpg" alt="Profile" class="rounded-full w-full shadow-md">
            </div>
        </div>

        <div class="footer my-16 text-center">
            <h3><a href="https://thinkycz.tumblr.com" target="_blank"
                   class="font-semibold text-blue-700 no-underline hover:text-blue-800">Visit my blog on Tumblr</a></h3>
            <div class="w-10 h-1 bg-blue-700 mx-auto mt-6"></div>
        </div>

        <div class="max-w-4xl mx-auto py-8 sm:py-16 px-6">
            <h2 class="text-3xl lg:text-4xl text-medium-purple font-thin">My Projects</h2>

            <div class="lg:-mx-12 mt-6 sm:mt-12 rounded overflow-hidden shadow bg-blue-700">
                <div class="md:flex">
                    <div class="p-4 md:w-1/2">
                        <a href="https://nulisec.com">
                            <img class="rounded" src="assets/images/nulisec.jpg" alt="Nulisec">
                        </a>
                    </div>
                    <div class="px-6 pt-8 pb-6 md:w-1/2 md:px-12 md:py-8 md:flex md:items-center">
                        <div>
                            <h3 class="text-white text-xl md:text-2xl font-medium hover:underline">
                                <a href="https://nulisec.com">Nulisec</a>
                            </h3>
                            <div class="mt-2 md:mt-3 text-white antialiased font-medium text-sm md:text-md leading-tight md:leading-normal opacity-75">
                                Nulisec is my startup company and the main project I am currently working on. We are building a European B2B marketplace focused on Consumer Packaged Goods.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:-mx-12 mt-6 sm:mt-12 rounded overflow-hidden shadow bg-teal-700">
                <div class="md:flex">
                    <div class="p-4 md:w-1/2">
                        <a href="https://intermarketcompany.cz">
                            <img class="rounded" src="assets/images/skytrade.jpg" alt="Skytrade">
                        </a>
                    </div>
                    <div class="px-6 pt-8 pb-6 md:w-1/2 md:px-12 md:py-8 md:flex md:items-center">
                        <div>
                            <h3 class="text-white text-xl md:text-2xl font-medium hover:underline">
                                <a href="https://intermarketcompany.cz">Skytrade</a>
                            </h3>
                            <div class="mt-2 md:mt-3 text-white antialiased font-medium text-sm md:text-md leading-tight md:leading-normal opacity-75">
                                Skytrade is a name of my B2B Ecommerce platform. Written using Laravel, Vuejs, Tailwind CSS. Shops running on Skytrade include pttglobal.cz or intermarketcompany.cz
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:-mx-12 mt-6 sm:mt-12 rounded overflow-hidden shadow bg-green-700">
                <div class="md:flex">
                    <div class="p-4 md:w-1/2">
                        <a href="https://mgns.cz">
                            <img class="rounded" src="assets/images/magnus.jpg" alt="Magnus">
                        </a>
                    </div>
                    <div class="px-6 pt-8 pb-6 md:w-1/2 md:px-12 md:py-8 md:flex md:items-center">
                        <div>
                            <h3 class="text-white text-xl md:text-2xl font-medium hover:underline">
                                <a href="https://mgns.cz">Magnus</a>
                            </h3>
                            <div class="mt-2 md:mt-3 text-white antialiased font-medium text-sm md:text-md leading-tight md:leading-normal opacity-75">
                                An E-learning platform and CMS to manage our Students, Lectors and Classes. Focused on the Vietnamese community in Czechia. Built using Laravel and Tailwind.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:-mx-12 mt-6 sm:mt-12 rounded overflow-hidden shadow bg-indigo-700">
                <div class="md:flex">
                    <div class="p-4 md:w-1/2">
                        <a href="http://hanzi.thinky.cz">
                            <img class="rounded" src="assets/images/hanzi.jpg" alt="Hanzi">
                        </a>
                    </div>
                    <div class="px-6 pt-8 pb-6 md:w-1/2 md:px-12 md:py-8 md:flex md:items-center">
                        <div>
                            <h3 class="text-white text-xl md:text-2xl font-medium hover:underline">
                                <a href="http://hanzi.thinky.cz">Hanzi</a>
                            </h3>
                            <div class="mt-2 md:mt-3 text-white antialiased font-medium text-sm md:text-md leading-tight md:leading-normal opacity-75">
                                My first Vuejs project. I combined my coding skills and interest in Chinese language, and this is the result! It's a simple website that I used to learn Chinese Characters.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
