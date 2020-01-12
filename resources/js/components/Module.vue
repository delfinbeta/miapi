<template>
  <div class="card">
    <div class="card-header bg-info text-white"><i class="fas" :class="icon"></i>  {{ title }}</div>    
    <div class="card-body">
      <list-users      v-if="(slug == 'users')"></list-users>
      <list-categories v-if="(slug == 'categories')"></list-categories>
      <list-tasks      v-if="(slug == 'tasks')"></list-tasks>
    </div>
  </div>
</template>

<script>
import ListUsers      from './users/List.vue';
import ListCategories from './categories/List.vue';
import ListTasks      from './tasks/List.vue';

export default {
  props: ['slug'],
  computed: {
    title() {
      let text = '';

      switch (this.slug) {
        case 'users':      text = 'Mis Usuarios';   break;
        case 'categories': text = 'Mis Categorías'; break;
        case 'tasks':      text = 'Mis Tareas';     break;
        default: text = ''; break;
      }

      return text;
    },
    icon() {
      let texttag = '';

      switch (this.slug) {
        case 'users':      texttag = 'fa-users';   break;
        case 'categories': texttag = 'fa-cogs'; break;
        case 'tasks':      texttag = 'fa-tasks';      break;
        default: texttag = ''; break;
      }

      return texttag;
    },
  },
  components: {
    'list-users': ListUsers,
    'list-categories': ListCategories,
    'list-tasks': ListTasks
  },
  mounted() {
    console.log('Component Module mounted.')
  }
}
</script>