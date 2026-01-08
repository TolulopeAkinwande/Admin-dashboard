<!-- pages/dayhome/add-step2.vue or similar -->

<template>
    <div class="lg:flex min-h-screen w-full pl-[24px] bg-[#F9F9F9] ">
        <Sidebar :active="'Dayhomes'" />
        <div class="w-full">
            <Navbar />
            <div class="px-[24px] py-[40px]  w-[630px]">
                <div class="mb-[40px] w-full flex flex-col gap-[16px]">
                     <NuxtLink to="/add-dayhome" class="w-full flex gap-[4px]">
                        <img src="/images/left.svg" class="w-[16px] h-[16px]" alt="">
                        <p class="text-[16px]">Back</p>
                    </NuxtLink>
                    <div class="w-full flex flex-col gap-[8px]">
                        <div class="w-full flex gap-[24px]">
                            <div class="w-[305px] h-[4px] bg-[#D9D9D9]"></div>
                            <div class="w-[305px] h-[4px] bg-[#8BB33E]"></div>
                        </div>
                        <p class="text-[16px] text-[#1A1A1A]">Step 2 of 2</p>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-[40px] bg-[#F9F9F9]">
                    <div class="w-full bg-[#FFFFFF] rounded-[24px] p-[24px] shadow-sm">
                        <div class="flex items-start gap-[16px] mb-[32px]">
                            <div
                                class="w-[40px] h-[40px] rounded-[4px] bg-[#DAFFD0] flex items-center justify-center flex-shrink-0">
                                <img src="/images/graduation-cap.png" alt="">
                            </div>
                            <div>
                                <h2 class="text-[20px] text-[#6E4429] cheltenham  mb-[8px]">Training & Qualifications
                                </h2>
                                <p class="text-[16px]  text-[#6E4429]">Experience and additional training</p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-[24px]">
                            <div class="mx-[8px] my-[10px]">
                                <label class="block text-[16px] optima-bold  mb-[8px] text-[#6E4429]">
                                    Training Details
                                </label>
                                <div class="border-[1px] border-[#B1B1B1] rounded-[8px] px-[8px] py-[10px] ">
                                    <div
                                        class="w-full h-[52px] flex items-center rounded-md gap-[24px] px-[8px] py-[4px] bg-[#F5F5F5]  text-[#B9B9B9] text-[14px]">
                                        <div class="">
                                            <select class="py-[4px] px-[6px] outline-none cursor-pointer">
                                                <option>Heading 1</option>
                                            </select>
                                        </div>
                                        <div class="flex flex-row gap-[12px]">
                                            <button class="font-bold">
                                                <img src="/images/b.png" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                            <button class="italic">
                                                <img src="/images/I.png" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                            <button class="italic">
                                                <img src="/images/u.png" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                            <button class="italic">
                                                <img src="/images/quot.png" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                            <button class="italic">
                                                <img src="/images/crop.png" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                            <button class="italic">
                                                <img src="/images/align1.svg" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                            <button class="italic">
                                                <img src="/images/numbers.png" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                            <button class="italic">
                                                <img src="/images/align1.svg" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                            <button class="italic">
                                                <img src="/images/numbers.png" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <textarea rows="1"
                                        class="w-full px-[8px] pt-[10px] pb-[43px] border-none outline-none rounded-b-[8px] text-[16px] text-[#B9B9B9]"
                                        placeholder="Bachelor's Degree holder, Mother of two children, Police Clearance">Bachelor's Degree holder, Mother of two children, Police Clearance</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full bg-[#FFFFFF] rounded-[24px] p-[24px] shadow-sm">
                        <div class="flex items-start gap-[16px] mb-[32px]">
                            <div
                                class="w-[40px] h-[40px] rounded-[4px] bg-[#FFF2D7] flex items-center justify-center flex-shrink-0">
                                <img src="/images/time-fill.png" alt="">
                            </div>
                            <div>
                                <h2 class="text-[20px] text-[#6E4429] cheltenham  mb-[8px]">Opening Hours</h2>
                                <p class="text-[16px]  text-[#6E4429]">Daily Operating Hours</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-[10px]">
                            <div>
                                <label class="block text-[16px] optima-bold  mb-[8px] text-[#6E4429]">
                                    Opening Time
                                </label>
                                <div class="relative">
                                    <input type="text"
                                        class="w-full px-[8px] py-[10px] pr-[40px] border-[1px] border-[#B1B1B1] rounded-[8px] focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-[16px] text-[#B9B9B9]"
                                        placeholder="7:00 AM" value="7:00 AM" />
                                    <div class="absolute right-[10px] top-1/2 -translate-y-1/2 text-gray-400">
                                        <Clock :size="20" />
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="block text-[16px] optima-bold  mb-[8px] text-[#6E4429]">
                                    Closing Time
                                </label>
                                <div class="relative">
                                    <input type="text"
                                        class="w-full px-[8px] py-[10px] pr-[40px] border-[1px] border-[#B1B1B1] rounded-[8px] focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-[16px] text-[#B9B9B9]"
                                        placeholder="6:00 PM" value="6:00 PM" />
                                    <div class="absolute right-[10px] top-1/2 -translate-y-1/2 text-gray-400">
                                        <!-- <Clock :size="20" /> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full bg-[#FFFFFF] rounded-[24px] p-[24px] shadow-sm">
                        <div class="flex items-start gap-[16px] mb-[32px]">
                            <div
                                class="w-[40px] h-[40px] rounded-[4px] bg-[#FFD3FD] flex items-center justify-center flex-shrink-0">
                                <img src="/images/text-fill.png" alt="">
                            </div>
                            <div>
                                <h2 class="text-[20px] text-[#6E4429] cheltenham  mb-[8px]">Description of Care Services
                                </h2>
                                <p class="text-[16px]  text-[#6E4429]">Describe the care philosophy and daily activities
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-[24px]">
                            <div>
                                <label class="block text-[16px] optima-bold  mb-[8px] text-[#6E4429]">
                                    Service Description
                                </label>
                                <div class="border-[1px] border-[#B1B1B1] rounded-[8px] px-[8px] py-[10px] ">
                                    <div
                                        class="w-full h-[52px] flex items-center rounded-md gap-[24px] px-[8px] py-[4px] bg-[#F5F5F5]  text-[#B9B9B9] text-[14px]">
                                        <div class="">
                                            <select class=" outline-none cursor-pointer py-[4px] px-[6px]">
                                                <option>Heading 1</option>
                                            </select>
                                        </div>
                                        <div class="flex flex-row gap-[12px]">
                                            <button class="font-bold">
                                                <img src="/images/b.png" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                            <button class="italic">
                                                <img src="/images/I.png" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                            <button class="italic">
                                                <img src="/images/u.png" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                            <button class="italic">
                                                <img src="/images/quot.png" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                            <button class="italic">
                                                <img src="/images/crop.png" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                            <button class="italic">
                                                <img src="/images/align1.svg" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                            <button class="italic">
                                                <img src="/images/numbers.png" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                            <button class="italic">
                                                <img src="/images/align1.svg" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                            <button class="italic">
                                                <img src="/images/numbers.png" class="w-[20px] h-[20px]" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <textarea rows="1"
                                        class="w-full px-[8px] pt-[10px] pb-[43px] border-none outline-none rounded-b-[8px] text-[16px] text-[#B9B9B9]"
                                        placeholder="Bachelor's Degree holder, Mother of two children, Police Clearance">Dreamy Circles Dayhome provides a safe, loving, and playful environment for young children. Ms. Sarbjit believes every child deserves a place where they can grow, explore, and truly feel at home.   Ms. Sarbjit provides a clean, smoke-free home with a small group setting for individualized attention...
                                </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-[48px] flex justify-between gap-[16px]">
                    <button
                        class="px-[20px] py-[12px] border border-[1px] border-[#262626] rounded-[8px] text-gray-700 hover:bg-gray-50 transition text-[16px]">
                        Cancel
                    </button>
                    <button
                        class="px-[20px] py-[12px] bg-[#8BB33E] text-white rounded-[8px] hover:bg-emerald-700 transition text-[15px]">
                        Publish Dayhome
                    </button>
                </div>
            </div>

        </div>
    </div>
</template>

<script setup lang="ts">
import { ArrowLeft, Clock } from 'lucide-vue-next'
import Navbar from '~/components/Navbar.vue';
</script>