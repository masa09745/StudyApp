<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form v-on:submit.prevent="submit">
          <h4 class="title border-bottom">過去問作成</h4>
          <div class="form-group">

            <label for="QuestionSubject" class="col-form-label">科目</label>
            <div >
              <div v-for="(subject, index) in subjects" :key="index" class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="row" name="subjects" value="subject" >
                <label class="form-check-label" for="subject">{{subject.name}}</label>
              </div>
            </div>
            <label for="QuestionText" class="col-form-label">問題文</label>
            <input type="text" class= "form-control" id="QuestionText">
            <label for="QuestionChoice1" class="col-form-label">選択肢1</label>
            <input type="text" class= "form-control" id="QuestionChoice1">
            <label for="QuestionChoice2" class="col-form-label">選択肢2</label>
            <input type="text" class= "form-control" id="QuestionChoice2">
            <label for="QuestionChoice3" class="col-form-label">選択肢3</label>
            <input type="text" class= "form-control" id="QuestionChoice3">
            <label for="QuestionChoice4" class="col-form-label">選択肢4</label>
            <input type="text" class= "form-control" id="QuestionChoice4">
            <label for="QuestionExplanation" class="col-form-label">解説</label>
            <textarea class= "form-control" id="QuestionExplanation"/>
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
      subjects: []
    }
  },

  methods: {
    getSubjects() {
      axios.get('/api/subjects')
        .then((res) => {
          this.subjects = res.data;
        });
    }
  },

  mounted (){
    this.getSubjects();
  }

}
</script>