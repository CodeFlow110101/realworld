<?php

use App\Models\Program;
use App\Models\Video;
use function Livewire\Volt\{with, mount, state};

state(['video']);

with(fn() => [
    'programs' => Program::get(),
    'studentsSuccessImage' => config('constants.students-success-images'),
]);

$redirectTo = function ($path) {
    $this->redirectRoute($path, navigate: true);
};

mount(function ($video) {
    $this->video = $video;
});
?>

<div class="bg-black">
    <div class="flex jusity-center w-full mt-16">
        <div class="w-full grid grid-cols-1 gap-5 max-sm:px-4">
            <div class="lg:text-5xl text-xl text-white font-semibold flex justify-center w-full">
                <div class="w-min uppercase whitespace-nowrap flex justify-between gap-3">
                    <div class="font-light">Learn Skill While</div>
                    <div class="font-bold">Earning Money</div>
                </div>
            </div>
            <div class="lg:text-3xl sm:text-xl text-lg text-white font-semibold flex justify-center w-full">
                <div class="w-min  whitespace-nowrap flex justify-between gap-3">
                    <div class="font-light">Get ready to master it with</div>
                    <div class="font-bold uppercase">our guidance</div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="border border-amber-500 bg-gray-800 rounded-lg p-2 lg:w-3/5 w-11/12">
                    <iframe src="{{ 'https://player.vimeo.com/video/' . $video . '?dnt=1&title=0&byline=0&portrait=0&transparent=0&autoplay=1&muted=1' }}" class="w-full h-auto lg:h-96 rounded-md" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" title="Untitled"></iframe>
                </div>
            </div>
            <div class="flex justify-center pt-8">
                <a href="/sign-up" wire:navigate class="py-4 px-8 font-extrabold lg:tracking-wider lg:text-xl text-sm w-min whitespace-nowrap bg-amber-500 rounded-lg uppercase hover:scale-105 transition-transform duration-200">
                    join Digital Worlds University
                </a>
            </div>
            <div class="flex justify-center">
                <div class="text-gray-400 lg:text-base text-sm">Join Over 5000+ Students with Growth Ambition</div>
            </div>
            <div class="flex justify-center">
                <div class="text-gray-400 uppercase tracking-widest lg:text-2xl text-base">Introducing</div>
            </div>
            <div class="flex justify-center">
                <div class="text-white uppercase lg:text-5xl sm:text-2xl text-lg">WORLD FIRST ONLINE UNIVERSITY</div>
            </div>
            <div class="flex justify-center text-center">
                <div class="text-gray-400 lg:text-2xl sm:text-lg text-base">
                    Traditional teaching methods often fail to give people <br> the skills they need for real financial success.
                </div>
            </div>
            <div class="flex justify-center">
                <div class="grid grid-cols-1 gap-2">
                    <div class="flex justify-center">
                        <div class="text-white w-full lg:text-2xl text-sm text-pretty text-center gap-1">
                            <div class="font-bold">Imagine, instead, learning from wealthy teachers who give detailed advice,<br> helping you reach your goals much faster</div>
                        </div>
                    </div>
                    <div class="text-gray-400 lg:text-2xl text-sm text-center">Digital Worlds University offers exactly that a clear path to quickly achieve success</div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-12 sm:py-32 py-16 bg-black sm:px-12 px-4 grid cols-1 gap-12">
        <div x-ref="scrollFeatures" x-on:scroll-features.window="$refs.scrollFeatures.scrollIntoView({ behavior: 'smooth' });"></div>
        <div class="flex justify-between sm:gap-8">
            <div class="h-full xl:hidden">
                <div class="w-min h-full xl:hidden">
                    <div class="h-4 w-4 rounded-full bg-gray-100"></div>
                    <div class="my-2 flex h-full justify-center">
                        <div class="h-auto w-0.5 bg-gray-800 rounded"></div>
                    </div>
                </div>
            </div>
            <div class="xl:flex xl:justify-between w-full gap-14">
                <div role="status"
                    class="flex lg:mt-24 mb-24 mt-8 items-center justify-center w-full bg-gray-600 rounded-xl overflow-hidden">
                    <img src="{{asset('images/home1.jpg')}}" class="w-full h-full">
                </div>

                <div class="w-min h-auto max-xl:hidden">
                    <div class="h-4 w-4 rounded-full bg-gray-100"></div>
                    <div class="my-2 flex h-full justify-center">
                        <div class="h-auto w-0.5 bg-gray-800 rounded"></div>
                    </div>
                </div>

                <div class="size-full flex flex-col">
                    <div class="xl:m-auto">
                        <div class="md:text-4xl text-2xl text-white uppercase text-center font-thin">Multiple Skills &
                            <span class="font-extrabold">
                                Life Lesson Courses
                            </span>
                        </div>
                        <div class="grid grid-cols-1 gap-8 mt-12 text-white">
                            <div class="flex justify-between max-w-max gap-4 items-center">
                                <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 11.917 9.724 16.5 19 7.5" />
                                </svg>
                                <div class="md:text-2xl text-lg text-gray-300">Top Custom <span class="text-white font-bold">E-Learning Platform</span>
                                </div>
                            </div>
                            <div class="flex justify-between gap-4 items-center">
                                <div class="flex justify-between max-w-max gap-4 items-center">
                                    <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 11.917 9.724 16.5 19 7.5" />
                                    </svg>
                                    <div class="md:text-2xl text-lg text-gray-300">Grow from <span class="text-white font-bold">Zero
                                            to
                                            $10k/month</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-4 items-center">
                                <div class="flex justify-between max-w-max gap-4 items-center">
                                    <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 11.917 9.724 16.5 19 7.5" />
                                    </svg>
                                    <div class="md:text-2xl text-lg text-gray-300">Develop the essential <span
                                            class="text-white font-bold">
                                            skills for success</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between sm:gap-8">
            <div class="h-full xl:hidden">
                <div class="w-min h-full xl:hidden">
                    <div class="h-4 w-4 rounded-full bg-gray-100"></div>
                    <div class="my-2 flex h-full justify-center">
                        <div class="h-auto w-0.5 bg-gray-800 rounded"></div>
                    </div>
                </div>
            </div>
            <div class="xl:flex xl:justify-between w-full gap-14">
                <div role="status"
                    class="flex lg:mt-24 mb-24 mt-8 items-center justify-center w-full bg-gray-600 rounded-xl overflow-hidden ">
                    <img src="{{asset('images/home2.jpg')}}" class="w-full h-full">
                </div>

                <div class="w-min h-auto max-xl:hidden">
                    <div class="h-4 w-4 rounded-full bg-gray-100"></div>
                    <div class="my-2 flex h-full justify-center">
                        <div class="h-auto w-0.5 bg-gray-800 rounded"></div>
                    </div>
                </div>

                <div class="size-full flex flex-col">
                    <div class="xl:m-auto">
                        <div class="md:text-4xl text-2xl text-white uppercase text-center font-thin">Join a Private <span
                                class="font-extrabold">Group Chat for each program</span>
                        </div>
                        <div class="grid grid-cols-1 gap-8 mt-12 text-white">
                            <div class="flex justify-between max-w-max gap-4 items-center">
                                <div class="flex justify-between gap-4 items-center">
                                    <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                    </svg>
                                    <div class="md:text-2xl text-lg text-gray-300"><span class="text-white font-bold">Show your success</span> with people
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-4 items-center">
                                <div class="flex justify-between max-w-max gap-4 items-center">
                                    <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                    </svg>
                                    <div class="md:text-2xl text-lg text-gray-300"><span class="text-white font-bold">Surround yourself</span>
                                        with like-minded individuals
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-4 items-center">
                                <div class="flex justify-between max-w-max gap-4 items-center">
                                    <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                    </svg>
                                    <div class="md:text-2xl text-lg text-gray-300"><span class="text-white font-bold">
                                            Network with 15000+ people</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between sm:gap-8">
            <div class="h-full xl:hidden">
                <div class="w-min h-full xl:hidden">
                    <div class="h-4 w-4 rounded-full bg-gray-100"></div>
                    <div class="my-2 flex h-full justify-center">
                        <div class="h-auto w-0.5 bg-gray-800 rounded"></div>
                    </div>
                </div>
            </div>
            <div class="xl:flex xl:justify-between w-full gap-14">
                <div role="status"
                    class="flex lg:mt-24 mb-24 mt-8 items-center justify-center w-full bg-gray-600 rounded-xl overflow-hidden ">
                    <img src="{{asset('images/home3.jpg')}}" class="w-full h-full">
                </div>

                <div class="w-min h-auto max-xl:hidden">
                    <div class="h-4 w-4 rounded-full bg-gray-100"></div>
                    <div class="my-2 flex h-full justify-center">
                        <div class="h-auto w-0.5 bg-gray-800 rounded"></div>
                    </div>
                </div>

                <div class="size-full flex flex-col">
                    <div class="xl:m-auto">
                        <div class="md:text-4xl text-2xl text-white uppercase text-center font-thin">EARN MONEY <span
                                class="font-extrabold">ANSWERING SURVEYS</span>
                        </div>
                        <div class="grid grid-cols-1 gap-8 mt-12 text-white">
                            <div class="flex justify-between gap-4 items-center">
                                <div class="flex justify-between max-w-max gap-4 items-center">
                                    <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                    </svg>
                                    <div class="md:text-2xl text-lg text-gray-300"><span class="text-white font-bold">Answer some easy question
                                        </span> and make money
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-4 items-center">
                                <div class="flex justify-between max-w-max gap-4 items-center">
                                    <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                    </svg>
                                    <div class="md:text-2xl text-lg text-gray-300">Get <span class="text-white font-bold">You can earn upto</span>
                                        $10 USD per day
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-4 items-center">
                                <div class="flex justify-between max-w-max gap-4 items-center">
                                    <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                    </svg>
                                    <div class="md:text-2xl text-lg text-gray-300"><span class="text-white font-bold">
                                            Knowledgeable Survey question </span>in multiple of topic
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between sm:gap-8">
            <div class="h-full xl:hidden">
                <div class="w-min h-full xl:hidden">
                    <div class="h-4 w-4 rounded-full bg-gray-100"></div>
                    <div class="my-2 flex h-full justify-center">
                        <div class="h-auto w-0.5 bg-gray-800 rounded"></div>
                    </div>
                </div>
            </div>
            <div class="xl:flex xl:justify-between w-full gap-14">
                <div role="status"
                    class="flex lg:mt-24 mb-24 mt-8 items-center justify-center w-full bg-gray-600 rounded-xl overflow-hidden ">
                    <img src="{{asset('images/home4.jpg')}}" class="w-full h-full">
                </div>

                <div class="w-min h-auto max-xl:hidden">
                    <div class="h-4 w-4 rounded-full bg-gray-100"></div>
                    <div class="my-2 flex h-full justify-center">
                        <div class="h-auto w-0.5 bg-gray-800 rounded"></div>
                    </div>
                </div>

                <div class="size-full flex flex-col">
                    <div class="xl:m-auto">
                        <div class="md:text-4xl text-2xl text-white uppercase text-center font-thin">Apply for <span
                                class="font-extrabold">Job or Post a Job</span>
                        </div>
                        <div class="grid grid-cols-1 gap-8 mt-12 text-white">
                            <div class="flex justify-between gap-4 items-center">
                                <div class="flex justify-between max-w-max gap-4 items-center">
                                    <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                    </svg>
                                    <div class="md:text-2xl text-lg text-gray-300"><span class="text-white font-bold">You can apply for job at
                                        </span>your choiceable skill
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-4 items-center">
                                <div class="flex justify-between max-w-max gap-4 items-center">
                                    <div>
                                        <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div class="md:text-2xl text-lg text-gray-300">We are partnered <span class="text-white font-bold">with over 100 companies</span>
                                        to offer employment opportunities
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-4 items-center">
                                <div class="flex justify-between max-w-max gap-4 items-center">
                                    <div>
                                        <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div class="md:text-2xl text-lg text-gray-300"><span class="text-white font-bold">
                                            If you're a business owner, </span>you can post job opportunities to match your business needs
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between sm:gap-8">
            <div class="h-full xl:hidden">
                <div class="w-min h-full xl:hidden">
                    <div class="h-4 w-4 rounded-full bg-gray-100"></div>
                    <div class="my-2 flex h-full justify-center">
                        <div class="h-auto w-0.5 bg-gray-800 rounded"></div>
                    </div>
                </div>
            </div>
            <div class="xl:flex xl:justify-between w-full gap-14">
                <div role="status"
                    class="flex lg:mt-24 mb-24 mt-8 items-center justify-center w-full bg-gray-600 rounded-xl overflow-hidden">
                    <img src="{{asset('images/home5.jpg')}}" class="w-full h-full">
                </div>

                <div class="w-min h-auto max-xl:hidden">
                    <div class="h-4 w-4 rounded-full bg-gray-100"></div>
                    <div class="my-2 flex h-full justify-center">
                        <div class="h-auto w-0.5 bg-gray-800 rounded"></div>
                    </div>
                </div>

                <div class="size-full flex flex-col">
                    <div class="xl:m-auto">
                        <div class="md:text-4xl text-2xl text-white uppercase text-center font-thin">Become certified <span
                                class="font-extrabold">by our university</span>
                        </div>
                        <div class="grid grid-cols-1 gap-8 mt-12 text-white">
                            <div class="flex justify-between gap-4 items-center">
                                <div class="flex justify-between max-w-max gap-4 items-center">
                                    <div>
                                        <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div class="md:text-2xl text-lg text-gray-300"><span class="text-white font-bold">You will receive a certificate
                                        </span>for each program you complete
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-4 items-center">
                                <div class="flex justify-between max-w-max gap-4 items-center">
                                    <div>
                                        <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div class="md:text-2xl text-lg text-gray-300">Use this certificate <span class="text-white font-bold">for job applications or other opportunities</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-4 items-center">
                                <div class="flex justify-between max-w-max gap-4 items-center">
                                    <div>
                                        <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div class="md:text-2xl text-lg text-gray-300"><span class="text-white font-bold">
                                            This certificate </span>officially confirms your proficiency in the specific skill
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between sm:gap-8">
            <div class="h-full xl:hidden">
                <div class="w-min h-full xl:hidden">
                    <div class="h-4 w-4 rounded-full bg-gray-100"></div>
                    <div class="my-2 flex h-full justify-center">
                        <div class="h-auto w-0.5 bg-gray-800 rounded"></div>
                    </div>
                </div>
            </div>
            <div class="xl:flex xl:justify-between w-full gap-14">
                <div role="status"
                    class="flex lg:mt-24 mb-24 mt-8 items-center justify-center w-full bg-gray-600 rounded-xl overflow-hidden">
                    <img src="{{asset('images/ai_tutor_baner.jpg')}}" class="w-full h-full">
                </div>

                <div class="w-min h-auto max-xl:hidden">
                    <div class="h-4 w-4 rounded-full bg-gray-100"></div>
                    <div class="my-2 flex h-full justify-center">
                        <div class="h-auto w-0.5 bg-gray-800 rounded"></div>
                    </div>
                </div>

                <div class="size-full flex flex-col">
                    <div class="xl:m-auto">
                        <div class="md:text-4xl text-2xl text-white uppercase text-center font-thin">ACCESS TO AI TUTOR</div>
                        <div class="grid grid-cols-1 gap-8 mt-12 text-white">
                            <div class="flex justify-between gap-4 items-center">
                                <div class="flex justify-between max-w-max gap-4 items-center">
                                    <div>
                                        <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div class="md:text-2xl text-lg text-gray-300"><span class="text-white font-bold">Get personalized guidance from an
                                        </span>Artificial Intelligence mentor
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-4 items-center">
                                <div class="flex justify-between max-w-max gap-4 items-center">
                                    <div>
                                        <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div class="md:text-2xl text-lg text-gray-300">AI Tutor will provide <span class="text-white font-bold">personalized 1-on-1 advice based on your programe</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-4 items-center">
                                <div class="flex justify-between max-w-max gap-4 items-center">
                                    <div>
                                        <svg class="md:w-12 md:h-12 w-8 h-8 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div class="md:text-2xl text-lg text-gray-300"><span class="text-white font-bold">
                                            AI Tutor will assist you in </span>improving your skills
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-14">
            <div class="flex justify-center pt-8">
                <a href="/sign-up" wire:navigate class="py-4 px-8 font-extrabold lg:tracking-wider lg:text-xl text-sm w-min whitespace-nowrap bg-amber-500 rounded-lg uppercase hover:scale-105 transition-transform duration-200">
                    join Digital Worlds University
                </a>
            </div>
            <div class="flex justify-center">
                <div class="text-gray-400">Join Over 5000+ Students with Growth Ambition</div>
            </div>
        </div>

        <!-- Programs -->

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-12">
            @foreach($programs as $program)
            <div class="grid grid-cols-1 gap-6 sm:gap-12 text-white bg-gray-700 rounded-2xl pt-10 sm:pt-16">
                <div class="text-2xl sm:text-4xl font-bold flex justify-center">
                    <div class="flex justify-between gap-4 w-min whitespace-nowrap items-center">
                        <div>
                            <svg class="w-10 h-10 sm:w-16 sm:h-16 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>{{$program->title}}</div>
                    </div>
                </div>
                <div class="text-xl sm:text-2xl font-light text-center text-gray-300 px-12">
                    {{substr($program->description, 0, 100)}}
                    @if(strlen($program->description) > 100)<span>...</span>@endif
                </div>
                <div class="flex justify-center items-center">
                    <div wire:click="$dispatch('show-modal', { modal:'modal-landing-page-program-preview', args:{{$program->id}}, data:null, callback_event:null })" class="w-min py-2 px-6 whitespace-nowrap cursor-pointer tracking-wider border border-amber-500 rounded-lg text-amber-500 hover:text-black transition-colors duration-500 hover:bg-amber-500 font-semibold text-lg sm:text-2xl">Learn More</div>
                </div>
                <div>
                    @if(Video::where('program_id',$program->id)->count()!=0)
                    @php
                    $url = Video::where('program_id',$program->id)->first()->video;
                    @endphp
                    <iframe src="{{ 'https://player.vimeo.com/video/' . $url . '?dnt=1&title=0&byline=0&portrait=0&transparent=0&autoplay=1&muted=1' }}" class="w-full h-auto lg:h-96 rounded-md" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" title="Untitled"></iframe>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Testinomials -->
    <div x-ref="scrollReview" x-on:scroll-review.window="$refs.scrollReview.scrollIntoView({ behavior: 'smooth' });"></div>
    <div class="grid grid-cols-1 gap-16 py-20">
        <div class="grid grid-cols-1 gap-4">
            <div class="uppercase sm:text-xl md:text-2xl font-semibold tracking-widest text-gray-500 text-center">DIGITAL WORLD SUCCESS</div>
            <div class="text-white uppercase text-3xl md:text-5xl tracking-wider text-center">OUR STUDENT SUCCESS</div>
        </div>

        <div class="flex justify-center px-2 md:px-12 lg:px-20">
            <div class="grid grid-cols-4 gap-2 md:gap-6 lg:gap-6 w-full">
                @foreach($studentsSuccessImage as $image)
                <img src="{{asset('images/'.$image)}}" class="m-auto">
                @endforeach
            </div>
        </div>
    </div>

    <!-- Section -->

    <div x-ref="scrollDoubt" x-on:scroll-doubt.window="$refs.scrollDoubt.scrollIntoView({ behavior: 'smooth' });"></div>
    <div class="flex justify-center py-20">
        <div class="grid grid-cols-1 gap-8 sm:gap-12 w-3/4 text-white text-center">
            <div class="text-xl sm:text-2xl lg:text-3xl font-semibold uppercase">What you get to listen</div>
            <div class="text-2xl sm:text-3xl lg:text-4xl font-semibold">YOU HAVE A CHOICE TO MAKE</div>
        </div>
    </div>

    <!-- Footer -->
    <div class="sm:pt-20 pt-8 pb-14 grid grid-cols-1 gap-12 bg-black">
        <div class="grid grid-cols-1 gap-4 text-white text-center">
            <a href="/terms-and-conditions" wire:navigate class="sm:text-xl text-base underline hover:text-amber-500 cursor-pointer">Terms & Conditions</a>
            <a href="/privacy-policy" wire:navigate class="sm:text-xl text-base underline hover:text-amber-500 cursor-pointer">Privacy Policy</a>
            <a href="/refund-and-cancellation-policy" class="sm:text-xl text-base underline hover:text-amber-500 cursor-pointer">Refund and Cancellation Policy</a>
            <a href="/contact" wire:navigate class="sm:text-xl text-base underline hover:text-amber-500 cursor-pointer">Contact Us</a>
            <div class="sm:text-lg text-sm font-bold">Support: support@digitalworldsuniversity.com</div>
        </div>
        <div class="flex justify-center">
            <div class="w-4/5 grid grid-cols-1 gap-4">
                <div class="text-gray-400 sm:text-xl text-sm font-normal text-center">The Digital World University provides educational content only. Each student is responsible for implementing the material and completing the work. The Digital World University team does not guarantee any profits or financial success.</div>
            </div>
        </div>
    </div>
</div>