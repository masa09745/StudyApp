<template>
  <div class="container-fluid">
    <div class="subjectQuestion" v-if="question">
      <h1 class="subjectQuestion_text">問題 {{questionNum}}. {{questions[questionNum-1].text}}</h1>
      <ul class="subjectQuestion_choice">
        <li  v-for="(choice, index) in choices" :key="index" >{{index+1}}. {{choice.content}}</li>
      </ul>
      <div class="subjectQuestion_answer">
      <button v-for="(answer, index) in answers" :key="index" @click="showResult(answer)">({{index+1}}) {{answer}}</button>
      </div>

      <div class="questionResult" v-if="result">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="questionResultLabel">{{judgement}}</h4>
          </div>
          <div class="modal-body">
            <h6>＜解説＞</h6>
            <div>{{questions[questionNum-1].explanation}}</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" @click="nextQuestion()">次の問題へ</button>
            <button type="button" class="btn btn-dark" @click="endQuestion()">終了する</button>
          </div>
        </div>
      </div>
  </div>
  <final-result-component ref="finalResult" :totalCorrect="correctCount"/>
  </div>
</template>

<script>

import FinalResultComponent from './FinalResultComponent.vue';

export default {

  components: {
    FinalResultComponent,
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
      judgement:"",
      result: false,
      correctCount: 0
    }
  },
  created() {
    this.getQuestions();
  },

  methods: {
    getQuestions() {
      axios.get('/api/subjects/' + this.subjectId + '/questions')
        .then ((res) => {
          this.questions = res.data;
          this.totalQuestion = this.questions.length;
          this.question = true;
          this.getChoice(this.questionNum-1);
          this.getAnswer();
        });
    },

    getChoice: function(index) {
      this.choices = this.questions[index].choices;
      this.totalChoices = this.choices.length
    },

    getAnswer() {
      this.answers = [];
      let i=1;
      for(i=1; i<=this.totalChoices; i++){
        this.answers.push(i);
      };
    },

    showResult: function(answer) {
      let correct = this.questions[this.questionNum-1].answer;
      this.result = true;
      if(answer == correct) {
        this.judgement = "正解！！";
      } else {
        this.judgement = "不正解！！";
      }
    },

    nextQuestion() {
      if(this.questionNum < this.totalQuestion) {
        this.questionNum++;
        this.result = false;
        this.getChoice(this.questionNum-1);
      } else {
        this.result = false;
        this.$refs.finalResult.showFinalResult();
      }
    },

    endQuestion() {
      this.result = false;
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
