<template>
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
                <!-- <button class="w-full h-[52px] bg-[#8FB63E] rounded-[8px] text-white text-[16px] ">
                    Continue
                </button> -->
                <RouterLink to="/dayhomes" class="w-full h-[52px] bg-[#8FB63E] rounded-[8px] text-white text-[16px] ">
                    Continue
                </RouterLink>
            </div>
        </div>
    </div>
</template>
