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
          <select class="form-control" v-model="exam.subject_id">
            <option value=""></option>
            <option v-for="(subject,id) in subjects" :key="id" :value="id" v-text="subject"></option>
          </select>
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
      subjects:{
        1: '法規',
        2: '機体',
        3: '発動機',
        4: '電気・電子装備品',
      },
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