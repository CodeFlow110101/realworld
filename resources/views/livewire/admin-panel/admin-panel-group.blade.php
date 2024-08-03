<?php

use App\Models\Channel;
use App\Models\Chat;
use App\Models\Group;
use App\Models\Store;
use Illuminate\Support\Facades\Storage;

use function Livewire\Volt\{state, mount, usesPagination, with, on};

usesPagination();

state(['channel_id']);

with(fn() => ['groups' => Group::where('channel_id', $this->channel_id)->paginate(0)]);

on([
    'reset-admin-panel-channels' => function () {
        $this->resetPage();
    }
]);

$deleteStoreItem = function ($id) {

    foreach (Chat::where('group_id', $id)->whereNotNull('file_path')->get() as $chat) {
        Storage::disk('public')->delete($chat->file_path);
    }
    Chat::where('group_id', $id)->delete();
    Group::where('id', $id)->delete();
};

mount(function ($id) {
    $this->channel_id = $id;
});
?>

<div>
    <button wire:click="$dispatch('show-modal', { modal:'modal-group', args:{{$channel_id}}, data:null, callback_event:null })" class="fixed z-10 bottom-12 right-12 bg-[#d6dcde] dark:bg-gray-800 text-xl flex justify-between items-center gap-4 rounded-lg py-2 px-4">
        <div>
            <svg class="w-6 h-6 text-[#131e30] dark:text-[#DDE6ED]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M3 6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-6.616l-2.88 2.592C8.537 20.461 7 19.776 7 18.477V17H5a2 2 0 0 1-2-2V6Zm4 2a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2H7Zm8 0a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2h-2Zm-8 3a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H7Zm5 0a1 1 0 1 0 0 2h5a1 1 0 1 0 0-2h-5Z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="text-[#131e30] dark:text-[#DDE6ED] font-semibold">
            Add Group
        </div>
    </button>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
        @foreach($groups as $group)
        <div class="bg-[#d6dcde] dark:bg-gray-800 rounded-2xl grid grid-cols-1 gap-4">
            <div class="p-4 text-[#131e30] dark:text-[#DDE6ED] grid grid-cols-1 gap-4">
                <div class="font-semibold text-2xl">{{$group->name}}</div>
            </div>
            <div class="text-[#d6dcde] rounded-b-2xl bg-[#131e30] text-center p-3 grid grid-cols-1 gap-1 text-lg font-bold cursor-pointer">
                <div wire:click="deleteStoreItem({{$group->id}})" class="w-full rounded-b-2xl text-center py-2 h-1/2">
                    Delete
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>