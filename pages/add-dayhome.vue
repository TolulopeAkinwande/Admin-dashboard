<!-- pages/dayhome/add.vue -->
<script setup lang="ts">
import { ArrowLeft, Info, Image as ImageIcon, CheckCircle, Plus } from 'lucide-vue-next'
</script>

<template>
    <div class="w-full pl-[24px] bg-[#F9F9F9] ">
        <!-- <header class="bg-white border-b border-gray-200">
      <div class="max-w-[1280px] mx-auto px-[24px] py-[16px] flex items-center justify-between">
        <div class="flex items-center gap-[12px]">
          <div class="relative">
            <div class="w-[40px] h-[40px] bg-emerald-600 rounded-full flex items-center justify-center text-white font-bold text-[20px]">
              H
            </div>
            <div class="absolute -bottom-[4px] -right-[4px] w-[20px] h-[20px] bg-white rounded-full flex items-center justify-center">
              <div class="w-[16px] h-[16px] bg-emerald-500 rounded-full"></div>
            </div>
          </div>
          <span class="text-[18px] font-semibold text-amber-800">HERITAGE</span>
        </div>

        <div class="w-[36px] h-[36px] rounded-full bg-gray-200 overflow-hidden flex items-center justify-center">
          <span class="text-gray-600 font-medium text-[14px]">A</span>
        </div>
      </div>
    </header> -->

        <!-- Main Content -->
        <div class="px-[24px] py-[32px]  w-[630px]">
            <!-- Back & Progress -->
            <!-- <div class="mb-[32px]">
             <button class="flex items-center gap-[8px] text-gray-700 hover:text-gray-900 mb-[24px] font-medium">
              <ArrowLeft :size="18" />
                <span>Back</span>
                </button>

                <div class="flex items-center gap-[16px]">
            <div class="flex-1">
            <div class="h-[4px] bg-gray-200 rounded-full overflow-hidden">
              <div class="h-full w-1/2 bg-emerald-500"></div>
            </div>
            </div>
             <span class="text-[14px] text-gray-500 whitespace-nowrap">Step 1 of 2</span>
            </div>
            </div> -->

            <div class="w-full flex flex-col gap-[40px] bg-[#F9F9F9]">
                <div class="w-full bg-[#FFFFFF] rounded-[24px] p-[24px] shadow-sm">
                    <div class="flex items-start gap-[16px] mb-[32px]">
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
                            <p class="text-[16px]  text-[#6E4429]">Upload up to 5 photos showing the dayhome environment
                            </p>
                        </div>
                    </div>

                    <div class="border-[2px] border-dashed border-[#B9B9B9B9] rounded-[12px] flex  p-[40px] text-center">
                        <div
                            class="w-[40px] h-[40px] bg-[#D0DDFF] py-[10px] px-[9px] rounded-full flex items-center justify-center mb-[16px]">
                            <Plus :size="32" class="text-blue-600" />
                        </div>
                        <p class="text-[16px] font-medium text-gray-700 mb-[8px]">Drag & drop photos here</p>
                        <p class="text-[14px] text-gray-500 mb-[24px]">or click to browse from your computer</p>

                        <button
                            class="bg-emerald-600 text-white px-[32px] py-[12px] rounded-[8px] hover:bg-emerald-700 transition font-medium text-[15px]">
                            Choose Files
                        </button>

                        <p class="text-[12px] text-gray-500 mt-[24px]">PNG, JPG up to 10MB each</p>
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

                <div class="bg-white rounded-[12px] border border-gray-200 p-[32px] shadow-sm">
                    <div class="flex items-start gap-[16px] mb-[32px]">
                        <div
                            class="w-[40px] h-[40px] rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                            <CheckCircle :size="20" class="text-green-600" />
                        </div>
                        <div>
                            <h2 class="text-[20px] font-semibold text-gray-800 mb-[8px]">Certification</h2>
                            <p class="text-[14px] text-gray-600">Educational credentials and certifications</p>
                        </div>
                    </div>

                    <div>
                        <label class="block text-[14px] font-medium text-gray-700 mb-[8px]">Certification
                            Details</label>
                        <input type="text"
                            class="w-full px-[16px] py-[12px] border border-gray-300 rounded-[8px] focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-[15px]"
                            placeholder="Level 2 Early Childhood Educator Certification..."
                            value="Level 2 Early Childhood Educator Certification..." />
                    </div>
                </div>
            </div>

            <div class="mt-[48px] flex justify-end gap-[16px]">
                <button
                    class="px-[32px] py-[12px] border border-gray-300 rounded-[8px] text-gray-700 hover:bg-gray-50 transition text-[15px]">
                    Cancel
                </button>
                <button
                    class="px-[40px] py-[12px] bg-emerald-600 text-white rounded-[8px] hover:bg-emerald-700 transition font-medium text-[15px]">
                    Next
                </button>
            </div>
        </div>
    </div>
</template>