<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form>
          <div class="form-group row">
            <label for="id" class="col-sm-3 col-form-label">ID</label>
            <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id" v-bind:value="examId">
          </div>
          <div class="form-group row">
            <label for="ExamDate" class="col-sm-3 col-form-label">試験日</label>
            <input type="text" class="col-sm-9 form-control" id="ExamDate">
          </div>
          <div class="form-group row">
            <label for="Question" class="col-sm-3 col-form-label">問題</label>
            <input type="text" class="col-sm-9 form-control" id="Question">
          </div>
          <button type="submit" class="btn btn-primary">更新</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    examId: String
  }
}
</script>