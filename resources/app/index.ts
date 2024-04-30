import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

const targetElement = document.getElementById('user')

if (targetElement) {
  const app = createApp(App)
  app.use(router)
  router.isReady().then(() => app.mount(targetElement))
}
