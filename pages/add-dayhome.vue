<!-- pages/dayhome/add.vue -->

<template>
    <div class="flex min-h-screen pl-[24px] bg-[#F9F9F9] ">
        <Sidebar :active="'Dayhomes'" />
        <div class="w-full flex flex-col">
            <Navbar />
            <div class="px-[24px] py-[32px]  w-[630px]">
                <div class="mb-[40px] w-full flex flex-col gap-[16px]">
                    <NuxtLink to="/" class="w-full flex gap-[4px]">
                        <img src="/images/left.svg" class="w-[16px] h-[16px]" alt="">
                        <p class="text-[16px]">Back</p>
                    </NuxtLink>
                    <div class="w-full flex flex-col gap-[8px]">
                        <div class="w-full flex gap-[24px]">
                            <div class="w-[305px] h-[4px] bg-[#8BB33E]"></div>
                            <div class="w-[305px] h-[4px] bg-[#D9D9D9]"></div>
                        </div>
                        <p class="text-[16px] text-[#1A1A1A]">Step 1 of 1</p>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-[40px] bg-[#F9F9F9]">
                    <div class="w-full bg-[#FFFFFF] rounded-[24px] p-[24px] shadow-sm">
                        <div class="flex items-start gap-[16px] mb-[40px]">
                            <div
                                class="w-[40px] h-[40px] rounded-[4px] bg-[#D0DDFF] flex items-center justify-center flex-shrink-0">
                                <img src="/images/bluei.png" alt="">
                            </div>
                            <div>
                                <h2 class="text-[20px] text-[#6E4429] cheltenham  mb-[8px]">Basic Information</h2>
                                <p class="text-[16px]  text-[#6E4429]">Essential details about the dayhome</p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-[24px]">
                            <div>
                                <label class="block text-[16px] optima-bold  mb-[8px] text-[#6E4429]">
                                    Dayhome Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text"
                                    class="w-full px-[8px] py-[10px] border-[1px] border-[#B1B1B1] rounded-[8px] focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-[16px] text-[#B9B9B9]"
                                    placeholder="Little Blossoms Dayhome..." value="Little Blossoms Dayhome..." />
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-[24px]">
                                <div>
                                    <label class="block text-[16px] optima-bold  mb-[8px] text-[#6E4429]">
                                        First Name <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text"
                                        class="w-full px-[8px] py-[10px] border-[1px] border-[#B1B1B1] rounded-[8px] focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-[16px] text-[#B9B9B9]"
                                        placeholder="Sandra" value="Sandra" />
                                </div>

                                <div>
                                    <label class="block text-[16px] optima-bold  mb-[8px] text-[#6E4429]">
                                        Last Name <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text"
                                        class="w-full px-[8px] py-[10px] border-[1px] border-[#B1B1B1] rounded-[8px] focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-[16px] text-[#B9B9B9]"
                                        placeholder="Jayson" value="Jayson" />
                                </div>
                            </div>

                            <div>
                                <label class="block text-[16px] optima-bold  mb-[8px] text-[#6E4429]">
                                    Location <span class="text-red-500">*</span>
                                </label>
                                <input type="text"
                                    class="w-full px-[8px] py-[10px] border-[1px] border-[#B1B1B1] rounded-[8px] focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-[16px] text-[#B9B9B9]"
                                    placeholder="Calgary SW" value="Calgary SW" />
                            </div>
                        </div>
                    </div>

                    <div class="w-full bg-[#FFFFFF] rounded-[24px] p-[24px] shadow-sm">
                        <div class="flex items-start gap-[16px] mb-[32px]">
                            <div
                                class="w-[40px] h-[40px] rounded-[4px] p-[7px] bg-[#E3CDFF] flex items-center justify-center ">
                                <img src="/images/pupple.png" alt="">
                            </div>
                            <div>
                                <h2 class="text-[20px] text-[#6E4429] cheltenham  mb-[8px]">Photos</h2>
                                <p class="text-[16px]  text-[#6E4429]">Upload up to 5 photos showing the dayhome
                                    environment
                                </p>
                            </div>
                        </div>

                        <div
                            class="border-[2px] border-dashed border-[#B9B9B9B9] rounded-[12px] flex items-center flex-col p-[40px] text-center">
                            <div
                                class="w-[40px] h-[40px] bg-[#D0DDFF] py-[10px] px-[9px] rounded-full flex  items-center justify-center mb-[16px]">
                                <img src="/images/cloud.svg" alt="">
                            </div>
                            <p class="text-[18px] text-[#6E4429] optima-bold mb-[8px]">Drag & drop photos here</p>
                            <p class="text-[16px] text-[#6E4429] mb-[16px]">or click to browse from your computer</p>

                            <button
                                class="bg-[#0045F3] text-white px-[20px] py-[12px] rounded-[8px] hover:bg-emerald-700 transition text-[16px]">
                                Choose Files
                            </button>

                            <p class="text-[14px] text-[#918E8D] mt-[24px]">PNG, JPG up to 10MB each</p>
                        </div>

                        <div class="mt-[32px] grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-[16px]">
                            <div v-for="i in 3" :key="i"
                                class="aspect-square bg-gray-50 rounded-[8px] relative group overflow-hidden">
                                <div
                                    class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition">
                                    <button class="bg-black/70 text-white px-[12px] py-[6px] rounded-[4px] text-[13px]">
                                        Remove
                                    </button>
                                </div>
                            </div>
                            <div
                                class="aspect-square border-2 border-dashed border-gray-300 rounded-[8px] flex items-center justify-center hover:border-emerald-500 transition">
                                <Plus :size="32" class="text-gray-400" />
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-[12px] p-[32px] ">
                        <div class="flex items-start gap-[16px] mb-[32px]">
                            <div
                                class="w-[40px] h-[40px] rounded-[4px] bg-[#D0DDFF] flex items-center justify-center flex-shrink-0">
                                <img src="/images/mark.svg" alt="">
                            </div>
                            <div>
                                <h2 class="text-[20px] text-[#6E4429] cheltenham mb-[8px]">Certification</h2>
                                <p class="text-[16px]  text-[#6E4429]">Educational credentials and certifications</p>
                            </div>
                        </div>

                        <div>
                            <label class="block text-[18px] text-[#6E4429] optima-bold mb-[8px]">Certification
                                Details</label>
                            <input type="text"
                                class="w-full px-[8px] py-[10px] border border-[#B1B1B1] rounded-[8px] focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-[16px] text-[#B9B9B9]"
                                placeholder="Level 2 Early Childhood Educator Certification..."
                                value="Level 2 Early Childhood Educator Certification..." />
                        </div>
                    </div>
                </div>

                <div class="mt-[48px] flex justify-between gap-[16px]">
                    <button
                        class="px-[20px] py-[12px] border border-[1px] border-[#262626] rounded-[8px] text-gray-700 hover:bg-gray-50 transition text-[16px]">
                        Cancel
                    </button>
                    <router-link to="/step-two"
                        class="inline-flex px-[20px] py-[12px] bg-[#8BB33E] text-white rounded-[8px] hover:bg-emerald-700 transition text-[15px] items-center justify-center"
                        aria-label="Go to next step">
                        Next
                    </router-link>

                </div>
            </div>

        </div>
    </div>
</template>

<script setup lang="ts">
import Sidebar from '~/components/Sidebar.vue';
import { ArrowLeft, Info, Image as ImageIcon, CheckCircle, Plus } from 'lucide-vue-next'
import Navbar from '~/components/Navbar.vue';
</script>
