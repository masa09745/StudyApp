<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form>
          <div class="form-group row">
            <label for="ExamDate" class="col-sm-3 col-form-label">試験日</label>
            <input type="text" class="col-sm-9 form-control" id="ExamDate">
          </div>
          <div class="form-group row">
            <label for="Question" class="col-sm-3 col-form-label">問題</label>
            <input type="text" class="col-sm-9 form-control" id="Question">
          </div>
          <button type="submit" class="btn btn-primary">作成</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {}
</script>