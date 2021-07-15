<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <h4 class="title border-bottom">過去問作成</h4>
          <div class="form-group">
            <label for="ExamDate" class="col-form-label">試験日</label>
            <input type="text" class= "form-control" id="ExamDate" v-model="date">
          </div>
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" @change="confirmFile" v-if="view">
              <label class="custom-file-label" for="uploadfile">過去問を選んでください</label>
            </div>
          </div>
          <p v-if="confirmedFile">{{file.name}}</p>
          <button @click="uploadExam" class="btn btn-primary">作成</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {

  data: function() {
    return {
      date: "",
      file: "",
      view: true,
      confirmedFile: ""

    }
  },
  methods: {
    confirmFile(e){
      this.file = e.target.files[0];
      this.createFile(this.file);
    },
    createFile(file) {
      const reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = e => {
        this.confirmedFile = e.target.result;
      };
    },
    uploadExam() {
      let data = new FormData();
      data.append("date", this.date);
      data.append("file", this.file);

      axios.post('/api/exams', data)
        .then(res => {
          this.$router.push({name: 'exam.list'});
        });
    }
  }
}
</script>