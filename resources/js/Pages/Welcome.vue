<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    domain: String,
});
</script>

<template>
    <Head title="Welcome" />

    <div class="justify-center min-h-screen bg-gradient-to-br from-violet-900 to-green-600">

        <div class="ml-5 mr-5 pb-0 mb-0 pl-5 pr-5">
            <div class="px-6 py-6 rounded-b-xl shadow-lg bg-black/20">
                <div class="flex items-center justify-center">
                    <h1 class="text-7xl font-bold text-white">{{ domain }}</h1>
                </div>
            </div>
        </div>

        <div class="ml-5 mr-5 p-5">
            <div class="mt-5 mb-5 p-5 bg-black/20 overflow-hidden shadow sm:rounded-lg">
                <h1 class="text-6xl text-white">
                    This domain is for sale!
                </h1>

                <h2 class="mt-6 text-white text-2xl">
                    <p>If you are interested in buying this domain, please fill out the form below.</p>

                    <form action="/contact" method="POST" class="mt-6">
                        <input type="hidden" name="csrf" value="{{ csrf_token() }}">
                        <div class="flex flex-col">
                            <label for="name" class="text-white">Name</label>
                            <input type="text" name="name" id="name" class="mt-1 p-2 rounded-lg border border-gray-300">
                        </div>

                        <div class="flex flex-col mt-4">
                            <label for="email" class="text-white">Email</label>
                            <input type="email" name="email" id="email" class="mt-1 p-2 rounded-lg border border-gray-300">
                        </div>

                        <div class="flex flex-col mt-4">
                            <label for="message" class="text-white">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="mt-1 p-2 rounded-lg border border-gray-300"></textarea>
                        </div>

                        <div class="flex justify-end mt-4">
                            <button type="submit" class="p-2 rounded-lg bg-green-500 text-white">Submit</button>
                        </div>
                    </form>
                </h2>
            </div>

            <div class="flex justify-center mt-4 p-5 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-white sm:text-left">
                    <div class="flex items-center">
                        <p class="ml-1 text-white">
                            Or call:
                        </p>
                    </div>
                    <div class="mt-4 text-center text-3xl text-white sm:text-right sm:ml-0">
                        <a href="tel:0731493433" class="ml-1 text-white underline">
                            07 31 493 433
                        </a>
                    </div>
                    <div class="mt-4 text-center text-sm text-white sm:text-right sm:ml-0">
                        <a href="/" class="ml-1 text-white underline">
                            {{ domain }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
