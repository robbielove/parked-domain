<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    domain: String,
});

const form = useForm({
    name: '',
    email: '',
    message: '',
});

const submit = () => {
    form.transform(data => ({
        ...data,
    })).post(route('contact.store'), {
        // onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Welcome" />

    <div class="justify-center min-h-screen bg-gradient-to-br from-violet-900 to-green-600">

        <div class="ml-5 mr-5 pb-0 mb-0 pl-5 pr-5">
            <div class="px-5 py-5 rounded-b-xl shadow-lg bg-black/20">
                <div class="flex items-center justify-center">
                    <h1 class="md:text-7xl text-3xl font-bold text-white">{{ domain }}</h1>
                </div>
            </div>
        </div>

        <div class="ml-5 mr-5 p-5">
            <div class="mt-5 mb-5 p-5 bg-black/20 overflow-hidden shadow rounded-lg">
                <h1 class="text-6xl text-white">
                    This domain is for sale!
                </h1>

                <h2 class="mt-6 text-white text-2xl">
                    <p>If you are interested in buying this domain, please fill out the form below.</p>
                </h2>
            </div>

            <div class="mt-5 mb-5 p-5 bg-black/10 rounded-lg">
                <div class="mb-5 text-white text-xl bg-black/20 p-5 rounded-lg">
                    <h3 class="text-3xl">Contact Form</h3>
                </div>

                <form @submit.prevent="submit">
                    <div class="flex flex-col">
                        <InputLabel for="name" value="Name" class="text-white" />
                        <TextInput
                            id="name"
                            v-model="form.name"
                            type="text"
                            class="mt-1 p-2 rounded-lg border-violet-500 focus:ring-violet-500 border-2"
                            required
                            autofocus
                        />
                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>

                    <div class="flex flex-col mt-4">
                        <InputLabel for="email" value="Email" class="text-white" />
                        <TextInput
                            id="email"
                            v-model="form.email"
                            type="email"
                            class="mt-1 p-2 rounded-lg border-violet-500 focus:ring-violet-500 border-2"
                            required
                            autofocus
                        />
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div class="flex flex-col mt-4">
                        <InputLabel for="message" value="Message" class="text-white" />
                        <TextInput
                            id="message"
                            v-model="form.message"
                            type="text"
                            class="mt-1 p-2 rounded-lg border-violet-500 focus:ring-violet-500 border-2"
                            required
                            autofocus
                        />
                        <InputError class="mt-2" :message="form.errors.message" />
                    </div>

                    <div class="flex justify-end mt-4">
                        <PrimaryButton type="submit" class="p-4 rounded-xl bg-violet-500 hover:bg-violet-900 text-white">Submit</PrimaryButton>
                    </div>
                </form>
            </div>

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
                        <a href="https://domz.au" class="ml-1 text-white underline">
                            Domz.au
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
