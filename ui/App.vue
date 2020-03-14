<template>
  <v-app id="litenight">
    <v-navigation-drawer v-model="drawer" app >
    </v-navigation-drawer>

    <v-app-bar app color="deep-orange darken-4" dark>

      <v-app-bar-nav-icon @click.stop="drawer = !drawer">
      </v-app-bar-nav-icon>
    </v-app-bar>
  </v-app>
</template>

<script>
export default {
  name: 'App',
  components: {
  },
  data: () => ({
    drawer: null,
  }),
}
</script>

<style>

</style>
