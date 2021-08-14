<template>
  <div class="container-fluid">
    <div class="subjectQuestion">
      <h2>問題 {{questions.id}}</h2>


    </div>

  </div>
</template>

<script>
export default {
  props: {
    subjectId: String
  },

  data: function() {
    return{
      questions: []
    }
  },

  methods: {
    gesQuestions() {
      axios.get('/api/subjects/' + this.subjectId)
        .then ((res) => {
          this.questions = res.data;
        });
    }
  },
  created() {
    this.gesQuestions();
  }
}
</script>

<style>
.subjectQuestion{
  width: 600px;
  margin: 0 auto;
}
</style>
