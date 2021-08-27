<template>
  <div>
    <div class="choiceInput" v-for="n in choiceCount" :key="n">
      <label for="QuestionChoice" class="col-form-label">選択肢{{n}}</label>
      <input type="text" class= "form-control" id="QuestionChoice" v-model="choices[n-1]">
    </div>
    <button type="button" class="btn btn-primary" @click="addChoice">選択肢追加</button>
  </div>
</template>

<script>
export default {

  props: {
    choices: Array
  },

  data: function(){
    return {
      choiceCount: 4
    }
  },
  methods: {
    addChoice: function() {
      this.choiceCount++;
      this.choices.push();
    }
  }
}
</script>

<style>
.choiceInput{
  margin-bottom: 10px;
}
</style>