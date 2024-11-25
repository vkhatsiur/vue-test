<template>
    <Link href="/jobs/create">Create new job</Link>
    <div class="flex">
        <div class="flex flex-col max-w-lg space-y-4 w-full">
            <div v-for="job in jobs"

                 v-text="job.title"
                 @mouseover="selectedJob = job"
                 class="p-6 text-xl font-semibold border border-gray-900 hover:border-2"></div>
        </div>
        <div class="flex flex-col mx-auto border-2 border-blue-300 p-4">
            <p v-if="selectedJob" v-text="selectedJob.title" class="text-2xl font-semibold" />
            <p v-if="selectedJob" v-text="selectedJob.description" />
        </div>
    </div>
</template>

<script setup>
import {ref} from "vue";

let props = defineProps({
    jobs: Array
});

let selectedJob = ref(props.jobs[0] || null);

</script>


