<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@extends('frontend-master')
{{-- 
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif --}}

        @section('content')
            <!-- Hero section -->
            <div class="container pt-16 mx-auto text-left md:text-center">
                <div class="relative max-w-4xl mx-auto">
                    <h1
                        class="pb-2 text-4xl font-extrabold text-left text-transparent sm:text-5xl md:text-4xl md:text-center bg-clip-text bg-gradient-to-r from-secondary via-primary to-secondary-light">
                        A software developers directory for dev companies.</h1>
        
                    <button
                        class="relative w-full px-12 py-5 mt-8 text-xl font-semibold leading-5 text-center text-white capitalize bg-black md:w-auto hover:bg-primary focus:outline-none focus:bg-primary md:mx-0 rounded">
                        Get Started
                    </button>
                </div>
        
                <!-- CTA Banner -->
                <div class="absolute left-0 mt-16 w-full h-20 md:h-16 p-4 bg-black/90 text-center text-white">
                    Site Stats 30+ Dev Community listings | 15+ Organisations | 260 + Developers
                </div>
        
                <div class=" bg-white mt-40 md:mt-16 p-4 sm:py-32">
                    <div class="lg:text-center">
                        <h2 class="text-3xl font-light leading-7 ">Dev Communities KE</h2>
                        <p class="mt-2 tracking-tight text-base text-gray-900"> Would you like to update info of the listed
                            communities? Check out the github repo. </p>
                        <p class="mt-4 leading-8 font-bold text-base text-primary"> ADD/UPDATE » </p>
                    </div>
        
                </div>
        
        
            </div>
        
            <!-- Community cards -->
            <div class="relative grid mt-[-20] grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4 p-8">
        
                @for ($i = 0; $i < 4; $i++)
                    <div class="card grow items-center p-4 text-center sm:p-5 bg-gray-100">
                        <div class="avatar h-18 w-18">
                            <img class="rounded-full mx-auto" src="img/200x200.png" alt="avatar" />
                        </div>
                        <div class="my-2 grow">
                            <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                                GDG Cloud Nairobi
                            </h3>
                            <h4 class="text-base font-medium text-slate-700 dark:text-navy-100">Google Developers Group (GDG
                                Nairobi) - is open and volunteer geek community who create exciting projects and share
                                experience about Google technologies.
                            </h4>
                            <div>
                                <a href="#/"
                                    class="text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">#GoogleCloud
                                    &VeryThinSpace;</a>
                                <a href="#"
                                    class="text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">#ReactJS
                                    &VeryThinSpace;</a>
                                <a href="#"
                                    class="text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">#NextJS
                                    &VeryThinSpace;</a>
                            </div>
                        </div>
                        <div class="mt-3 flex space-x-1">
                            <button
                                class="btn h-7 rounded-full bg-slate-150 px-3 text-xs+ font-medium text-slate-800 bg-slate-400 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                Community
                            </button>
                            <button
                                class="btn h-7 w-7 rounded-full bg-slate-150 px-0 text-xs+ font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                <i class="far fa-envelope"></i>
                            </button>
                            <button
                                class="btn h-7 w-7 rounded-full bg-slate-150 px-0 text-xs+ font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                <i class="fa fa-ellipsis-h"></i>
                            </button>
                        </div>
                    </div>
                @endfor
        
            </div>
        
            <!-- Joining Cards -->
            <section class="w-full place-items-center mx-auto mt-[-20] p-4 pb-6 ">
        
                <div class=" bg-white p-4 sm:py-32">
                    <div class="lg:text-center">
                        <h2 class="text-3xl font-light leading-7 ">Are You New Here?</h2>
                        <p class="mt-2 tracking-tight text-base text-gray-900"> Join Now </p>
                    </div>
        
                </div>
        
                <div class="grid max-w-4xl mx-auto grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6">
                    <div class="rounded-lg bg-gradient-to-br from-primary to-black py-6 px-5 text-center">
                        <h4 class="text-xl font-semibold text-white">Join as a Org</h4>
                        <p class="pt-2 text-white">
                            Sign up for an account and get listed.
                            Get noticed by software developers and IT prationers on the network and get other services like
                            posting of jobs.
                        </p>
                        <div class="px-5 py-8">
                            <img class="mx-auto h-10 w-10 rounded-3xl" src="img/logo-round.png" alt="image" />
                        </div>
                        <button
                            class="btn w-full border border-white/10 bg-white/30 text-white hover:bg-white/30 focus:bg-white/30">
                            Get Started
                        </button>
                    </div>
                    <div class="rounded-lg bg-gradient-to-br from-secondary to-black py-6 px-5 text-center">
                        <h4 class="text-xl font-semibold text-white">Join as a Dev</h4>
                        <p class="pt-2 text-white">
        
                            Sign up for an account and get listed.
                            You will get a public profile on a unique url. You will recieve alerts on different opportunities
                            like gigs, internships and jobs based on your profile.
                        </p>
                        <div class="px-5 py-8">
                            <img class="mx-auto  h-10 w-10 rounded-3xl" src="img/logo-round.png" alt="image" />
                        </div>
                        <button
                            class="btn w-full border border-white/10 bg-white/20 text-white hover:bg-white/30 focus:bg-white/30">
                            Get Started
                        </button>
                    </div>
        
                </div>
            </section>
        
        @endsection
        
