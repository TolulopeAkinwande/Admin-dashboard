<!-- pages/settings.vue -->

<template>
    <div class="w-full flex min-h-screen  bg-[#F9F9F9]">
        <Sidebar :active="'Dayhomes'" />
        <div class="w-full">
            <Navbar />
            <div class=" flex">
                <div class="flex-1 py-[32px] px-[24px]">
                    <div class="w-[630px] flex flex-col gap-[40px]">
                        <div>
                            <div class="flex items-center  gap-[8px] mb-[24px]">
                                <div
                                    class="w-[24px] h-[24px] rounded-[4px] bg-[#D0DDFF] flex items-center justify-center flex-shrink-0">
                                    <img src="/images/bp.png" class="w-[14px] h-[14px]" alt="">
                                </div>
                                <div>
                                    <p class="text-[18px] text-[#6E4429] mb-[8px]">Account Information</p>
                                </div>
                            </div>

                            <div class="flex flex-col gap-[24px]">
                                <div>
                                    <label class="block text-[16px] optima-bold mb-[8px] text-[#6E4429]">
                                        Email Address
                                    </label>
                                    <input type="email"
                                        class="w-full px-[8px] py-[10px] border-[1px] border-[#B1B1B1] rounded-[8px] focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-[16px] text-[#B9B9B9]"
                                        placeholder="sarah.johnson@heritage.com" value="sarah.johnson@heritage.com" />
                                </div>
                            </div>
                        </div>

                        <div class="w-full bg-[#FFFFFF] rounded-[24px] p-[24px]">
                            <div class="flex items-start gap-[16px] mb-[24px]">
                                <div
                                    class="w-[24px] h-[24px] rounded-[4px] bg-[#DAFFD0] flex items-center justify-center flex-shrink-0">
                                    <img src="/images/lock.png" class="w-[14px] h-[14px]" alt="">
                                </div>
                                <div>
                                    <p class="text-[18px] text-[#6E4429] mb-[8px]">Password Management</p>
                                </div>
                            </div>

                            <div class="flex flex-col gap-[24px]">
                                <div>
                                    <label class="block text-[16px] optima-bold mb-[8px] text-[#6E4429]">
                                        Current Password
                                    </label>
                                    <input type=""
                                        class="w-full px-[8px] py-[10px] border-[1px] border-[#B1B1B1] rounded-[8px] focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-[16px] text-[#B9B9B9]"
                                        placeholder="Sarah Johnson" value="Sarah Johnson" />
                                </div>

                                <div>
                                    <label class="block text-[16px] optima-bold mb-[8px] text-[#6E4429]">
                                        New Password
                                    </label>
                                    <input type=""
                                        class="w-full px-[8px] py-[10px] border-[1px] border-[#B1B1B1] rounded-[8px] focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-[16px] text-[#B9B9B9]"
                                        placeholder="sarah.johnson@heritage.com" value="sarah.johnson@heritage.com" />
                                </div>

                                <div>
                                    <label class="block text-[16px] optima-bold mb-[8px] text-[#6E4429]">
                                        Confirm New Password
                                    </label>
                                    <input type=""
                                        class="w-full px-[8px] py-[10px] border-[1px] border-[#B1B1B1] rounded-[8px] focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-[16px] text-[#B9B9B9]"
                                        placeholder="sarah.johnson@heritage.com" value="sarah.johnson@heritage.com" />
                                </div>

                                <p class="text-[16px] text-[#6E4429]">Password must be at least 6 characters.</p>
                            </div>

                            <div class="mt-[24px]">
                                <button
                                    class="px-[20px] py-[12px] bg-[#8BB33E] text-white rounded-[8px] hover:bg-emerald-700 transition text-[16px]">
                                    Update Password
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script setup lang="ts">
import { User, Lock } from 'lucide-vue-next'
import Navbar from '~/components/Navbar.vue';
</script>