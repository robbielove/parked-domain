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

    <div class="justify-center min-h-screen bg-black">

        <div class="p-5 ml-5 mr-5 pt-10">
            <div class="px-5 py-5 rounded-xl shadow-lg bg-gradient-to-r from-blue-900 to-violet-900">
                <div class="flex items-center justify-center">
                    <h1 class="text-7xl font-bold text-white">Domz</h1>
                </div>
            </div>
        </div>

        <div class="ml-5 mr-5 p-5">
            <div class="mt-5 mb-5 p-5 bg-white/10 rounded-lg">
                <h2 class="text-6xl text-white text-center">
                    Domain Management
                </h2>
            </div>
            <div class="mt-5 mb-5 p-1 bg-white/10 rounded-lg flex ">

                <div class="m-2 text-white text-xl bg-gradient-to-br from-blue-900 to-violet-900 p-5 rounded-lg">
                    <h3 class="text-3xl"><Link href="/parked-domains" class="text-white">Parked Domains</Link></h3>
                    <ul>
                        <li>We can manage your parked domains including dns, ssl, and domain forwarding.</li>
                        <li>We can administer your parked domains including registration, renewal, and transfer</li>
                    </ul>
                </div>

                <div class="m-2 text-white text-xl bg-gradient-to-br from-blue-900 to-violet-900 p-5 rounded-lg">
                    <h3 class="text-3xl"><Link href="/email-setup" class="text-white">Email Setup</Link></h3>
                    <ul>
                        <li>We can setup your email accounts and manage your email settings.</li>
                        <li>We can forward your email to your existing email account.</li>
                    </ul>
                </div>
            </div>

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
                    <textarea name="message" id="message" cols="30" rows="3" class="mt-1 p-2 rounded-lg border border-gray-300"></textarea>
                </div>

                <div class="flex justify-end mt-4">
                    <button type="submit" class="p-2 rounded-lg bg-violet-900 hover:bg-indigo-600 text-white">Submit</button>
                </div>
            </form>

            <div class="flex justify-center mt-4 p-5 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-white sm:text-left">
                    <div class="flex items-center">
                        <p class="ml-1 text-white">
                            Or call☎️:
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
