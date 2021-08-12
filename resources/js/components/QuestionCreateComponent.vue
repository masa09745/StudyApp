<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form v-on:submit.prevent="submit">
          <h4 class="title border-bottom">過去問作成</h4>
          <div class="form-group">

            <label for="QuestionSubject" class="col-form-label">科目</label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="row" >
                <label class="form-check-label" for="row">法規</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="airplane" >
                <label class="form-check-label" for="row">機体</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="engine" >
                <label class="form-check-label" for="row">発動機</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="electronics" >
                <label class="form-check-label" for="electronics">電気・電子装備品</label>
              </div>
            </div>
            <label for="QuestionText" class="col-form-label">問題文</label>
            <input type="text" class= "form-control" id="QuestionText">
            <label for="QuestionCorrect" class="col-form-label">正解</label>
            <input type="text" class= "form-control" id="QuestionCorrect">
            <label for="QuestionIncorrect1" class="col-form-label">不正解1</label>
            <input type="text" class= "form-control" id="QuestionIncorrect1">
            <label for="QuestionInorrect2" class="col-form-label">不正解2</label>
            <input type="text" class= "form-control" id="QuestionIncorrect2">
            <label for="QuestionIncorrect3" class="col-form-label">不正解3</label>
            <input type="text" class= "form-control" id="QuestionIncorrect3">
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

}
</script>