<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use function Livewire\Volt\{state, mount, rules};

state(['name', 'email']);

rules(['name' => 'required|min:3', 'email' => 'required|email|unique:users,email,' . Auth::user()->id]);


$submit = function () {
    $this->validate();
    User::where('id', Auth::user()->id)->update(['name' => $this->name, 'email' => $this->email]);
    $this->dispatch('hide-modal');
    $this->dispatch('reset-user-landing-page');
};

mount(function () {
    $this->name = Auth::user()->name;
    $this->email = Auth::user()->email;
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
        <div class="flex justify-center w-full">
            <button wire:click="submit" wire:loading.class="pointer-events-none" wire:target="submit" class="bg-[#131e30] px-8 py-4 text-lg font-semibold rounded-lg text-[#d6dcde]">
                <div wire:loading.class="hidden" wire:target="submit">Submit</div>
                <div wire:loading.class.remove="hidden" wire:target="submit" class="flex justify-center hidden">
                    <svg aria-hidden="true" class="w-8 h-8 text-[#131e30] animate-spin fill-white" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                    </svg>
                </div>
            </button>
        </div>
    </div>
</div>