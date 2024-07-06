<?php

use function Livewire\Volt\{state, layout};

layout('components.layouts.app');

?>

<div class="bg-[#050e14]">
    <livewire:navbar>
        <livewire:landing-page-chat-option>
            <div class="flex jusity-center w-full mt-16">
                <div class="w-full grid grid-cols-1 gap-5">
                    <div class="text-6xl text-white font-semibold flex justify-center w-full">
                        <div class="w-min uppercase whitespace-nowrap flex justify-between gap-3">
                            <div class="font-light">Money making is</div>
                            <div class="font-bold">a skill</div>
                        </div>
                    </div>
                    <div class="text-3xl text-white font-semibold flex justify-center w-full">
                        <div class="w-min  whitespace-nowrap flex justify-between gap-3">
                            <div class="font-medium">We will teach you how to</div>
                            <div class="font-bold">master it</div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div role="status"
                            class="flex items-center justify-center h-80 w-3/5 bg-gray-600 rounded-lg animate-pulse"
                            style="box-shadow: 0 1px 20px rgba(255, 255, 255, 0.8);">
                            <svg class="w-10 h-10 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 16 20">
                                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
                                <path
                                    d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM9 13a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2Zm4 .382a1 1 0 0 1-1.447.894L10 13v-2l1.553-1.276a1 1 0 0 1 1.447.894v2.764Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-center pt-8">
                        <div
                            class="py-4 px-8 font-extrabold tracking-wider text-xl w-min whitespace-nowrap bg-[#f6aa23] rounded-lg uppercase hover:scale-105 transition-transform duration-200">
                            join Digital Worlds University</div>
                    </div>
                    <div class="flex justify-center">
                        <div class="text-gray-400">Join 113,000+ like-minded students</div>
                    </div>
                    <div class="flex justify-center">
                        <div class="text-gray-400 uppercase tracking-widest text-2xl">Introducing</div>
                    </div>
                    <div class="flex justify-center">
                        <div class="text-white uppercase text-5xl">A massive upgrade</div>
                    </div>
                    <div class="flex justify-center">
                        <div class="text-gray-400 text-2xl">The modern education system is designed to make
                            you poor
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="grid grid-cols-1 gap-1">
                            <div class="text-white text-2xl flex justify-between gap-1">
                                <div class="font-bold">Imagine you could get access to multi-millionaire mentors</div>
                                <div>who will give you</div>
                            </div>
                            <div class="text-gray-400 text-2xl text-center">step-by-step path to reach your goals as
                                fast as
                                possible…
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="grid grid-cols-1 gap-1">
                            <div class="text-white text-2xl flex justify-between gap-1">
                                <div>That's</div>
                                <div class="font-bold">exactly</div>
                                <div>what you can find</div>
                                <div class="font-bold">inside digital worlds university</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
