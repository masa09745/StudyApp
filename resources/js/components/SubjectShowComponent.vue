<template>
  <div class="container-fluid">
    <div class="subjectQuestion">
      <h2>問題 {{questionNum}}. {{subject[questionNum-1].text}}</h2>


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
      questionNum: 1,
      totalQuestion: 0,
      subject: []
    }
  },

  methods: {
    gesQuestions() {
      axios.get('/api/questions?id=' + this.subjectId)
        .then ((res) => {
          this.subject = res.data;
          this.totalQuestion = this.subject.length;
        });
    }
  },
  mounted() {
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
