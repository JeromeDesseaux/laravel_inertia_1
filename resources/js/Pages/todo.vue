<template>
  <h1 class='title'>Coucou {{user}}</h1>
</template>

<script>
export default {
  props: [
    "user",
 ]
}
</script>

<style>
.title {
    color: red;
}
</style>
