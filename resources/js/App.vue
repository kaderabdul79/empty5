<template>
  <div>
    <!-- header/footer -->
    <Navigation />
    <!-- router-view -->
    <main class="max-w-7xl mx-auto min-h-screen">
      <router-view></router-view>
    </main>
  </div>
</template>

<script>
import Navigation from './components/Navigation.vue';
export default {
    components: { Navigation }
}
</script>

<style>

</style>