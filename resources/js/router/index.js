import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

const Users = { template: '<div>Admin Usuarios</div>' }
const Categories = { template: '<div>Admin Categorías</div>' }
const Tasks = { template: '<div>Admin Tareas</div>' }

var router = new Router({
  mode: 'history',
  routes: [
    { path: '/admin/users',      name: 'users',      component: Users },
    { path: '/admin/categories', name: 'categories', component: Categories },
    { path: '/admin/tasks',      name: 'tasks',      component: Tasks }
  ]
});

export default router