<script setup lang="ts">
import JobCard from "@/Components/Dashboard/JobCard.vue";
const props = defineProps<{
    jobs: object;
}>();
</script>

<template>
    <div class="flex justify-center flex-wrap space-x-4">
        <template v-for="job in jobs" :key="job.id"> 
            <JobCard :job="job" />
        </template>
    </div>
</template>
