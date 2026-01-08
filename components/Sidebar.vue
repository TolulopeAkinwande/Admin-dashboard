<template>
  <nav class="w-[240px] py-[32px] px-[40px] bg-white border-r  border-[#DBDBDB] min-h-screen">
    <div class="w-full">
      <img src="/images/logo1.svg" class="w-[201px] h-[65px]" alt="">
    </div>
    <div class="w-full flex flex-col gap-[40px] mt-[60px]">
      <ul class="flex flex-col gap-[8px] items-start ">
        <li>
          <a href="/dayhomes" class="block text-[16px] py-[16px]  rounded-[8px]  text-[#6E4429] optima-bold">Dayhomes</a>
        </li>

        <li>
          <a href="/settings"
            class="block text-[16px] py-[16px] rounded-[8px] text-[#6E4429] optima-bold">Settings</a>
        </li>
      </ul>
      <button
        class="border border-[1px] border-[#3F5A2B] rounded-[8px] py-[12px] text-[16px] text-[#8BB33E]">
        Log out
      </button>
    </div>
  </nav>
</template>

<script setup lang="ts">
defineProps<{
  active: 'Dashboard' | 'Dayhomes' | 'Settings'
}>()
</script>