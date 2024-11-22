<template>
    <h1 class="flex justify-center text-3xl mx-auto">Create New Job</h1>

    <form @submit.prevent="submit" class="max-w-lg mx-auto mt-8">
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title"> Title </label>
            <input v-model="form.title" class="border border-gray-400 p-2 w-full" type="text" name="title" id="title" required />
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="description"> Description </label>
            <textarea v-model="form.description" rows="5" class="border border-gray-400 p-2 w-full" type="text" name="description" id="description" required />
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" :disabled="form.processing">Create</button>
        </div>
    </form>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";

let form = useForm({
    title: '',
    description: ''
});

let submit = () => {
    form.post('/jobs');
};
</script>
