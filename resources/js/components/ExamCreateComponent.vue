<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <h4 class="title border-bottom">過去問作成</h4>
        <form v-on:submit.prevent="submit">
          <div class="form-group">
            <label for="ExamDate" class="col-form-label">試験日</label>
            <input type="text" class= "form-control" id="ExamDate" v-model="exam.exam_date">
          </div>
          <div class="form-group">
          <p class="col-form-label" for="Subject">科目</p>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="law" value="law" >
            <label class="form-check-label" for="law">法規</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="airplane" value="airplane" >
            <label class="form-check-label" for="airplane">機体</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="engine" value="engine" >
            <label class="form-check-label" for="engine">発動機</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="elec_equipment" value="elec_equipment" >
            <label class="form-check-label" for="elec_equipment">電気/電子装備品</label>
          </div>
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