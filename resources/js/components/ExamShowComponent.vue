<template>
  <div class="container-fluid">
    <div class="container-sm">
      <div>
        <div>
          <div class="form-group  row border-bottom">
            <label for="ExamDate" class="col col-form-label">試験日</label>
            <div class="col">
              <input type="text" class="form-control-plaintext" readonly id="ExamDate" v-model="exam.date">
            </div>
          </div>
          <div>
            <ul class="nav justify-content-center">
              <li class="nav-item" v-for="(subject, index) in exam.subjects" :key="index">
                <router-link class="nav-link"  v-bind:to="{name: 'subject.show', params: {subjectId: subject.id.toString() }}">
                  {{ subject.name }}
                </router-link>
              </li>
            </ul>
          </div>
        </div>
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
    }
  },
  mounted() {
    this.getExam();
  }
}
</script>