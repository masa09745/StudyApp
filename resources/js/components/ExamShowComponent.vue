<template>
  <div class="container-fluid">
    <div class="container-sm">
      <div>
        <div :id="$route.params.id">
          <div class="d-flex justify-content-center border-bottom">
            <div style="margin-right: 10px">試験日</div>
            <div>{{exam.date}}</div>
          </div>
          <subject-list-component :exam='exam' />
        </div>
      </div>
      <router-view/>
    </div>
  </div>
</template>

<script>
import SubjectListComponent from './SubjectListComponent.vue';

export default {

  components: { SubjectListComponent },

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