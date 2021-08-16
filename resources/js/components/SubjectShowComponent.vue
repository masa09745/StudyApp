<template>
  <div class="container-fluid">
    <div class="subjectQuestion" v-if="question">
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
      subject: [],
      question: null
    }
  },
  created() {
    this.gesQuestions();
    console.log(this);
  },

  methods: {
    gesQuestions() {
      axios.get('/api/subjects/' + this.subjectId + '/questions')
        .then ((res) => {
          this.subject = res.data;
          this.totalQuestion = this.subject.length;
          this.question = true;
        });
    }
  }
}
</script>

<style>
.subjectQuestion{
  width: 600px;
  margin: 0 auto;
}
</style>
