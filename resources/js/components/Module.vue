<template>
  <div class="card">
    <div class="card-header bg-info text-white"><i class="fas" :class="icon"></i> {{ title }}</div>    
    <div class="card-body">
      <list-users      v-if="(slug == 'users'      && !operation)"></list-users>
      <list-categories v-if="(slug == 'categories' && !operation)"></list-categories>
      <list-tasks      v-if="(slug == 'tasks'      && !operation)"></list-tasks>
      <create-user     v-if="(slug == 'users'      && operation == 'create')"></create-user>
      <create-category v-if="(slug == 'categories' && operation == 'create')"></create-category>
      <create-task     v-if="(slug == 'tasks'      && operation == 'create')"></create-task>
      <edit-user       v-if="(slug == 'users'      && operation == 'edit')" :id="id"></edit-user>
      <edit-category   v-if="(slug == 'categories' && operation == 'edit')" :id="id"></edit-category>
      <edit-task       v-if="(slug == 'tasks'      && operation == 'edit')" :id="id"></edit-task>
    </div>
  </div>
</template>

<script>
import ListUsers      from './users/List.vue';
import ListCategories from './categories/List.vue';
import ListTasks      from './tasks/List.vue';
import CreateUser     from './users/Create.vue';
import CreateCategory from './categories/Create.vue';
import CreateTask     from './tasks/Create.vue';
import EditUser       from './users/Edit.vue';
import EditCategory   from './categories/Edit.vue';
import EditTask       from './tasks/Edit.vue';

export default {
  props: ['slug', 'operation', 'id'],
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
    'list-tasks': ListTasks,
    'create-user': CreateUser,
    'create-category': CreateCategory,
    'create-task': CreateTask,
    'edit-user': EditUser,
    'edit-category': EditCategory,
    'edit-task': EditTask
  },
  mounted() {
    console.log('Component Module mounted.')
  }
}
</script>