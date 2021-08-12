<template>
  <div class="container-fluid bg-dark mb-4">
    <div class="container-sm">
      <nav class="navbar navbar-dark">
        <router-link v-bind:to="{name: 'subject.index'}">
          <span class="navbar-brand mb-0 h1">Study App</span>
        </router-link>
        <div>
          <router-link v-bind:to="{name: 'question.create'}">
            <button class="btn btn-success">問題作成</button>
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