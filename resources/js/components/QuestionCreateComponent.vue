<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form v-on:submit.prevent="submit">
          <h4 class="title border-bottom">過去問作成</h4>
          <div>
            <router-link v-bind:to="{name: 'question.upload'}">問題・選択肢データのアップロードはこちら</router-link>
          </div>
          <div class="form-group">
            <label for="QuestionSubject" class="col-form-label">科目</label>
            <div >
              <div v-for="subject in subjects" :key="subject.id" class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="subject" :id="subject.id" v-model="question.subject_id" :value="subject.id" >
                <label class="form-check-label" :for="subject.id">{{subject.name}}</label>
              </div>
            </div>
            <label for="QuestionText" class="col-form-label">問題文</label>
            <input type="text" class= "form-control" id="QuestionText" v-model="question.text">
            <div>
              <div class="choiceInput" v-for="n in choiceCount" :key="n">
                <label for="QuestionChoice" class="col-form-label">選択肢{{n}}</label>
                <input type="text" class= "form-control" id="QuestionChoice" v-model="question.choices[n-1]">
              </div>
              <button type="button" class="btn btn-primary" @click="addChoice">選択肢追加</button>
            </div>
            <label for="QuestionAnswer" class="col-form-label">解答</label>
            <input type="text" class= "form-control col-5" id="QuestionAnswer" v-model="question.answer">
            <label for="QuestionExplanation" class="col-form-label">解説</label>
            <textarea class= "form-control" id="QuestionExplanation" v-model="question.explanation"/>
          </div>
          <button type="submit" class="btn btn-primary">作成</button>

        </form>

      </div>
    </div>
  </div>
</template>

<script>

export default {

  data: function(){
    return{
      subjects: [],
      choiceCount: 4,
      question: {
        choices: []
      }
    }
  },

  methods: {
    getSubjects() {
      axios.get('/api/subjects')
        .then((res) => {
          this.subjects = res.data;
        });
    },

    addChoice: function() {
      this.choiceCount++;
      this.question.choices.push();
    },

    submit() {
      axios.post('/api/questions',this.question)
        .then((res) => {
          this.$router.push({name: 'subject.index'});
        });

    }
  },

  mounted (){
    this.getSubjects();
  }

}
</script>

<style>
.choiceInput{
  margin-bottom: 10px;
}
</style>