<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form v-on:submit.prevent="submit">
          <div class="form-group row">
            <label for="id" class="col-sm-3 col-form-label">ID</label>
            <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id" v-model="exam.id">
          </div>
          <div class="form-group row">
            <label for="ExamDate" class="col-sm-3 col-form-label">試験日</label>
            <input type="text" class="col-sm-9 form-control" id="ExamDate" v-model="exam.date">
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
  },
    data: function() {
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
    },
    submit() {
      axios.put('/api/exams/' + this.examId, this.exam)
        .then ((res) => {
          this.$router.push({name: 'exam.list'})
        });
    }
  },
  mounted() {
    this.getExam();
  }
}
</script>