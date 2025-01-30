<script setup lang="ts">
import Icon from "@/Components/Icon.vue";

const props = defineProps<{
    job: object;
}>();
</script>

<template>
    <div
        class="flex w-full p-4 max-w-2xl flex-col rounded-lg bg-white shadow-sm border border-slate-200 my-6"
    >
        <div class="flex items-center gap-4 text-slate-800">
            <img
                :src="job.company_logo"
                class="relative inline-block h-[58px] w-[58px] !rounded-full object-cover object-center"
            />
            <div class="flex w-full flex-col">
                <div class="flex items-center justify-between">
                    <h5 class="text-xl font-semibold text-slate-800">
                        {{ job.title }}
                    </h5>
                    <div class="flex items-center gap-0 5">
                        <span
                            v-for="(extraItem, key) in job.extra"
                            :key="key"
                            class="inline-block bg-gray-300 text-gray-700 text-xs font-medium me-2 px-2.5 py-0.5 rounded-md"
                            >{{ extraItem }}</span
                        >
                    </div>
                </div>
                <p class="text-xs uppercase font-bold text-slate-500 mt-0.5">
                    {{ job.company_name }}
                </p>
            </div>
        </div>
        <div class="mt-6">
            <div class="flex items-center space-x-4">
                <div class="flex items-center border-r pr-3">
                    <span class="mr-1">
                        <Icon name="briefcase" height="20px" width="20px" />
                    </span>
                    <span
                        class="text-base text-slate-600 font-light leading-normal"
                    >
                        {{ job.experience }}
                    </span>
                </div>

                <div class="flex items-center border-r pr-3">
                    <span class="mr-1">
                        <Icon name="rupee" height="20px" width="20px" />
                    </span>
                    <span
                        class="text-base text-slate-600 font-light leading-normal"
                    >
                        {{ job.salary }}
                    </span>
                </div>

                <div class="flex items-center">
                    <span class="mr-1">
                        <Icon name="location" height="20px" width="20px" />
                    </span>
                    <span
                        class="text-base text-slate-600 font-light leading-normal"
                    >
                        {{ job.location }}
                    </span>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <p
                class="flex items-center text-base text-slate-600 font-light leading-normal"
            >
                <span class="mr-1">
                    <Icon name="file" height="20px" width="20px" />
                </span>
                {{ job.description }}
            </p>
        </div>
        <div class="mt-3">
            <div class="flex items-center gap-3">
                <span
                    v-for="(skill, key) in job.skills"
                    :key="key"
                    class="flex items-center text-base text-slate-600 font-light leading-normal"
                >
                    <span class="mr-2 text-4xl text-gray-400" v-if="key > 0">&#8226;</span>
                    {{ skill.name }}
                </span>
            </div>
        </div>

        <div class="mt-3">
            <div class="flex justify-end items-center space-x-4">
                <span
                    class="text-base text-slate-600 font-light leading-normal"
                    >{{ job.created_at_human }}</span
                >
            </div>

            <div class="flex justify-end items-center space-x-4">
                <div class="flex items-center"></div>
            </div>
        </div>
    </div>
</template>
