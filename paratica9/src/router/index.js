
import { createRouter, createWebHistory } from 'vue-router'
import EquipoView from '@/views/EquipoView.vue'
import ColoresView from '@/views/ColoresView.vue'

const routes = [
  {
    path: '/',
    name: 'colores',
    component: ColoresView
  },
  {
    path: '/equipo',
    name: 'equipo',
    component: EquipoView
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
