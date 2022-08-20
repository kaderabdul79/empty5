<template>
    <div class="max-w-7xl mx-auto py-4 bg-indigo-400 flex justify-between items-center px-2">
      <div class="text-3xl font-medium">Laravel Vue CRUD using Composition API</div>
      <nav class="">
        <RouterLink
          class="
            px-4
            py-2
            mr-4
            bg-indigo-600
            hover:bg-indigo-800
            rounded
            text-white
          "
          to="/">Home</RouterLink>
        <RouterLink
          to="/skills"
          class="
            px-4
            py-2
            mr-4
            bg-indigo-600
            hover:bg-indigo-800
            rounded
            text-white
          ">Skills</RouterLink>
      </nav>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>