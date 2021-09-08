<template>
  <div class="container-fluid">
    <div class="subjectQuestion" v-if="question">
      <h1 class="subjectQuestion_text">問題 {{questionNum}}. {{questions[questionNum-1].text}}</h1>
      <ul class="subjectQuestion_choice">
        <li  v-for="(choice, index) in choices" :key="index" >{{index+1}}. {{choice.content}}</li>
      </ul>
      <div class="subjectQuestion_answer">
      <button v-for="(answer, index) in answers" :key="index" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#result"  @click="showResult(answer)">({{index+1}}) {{answer}}</button>
      </div>
      <show-result-component ref="result" :questions="questions" :questionNum="questionNum" v-model="correctCount" @next="nextQuestion()" @end="endQuestion()"/>
      <final-result-component ref="finalResult" :totalCorrect="correctCount"/>
    </div>
  </div>
</template>

<script>
import FinalResultComponent from './FinalResultComponent.vue';
import ShowResultComponent from './ShowResultComponent.vue';
export default {

  components: {
    FinalResultComponent,
    ShowResultComponent
  },

  props: {
    subjectId: String
  },

  data: function() {

    return{
      questionNum: 1,
      totalQuestion: 0,
      questions: [],
      question: false,
      choices: [],
      totalChoices: "",
      answers: [],
      correctCount: 0
    }
  },
  created() {
    this.gesQuestions();
  },

  methods: {
    gesQuestions() {
      axios.get('/api/subjects/' + this.subjectId + '/questions')
        .then ((res) => {
          this.questions = res.data;
          this.totalQuestion = this.questions.length;
          this.question = true;
          this.getChoice(this.questionNum-1);
          this.getAnwer();
        });
    },

    getChoice: function(index) {
      this.choices = this.questions[index].choices;
      this.totalChoices = this.choices.length
    },

    getAnwer: function() {
      this.answers = [];
      let i=1;
      for(i=1; i<=this.totalChoices; i++){
        this.answers.push(i);
      };
    },

    showResult: function(answer) {
      this.$refs.result.showJudgement(answer);
    },

    nextQuestion: function() {
      if(this.questionNum < this.totalQuestion) {
        this.questionNum++;
        this.getChoice(this.questionNum-1);
      } else {
        this.$refs.finalResult.showFinalResult();
      }
    },

    endQuestion: function() {
      this.$refs.finalResult.showFinalResult();
    }

  }
}
</script>

<style>
.subjectQuestion{
  width: 600px;
  margin: 0 auto;
}

.subjectQuestion_text{
  border-bottom:  solid #333333;
}

.subjectQuestion_choice{
  list-style: none;
  font-size: 30px;
  margin-top: 1rem;
}

.subjectQuestion_answer{
  width: 550px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
}
</style>
