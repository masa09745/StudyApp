<template>
  <div class="container">
    <div>科目を選んでください</div>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      exams: []
    }
  },
  methods: {
    getExams(){
      axios.get('/api/exams')
        .then((res) => {
          this.exams = res.data;
        });
    },
    deleteExam(id) {
      axios.delete('/api/exams/' +id)
        .then((res) => {
          this.getExams();
        });
    }
  },
  mounted() {
    this.getExams();
  }
}
</script>