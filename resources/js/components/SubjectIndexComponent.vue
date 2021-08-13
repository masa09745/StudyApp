<template>
  <div class="container-fluid">
    <div class="subjectMenu">
      <h2 style="text-align: center">科目を選んでください</h2>
      <div class="subjectMenu-list" v-for="(subject, index) in subjects" :key="index">
        <button class="btn btn-primary btn-lg btn-block">{{subject.name}}</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      subjects: []
    }
  },

  methods: {
    getSubjects() {
      axios.get('/api/subjects')
        .then((res) =>{
          this.subjects = res.data;
        });
    }
  },

  mounted() {
    this.getSubjects();
  }
}
</script>

<style>
.subjectMenu{
  max-width: 650px;
  margin: 0 auto;
}
.subjectMenu-list{
  margin-bottom: 10px;
}
</style>
