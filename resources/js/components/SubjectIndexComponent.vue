<template>
  <div class="container-fluid">
    <div class="subjectMenu">
      <h2 style="text-align: center">科目を選んでください</h2>
      <div class="subjectMenu-list">
        <div class="subjectIcon" v-for="(subject, index) in subjects" :key="index" >
          <router-link class="subjectLink" v-bind:to="{name: 'subject.show', params: {subjectId: subject.id.toString()}}">
            {{subject.name}}
          </router-link>
        </div>
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
  max-width: 750px;
  margin: 0 auto;
}
.subjectMenu-list{
  padding: 20px;
  display: flex;
  justify-content: space-between;
}

.subjectIcon{
  width: 150px;
  height: 150px;
  background-color: cornflowerblue;
  border-radius: 1rem;
  display: inline-block;
  text-align: center;

}

.subjectLink{
  font-size: 18px;
  color: white;
  line-height: 150px;
}
a:hover{
  color: white;
  text-decoration: none;
}
</style>
