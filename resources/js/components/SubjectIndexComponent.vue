<template>
  <div class="container-fluid">
    <div class="subjectMenu">
      <h2 style="text-align: center">科目を選んでください</h2>
      <div class="subjectMenu-list">
        <router-link  class="subjectIcon" v-for="(subject, index) in subjects" :key="index" v-bind:to="{name: 'subject.show', params: {subjectId: subject.id.toString()}}">
          {{subject.name}}
        </router-link>
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
  max-width: 700px;
  margin: 0 auto;
}
.subjectMenu-list{
  padding: 20px;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;

}

.subjectIcon{
  width: 150px;
  height: 150px;
  margin-bottom: 20px;
  background-color: cornflowerblue;
  border-radius: 1rem;
  text-align: center;
  font-size: 18px;
  color: white;
  line-height: 150px;
}

a:hover{
  color: white;
  text-decoration: none;
}
</style>
