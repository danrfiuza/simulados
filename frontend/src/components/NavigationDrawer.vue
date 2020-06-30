<template>
  <div>
    <v-navigation-drawer
      v-model="primaryDrawer.model"
      :clipped="primaryDrawer.clipped"
      :floating="primaryDrawer.floating"
      :mini-variant="primaryDrawer.mini"
      :permanent="primaryDrawer.type === 'permanent'"
      :temporary="primaryDrawer.type === 'temporary'"
      app
      overflow
    >
    </v-navigation-drawer>
  </div>
</template>

<script>
export default {
  name: "NavigationDrawer",
  props: ["primaryDrawer"]
};
</script>
