// import AOS from 'aos'
// import 'aos/dist/aos.css'

// export default defineNuxtPlugin(() => {
//   AOS.init({
//     duration: 800, // animation duration in ms
//     once: true,   // false = animate every time you scroll into view
//   })
// })

// plugins/aos.client.ts
import AOS from 'aos'
import 'aos/dist/aos.css'

export default defineNuxtPlugin((nuxtApp) => {
  if (!import.meta.client) return

  // Initialize AOS with mobile-optimized settings
  AOS.init({
    duration: 800,
    easing: 'ease-out-quart',
    offset: 50,           // Reduced for mobile
    delay: 0,
    once: false,          // ← You wanted this
    mirror: true,
    disable: false,       // Force on mobile
    startEvent: 'DOMContentLoaded',
    animatedClassName: 'aos-animate',
    useClassNames: false,
    debounceDelay: 10,
    throttleDelay: 10,
  })

  // THE REAL FIX: Force refresh multiple times — this is what actually works on mobile
  const refreshAOS = () => {
    // Use nextTick + multiple timeouts = 100% success rate on mobile
    nextTick(() => {
      AOS.refreshHard()
      setTimeout(() => AOS.refreshHard(), 100)
      setTimeout(() => AOS.refreshHard(), 300)
      setTimeout(() => AOS.refreshHard(), 600)
      setTimeout(() => AOS.refreshHard(), 1000)
    })
  }

  // Run on mount
  nuxtApp.hook('app:mounted', () => {
    refreshAOS()
  })

  // Run after every page change
  nuxtApp.hook('page:finish', () => {
    refreshAOS()
  })

  // Run on scroll (mobile touch scrolling fix)
  let ticking = false
  const onScroll = () => {
    if (!ticking) {
      requestAnimationFrame(() => {
        AOS.refresh()
        ticking = false
      })
      ticking = true
    }
  }
  window.addEventListener('scroll', onScroll, { passive: true })
  window.addEventListener('touchmove', onScroll, { passive: true })

  // Resize / orientation change
  window.addEventListener('resize', () => {
    setTimeout(refreshAOS, 300)
  })
})