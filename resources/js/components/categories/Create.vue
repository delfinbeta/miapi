<template>
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 shadow py-3">
      <form action="#" method="post" @submit.prevent="save">
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" name="name" id="name" v-model="draft.name" class="form-control" />
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Crear</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      draft: {
        name: ''
      }
    }
  },
  methods: {
    save() {
      axios.post('http://miapi.local:8080/api/categories', this.draft)
      .then(response => {
        this.$router.push({ path: '/admin/categories' });
      })
      .catch(error => {
        console.log(error);
      });
    }
  }
}
</script>