<template>
  <div class="container-fluid bg-dark mb-5">
    <div class="container-sm">
      <nav class="navbar navbar-dark">
        <router-link v-bind:to="{name: 'exam.list'}">
          <span class="navbar-brand mb-0 h1">Study App</span>
        </router-link>
        <div>
          <router-link v-bind:to="{name: 'exam.create'}">
            <button class="btn btn-success">Add</button>
          </router-link>
        </div>
      </nav>
    </div>
  </div>
</template>

<script>
export default {
  
}
</script>