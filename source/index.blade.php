@extends('_layouts.master')

@section('body')
    <div class="container mx-auto">
        <div class="nav flex justify-between items-center h-24">
            <div class="contact">
                <a href="#" class="no-underline text-blue-dark hover:text-blue-darker">
                    <i class="text-xl fas fa-comments"></i><span class="inline-block font-semibold mx-2">Get in touch</span>
                </a>
            </div>
            <div class="social">
                <a href="https://www.linkedin.com/in/hailongdo" target="_blank" class="text-grey-darkest hover:text-blue-dark mx-2"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/thinkycz" target="_blank" class="text-grey-darkest hover:text-blue-dark mx-2"><i class="fab fa-github"></i></a>
                <a href="https://twitter.com/thinkycz" class="text-grey-darkest hover:text-blue-dark mx-2"><i class="fab fa-twitter"></i></a>
                <a href="https://thinkycz.tumblr.com" target="_blank" class="text-grey-darkest hover:text-blue-dark mx-2"><i class="fab fa-tumblr"></i></a>
                <a href="https://about.nulisec.com" target="_blank" class="text-grey-darkest hover:text-blue-dark mx-2"><i class="fas fa-users"></i></a>
            </div>
        </div>

        <div class="landing md:flex justify-between items-center mt-16">
            <div class="md:w-2/3">
                <h1 class="text-5xl font-thin">Hai Long Do</h1>
                <p class="text-grey-darkest text-xl font-normal mt-4">Hi! My name is Hai Long Do, and my friends call me Leo.</p>
                <p class="text-grey-darkest text-xl font-normal mt-4">I am a Laravel <span class="text-pink-dark">Web Developer</span> &amp; Co-Founder of <span class="text-blue-dark">Nulisec s.r.o.</span></p>
                <p class="text-grey-darkest text-xl font-normal mt-4">Let's be friends!</p>

                <ul class="list-reset mt-12">
                    <li><p class="text-grey-darker text-lg mt-4">I make Web and iOS applications</p></li>
                    <li><p class="text-grey-darker text-lg mt-4">I love travelling and photography</p></li>
                    <li><p class="text-grey-darker text-lg mt-4">I learn Mandarin in my free time</p></li>
                </ul>
            </div>
            <div class="md:w-1/3 lg:p-12 hidden md:block">
                <img src="assets/images/profile.jpg" alt="Profile" class="rounded-full w-full shadow-md">
            </div>
        </div>

        <div class="footer mt-16 text-center">
            <h3><a href="https://thinkycz.tumblr.com" target="_blank" class="text-blue-dark no-underline hover:text-blue-darker">Visit my blog on Tumblr</a></h3>
            <div class="w-10 h-1 bg-blue-dark mx-auto mt-6"></div>
        </div>
    </div>
@endsection