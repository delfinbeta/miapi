<template>
  <div class="table-responsive">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col" style="text-align: center; width: 50px;">#</th>
          <th scope="col">Categoría</th>
          <th scope="col" style="text-align: center; width: 110px;">
            <a href="#" class="btn btn-sm btn-block btn-success"><i class="fas fa-plus"></i> Nuevo</a>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="reg in list" :key="reg.id">
          <td scope="row">{{ reg.id }}</td>
          <td>{{ reg.name }}</td>
          <td>
            <button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
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
      list: []
    }
  },
  mounted() {
    axios.get('http://miapi.local:8080/api/categories')
    .then(response => {
      this.list = response.data;
    })
    .catch(error => {
      console.log(error);
    });
  }
}
</script>