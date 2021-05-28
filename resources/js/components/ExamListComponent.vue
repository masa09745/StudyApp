<template>
  <div class="container">
    <table class="table table-hover">
      <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Exam Date</th>
        <th scope="col">Show</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>2021/03</td>
          <td>
            <router-link v-bind:to="{name: 'exam.show', params: {examId: 1}}">
              <button class="btn btn-primary">Show</button>
            </router-link>
          </td>
          <td>
            <router-link v-bind:to="{name: 'exam.edit', params: {examId: 1}}">
              <button class="btn btn-success">Edit</button>
            </router-link>
          </td>
          <td>
            <button class="btn btn-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>2020/11</td>
          <td>
            <router-link v-bind:to="{name: 'exam.show', params: {examId: 2}}">
              <button class="btn btn-primary">Show</button>
            </router-link>
          </td>
          <td>
            <router-link v-bind:to="{name: 'exam.edit', params: {examId: 2}}">
              <button class="btn btn-success">Edit</button>
            </router-link>
          </td>
          <td>
            <button class="btn btn-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>2020/07</td>
          <td>
            <router-link v-bind:to="{name: 'exam.show', params: {examId: 3}}">
              <button class="btn btn-primary">Show</button>
            </router-link>
          </td>
          <td>
            <router-link v-bind:to="{name: 'exam.edit', params: {examId: 3}}">
              <button class="btn btn-success">Edit</button>
            </router-link>
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
export default {}
</script>