export default defineNuxtConfig({
  compatibilityDate: '2025-07-15',
  devtools: { enabled: true },
  // ssr: true,
  typescript: { strict: true },
  app: {
    head: {
      htmlAttrs: { lang: 'en' },
      link: [
         { rel: 'icon', type: 'image/png', href: '/favicon.png' },
      ],
    },
    pageTransition: { name: 'page', mode: 'out-in' },
  },
  css: [
    '@/assets/css/tailwind.css',
    '@/assets/css/style.css',
    '@/assets/css/main.css',
  ],
  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    },
  },
   plugins: [
    '~/plugins/aos.client.ts',
  ],

  modules: [  
  ],
  
})
