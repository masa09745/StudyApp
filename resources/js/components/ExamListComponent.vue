<template>
  <div class="container">
    <table class="table table-hover">
      <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Exam Date</th>
        <th scope="col">Show</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
      </thead>
      <tbody>
        <tr v-for="(exam, index) in exams" :key="index">
          <th scope="row">{{ exam.id }}</th>
          <td>{{ exam.exam_date}}</td>
          <td>
            <router-link v-bind:to="{name: 'exam.show', params: {examId: exam.id }}">
              <button class="btn btn-primary">Show</button>
            </router-link>
          </td>
          <td>
            <router-link v-bind:to="{name: 'exam.edit', params: {examId: exam.id }}">
              <button class="btn btn-success">Edit</button>
            </router-link>
          </td>
          <td>
              <button class="btn btn-danger">Delete</button>
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
    }
  },
  mounted() {
    this.getExams();
  }
}
</script>