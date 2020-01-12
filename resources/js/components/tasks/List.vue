<template>
  <div class="table-responsive">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col" style="text-align: center; width: 50px;">#</th>
          <th scope="col">Categoría</th>
          <th scope="col">Tarea</th>
          <th scope="col" style="text-align: center; width: 160px;">
            <router-link to="/admin/tasks/create" class="btn btn-sm btn-block btn-success">
              <i class="fas fa-plus"></i> Nuevo
            </router-link>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="reg in list" :key="reg.id">
          <td scope="row">{{ reg.id }}</td>
          <td>{{ categoryName(reg.category_id) }}</td>
          <td>{{ reg.title }}</td>
          <td>
            <button type="button" class="btn btn-outline-secondary">
              <i class="fas" :class="reg.pending ? 'fa-square' : 'fa-check-square'"></i>
            </button>
            <router-link type="button" :to="{ path: '/admin/tasks/edit/' + reg.id }" class="btn btn-info">
              <i class="fas fa-edit"></i>
            </router-link>
            <button type="button" class="btn btn-danger" @click="remove(reg.id)">
              <i class="fas fa-trash"></i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      list: [],
      categories: []
    }
  },
  methods: {
    categoryName(id) {
      const found = this.categories.find(category => category.id == id);

      if (found) {
        return found.name;
      } else {
        return '---';
      }
    },
    remove(id) {
      axios.delete('http://miapi.local:8080/api/tasks/' + id)
      .then(response => {
        let index = this.list.findIndex(task => task.id == id);

        this.list.splice(index, 1);
      })
      .catch(error => {
        console.log(error);
      });
    }
  },
  mounted() {
    axios.get('http://miapi.local:8080/api/categories')
    .then(response => {
      this.categories = response.data;
    })
    .catch(error => {
      console.log(error);
    });

    axios.get('http://miapi.local:8080/api/tasks')
    .then(response => {
      this.list = response.data;
    })
    .catch(error => {
      console.log(error);
    });
  }
}
</script>