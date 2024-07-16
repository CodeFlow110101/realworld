<?php

use App\Models\Plan;
use App\Models\Role;

use function Livewire\Volt\{state, mount};

state(['plans', 'roles', 'name', 'email', 'password', 'password_confirmation', 'plan', 'role']);

$submit = function () {};

mount(function () {
    $this->plans = Plan::get();
    $this->roles = Role::get();
});
?>


<div>
    <div class="w-full h-min grid grid-cols-1 gap-6">
        <div>
            <div class=" relative">
                <input wire:model="name" type="text" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-[#131e30] bg-transparent rounded-lg border-2 border-[#131e30] appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " />
                <label for="floating_outlined" class="absolute text-sm text-[#131e30] duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#d6dcde] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Name</label>
            </div>
            @error('name')<div class="text-red-600">{{$message}}</div>@enderror
        </div>
        <div>
            <div class="relative">
                <input wire:model="email" type="text" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-[#131e30] bg-transparent rounded-lg border-2 border-[#131e30] appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " />
                <label for="
                floating_outlined" class="absolute text-sm text-[#131e30] duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#d6dcde] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Email</label>
            </div>
            @error('email')<div class="text-red-600">{{$message}}</div>@enderror
        </div>
        <div>
            <div class="relative">
                <input wire:model="password" type="text" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-[#131e30] bg-transparent rounded-lg border-2 border-[#131e30] appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " />
                <label for="floating_outlined" class="absolute text-sm text-[#131e30] duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#d6dcde] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">password</label>
            </div>
            @error('password')<div class="text-red-600">{{$message}}</div>@enderror
        </div>
        <div>
            <div class="relative">
                <input wire:model="password_confirmation" type="text" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-[#131e30] bg-transparent rounded-lg border-2 border-[#131e30] appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " />
                <label for="floating_outlined" class="absolute text-sm text-[#131e30] duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#d6dcde] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Confirm Password</label>
            </div>
            @error('password_confirmation')<div class="text-red-600">{{$message}}</div>@enderror
        </div>
        <div>
            <div class="relative">
                <select wire:model="plan" class="block capitalize px-2.5 pb-2.5 pt-4 w-full text-sm text-[#131e30] bg-transparent rounded-lg border-2 border-[#131e30] appearance-none focus:outline-none focus:ring-0 peer">
                    <option selected value="">Select a plan</option>
                    @foreach($plans as $plan)
                    <option value="{{$plan->id}}">{{$plan->name}}</option>
                    @endforeach
                </select>
            </div>
            @error('password_confirmation')<div class="text-red-600">{{$message}}</div>@enderror
        </div>
        <div>
            <div class="relative">
                <select wire:model="role" class="block capitalize px-2.5 pb-2.5 pt-4 w-full text-sm text-[#131e30] bg-transparent rounded-lg border-2 border-[#131e30] appearance-none focus:outline-none focus:ring-0 peer">
                    <option selected value="">Select a plan</option>
                    @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                </select>
            </div>
            @error('password_confirmation')<div class="text-red-600">{{$message}}</div>@enderror
        </div>

        <div class="flex justify-center w-full">
            <button wire:click="submit" class="bg-[#131e30] px-8 py-4 text-lg font-semibold rounded-lg text-[#d6dcde]">Submit</button>
        </div>
    </div>
</div>