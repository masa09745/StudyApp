<template>
  <div class="container-fluid">
    <div class="container-sm">
      <div>
        <div :id="$route.params.id">
          <div class="d-flex justify-content-center border-bottom">
            <div style="margin-right: 10px">試験日</div>
            <div>{{exam.date}}</div>
          </div>
        </div>
          <ul class="nav justify-content-center">
            <li class="nav-item" v-for="(subject, index) in exam.subjects" :key="index">
              <router-link class="nav-link text-dark" v-bind:to="{name: 'subject.show', params: {subjectName: subject.route}}">
                {{ subject.name}}
              </router-link>
            </li>
          </ul>
      </div>
      <router-view></router-view>
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