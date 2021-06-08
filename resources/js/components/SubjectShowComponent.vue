<template>
  <div class="col">
    <div>{{ subject.name }}</div>
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