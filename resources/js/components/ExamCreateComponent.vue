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

          <div v-for="(subject, index) in subjects" :key="index" class="form-check form-check-inline">
            <div class="form-check form-check-inline">
              <input type="checkbox" :id="'subject' + index" :value="subject" v-model="Subject" class="form-check-input">
              <label :for="'subject' + index" class="form-check-label" >{{ subject }}</label>
            </div>
          </div>
          <p>Checked Subjects: {{ Subject}}</p>
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
      exam: {},
      subjects: ['法規', '機体', '発動機', '電気・電子装備品'],
      Subject:[]
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