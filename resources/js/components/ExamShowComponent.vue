<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form>
          <div class="form-group row border-bottom">
            <label for="ExamDate" class="col-sm-3 col-form-label">Exam Date</label>
            <input type="text" class="col-sm-9 form-control-plaintext" readonly id="ExamDate" v-model="exam.date">
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {

  props: {
    examId: String
  },

  data: function () {
    return {
      exam: {}
    }
  },
  methods: {
    getExam() {
      axios.get('/api/exams/' + this.examId)
        .then((res) => {
          this.exam = res.data;
        });
    }
  },
  mounted() {
    this.getExam();
  }
}
</script>
