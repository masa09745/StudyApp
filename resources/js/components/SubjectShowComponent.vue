<template>
  <div class="container-fluid">
    <div class="container">
      <div class="row justify-content-center ">
        <subject-menu-component />
        <question-component />
      </div>
    </div>
  </div>
</template>

<script>

import SubjectMenuComponent from './SubjectMenuComponent.vue';
import questionComponent from './QuestionComponent';

export default {
  components: { SubjectMenuComponent, questionComponent },

  props: {
    subjectId: String
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