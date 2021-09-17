<template>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <h4 class="border-bottom">過去問データアップロード</h4>
        <div class="uploadArea">
          <label>
            <input type="file" class="uploadFile">ファイルを選択
          </label>
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
.uploadArea{
  margin: 15px 0;
}
.uploadFile{
  display: none;
}

label {
  color: black;
  background-color: white;
  cursor: pointer;
  padding: 10px 50px;
  margin: 0;
  border: solid 1px #333333;
  border-radius: 0.3rem;
}
</style>