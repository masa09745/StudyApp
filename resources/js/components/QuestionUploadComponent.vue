<template>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <h4 class="border-bottom">過去問データアップロード</h4>
        <div class="form-group">
          <div class="custom-file">
            <input type="file" class="custom-file-imput" id="uploadFile">
            <label class="custom-file-label" for="uploadFile">問題データを選んでください</label>
          </div>
        </div>
        <div class="form-group">
          <div class="custom-file">
            <input type="file" class="custom-file-imput" id="uploadFile">
            <label class="custom-file-label" for="uploadFile">選択肢データを選んでください</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">アップロード</button>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  
}
</script>

<style>

</style>