<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <h4 class="title border-bottom">過去問アップロード</h4>
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="uploadfile" @change="selectFile">
              <label class="custom-file-label" for="uploadfile">過去問を選んでください</label>
              <span id="file_name" v-show="fileData.name">{{ fileData.name }}</span>
            </div>
          </div>
          <button @click="uploadFile" class="btn btn-primary">アップロード</button>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  props: {
    subjectId: String
  },

  data:function(){
    return {
      fileData: ''
    }
  },

  methods:{
    selectFile(event) {
      this.fileData = event.target.files[0];
    },
    uploadFile() {
      const formdata = new FormData()
      formdata.append ('file', this.fileData)

      axios.post('/api/questions', formdata)
        .then((res)=> console.log(res))
    }
  }

}
</script>