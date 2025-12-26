<template>
  <div>
    <Header />
    <div :key="$route.fullPath">
      <slot />
    </div>
    <Footer />
  </div>
</template>

<script setup lang="ts"></script>

<style scoped></style>
