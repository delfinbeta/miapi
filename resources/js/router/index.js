import Vue from 'vue'
import Router from 'vue-router'
import Module from '../components/Module.vue'

Vue.use(Router)

var router = new Router({
  mode: 'history',
  routes: [
    {
      path: '/admin/:slug',
      name: 'module',
      component: Module,
      props: true,
      children: [
        {
          path: ':operation',
          name: 'create',
          component: Module,
          props: true,
          children: [
            {
              path: ':id',
              name: 'edit',
              component: Module,
              props: true
            }
          ]
        }
      ]
    }
  ]
});

export default router