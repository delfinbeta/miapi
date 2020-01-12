<template>
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 shadow py-3">
      <form action="#" method="post">
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" name="name" id="name" v-model="name" class="form-control" />
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Editar</button>
        </div>
      </form>
    </div>
  </div>
</template>