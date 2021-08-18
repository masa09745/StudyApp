<template>
  <div class="container-fluid">
    <div class="subjectQuestion" v-if="question">
      <h1 class="subjectQuestion_text">問題 {{questionNum}}. {{questions[questionNum-1].text}}</h1>
      <ul class="subjectQuestion_choice">
        <li  v-for="(choice, index) in choices" :key="index" >{{index+1}}. {{choice}}</li>
      </ul>
      <div class="subjectQuestion_answer">
      <button v-for="(answer, index) in answers" :key="index" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#result"  @click="showResult(answer)">({{index+1}}) {{answer}}</button>
      </div>

      <!-- modal -->
      <div class="modal fade" id="result" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">{{result}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>


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
      questions: [],
      question: null,
      choices: [],
      totalChoices: "",
      answers: [],
      result: ""
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
          this.questions = res.data;
          this.totalQuestion = this.questions.length;
          this.question = true;
          this.getChoice(this.questionNum-1);
          this.getAnwer();
        });
    },

    getChoice: function(index) {
      this.choices = [];
      this.choices.push(
        this.questions[index].choice1,
        this.questions[index].choice2,
        this.questions[index].choice3,
        this.questions[index].choice4
      );
      this.totalChoices = this.choices.length;
    },

    getAnwer: function() {
      this.answers = [];
      let i=1;
      for(i=1; i<=this.totalChoices; i++){
        this.answers.push(i);
      };
    },

    showResult: function(answer) {
      let correct = this.questions[this.questionNum-1].answer;
      if(answer == correct) {
        this.result = "正解！！";
      } else{
        this.result = "不正解！！";
        
      }

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
