<template>
  <div class="table-responsive">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col" style="text-align: center; width: 50px;">#</th>
          <th scope="col">Categoría</th>
          <th scope="col">Tarea</th>
          <th scope="col" style="text-align: center; width: 160px;">
            <a href="#" class="btn btn-sm btn-block btn-success"><i class="fas fa-plus"></i> Nuevo</a>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">001</td>
          <td>Category 1</td>
          <td>Task 1</td>
          <td>
            <button type="button" class="btn btn-outline-secondary"><i class="fas fa-check-square"></i></button>
            <button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td scope="row">002</td>
          <td>Category 2</td>
          <td>Task 2</td>
          <td>
            <button type="button" class="btn btn-outline-secondary"><i class="fas fa-check-square"></i></button>
            <button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td scope="row">003</td>
          <td>Category 3</td>
          <td>Task 3</td>
          <td>
            <button type="button" class="btn btn-outline-secondary"><i class="fas fa-square"></i></button>
            <button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>