import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue';
import SkillIndex from '../views/skills/SkillIndex.vue';


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
//   base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: "/skills",
      name: "SkillIndex",
      component: SkillIndex
    },
  ]

})

export default router
