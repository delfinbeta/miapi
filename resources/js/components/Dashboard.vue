<template>
<div class="container">
  <div class="row justify-content-center">
    <div class="col">
      <div class="card">
        <div class="card-header">Bienvenido a tu Dashboard</div>

        <div class="card-body">
          <div class="container">
            <div class="row justify-content-between">
              <a href="/home" class="btn btn-primary"><i class="fas fa-home"></i> Dashboard</a>
              <router-link class="btn btn-primary" :to="{name: 'users'}">
                <i class="fas fa-users"></i> Usuarios
              </router-link>
              <router-link class="btn btn-primary" :to="{name: 'categories'}">
                <i class="fas fa-cogs"></i> Categorías
              </router-link>
              <router-link class="btn btn-primary" :to="{name: 'tasks'}">
                <i class="fas fa-tasks"></i> Tareas
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col py-4">
      <router-view></router-view>
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
