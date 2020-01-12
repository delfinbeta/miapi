<template>
  <div class="table-responsive">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col" style="text-align: center; width: 50px;">#</th>
          <th scope="col">Usuario</th>
          <th scope="col">Email</th>
          <th scope="col" style="text-align: center; width: 110px;">
            <a href="#" class="btn btn-sm btn-block btn-success"><i class="fas fa-plus"></i> Nuevo</a>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">001</td>
          <td>User 1</td>
          <td>user@correo.com</td>
          <td>
            <button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td scope="row">002</td>
          <td>User 2</td>
          <td>user@correo.com</td>
          <td>
            <button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td scope="row">003</td>
          <td>User 3</td>
          <td>user@correo.com</td>
          <td>
            <button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>