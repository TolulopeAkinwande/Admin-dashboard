<template>
  <header
    class=" top-0 left-0 right-0 bg-background/95 backdrop-blur-sm z-50 px-[19px] lg:px-[100px] pt-[15px] pb-[38px] h-full bg-white">
    <div class="container ">
      <div class="flex items-center justify-between h-20">
        <NuxtLink to="/" class="flex items-center">
          <div class="w-[253px] h-[85px] rounded-full bg-primary/10 flex items-center justify-center"
            exact-active-class="text-[#6E4429]">
            <img src="/images/logo.svg" alt="" class="w-full h-full">
          </div>
        </NuxtLink>
        <nav class="hidden md:flex items-center gap-8 ">
          <NuxtLink to="/"
            class=" text-[#000000] text-[16px] text-foreground hover:text-primary hover:underline transition-colors "
            exact-active-class="text-[#6E4429] optima-bold">
            Home
          </NuxtLink>
          <NuxtLink to="/about"
            class="text-[#000000] text-[16px] text-foreground hover:text-primary hover:underline transition-colors"
            exact-active-class="text-[#6E4429] optima-bold">
            About
          </NuxtLink>

          <NuxtLink to="/dayhomes"
            class="text-[#000000] text-[16px] text-foreground hover:text-primary hover:underline transition-colors"
            exact-active-class="text-[#6E4429] optima-bold">
            Find A Day Home
          </NuxtLink>

          <NuxtLink to="https://heritagefdha.com/blog" target="_blank" rel="noopener noreferrer"
            class="text-[#000000] text-[16px] text-foreground hover:text-primary hover:underline transition-colors"
            exact-active-class="text-[#6E4429] optima-bold">
            Blog
          </NuxtLink>
        </nav>
        <NuxtLink to="/contact-us" class="hidden md:block  rounded-[24px]" data-aos="fade-up" data-aos-duration="1000">
          <Button class="rounded-full px-6">Contact Us</Button>
        </NuxtLink>
        <button class="md:hidden p-2]" @click="isMenuOpen = !isMenuOpen" aria-label="Toggle menu">
          <component :is="isMenuOpen ? X : Menu" class="w-6 h-6" />
        </button>
      </div>
      <div v-if="isMenuOpen" class="md:hidden  ">
        <nav class="flex flex-col gap-4">
          <NuxtLink to="/" class="text-foreground hover:text-primary transition-colors py-2"
            exact-active-class="text-[#6E4429] optima-bold">
            Home
          </NuxtLink>

          <NuxtLink to="/about" class="text-foreground hover:text-primary transition-colors py-2"
            exact-active-class="text-[#6E4429] optima-bold">
            About
          </NuxtLink>

          <NuxtLink to="/dayhomes" class="text-foreground hover:text-primary transition-colors py-2"
            exact-active-class="text-[#6E4429] optima-bold">
            Find A Day Home
          </NuxtLink>

            <NuxtLink to="https://heritagefdha.com/blog" target="_blank" rel="noopener noreferrer"
           class="text-foreground hover:text-primary transition-colors font-medium py-2"
            exact-active-class="text-[#6E4429] optima-bold">
            Blog
          </NuxtLink>

          <NuxtLink to="/contact-us" class="inline-block" exact-active-class="text-[#6E4429]">
            <Button class="rounded-full w-full mt-2">Contact Us</Button>
          </NuxtLink>
        </nav>
      </div>
    </div>
  </header>
</template>

<script setup>
import { ref } from "vue";
import { Menu, X } from "lucide-vue-next";

const isMenuOpen = ref(false);
</script>
