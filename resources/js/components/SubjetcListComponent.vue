<template>
  <div>
    <ul class="nav justify-content-center">
      <li class="nav-item" v-for="(subject, index) in exam.subjects" :key="index">
        <router-link class="nav-link text-dark"  v-bind:to="{name: 'subject.show', params: {examId: subject.exam_id.toString(), subjectId: subject.id.toString()}}">
        {{ subject.name }}
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: {
    exam:{}
  },


}
</script>