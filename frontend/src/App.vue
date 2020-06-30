<template>
  <v-app id="sandbox">
    <AppBar v-bind:primaryDrawer="{ primaryDrawer }" />
    <v-main>
      <v-container fluid>
        <v-row align="center" justify="center">
          <v-col cols="12">
            <v-card>
              <v-card-text>
                <v-row>
                  <v-col cols="12" md="12">
                    <TreeView />
                  </v-col>
                </v-row>
              </v-card-text>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
    <Footer />
  </v-app>
</template>

<script>
import AppBar from "./components/AppBar.vue";
import TreeView from "./components/TreeView.vue";
import Footer from "./components/Footer.vue";
export default {
  name: "App",
  components: {
    AppBar,
    TreeView,
    Footer
  },
  data: () => ({
    primaryDrawer: {
      model: null,
      type: "default (no property)",
      clipped: false,
      floating: false,
      mini: false,
    },
  }),
};
</script>
