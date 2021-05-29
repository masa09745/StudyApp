<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form v-on:submit.prevent="submit">
          <div class="form-group row">
            <label for="ExamDate" class="col-sm-3 col-form-label">試験日</label>
            <input type="text" class="col-sm-9 form-control" id="ExamDate" v-model="exam.exam_date">
          </div>
          <button type="submit" class="btn btn-primary">作成</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      exam: {}
    }
  },
  methods: {
    submit() {
      axios.post('/api/exams', this.exam)
        .then((res) => {
          this.$router.push({name: 'exam.list'});
        });
    }
  }
}
</script>