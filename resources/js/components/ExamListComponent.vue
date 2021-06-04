<template>
  <div class="container">
    <table class="table table-hover">
      <thead class="thead-dark">
      <tr v-for="(exam, index) in exams" :key="index">
        <th scope="col">Date</th>
        <th colspan="4" scope="rowgroup">Subject</th>
        <th scope="col">Edit</th>
        <th scope="col">Delet</th>
      </tr>
      </thead>
      <tbody>
        <tr v-for="(exam, index) in exams" :key="index">
          <td scope="row" style="vertical-align: middle">{{ exam.date }}</td>
          <td v-for="(subject, index) in exam.subjects" :key="index">
            <button class="btn btn-success">{{ subject.name }}</button>
          </td>
          <td>
            <router-link v-bind:to="{name: 'exam.show', params: {examId: exam.id.toString() }}">
              <button class="btn btn-primary">Show</button>
            </router-link>
          </td>
          <td>
            <button class="btn btn-danger" v-on:click="deleteExam(exam.id)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
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