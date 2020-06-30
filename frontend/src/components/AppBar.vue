<template>
  <v-app-bar app>
    <v-toolbar-title>{{ appName }}</v-toolbar-title>
    <v-spacer></v-spacer>
    <v-switch
      v-model="$vuetify.theme.dark"
      primary
      label="Tema escuro"
    ></v-switch>
  </v-app-bar>
</template>

<script>
import { getAppName } from "../../services/app";
export default {
  name: "AppBar",
  props: ["primaryDrawer"],
  data() {
    return {
      appName: getAppName(),
    };
  },
};
</script>
