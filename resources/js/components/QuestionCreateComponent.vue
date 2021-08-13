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
                <input class="form-check-input" type="radio" id="row" name="subjects" value="row" >
                <label class="form-check-label" for="row">法規</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="airplane" name="subjects" value="airplane">
                <label class="form-check-label" for="airplane">機体</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="engine" name="subjects" value="engine">
                <label class="form-check-label" for="engine">発動機</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="electronics" name="subjects" value="electronics">
                <label class="form-check-label" for="electronics">電気・電子装備品</label>
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

}
</script>