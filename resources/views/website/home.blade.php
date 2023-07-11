@extends('website._base')

@section('main')
    <div class="relative w-screen h-screen flex items-center overflow-hidden min-h-fit">
        <div class="absolute top-0 -left-[5%] w-[50%] mix-blend-multiply filter blur-2xl opacity-20 animate-blob">
            <div class="w-full pt-[100%] rounded-full bg-cyan-400"></div>
        </div>

        <div
                class="absolute -top-[10%] right-[5%] w-[50%] mix-blend-multiply filter blur-2xl opacity-20 animate-blob animation-delay-2000">
            <div class="w-full pt-[100%] rounded-full bg-purple-300"></div>
        </div>

        <div
                class="absolute -bottom-[15%] -right-[10%] w-[50%] mix-blend-multiply filter blur-xl opacity-20 animate-blob">
            <div class="w-full pt-[100%] rounded-full bg-teal-300"></div>
        </div>

        <div
                class="absolute -bottom-[15%] left-[5%] w-[50%] mix-blend-multiply filter blur-2xl opacity-20 animate-blob animation-delay-4000">
            <div class="w-full pt-[100%] rounded-full bg-lime-200"></div>
        </div>
        <div class="relative w-full bg-white border-t border-b border-gray-100">
            <div class="max-w-screen-xl mx-auto px-4 py-8 md:p-12 flex flex-wrap items-center justify-between">
                <div class="relative z-20">
                    <h1 class="font-medium leading-tight">Hello,<br>
                        I am <strong class="bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500 text-transparent">Jun
                            Teoh</strong>.</h1>
                    <p class="lg:text-xl lg:leading-8 text-gray-600 mt-4">
                        A frontend developer who is passionate about ‍🧑‍💻 coding, 🎨 design.
                        <br>
                        And I just deployed my portfolio site on
                        <a href="https://jun-teoh-portfolio.vercel.app/"
                           class="hover:opacity-70">
                        <span class="inline-flex items-center font-medium text-gray-900"><svg
                                    class="h-4"
                                    viewBox="0 0 76 65"
                                    fill="none" xmlns="http://www.w3.org/2000/svg"><path
                                        d="M37.5274 0L75.0548 65H0L37.5274 0Z" fill="#000000"/></svg> Vercel</span>
                        </a>.
                    </p>
                </div>
                <div class="relative my-4">
                    <div class="absolute inset-0 z-0 rounded-lg bg-gradient-to-r from-cyan-400 to-blue-500
            after:content-['*']  after:bg-gradient-to-r after:from-cyan-400 after:to-blue-400 after:filter after:blur-2xl after:absolute  after:inset-0  after:border-8  after:border-transparent
            "></div>
                    <a href="https://jun-teoh-portfolio.vercel.app/"
                       class="group relative flex items-center z-10 rounded-lg text-lg shadow-custom bg-white bg-clip-padding border border-transparent py-2.5 pl-6 hover:pr-2 hover:text-white hover:bg-transparent transition-all">
                        <span>Enter Site</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor"
                             class="w-5 h-5 md:w-6 md:h-6 text-white lg:transform lg:-translate-x-1 lg:opacity-0 lg:transition-all group-hover:ml-1
                 group-hover:translate-x-0 group-hover:opacity-100 invisible group-hover:visible">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
