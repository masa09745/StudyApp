<template>
  <div class="col">
    <h2>{{ subject.name }}</h2>
    <router-link v-bind:to="{name: 'question.create', params: {subjectId: id }}">過去問アップロード</router-link>
    <question-index-component/>
  </div>
</template>

<script>
import QuestionIndexComponent from './QuestionIndexComponent.vue';

export default {

  components: {
    QuestionIndexComponent
  },

  props: {
    examId: String,
    subjectId: String,
  },
  
  beforeRouteUpdate (to, from, next) {
    this.id = to.params.subjectId;
    next();
  },
  
  data: function() {
    return {
      id: this.subjectId,
      subject: {}
    }
  },

  watch:{
    id: function(){
      this.getSubject();
    }

  },

  methods:{
    getSubject() {
      axios.get('/api/subjects/' + this.subjectId)
        .then((res) => {
          this.subject = res.data;
        });
    },
  },

  mounted() {
    this.getSubject();
  }

}
</script>