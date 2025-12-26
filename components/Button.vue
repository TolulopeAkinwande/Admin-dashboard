<template>
  <button class="py-[12px] px-[49px] bg-[#8BB33E] optima-medium rounded-[999px]  text-white text-[16px] leading-[24px]">
    <slot />
  </button>
</template>

<!-- <template>
  <NuxtLink :to="to" class="app-btn" :style="buttonStyle">
    <span>{{ label }}</span>
    <img v-if="iconImage" :src="iconImage" alt="icon" class="icon-img" />
    <span v-else-if="icon" class="icon"></span>
  </NuxtLink>
</template> -->

<!-- <script setup>
import { computed } from "vue";

const props = defineProps({
  to: {
    type: String,
    default: "#",
  },
  label: {
    type: String,
    required: true,
  },
  bg: {
    type: String,
    default: "linear-gradient(to right, #22d3ee, #3b82f6)",
  },
  textColor: {
    type: String,
    default: "#ffffff",
  },
  border: {
    type: String,
    default: "none",
  },
  icon: {
    type: Boolean,
    default: false,
  },
  iconImage: {
    type: String,
    default: "",
  },
});

const buttonStyle = computed(() => ({
  background: props.bg,
  color: props.textColor,
  border: props.border,
}));
</script>

<style scoped>
.app-btn {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 14px 24px;
  border-radius: 9999px;
  text-decoration: none;
  transition: all 0.3s ease;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
  cursor: pointer;
  font-family: "indivisible", sans-serif;
  font-weight: 500;
  font-style: normal;
}

.app-btn:hover {
  opacity: 0.9;
  transform: scale(1.05);
  backdrop-filter: blur(1px);
}

.icon {
  font-size: 1.1rem;
}
</style> -->
