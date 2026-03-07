---
language: cs
---

@extends('_layouts.master')

@php
$socialLinks = [
[
'name' => 'LinkedIn',
'url' => 'https://www.linkedin.com/in/hailongdo',
'icon' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
</svg>'
],
[
'name' => 'GitHub',
'url' => 'https://github.com/thinkycz',
'icon' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
</svg>'
],
[
'name' => 'Twitter',
'url' => 'https://twitter.com/thinkycz',
'icon' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
</svg>'
],
];

$skills = [
'Tvořím webové a iOS aplikace',
'Miluji cestování a fotografování',
'Ve volném čase se učím mandarínštinu',
];

$projects = [
[
'name' => 'Teacha',
'url' => 'https://teacha.cz/',
'description' => 'Prémiová značka nápojů nabízející vysoce kvalitní Matcha a přizpůsobitelné Bubble Tea.',
'image' => '/assets/images/teacha.jpg',
'color' => 'red',
'badge' => 'Gastro',
],
[
'name' => 'StickerApp',
'url' => 'https://stickerapp.thinky.cz/',
'description' => 'Kreativní platforma pro navrhování a tisk vlastních samolepek pomocí snadno použitelných nástrojů.',
'image' => '/assets/images/stickerapp.jpg',
'color' => 'yellow',
'badge' => 'E-Commerce',
],
[
'name' => 'CashierApp',
'url' => 'https://cashierapp.thinky.cz/',
'description' => 'Moderní webový pokladní systém (POS) navržený pro zefektivnění procesu platby a správu prodejů.',
'image' => '/assets/images/cashierapp.jpg',
'color' => 'purple',
'badge' => 'POS',
],
[
'name' => 'UptimePro',
'url' => 'https://uptimepro.thinky.cz/',
'description' => 'Nástroj pro komplexní monitorování dostupnosti, který zajišťuje, že vaše webové stránky a služby zůstanou online a výkonné.',
'image' => '/assets/images/uptimepro.jpg',
'color' => 'orange',
'badge' => 'SaaS',
],
[
'name' => 'Nulisec',
'url' => 'https://nulisec.com',
'description' => 'Nulisec je můj startup, který jsem založil v roce 2017 s kamarády. Budujeme evropské B2B tržiště zaměřené na rychloobrátkové spotřební zboží.',
'image' => '/assets/images/nulisec.jpg',
'color' => 'blue',
'badge' => 'Startup',
],
[
'name' => 'Skytrade',
'url' => 'https://intermarketcompany.cz',
'description' => 'Skytrade je název mé B2B e-commerce platformy. Napsáno pomocí Laravel, Vuejs a Tailwind CSS. Obchody běžící na Skytrade zahrnují pttglobal.cz nebo intermarketcompany.cz.',
'image' => '/assets/images/skytrade.jpg',
'color' => 'teal',
'badge' => 'E-Commerce',
'reverse' => true,
],
[
'name' => 'Magnus',
'url' => 'javascript:void(0)',
'description' => 'E-learningová platforma a CMS pro správu našich studentů, lektorů a tříd. Zaměřeno na vietnamskou komunitu v Česku. Postaveno pomocí Laravel a Tailwind.',
'image' => '/assets/images/magnus.jpg',
'color' => 'slate',
'badge' => 'CMS / E-Learning',
'offline' => true,
],
[
'name' => 'Hanzi',
'url' => 'http://hanzi.thinky.cz',
'description' => 'Můj první Vuejs projekt. Zkombinoval jsem své programátorské dovednosti a zájem o čínštinu a toto je výsledek! Je to jednoduchá webová stránka, kterou jsem používal k učení čínských znaků.',
'image' => '/assets/images/hanzi.jpg',
'color' => 'indigo',
'badge' => 'Personal',
'reverse' => true,
],
];
@endphp

@section('body')
<div class="relative min-h-screen font-sans text-slate-800 selection:bg-blue-200 selection:text-blue-900 bg-slate-50 overflow-hidden z-0">
    <!-- Animated SVG Blob Background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none w-full h-full z-[-1]">
        <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute top-[20%] right-[-5%] w-[400px] h-[400px] bg-teal-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-[-10%] left-[20%] w-[600px] h-[600px] bg-indigo-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob" style="animation-delay: 4s;"></div>
    </div>

    <div class="max-w-4xl mx-auto px-6 relative z-10 transition-all duration-500">
        <!-- Header -->
        <header class="flex flex-col md:flex-row justify-between items-center py-8 gap-6 animate-fade-in-up">
            <div class="flex items-center">
                <a href="mailto:me@thinky.cz" class="group flex items-center px-5 py-2.5 bg-white/70 backdrop-blur-md border border-slate-200/50 rounded-full text-slate-700 font-medium hover:bg-white hover:text-blue-600 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                    <svg class="w-4 h-4 mr-2 text-blue-500 group-hover:scale-110 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Napište mi
                </a>
            </div>
            <div class="flex items-center space-x-4 bg-white/70 backdrop-blur-md border border-slate-200/50 rounded-full px-5 py-2.5 shadow-sm hover:shadow-md transition-shadow">
                @foreach($socialLinks as $link)
                <a href="{{ $link['url'] }}" target="_blank" aria-label="{{ $link['name'] }}" class="text-slate-400 hover:text-slate-900 hover:scale-110 transition-all duration-300">
                    {!! $link['icon'] !!}
                </a>
                @endforeach

                <div class="pl-4 ml-2 border-l border-slate-200 flex space-x-3 items-center">
                    <a href="/" class="text-xs font-semibold text-slate-400 hover:text-slate-900 transition-colors tracking-wider">EN</a>
                    <a href="/cs/" class="text-xs font-bold text-blue-600 tracking-wider">CS</a>
                    <a href="/vi/" class="text-xs font-semibold text-slate-400 hover:text-slate-900 transition-colors tracking-wider">VI</a>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <main class="py-16 md:py-24 animate-fade-in-up" style="animation-delay: 0.1s;">
            <div class="md:flex justify-between items-center mb-28 gap-12">
                <div class="md:w-2/3">
                    <h1 class="text-5xl md:text-7xl font-light text-slate-900 tracking-tight leading-tight">
                        Long <span class="font-semibold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Do</span>
                    </h1>
                    <div class="mt-8 space-y-6 text-xl text-slate-600 font-light leading-relaxed">
                        <p>Ahoj! Jmenuji se Hai Long Do a kamarádi mi říkají Leo.</p>
                        <ul class="space-y-4 mt-6">
                            <li class="flex items-center text-lg">
                                <span class="bg-pink-100 text-pink-500 w-10 h-10 rounded-full flex items-center justify-center mr-4 shadow-sm text-xl shrink-0">
                                    💻
                                </span>
                                <span>Jsem <span class="font-medium bg-pink-50 px-2.5 py-1 rounded-md text-pink-700 shadow-sm border border-pink-100">Full-stack Web Developer</span></span>
                            </li>
                            <li class="flex items-center text-lg">
                                <span class="bg-blue-100 text-blue-500 w-10 h-10 rounded-full flex items-center justify-center mr-4 shadow-sm text-xl shrink-0">
                                    🚀
                                </span>
                                <span>Spoluzakladatel <span class="font-medium bg-blue-50 px-2.5 py-1 rounded-md text-blue-700 shadow-sm border border-blue-100">Nulisec s.r.o.</span></span>
                            </li>
                            <li class="flex items-center text-lg">
                                <span class="bg-teal-100 text-teal-500 w-10 h-10 rounded-full flex items-center justify-center mr-4 shadow-sm text-xl shrink-0">
                                    🏢
                                </span>
                                <span>Vývojář v <span class="font-medium bg-teal-50 px-2.5 py-1 rounded-md text-teal-700 shadow-sm border border-teal-100">Pixelmate</span></span>
                            </li>
                        </ul>
                        <p class="text-2xl text-slate-800 font-medium mt-8">Pojďme se poznat!</p>
                    </div>

                    <ul class="mt-12 space-y-4 text-lg text-slate-600">
                        @foreach($skills as $skill)
                        <li class="flex items-center group">
                            <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center mr-4 group-hover:scale-110 group-hover:bg-green-200 transition-all duration-300">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="group-hover:text-slate-900 transition-colors">{{ $skill }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="md:w-1/3 mt-16 md:mt-0 flex justify-center md:justify-end shrink-0">
                    <div class="relative group cursor-pointer">
                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-400 to-teal-300 rounded-full transform translate-x-4 translate-y-4 group-hover:translate-x-6 group-hover:translate-y-6 transition-transform duration-500 opacity-60"></div>
                        <img src="/assets/images/profile.jpg" alt="Profile" class="relative rounded-full w-64 h-64 md:w-full md:h-auto object-cover aspect-square shadow-2xl border-4 border-white group-hover:-translate-y-2 transition-transform duration-500">
                    </div>
                </div>
            </div>

            <!-- Text / Experience Hook -->
            <div class="mb-24 flex flex-col items-center text-center max-w-2xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s;">
                <p class="text-xl text-slate-700 font-light leading-relaxed mb-6">
                    👋 Možná už mou práci znáte! Podílel jsem se například na vývoji <span class="font-medium text-red-600 border-b border-red-200 pb-0.5">Vodafone Samoobsluhy</span> při práci ve Vodafone v roce 2016 📱.
                </p>

                <div class="flex items-center justify-center w-full mb-6">
                    <div class="h-px bg-slate-200 w-16"></div>
                    <svg class="w-5 h-5 text-slate-300 mx-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                    <div class="h-px bg-slate-200 w-16"></div>
                </div>

                <p class="text-lg text-slate-500 font-light leading-relaxed italic">
                    Kromě mého veřejného portfolia jsem během práce v softwarových agenturách spolupracoval na mnoha dalších projektech a společně s týmem jsme dokončili desítky úspěšných projektů. Ačkoliv mi dohody o mlčenlivosti nedovolují je zveřejnit, byly klíčové pro rozvoj mých dovedností.
                </p>
            </div>

            <!-- Projects Section (Infinite Carousel) -->
            <section class="animate-fade-in-up w-[100vw] relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] overflow-hidden flex group" style="animation-delay: 0.3s; padding-bottom: 3rem; padding-top: 1rem;">
                <!-- Full-bleed Infinite Carousel Container -->
                <div class="flex w-max animate-carousel group-hover:[animation-play-state:paused]">
                    <div class="flex gap-6 md:gap-8 pr-6 md:pr-8 w-max">
                        @foreach($projects as $project)
                        @if(isset($project['offline']))
                        <div class="group/card flex flex-col bg-white/60 backdrop-blur-sm rounded-3xl overflow-hidden shadow-sm border border-white shrink-0 w-[85vw] md:w-[400px] cursor-not-allowed opacity-80 mix-blend-luminosity">
                            @else
                            <a href="{{ $project['url'] }}" target="_blank" class="group/card flex flex-col bg-white/60 backdrop-blur-sm rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-white shrink-0 w-[85vw] md:w-[400px]">
                                @endif
                                <div class="bg-{{ $project['color'] }}-50 relative overflow-hidden h-48 md:h-56 shrink-0">
                                    <div class="absolute inset-0 bg-{{ $project['color'] }}-500 opacity-0 group-hover/card:opacity-10 transition-opacity duration-500 z-10 mix-blend-multiply"></div>
                                    <img class="w-full h-full object-cover object-top @if(!isset($project['offline'])) group-hover/card:scale-105 @endif transition-transform duration-700 ease-out" src="{{ $project['image'] }}" alt="{{ $project['name'] }}">
                                </div>
                                <div class="p-8 flex flex-col flex-grow bg-white/40 border-t border-white/50 relative">
                                    @if(isset($project['offline']))
                                    <div class="absolute top-6 right-8 flex items-center text-slate-500 text-sm italic font-medium">
                                        <svg class="w-4 h-4 mr-1.5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                                        </svg>
                                        Projekt offline
                                    </div>
                                    @endif
                                    @if(isset($project['badge']))
                                    <span class="inline-block px-3 py-1 bg-{{ $project['color'] }}-100 text-{{ $project['color'] }}-700 text-xs font-bold rounded-full uppercase tracking-wider mb-4 self-start">
                                        {{ $project['badge'] }}
                                    </span>
                                    @endif
                                    <h3 class="text-2xl font-medium text-slate-900 @if(!isset($project['offline'])) group-hover/card:text-{{ $project['color'] }}-600 @endif transition-colors mb-4 flex items-center justify-between">
                                        {{ $project['name'] }}
                                        @if(!isset($project['offline']))
                                        <svg class="w-5 h-5 opacity-0 -translate-x-2 group-hover/card:opacity-100 group-hover/card:translate-x-0 transition-all duration-500 ease-out" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                        @endif
                                    </h3>
                                    <p class="text-slate-600 leading-relaxed text-base">
                                        {{ $project['description'] }}
                                    </p>
                                </div>
                                @if(isset($project['offline']))
                        </div>
                        @else
                        </a>
                        @endif
                        @endforeach
                    </div>
                    <div class="flex gap-6 md:gap-8 pr-6 md:pr-8 w-max" aria-hidden="true">
                        @foreach($projects as $project)
                        <a href="{{ $project['url'] }}" target="_blank" class="group/card flex flex-col bg-white/60 backdrop-blur-sm rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-white shrink-0 w-[85vw] md:w-[400px]">
                            <div class="bg-{{ $project['color'] }}-50 relative overflow-hidden h-48 md:h-56 shrink-0">
                                <div class="absolute inset-0 bg-{{ $project['color'] }}-500 opacity-0 group-hover/card:opacity-10 transition-opacity duration-500 z-10 mix-blend-multiply"></div>
                                <img class="w-full h-full object-cover object-top group-hover/card:scale-105 transition-transform duration-700 ease-out" src="{{ $project['image'] }}" alt="{{ $project['name'] }}">
                            </div>
                            <div class="p-8 flex flex-col flex-grow bg-white/40 border-t border-white/50">
                                @if(isset($project['badge']))
                                <span class="inline-block px-3 py-1 bg-{{ $project['color'] }}-100 text-{{ $project['color'] }}-700 text-xs font-bold rounded-full uppercase tracking-wider mb-4 self-start">
                                    {{ $project['badge'] }}
                                </span>
                                @endif
                                <h3 class="text-2xl font-medium text-slate-900 group-hover/card:text-{{ $project['color'] }}-600 transition-colors mb-4 flex items-center justify-between">
                                    {{ $project['name'] }}
                                    <svg class="w-5 h-5 opacity-0 -translate-x-2 group-hover/card:opacity-100 group-hover/card:translate-x-0 transition-all duration-500 ease-out" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </h3>
                                <p class="text-slate-600 leading-relaxed text-base">
                                    {{ $project['description'] }}
                                </p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="py-12 mt-12 flex flex-col items-center justify-center border-t border-slate-200/60 animate-fade-in-up" style="animation-delay: 0.4s;">
            <p class="text-slate-500 text-sm font-medium">
                &copy; {{ date('Y') }} Hai Long Do. Všechna práva vyhrazena.
            </p>
            <p class="text-slate-400 text-xs mt-2">
                Designed & Built with Laravel, Tailwind, and ❤️
            </p>
        </footer>
    </div>
</div>
@endsection