<template>
  <div>
    <patient-card v-for='encounter in data' :key='encounter.id' :data='encounter'></patient-card>
  </div>
</template>

<script>
  export default {
    props: ['data'],
  }
</script>
