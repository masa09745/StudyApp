<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <h4 class="title border-bottom">過去問アップロード</h4>
        <form action="">
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="uploadfile">
              <label class="custom-file-label" for="uploadfile">過去問を選んでください</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">アップロード</button>
        </form>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  props: {
    subjectId: String
  }
}
</script>