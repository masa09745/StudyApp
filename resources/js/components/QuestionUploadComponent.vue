<template>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <h4 class="border-bottom">過去問データアップロード</h4>
        <div class="uploadArea">
          <label class="uploadButton">
            <input type="file" class="uploadFile" @change="fileSelect" accept=".csv">問題データを選択
          </label>
        </div>
        <p>{{fileName}}</p>
        <button type="button" @click="sendFile" class="btn btn-primary">アップロード</button>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  data: function() {
    return {
      questionFile: null,
      fileName: ""
    }
  },
  
  methods: {
    fileSelect(e){
      this.questionFile = e.target.files[0];
      this.fileName = this.questionFile.name;
      },
    sendFile() {
      let formdata = new FormData();
      formdata.append('csv_file', this.questionFile);
      axios.post('/api/questions/upload', formdata)
        .then((res) => {
          console.log(res);
          this.questionFile = null;
          this.fileName = "";
        });
    }
  }
}
</script>

<style>
.uploadArea{
  margin: 15px 0;
}
.uploadFile{
  display: none;
}

.uploadButton {
  color: black;
  background-color: white;
  cursor: pointer;
  padding: 10px 50px;
  margin: 0;
  border: solid 1px #333333;
  border-radius: 0.3rem;
}
</style>