<template>
  <div class="container-fluid bg-dark mb-3">
    <div class="container">
      <nav class="navbar navbar-dark">
        <span class="navbar-brand mb-0 h1">Study App</span>
        <div>
          <router-link v-bind:to="{name: 'exam.list'}">
            <button class="btn btn-success">List</button>
          </router-link>
          <button class="btn btn-success">Add</button>
        </div>
      </nav>
    </div>
  </div>
</template>

<script>
export default {
  
}
</script>