<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <h4 class="title border-bottom">問題文登録</h4>
        <form action="">
          <div class="form-group" v-for="n in 25" :key="n" >
            <label for="QuestionId" class="col-form-label">{{"問題 " + n}}</label>
            <input type="text" class="form-control" id="QuestionText">
          </div>
          <button type="submit" class="btn btn-primary">作成</button>
        </form>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  props: {
    subjectId: String
  }
}
</script>