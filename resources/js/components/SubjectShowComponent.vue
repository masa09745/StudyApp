<template>
  <div class="col">
    <div>{{ subject.name }}</div>
  </div>
</template>

<script>


export default {

  props: {
    examId: String,
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
    },
  },

  mounted() {
    this.getSubject();
  }

}
</script>