<template>
<div class="container">
  <div class="row justify-content-center">
    <div class="col">
      <div class="card">
        <div class="card-header">Bienvenido a tu Dashboard</div>

        <div class="card-body">
          <div class="container">
            <div class="row justify-content-between">
              <a href="#" class="btn btn-primary"><i class="fas fa-users"></i> Usuarios</a>
              <a href="#" class="btn btn-primary"><i class="fas fa-cogs"></i> Categorías</a>
              <a href="#" class="btn btn-primary"><i class="fas fa-tasks"></i> Tareas</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  mounted() {
    console.log('Component Dashboard mounted.')
  }
}
</script>
