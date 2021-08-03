<template>
  <div class="container-fluid">
    <div class="container-sm">
      <div>
        <div :id="$route.params.id">
          <div class="d-flex justify-content-center border-bottom">
            <div style="margin-right: 10px">試験日</div>
            <div>{{exam.date}}</div>
            <div>{{exam.file_path}}</div>
          </div>
        </div>
        <iframe :src="exam.file_path" frameborder="0" width="700px"></iframe>
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
    },
  },
  mounted() {
    this.getExam();
  }
}
</script>