<template>
  <div class="finalResult" v-show="finalResult">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="totalResultLabel">結果発表</h5>
        </div>
        <div class="modal-body">
          <h6>{{totalCorrect}}問正解！！</h6>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">リトライ</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['totalCorrect'],

  data: function() {
    return{
      finalResult: false
    }
  },

  methods: {

    showFinalResult: function(){
      this.finalResult = true;
    }
  }

}
</script>