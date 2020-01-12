<template>
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 shadow py-3">
      <form action="#" method="post" @submit.prevent="save">
        <div class="form-group">
          <label for="category_id">Categoría:</label>
          <select name="category_id" id="category_id" v-model="draft.category_id" class="form-control">
            <option value="">Seleccione</option>
            <option v-for="cat in categories" :key="cat.id" :value="cat.id">{{ cat.name }}</option>
          </select>
        </div>
        <div class="form-group">
          <label for="title">Título:</label>
          <input type="text" name="title" id="title" v-model="draft.title" class="form-control" />
        </div>
        <div class="form-group">
          <label for="description">Descripción:</label>
          <textarea name="description" id="description" cols="30" rows="6" v-model="draft.description" class="form-control"></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Editar</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  props: ['id'],
  data() {
    return {
      categories: [],
      draft: {
        category_id: '',
        title: '',
        description: '',
        pending: 1
      }
    }
  },
  methods: {
    save() {
      axios.put('http://miapi.local:8080/api/tasks/' + this.id, this.draft)
      .then(response => {
        this.$router.push({ path: '/admin/tasks' });
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

    axios.get('http://miapi.local:8080/api/tasks/' + this.id)
    .then(response => {
      this.draft = response.data.task;
    })
    .catch(error => {
      console.log(error);
    });
  }
}
</script>