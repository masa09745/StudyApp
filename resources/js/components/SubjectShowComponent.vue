<template>
  <div class="container">
    <exam-show-component>
  </div>
</template>

<script>
import ExamShowComponent from './ExamShowComponent.vue';
export default {
  components: { ExamShowComponent },

  props: {
    subjectId: String,
  },

  data: function() {
    return {
      subject: {},
    }
  },

  methods:{
    getSubject() {
      axios.get('/api/subjects/' + this.subjectId)
        .then((res) => {
          this.subject = res.data;
        });
    }
  },

  mounted() {
    this.getSubject();
  }

}
</script>