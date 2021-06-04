<template>
  <div class="container">
    <div class="row">
      <div class="col-3">
        <form>
          <div class="form-group row border-bottom">
            <label for="ExamDate" class="col col-form-label">試験日</label>
            <div class="col">
              <input type="text" class="form-control-plaintext" readonly id="ExamDate" v-model="exam.date">
            </div>
          </div>
          <div>
            <input type="text" class="form-control-plaintext" readonly id="subjectId" v-for="(subject, index) in exam.subjects" :key="index" v-model="subject.name">
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
