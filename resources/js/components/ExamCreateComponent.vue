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
            <div>{{ subject.subject }}</div>
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
      exam: {},
      subjects: []
    }
  },
  methods: {
    getSubjects(){
      axios.get('/api/subjects')
        .then((res) =>{
          this.subjects =res.data;
        })
    },

    submit() {
      axios.post('/api/exams', this.exam)
        .then((res) => {
          this.$router.push({name: 'exam.list'});
        });
    }
  },
  mounted() {
    this.getSubjects();
  }
}
</script>