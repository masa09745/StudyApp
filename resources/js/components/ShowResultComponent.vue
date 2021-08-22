<template>
  <div v-show="judgement">
    <div class="modal fade" id="result" tabindex="-1" aria-labelledby="questionResultLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="questionResultLabel">{{result}}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5 v-if="incorrect">正解は{{correct}}です</h5>
            <h6>＜解説＞</h6>
            <div>{{questions[questionNum-1].explanation}}</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#totalResult" @click="next">次の問題へ</button>
            <button type="button" class="btn btn-dark"  data-dismiss="modal" data-toggle="modal" data-target="#totalResult" @click="end">終了する</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['questions', 'questionNum'],

  data: function() {
    return {
      choice: "",
      result: "",
      incorrect: "",
      correct: "",
      judgement: false
    }
  },
  methods: {
    showJudgement: function(choice) {
      this.choice = choice;
      this.judgement = true;
      let correct = this.questions[this.questionNum-1].answer;
      if(this.choice == correct) {
        this.result = "正解！！"
        this.incorrect = false;
      }else {
        this.result = "不正解！！"
        this.incorrect = true;
        this.correct = correct;
      }
    },
    next: function() {
      this.$emit('next');
    },
    end: function() {
      this.$emit('end');
    }
  }
}
</script>