<template>
  <div class="col">
    <div>{{ subjectName }}</div>
  </div>
</template>

<script>


export default {

  props: {
    examId: String,
    subjectId: String,
    subjectName: String
  },
  
  beforeRouteUpdate (to, from, next) {
    this.id = to.params.subjectId;
    next();

  },

  data: function() {
    return {
      targetId: this.subjectId
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