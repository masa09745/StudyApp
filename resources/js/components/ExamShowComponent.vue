<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form>
          <div class="form-group row border-bottom">
            <label for="id" class="col-sm-3 col-form-label">ID</label>
            <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id" v-bind:value="examId">
          </div>
          <div class="form-group row border-bottom">
            <label for="ExamDate" class="col-sm-3 col-form-label">Exam Date</label>
            <input type="text" class="col-sm-9 form-control-plaintext" readonly id="ExamDate" value="2021/03">
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    examId: Number
  }
}
</script>
