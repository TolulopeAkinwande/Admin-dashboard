<!-- <template>
    <div class="w-full h-screen bg-[#F9F9F9] flex items-center justify-center">
        <div class="w-[455px] h-[511px] bg-white flex flex-col items-center gap-[40px] p-[24px] rounded-[8px]">
            <div class="w-full flex justify-center items-center">
                <img src="/images/logo1.svg" alt="" />
            </div>

            <div class="w-full flex justify-center items-center">
                <h5 class="text-[#1A1A1A] text-[28px] cheltenham">Log in</h5>
            </div>

            <div class="w-full flex flex-col gap-[16px] px-[8px]">
                <div class="w-full flex flex-col gap-[8px]">
                    <label class="text-[16px] text-[#6E4429] optima-bold">
                        Email Address
                    </label>
                    <input type="email" placeholder="Enter your email address"
                        class="w-full h-[44px] border border-[#B1B1B1] rounded-[8px] px-[8px] placeholder:text-[#B9B9B9] placeholder:text-[16px] outline-none" />
                </div>
                <div class="w-full flex flex-col gap-[8px]">
                    <label class="text-[16px] text-[#6E4429] optima-bold">
                        Password
                    </label>
                    <input type="password" placeholder="Enter your password"
                        class="w-full h-[44px] border border-[#B1B1B1] rounded-[8px] px-[8px] placeholder:text-[#B9B9B9] placeholder:text-[16px] outline-none" />
                </div>
            </div>
            <div class="w-full">
                <button class="w-full h-[52px] bg-[#8FB63E] rounded-[8px] text-white text-[16px] font-medium">
                    Continue
                </button>
            </div>
        </div>
    </div>
</template> -->

<template>
  <div class="flex min-h-screen bg-[#F9F9F9]">
    <Sidebar :active="'Dayhomes'" />
    <div class="flex-1 flex flex-col pb-[175px]">
      <Navbar/>
      <div class="flex flex-col sm:flex-row sm:items-center justify-between pt-[40px]">
        <div class="w-full flex flex-col gap-[8px] px-[24px]">
          <h1 class="text-[30px] text-[#4a3c31]">Dayhomes</h1>
          <p class="text-[18px] text-[#6E4429]">Manage and monitor all registered dayhomes</p>
        </div>

        <div class="flex flex-col sm:flex-row sm:items-center px-[24px]">
          <router-link to="/add-dayhome" class="bg-[#8BB33E] text-white text-[16px] w-[178px] h-[48px] rounded-[8px]
           flex items-center justify-center gap-[8px]">
            <img src="/images/cross.svg" class="w-[20px] h-[20px]" alt="">
            <span>Add Dayhome</span>
          </router-link>
        </div>

      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[24px] px-[24px] mt-[40px]">

        <div class="bg-[#FFFFFF] rounded-[4px] p-[16px] shadow-sm border border-[1px] border-[#E3E3E3]">
          <div class="flex items-center justify-between">
            <div class="flex flex-col justify-between">
              <p class="text-[28px] text-[#000000] cheltenham">10</p>
              <p class="text-[18px] text-[#6E4429] ">Total number of homes</p>
            </div>
            <div class="w-[40px] h-[40px] rounded-[4px]  bg-[#D0DDFF] p-[7px]">
              <img src="/images/home-smile.png" class="w-[24px] h-[24px]" alt="">
            </div>
          </div>
        </div>

        <div class="bg-[#FFFFFF] rounded-[4px] p-[16px] shadow-sm border border-[1px] border-[#E3E3E3]">
          <div class="flex items-center justify-between">
            <div class="flex flex-col justify-between">
              <p class="text-[28px] text-[#000000] cheltenham">6</p>
              <p class="text-[18px] text-[#6E4429] ">Active dayhomes</p>
            </div>
            <div class="w-[40px] h-[40px] rounded-[4px]  bg-[#DAFFD0] p-[7px]">
              <img src="/images/eye.svg" class="w-[24px] h-[24px]" alt="">
            </div>
          </div>
        </div>

        <div class="bg-[#FFFFFF] rounded-[4px] p-[16px] shadow-sm border border-[1px] border-[#E3E3E3]">
          <div class="flex items-center justify-between">
            <div class="flex flex-col justify-between">
              <p class="text-[28px] text-[#000000] cheltenham">4</p>
              <p class="text-[18px] text-[#6E4429] ">Inactive dayhomes</p>
            </div>
            <div class="w-[40px] h-[40px] rounded-[4px]  bg-[#FFDFDC] p-[7px]">
              <img src="/images/red-eye.svg" class="w-[24px] h-[24px]" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="px-[24px] mt-[40px]">
        <div class="flex flex-col  sm:flex-row sm:items-center justify-between gap-[20px] ">
          <div class="flex flex-col sm:flex-row items-stretch sm:items-center ">
            <div
              class="w-full sm:w-[419px] flex items-center gap-[8px] justify-center border border-[1px] border-[#B1B1B1] rounded-[8px] bg-[#FFFFFF] flex  pl-[8px] pr-[16px] py-[10px]">
              <img src="/images/search.png" class="w-[24px] h-[24px]" alt="">
              <input type="text" placeholder="Search by name or location..."
                class="w-full  text-[#B9B9B9] placeholder:text-[#B9B9B9] placeholder:text-[16px] placeholder:optima-medium flex items-center justify-center" />

            </div>
          </div>
        </div>

        <div class="flex gap-[px] mt-[40px] gap-[8px] flex-wrap">
          <button
            class="px-[12px] py-[5px] rounded-[8px] border border-[1px] border-[#D9D9D9DD] bg-[#3F5A2B] text-white text-[16px] optima-bold">All</button>
          <button
            class="px-[12px] py-[5px] rounded-[8px]   border border-[1px] border-[#D9D9D9DD] text-[16px] text-[#5C5C5C]">Drafts</button>
          <button
            class="px-[12px] py-[5px] rounded-[8px]   border border-[1px] border-[#D9D9D9DD] text-[16px] text-[#5C5C5C]">Active</button>
          <button
            class="px-[12px] py-[5px] rounded-[8px]   border border-[1px] border-[#D9D9D9DD] text-[16px] text-[#5C5C5C]">Inactive</button>
        </div>

        <div class="bg-white rounded-[8px] overflow-hidden mt-[40px]">
          <div class="bg-[#F9F9F9] cheltenham rounded-[8px] border border-[1px] border-[#DBDBDB] px-[16px] py-[12px]">
            <div class="grid grid-cols-5 gap-[16px] lg:gap-[40px] text-[18px]  text-[#6E4429] uppercase">
              <div class="text-center">Dayhome Name</div>
              <div class="text-center">Educator</div>
              <div class="text-center">Location</div>
              <div class="text-center">Status</div>
              <div class="text-center">Actions</div>
            </div>
          </div>
          <div v-for="item in dayhomes" :key="item.id" class="border-b border-gray-100 ">
            <div class="grid grid-cols-5 justify-between items-center px-[px] py-[20px]">
              <div class="">
                <div class="flex  gap-[4px] ">
                  <div class="p-[7px] w-[40px] h-[40px] rounded-[4px] flex items-center justify-center"
                    :class="item.color">
                    <img :src="item.image" class="w-[24px] h-[24px]" alt="Dayhome icon">
                  </div>
                  <div>
                    <div class="text-[16px] text-[#6E4429]">{{ item.name }}</div>
                    <div class="text-[12px] text-[#B59987] mt-[2px]">{{ item.owner }}</div>
                  </div>
                </div>
              </div>

              <div class="text-[#6E4429] text-[16px] flex flex-col items-center">
                {{ item.educator }}
                <div class="text-[12px] text-[#B59987]">Lead Educator</div>

              </div>

              <div class="text-gray-600 flex flex-col items-center">
                <div class="text-[#6E4429] text-[16px]">{{ item.location }}</div>
                <div class="text-[12px] text-[#B59987]">Alberta, Canada</div>
              </div>

              <div class="text-center">
                <span :class="[
                  'inline-flex items-center gap-[10px] p-[8px] text-[16px] rounded-full whitespace-nowrap',
                  item.status === 'Active'
                    ? 'bg-[#D2F196] text-[#262626]'
                    : 'bg-[#D31900] text-[#FFFFFF]'
                ]">
                  <!-- status dot -->
                  <span :class="[
                    'w-[8px] h-[8px] rounded-full',
                    item.status === 'Active'
                      ? 'bg-[#678B21]'
                      : 'bg-[#FFFFFF]'
                  ]"></span>

                  {{ item.status }}
                </span>
              </div>

              <div class="text-center">
                <button class="text-gray-400 hover:text-gray-600 transition-colors">
                  <svg class="w-[24px] h-[24px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div
          class="px-[32px] py-[16px] flex flex-col sm:flex-row items-center justify-between text-[14px] text-gray-600 gap-[16px]">
          <div>Showing 1 to 10 results</div>
          <div class="flex items-center gap-[8px]">
            <button class="p-[4px] rounded hover:bg-[#3F5A2B] disabled:opacity-40" disabled>
              <svg class="w-[20px] h-[20px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </button>
            <button class="px-[12px] py-[4px] rounded bg-[#3F5A2B] text-[#FFFFFF] font-medium">1</button>
            <button class="px-[12px] py-[4px] rounded hover:bg-gray-100">2</button>
            <button class="px-[12px] py-[4px] rounded hover:bg-gray-100">3</button>
            <button class="p-[4px] rounded hover:bg-gray-100">
              <svg class="w-[20px] h-[20px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import Navbar from '~/components/Navbar.vue';
import Sidebar from '~/components/Sidebar.vue';

const dayhomes = [
  { id: 1, image: '/images/home-smile.png', color: 'bg-[#D0DDFF]', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Anne K.', location: 'Calgary SW', status: 'Active' },
  { id: 2, image: '/images/home-smile.png', color: 'bg-[#FFD3FD]', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Jane', location: 'Calgary SW', status: 'Inactive' },
  { id: 3, image: '/images/home-smile.png', color: 'bg-[#E3CDFF]', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Wendy', location: 'Calgary SW', status: 'Active' },
  { id: 4, image: '/images/home-smile.png', color: 'bg-[#CCFFF5]', name: "Ms. Monika's Dayhome", owner: 'Ms. Monika', educator: 'Bessie', location: 'Calgary SW', status: 'Active' },
  { id: 5, image: '/images/home-smile.png', color: 'bg-[#DAFFD0]', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Gloria', location: 'Calgary SW', status: 'Inactive' },
  { id: 6, image: '/images/home-smile.png', color: 'bg-[#FFD3FD]', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Priscilla', location: 'Calgary SW', status: 'Active' },
  { id: 7, image: '/images/home-smile.png', color: 'bg-[#DAFFD0]', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Courtney', location: 'Calgary SW', status: 'Active' },
  { id: 8, image: '/images/home-smile.png', color: 'bg-[#CCFFF5]', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Bessie', location: 'Calgary SW', status: 'Active' },
  { id: 9, image: '/images/home-smile.png', color: 'bg-[#FFF2D7]', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Theresa', location: 'Calgary SW', status: 'Inactive' },
  { id: 10, image: '/images/home-smile.png', color: 'bg-[#FFD3FD]', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Priscilla', location: 'Calgary SW', status: 'Inactive' },
]

</script>