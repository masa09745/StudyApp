<template>
  <div class="container">
    <p>科目トップページのテスト</p>
  </div>
</template>

<script>
export default {

  props: {
    examId: String,
    subjectId: String,
  },

  data: function() {
    return {
      subject: {}
    }
  },
  methods: {
    getSubject() {
      axios.get('/api/exams/' + this.examId + '/subjects/' + this.subjectId)
        .then((res) => {
          this.subject = res.data;
        });
    }
  },
  mounted() {
    this.getSubject();
  }
}
</script>