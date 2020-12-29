<template>
  <div>
    <h1>Book List</h1>
    <table class="table table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Vol</th>
          <th scope="col">Show</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Title1</td>
          <td>Vol.1</td>
          <td>
            <RouterLink v-bind:to="{name: 'BookShow', params: {bookID: 1}}">
              <button class="btn btn-primary">Show</button>
            </RouterLink>
          </td>
          <td>
            <button class="btn btn-success">Edit</button>
          </td>
          <td>
            <button class="btn btn-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Title2</td>
          <td>Vol.2</td>
          <td>
            <RouterLink v-bind:to="{name: 'BookShow', params: {bookID: 2}}">
              <button class="btn btn-primary">Show</button>
            </RouterLink>
          </td>
          <td>
            <button class="btn btn-success">Edit</button>
          </td>
          <td>
            <button class="btn btn-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Title3</td>
          <td>Vol.3</td>
          <td>
            <RouterLink v-bind:to="{name: 'BookShow', params: {bookID: 2}}">
              <button class="btn btn-primary">Show</button>
            </RouterLink>
          </td>
          <td>
            <button class="btn btn-success">Edit</button>
          </td>
          <td>
            <button class="btn btn-danger">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  
}
</script>